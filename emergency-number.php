<?php
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];
    
    $country_num = array(
        "US" => "911 911 911",
        "IN" => "112 112 112",
        "GB" => "999 999 999",
        "CN" => "100 120 119",
        "RU" => "102 103 101"
    );

    $google_API_key = 'AIzaSyBden4wmQr8UftgK0PWOSxFQ7GSLk_TAkI';
    $url = "https://maps.googleapis.com/maps/api/geocode/json?latlng=" . $latitude . "," . $longitude . "&key=" . $google_API_key;
    $json = @file_get_contents($url);
    if ($json === FALSE) { 
    echo json_encode(array(
        "status" => "error",
        "data" => 'error occured: ' . $decoded->fault->faultstring
    ));
    exit();
    }

    $data = json_decode($json, true);
    
    // echo var_dump($data["results"][0]["address_components"]);

    foreach ($data["results"][0]["address_components"] as $address_component){
        if(in_array("country", $address_component["types"]) === TRUE){
            $country = $address_component["long_name"];
            $key = $address_component["short_name"];
            $numbers = explode(" ", $country_num[$key]);
            $response = array($country, $numbers[0], $numbers[1], $numbers[2]);    
        }
    }
    echo json_encode(array(
        "status" => "success",
        "data" => $response
    ));
?>