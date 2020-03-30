<?php

include "includes/conn.php";
session_start();

$username = mysqli_escape_string($conn, $_POST['username']);
$password = mysqli_escape_string($conn, $_POST['password']);

$query = "select * from user where `username`='" . $username . "' and `password`='" . $password . "' limit 1;";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) == 1)  {
    $_SESSION["username"] = $username;
    echo "Success";
}   else    {
    echo "Wrong Credentials";
}
exit();