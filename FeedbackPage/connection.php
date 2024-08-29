<?php

    $host='localhost';
    $user='root';
    $password='';
    $db='ad_handiya';

    $con=mysqli_connect($host,$user,$password,$db);

    if($con)
    {
       //echo"connection OK";
    }
    else
    {
        echo"Connection Error";
    }

?>