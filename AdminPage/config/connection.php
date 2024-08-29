<?php
$host = 'localhost';
$user = 'root@user';
$password = 'user#log';
$database = 'ad_handiya';
$port = '3306';

$connection = new mysqli($host, $user, $password, $database, $port);

if ($connection->connect_error) {
    die("Connection Failed:" . $connection->connect_error);
}
