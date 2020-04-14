<?php

session_start();

$url = "http://app.ticketmaster.com/discovery/v2/events.json?keyword=" . $_GET['city'] . "&apikey=h6f2NcQRXCZJqtoQmxxXEFc8Lx5sFkxd";
$curl =  curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$curl_response = curl_exec($curl);

if(!isset($curl_response))    {
    $info = curl_getinfo($curl);
    curl_close($curl);

    echo json_encode(array(
        "status" => "error",
        "data" => 'error occurred during curl exec. Additional info: ' . var_export($info)
    ));
    exit();
}

curl_close($curl);
$decoded = json_decode($curl_response);


if(isset($decoded->fault))  {
    echo json_encode(array(
        "status" => "error",
        "data" => 'error occured: ' . $decoded->fault->faultstring
    ));
    exit();
}

// Got a successful response
$events_array = $decoded->_embedded->events;

$response_string = '<div class="row"><div class="col-12"><table class="table table-image"><thead><tr>';
$response_string .= '<th style="color: #bfc1c8"  scope="col">#</th>';
$response_string .= '<th style="color: #bfc1c8" scope="col">Image</th>';
$response_string .= '<th style="color: #bfc1c8" scope="col">Name</th>';
$response_string .= '<th style="color: #bfc1c8" scope="col">Date and Time</th>';
$response_string .= '<th style="color: #bfc1c8" scope="col">Description</th>';
$response_string .= '<th style="color: #bfc1c8" scope="col">Price Range</th></tr></thead><tbody>';

for($i = 0; $i < count($events_array); $i++)    {
    $event = $events_array[$i];

    $image_url = $event->images[0]->url;
    $image_height = $event->images[0]->height;
    $image_width = $event->images[0]->width;

    $name = $event->name;
    $event_url = $event->url;

    $date = $event->dates->start->localDate;
    $time = $event->dates->start->localTime;
    $date_time = $date . ' - ' . $time;

    $description = $event->info;

    $start_price = $event->priceRanges[0]->min;
    $end_price = $event->priceRanges[0]->max;
    $price_range = $start_price . " - " . $end_price;

    $response_string .= '<tr style="color: #bfc1c8">';
    $response_string .= '<th scope="row">' . ($i + 1) . '</th>';
    $response_string .= '<td class="w-25"><img src="' . $image_url . '" class="img-fluid img-thumbnail" width="' . $image_width .'" height="' . $image_height . '" alt="Image"></td>';
    $response_string .= '<td><a target="_blank" href="' . $event_url . '">' . $name . '</a></td>';
    $response_string .= '<td>' . $date_time . '</td>';
    $response_string .= '<td>' . $description . '</td>';
    $response_string .= '<td>' . $price_range . '</td>';
    $response_string .= '</tr>';

}

echo json_encode(array(
    "status" => "success",
    "data" => $response_string
));
exit();
