<?php

// Connect database
include "./config/db.php";

    //Profile Update
    if(isset($_POST['update_profile_btn'])) {

        $id = $_SESSION['id'];
        $id = $conn->real_escape_string($_POST['id']);
        $firstName = $conn->real_escape_string($_POST['firstName']);
        $lastName = $conn->real_escape_string($_POST['lastName']);
        $email = $conn->real_escape_string($_POST['email']);
        $phone = $conn->real_escape_string($_POST['phone']);


        $sql=mysqli_query($conn,"SELECT * FROM users where id='".$_SESSION['id']."'");
        $result=mysqli_fetch_array($sql);
        if($result>0)
        {
            $conn=mysqli_query($conn,"UPDATE users SET firstName='$firstName', lastName='$lastName', email='$email', phone='$phone' where id='".$_SESSION['id']."'");

            $_SESSION['success_message'] = "Profile updated 👍";
            echo "<meta http-equiv='refresh' content='1; URL=profile'>";
        }
        else
        {
            $_SESSION['error_message'] = "Error updating profile.";
        }
    }


    //Upload Profile Picture
    if (isset($_POST['profile_picture_btn'])) {

        $id = $_SESSION['id'];
        $id = $conn->real_escape_string($_POST['id']);
        $picture_path  = $conn->real_escape_string('./upload/'.$_FILES['picture']['name']);

        if (file_exists($picture_path))
        {
            $picture_path = $conn->real_escape_string('./upload/'.uniqid().rand().$_FILES['picture']['name']);
        }

        $checker = 0;

        //make sure file type is image
        if (preg_match("!image!", $_FILES['picture']['type'])) {
            $checker ++;
        }
        if ($checker < 1){
            exit;
        }

        $sql=mysqli_query($conn,"SELECT * FROM users where id='".$_SESSION['id']."'");
        $num=mysqli_fetch_array($sql);
        if($num>0)
        {
            $conn=mysqli_query($conn,"UPDATE users SET picture='$picture_path'  where id='".$_SESSION['id']."'");

            //copy image to upload folder
            copy($_FILES['picture']['tmp_name'], $picture_path);

            $_SESSION['success_message'] = "Profile picture updated 👍";
        }
        else
        {
            $_SESSION['error_message'] = "Error updating profile.";
        }
    }