<?php
//Connect database
include "./config/db.php";

//Login script
if (isset($_POST['login_btn'])) {

    $password = $conn->real_escape_string($_POST['password']);
    $firstName = $conn->real_escape_string($_POST['firstName']);
    $lastName = $conn->real_escape_string($_POST['lastName']);
    $email = $conn->real_escape_string($_POST['email']);
    $status = $conn->real_escape_string($_POST['status']);
    $verified = $conn->real_escape_string($_POST['verified']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $accountType = $conn->real_escape_string($_POST['accountType']);

    $password = sha1($password);
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) {
        $firstName = $row['firstName'];
        $lastName = $row['lastName'];
        $email = $row['email'];
        $id = $row['id'];
        $status = $row['status'];
        $verified = $row['verified'];
        $picture = $row['picture'];
        $phone = $row['phone'];
        $accountType = $row['accountType'];
    }if (mysqli_num_rows($result) == 1) {
        $_SESSION['firstName'] = $firstName;
        $_SESSION['lastName'] = $lastName;
        $_SESSION['picture'] = $picture;
        $_SESSION['email'] = $email;
        $_SESSION['phone'] = $phone;
        $_SESSION['verified'] = $verified;
        $_SESSION['id'] = $id;
        $_SESSION['accountType'] = $accountType;
        if ($verified == 0){
            $_SESSION['success_message'] = "Login Successfull";
            header('location: update-profile');
        } if ($verified == 1){
            $_SESSION['success_message'] = "Login Successfull";
            header('location: dashboard');
        }
    } else {
        $_SESSION['error_message'] = "Incorrect Login Details";
    }
}
