<?php

include "includes/conn.php";
session_start();

$username = mysqli_escape_string($conn, $_POST['username']);
$password = mysqli_escape_string($conn, $_POST['password']);
$phone_number = mysqli_escape_string($conn, $_POST['phone_number']);
$location = mysqli_escape_string($conn, $_POST['location']);

$query = "insert into `user` values('" . $username . "', '" . $password . "', '" . $phone_number . "', '" . $location . "');";
$result = mysqli_query($conn, $query);
echo "Success";