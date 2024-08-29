<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ad_handiya";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    echo $conn->connect_error;
}
else{
    echo "";
}