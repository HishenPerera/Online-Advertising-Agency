<?php
require_once ("../dbconnection.php");
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM `registered_user` WHERE email = '$email'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$count = mysqli_num_rows($result);
if($count>0){
    echo 'email already exists';
}
else{
    $sql1 = "INSERT INTO `registered_user` (first_name, email, password) VALUES ('$name', '$email', '$password')";
    $result1 = mysqli_query($conn, $sql1);
    if($result1){
        echo 'registered successfully';
        header("location: ../index.php");
    }

}

