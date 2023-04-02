<?php
//Connect database
include "./config/db.php";


//User registration script
if (isset($_POST['register_btn'])) {

    $firstName = $conn->real_escape_string($_POST['firstName']);
    $lastName = $conn->real_escape_string($_POST['lastName']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $accountType = $conn->real_escape_string($_POST['accountType']);

    $check_user_query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $check_user_query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['error_message'] = "User Already Exist!";
    }else {
        // Finally, register agent if there are no errors in the form
        $password = sha1($password);//encrypt the password before saving in the database
        $query = "INSERT INTO users (firstName, lastName, email, password, accountType, phone) 
  			        VALUES('$firstName', '$lastName', '$email', '$password', '$accountType', '$phone')";
        mysqli_query($conn, $query);
        if (mysqli_affected_rows($conn) > 0) {
            // sendVerificationEmail($email, $token, $firstName, $companyName);
            // sendStartupEmail($email, $firstName, $companyName);

            $_SESSION['email'] = $email;
            $_SESSION['firstName'] = $firstName;
            $_SESSION['success_message'] = "Account created...you're being redirected.";
            header('Refresh: 10;URL=login');
        }else {
            $_SESSION['error_message']    = "Error creating account";
        }
    }
}