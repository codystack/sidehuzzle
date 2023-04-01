<?php
include '../config/db.php';

//check if email is already in use
$stmt = $con->prepare("select * from users where EMAIL=? ");
$stmt->bind_param("s",$email);
$email=mysqli_real_escape_string($con,$_GET['email']);
$stmt->execute();
$result = $stmt->get_result();
if($result->num_rows>0)
{
    echo "Email already in use";
    exit;
}
//proceed

// prepare and bind
$stmt = $con->prepare("INSERT INTO users (FIRSTNAME,EMAIL,PASSWORD,ACTIVATIONCODE,REFID) VALUES (?, ?, ?, ?,?)");
$stmt->bind_param("ssssi",$firstname,$email,$password,$code,$refid);

// set parameters and execute
$firstname=mysqli_real_escape_string($con,$_GET['username']);
$password=mysqli_real_escape_string($con,$_GET['password']);
$password=  md5($password);
$code= uniqid();
if(isset($_GET['refid']))
{
    $refid= intval($_GET['refid']);
}else{
    $refid=0;
}
$stmt->execute();

if($con->affected_rows>0)
{
    echo "success";
}
else{
    echo "Error processing request";
}

$stmt->close();
 mysqli_close($con);