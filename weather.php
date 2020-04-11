<?php

$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];
$google_API_key = 'AIzaSyBden4wmQr8UftgK0PWOSxFQ7GSLk_TAkI';

$url = 'https://maps.googleapis.com/maps/api/geocode/json?latlng=' . $latitude . ',' . $longitude . '&sensor=false&key=' . $google_API_key;
$json = @file_get_contents($url);
$data = json_decode($json);
$status = $data->status;

if ($status == "OK") {
    //Get address from json data
    for ($j = 0; $j < count($data->results[0]->address_components); $j++) {
        $cn = array($data->results[0]->address_components[$j]->types[0]);
        if (in_array("locality", $cn)) {
            $city = $data->results[0]->address_components[$j]->long_name;
        }
    }
} else {
    echo 'Location Not Found';
}

$openweather_API_key = '3834874aba8c0049f99e21ed98f0aa04';
$url1 =  'http://api.openweathermap.org/data/2.5/onecall?lat=' . $latitude . '&lon=' . $longitude . '&appid=' . $openweather_API_key . '&units=imperial';
$json1 = @file_get_contents($url1);
$data1 = json_decode($json1, true);

if ($status == "OK") {
    $temp =  $data1['current']['temp'];
    $response = array(
        'city' => $city, // First Value
        'temp' => $temp, // Second Value 
        'humidity' => $data1['current']['humidity'], // Third Value
        'wind' => $data1['current']['wind_speed'], // Fourth Value
        'icon' => $data1['current']['weather'][0]['icon'],
        'daily_data' => $data1['daily']
    );
    echo json_encode($response);
} else {
    #echo "Error";
}
