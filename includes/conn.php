<?php

$user = 'root';
$password = 'root';
$db = 'smartweather';
$host = 'localhost';
$port = 8889;

// Create connection
$conn = mysqli_init();
$connection = mysqli_real_connect($conn, $host, $user, $password, $db, $port);

// Check connection
if(!$conn)  {
    die("Connection failed: " . mysqli_connect_error());
}
# echo "Connected successfully";