<?php 
session_start();

$searchInput = $_POST['search_input'];
$searchInput = explode(" ", $searchInput);
$google_API_key = 'AIzaSyBden4wmQr8UftgK0PWOSxFQ7GSLk_TAkI';

$address = '';
foreach ($searchInput as $add)
{
    $address .= $add;
}

$url = "https://maps.googleapis.com/maps/api/geocode/json?address=" . $address . "&key=" . $google_API_key;


$json = @file_get_contents($url);
$data = json_decode($json, true);
$status = $data['status'];


if ($status == "OK") {
    $latitude = $data["results"][0]["geometry"]["location"]["lat"];
    $longitude = $data["results"][0]["geometry"]["location"]["lng"];
}


echo json_encode(array(
    "status" => "success",
    "data" => array("latitude" => $latitude, "longitude" => $longitude)
));
exit();

?>