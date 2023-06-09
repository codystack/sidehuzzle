<?php
//Connect database
include "./config/db.php";

//Reseller registration script
if (isset($_POST['reseller_update_btn'])) {

    $userID = $conn->real_escape_string($_POST['userID']);
    $companyName = $conn->real_escape_string($_POST['companyName']);
    $address = $conn->real_escape_string($_POST['address']);
    $city = $conn->real_escape_string($_POST['city']);
    $state = $conn->real_escape_string($_POST['state']);
    $country = $conn->real_escape_string($_POST['country']);
    $postalCode = $conn->real_escape_string($_POST['postalCode']);
    $websiteURL = $conn->real_escape_string($_POST['websiteURL']);
    $paymentMethod = $conn->real_escape_string($_POST['paymentMethod']);

    $check_user_query = "SELECT * FROM resellerbio WHERE userID='".$_SESSION['id']."'";
    $result = mysqli_query($conn, $check_user_query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['error_message'] = "Account Already Updated!";
        echo "<meta http-equiv='refresh' content='5; URL=logout'>";
    }else {
        // Finally, register reseller if there are no errors in the form
        $query = "INSERT INTO resellerbio (userID, companyName, address, city, state, country, postalCode, websiteURL, paymentMethod) 
  			        VALUES('$userID', '$companyName', '$address', '$city', '$state', '$country', '$postalCode', '$websiteURL', '$paymentMethod')";
        mysqli_query($conn, $query);
        if (mysqli_affected_rows($conn) > 0) {
            $conn=mysqli_query($conn,"UPDATE users SET verified=1 where id='".$_SESSION['id']."'");

            $_SESSION['success_message'] = "Account updated...login and start earning.";
            echo "<meta http-equiv='refresh' content='5; URL=logout'>";
        }else {
            $_SESSION['error_message'] = "Error updating account".mysqli_error($conn);
        }
    }
}


//Merchant registration script
if (isset($_POST['merchant_update_btn'])) {

    $userID = $conn->real_escape_string($_POST['userID']);
    $companyName = $conn->real_escape_string($_POST['companyName']);
    $businessType = $conn->real_escape_string($_POST['businessType']);
    $businessAddress = $conn->real_escape_string($_POST['businessAddress']);
    $city = $conn->real_escape_string($_POST['city']);
    $state = $conn->real_escape_string($_POST['state']);
    $country = $conn->real_escape_string($_POST['country']);
    $postalCode = $conn->real_escape_string($_POST['postalCode']);
    $businessEmail = $conn->real_escape_string($_POST['businessEmail']);
    $businessPhone = $conn->real_escape_string($_POST['businessPhone']);
    $websiteURL = $conn->real_escape_string($_POST['websiteURL']);
    $commissionRate = $conn->real_escape_string($_POST['commissionRate']);
    $paymentMethod = $conn->real_escape_string($_POST['paymentMethod']);
    $description = $conn->real_escape_string($_POST['description']);

    $check_user_query = "SELECT * FROM merchantbio WHERE userID='".$_SESSION['id']."'";
    $result = mysqli_query($conn, $check_user_query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['error_message'] = "Account Already Updated!";
        echo "<meta http-equiv='refresh' content='5; URL=logout'>";
    }else {
        // Finally, register merchant if there are no errors in the form
        $query = "INSERT INTO merchantbio (userID, companyName, businessType, businessAddress, city, state, country, postalCode, businessEmail, businessPhone, websiteURL, commissionRate, paymentMethod, description) 
  			        VALUES('$userID', '$companyName', '$businessType', '$businessAddress', '$city', '$state', '$country', '$postalCode', '$businessEmail', '$businessPhone', '$websiteURL', '$commissionRate', '$paymentMethod', '$description')";
        mysqli_query($conn, $query);
        if (mysqli_affected_rows($conn) > 0) {
            $conn=mysqli_query($conn,"UPDATE users SET verified=1 where id='".$_SESSION['id']."'");

            $_SESSION['success_message'] = "Account updated...login and start earning.";
            echo "<meta http-equiv='refresh' content='5; URL=logout'>";
        }else {
            $_SESSION['error_message'] = "Error updating account".mysqli_error($conn);
        }
    }
}