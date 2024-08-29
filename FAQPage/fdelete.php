<?php
include 'config.php';

if(isset($_GET['fdeleteid'])){
    $ID=$_GET['fdeleteid'];

    $sql="DELETE FROM `question` where id=$ID";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:index.html');
    }
    else{
        die(mysqli_error($con));
    }
}

?>