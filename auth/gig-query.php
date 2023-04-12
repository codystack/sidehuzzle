<?php

// Connect database
include "./config/db.php";

    //Gig post query
    if (isset($_POST['gig_upload_btn'])) {

        $id = $_SESSION['id'];
        $gigID = '#SH'.rand(100000000, 9999);
        $userID = $conn->real_escape_string($_POST['userID']);
        $title = $conn->real_escape_string($_POST['title']);
        $payOut = $conn->real_escape_string($_POST['payOut']);
        $commission = $conn->real_escape_string($_POST['commission']);
        $gigDescription = $conn->real_escape_string($_POST['gigDescription']);
        $youtubeLink = $conn->real_escape_string($_POST['youtubeLink']);
        $website = $conn->real_escape_string($_POST['website']);
        $otherLink = $conn->real_escape_string($_POST['otherLink']);
        $productTraining = $conn->real_escape_string($_POST['productTraining']);
        $postAD = $conn->real_escape_string($_POST['postAD']);
        $status = $conn->real_escape_string($_POST['status']);
        $picture_path  = $conn->real_escape_string('./upload/'.$_FILES['postAD']['name']);

        if (file_exists($picture_path))
        {
            $picture_path = $conn->real_escape_string('./upload/'.uniqid().rand().$_FILES['postAD']['name']);
        }

        $checker = 0;

        //make sure file type is image
        if (preg_match("!image!", $_FILES['postAD']['type'])) {
            $checker ++;
        }
        if ($checker < 1){
            exit;
        }
    
        
        // Finally, gig info if there are no errors in the form
        $query = "INSERT INTO gigs (userID, gigID, title, payOut, commission, gigDescription, youtubeLink, website, otherLink, productTraining, postAD, status) 
                    VALUES('$userID', '$gigID', '$title', '$payOut', '$commission', '$gigDescription', '$youtubeLink', '$website', '$otherLink', '$productTraining', '$picture_path', 'Pending')";
        mysqli_query($conn, $query);
        if (mysqli_affected_rows($conn) > 0) {

            //copy image to upload folder
            copy($_FILES['postAD']['tmp_name'], $picture_path);

            $_SESSION['success_message'] = "Gig added and awaiting approval.";
            echo "<meta http-equiv='refresh' content='0; URL=gigs'>";

        }else {
            $_SESSION['error_message']    = "Error adding gig";
        }
    }


