<?php
session_start();
include "includes/conn.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/Exception.php';

require 'PHPMailer/src/SMTP.php';


$mail = new PHPMailer(true);

$type = $_GET['type'];  // alert or share
// print_r($_SESSION['city']);
if($type == "share")    {
    $email = $_GET['mail'];
    $temperature = $_SESSION['temperature'];
    $humidity = $_SESSION['humidity'];
    $wind = $_SESSION['wind'];
    $message_body = "Hey, this is " . $_SESSION['username'] . ". Here are some weather details at " . $_SESSION['city'] . ". Temperature: " . $temperature . ", Humidity: " . $humidity . ", Wind: " . $wind . ".";
}   else    {
    $url = "https://api.weatherbit.io/v2.0/alerts?city=" . $_SESSION['city'] . "&key=2fc2e1e519d64b74967e64df1b7879d1";
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $curl_response = curl_exec($curl);

    if(!isset($curl_response))  {
        $info = curl_getinfo($curl);
        curl_close($curl);

        exit();
    }
    
    curl_close($curl);
    $decoded = json_decode($curl_response,true);
   print_r($decoded["alerts"][0]["description"]);
   
    if(isset($decoded["alerts"][0]["description"])) {
      //  print_r($decoded["alerts"][0]);
      print_r("heel0");
        $message_body = $decoded["alerts"][0]["description"];
    }
}
// echo $message_body;

try {
    $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    
    $mail->Username = "smartweatherapp847@gmail.com";
    $mail->Password ="SaahilMC";
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 465;    


    $mail->setFrom("smartweatherapp847@gmail.com", 'no-reply@smartweather.com');
    
    if($type == "share")    {
        $mail->addAddress($email);
    }   
    else    
    {
        $query = "SELECT * from `user` where `location` like '" . $_SESSION['city'] . "';";
        print_r($query);
        $result = mysqli_query($conn, $query);
        print_r(mysqli_num_rows($result));

        if(mysqli_num_rows($result) > 0)    {
            while($row = mysqli_fetch_assoc($result))    {
                print_r($row['username']);
                $mail->addAddress($row['username']);
            }
        }
    }

    $mail->isHTML(true);
    
    if($type == "share")    {
        $mail->Subject = 'Share details';
    }   else    {
        $mail->Subject = 'Weather Alert';
    }

    $mail->Body = $message_body;

    $mail->send();
} catch(\Exception $e)  {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}


?>