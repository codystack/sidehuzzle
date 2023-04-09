<?php
//Connect database
include "./config/db.php";


//User billing script
if (isset($_POST['add_billing_btn'])) {

    $userID = $conn->real_escape_string($_POST['userID']);
    $bankName = $conn->real_escape_string($_POST['bankName']);
    $accountName = $conn->real_escape_string($_POST['accountName']);
    $accountNumber = $conn->real_escape_string($_POST['accountNumber']);
    $accountType = $conn->real_escape_string($_POST['accountType']);

    
    // Finally, register user billing info if there are no errors in the form
    $query = "INSERT INTO billing (userID, bankName, accountName, accountNumber, accountType) 
                VALUES('$userID', '$bankName', '$accountName', '$accountNumber', '$accountType')";
    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {
        $_SESSION['success_message'] = "Billing account added.";
        echo "<meta http-equiv='refresh' content='0; URL=billing'>";
    }else {
        $_SESSION['error_message']    = "Error adding billing information";
    }
}



//Delete Bank Account Query
if (isset($_POST['delete_user'])) {

    $delete_query = "DELETE FROM billing WHERE userID='".$_SESSION['id']."'";
    mysqli_query($conn, $delete_query);
    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['successx_message_title'] = "Account Deleted";
        $_SESSION['successx_message'] = "Welldone Chief 👍 account deleted successfully!";
    } else {
        $_SESSION['errors_message'] = "Please <strong>Delete</strong> other records linked to this user.";
        echo '<meta http-equiv="refresh" content="3; URL=bank">';
    }
}