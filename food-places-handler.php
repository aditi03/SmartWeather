<?php


// echo "hi from handler";
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];
$zomato_API_key = '840f9b574c4b85bf0aaf0384b90b064d';
$_SESSION['zomato_api_key']=$zomato_API_key;

$url = 'https://developers.zomato.com/api/v2.1/geocode?lat=' . $latitude . '&lon=' . $longitude;

$data = array('lat' => $latitude, 'long' => $longitude);

$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\nuser-key: ".$zomato_API_key,
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { 
    echo json_encode(array(
        "status" => "error",
        "data" => 'error occured: ' . $decoded->fault->faultstring
    ));
    exit();
 }

$result = json_decode($result, true);
$response = array();
$response_string = "";
$img_src = "";
foreach ($result['nearby_restaurants'] as $restaurant)
{
    // echo var_dump($restaurant["restaurant"]["name"]);
    $arr = array(
        'name' => $restaurant["restaurant"]["name"],
        'cuisines' => $restaurant["restaurant"]["cuisines"],
        'location' => $restaurant["restaurant"]["location"]["address"],
        "user_rating" => $restaurant["restaurant"]["user_rating"]["aggregate_rating"],
        'url' => $restaurant["restaurant"]["url"]
    );
    // $response[] = $arr;
    // $img_src = ""; 
    // print_r("hey");
    if(strpos($arr['cuisines'], 'African') !== false){
        // print_r("hi");
        $img_src  = 'images/food/african-ethopian.jpg';
    }
    elseif(strpos($arr['cuisines'], 'Ethopian') !== false){
        $img_src = 'images/food/african-ethopian.jpg';
    }
    elseif(strpos($arr['cuisines'], 'Mediterranean') !== false){
        $img_src = 'images/food/mediterranean-food.jpg';
    }
    elseif(strpos($arr['cuisines'], 'Middle Eastern') !== false){
        $img_src = 'images/food/mediterranean-food.jpg';
    }
    elseif(strpos($arr['cuisines'], 'Coffee') !== false){
        $img_src = 'images/food/tea-and-coffee.jpg';
    }
    elseif(strpos($arr['cuisines'], 'Tea') !== false){
        $img_src = 'images/food/tea-and-coffee.jpg';
    }
    elseif(strpos($arr['cuisines'], 'Asian') !== false){
        $img_src = 'images/food/asian-vietnamese-food.jpg';
    }
    elseif(strpos($arr['cuisines'], 'Sandwich') !== false){
        $img_src = 'images/food/asian-vietnamese-food.jpg';
    }
    elseif(strpos($arr['cuisines'], 'Vietnamese') !== false){
        $img_src = 'images/food/asian-vietnamese-food.jpg';
    }
    elseif(strpos($arr['cuisines'], 'American') !== false){
        $img_src = 'images/food/american-bar.jpg';
    }
    elseif(strpos($arr['cuisines'], 'Bar-Food') !== false){
        $img_src = 'images/food/american-bar.jpg';
    }
    elseif(strpos($arr['cuisines'], 'Vegetarian') !== false){
        $img_src = 'images/food/american-bar.jpg';
    }
    elseif(strpos($arr['cuisines'], 'Italian') !== false){
        $img_src = 'images/food/italian-pizza.jpg';
    }
    elseif(strpos($arr['cuisines'], 'Pizza') !== false){
        $img_src = 'images/food/italian-pizza.jpg';
    }
    elseif(strpos($arr['cuisines'], 'Japanese') !== false){
        $img_src = 'images/food/japanese-sushi.jpg';
    }
    elseif(strpos($arr['cuisines'], 'Sushi') !== false){
        $img_src = 'images/food/japanese-sushi.jpg';
    }
    elseif(strpos($arr['cuisines'], 'Greek') !== false){
        $img_src = 'images/food/greek-salad.jpg';
    }
    elseif(strpos($arr['cuisines'], 'Salad') !== false){
        $img_src = 'images/food/greek-salad.jpg';
    }
    elseif(strpos($arr['cuisines'], 'Chinese') !== false){
        $img_src = 'images/food/chinese-food.jpg';
    }


    $response_string .= '<div class="photo">';
    $response_string .= '<div class="photo-preview photo-detail"><img src="'. $img_src . '" alt="Image-1" style="width:200px;height:200px;"></div>';
    $response_string .= '<div class="photo-details">';
    $response_string .= '<h3 class="photo-title"><a target="_blank" href="'. $arr['url'] .'">'. $arr['name'] .'</a></h3>';
    $response_string .= '<h5><i>' . $arr['cuisines'] . '</i></h5>';
    $response_string .= '<address><img src="images/icon-marker.png" alt="">';
    $response_string .= '<p>' . $arr['location'] . '</p>';
    $response_string .= '</address>Rating: '. $arr["user_rating"] . '</div></div>';
    $img_src = "";
}
echo json_encode(array(
    "status" => "success",
    "data" => $response_string
));
exit();

?>