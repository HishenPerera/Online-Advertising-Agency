<?php
require_once ("../dbconnection.php");

$email = $_POST['email'];
$password = $_POST['password'];


if(isset($_POST['email']) && isset($_POST['password'])){

    $sql = "SELECT * FROM `registered_user` WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        if($row['password']==$password){
            header("location:../home.php");
        }
        else{
            echo "password incorrect";
        }
    }
    else{
        echo "user Account not found";
    }
}
else{
    header("location:../signin.php");
}


?>
