<?php

    $host='localhost';
    $user='root';
    $password='';
    $db='adhandiya';

    $con=mysqli_connect($host,$user,$password,$db);

    if($con)
    {
       echo"connection OK";
    }
    else
    {
        echo"Connection Error";
    }

?>