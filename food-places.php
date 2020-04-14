<?php

include "includes/conn.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

	<title>A Smart Weather App</title>

	<!-- Loading third party fonts -->
	<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
	<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- Load Bootstrap  -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<!-- Loading main css file -->
	<link rel="stylesheet" href="style.css">

	<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

</head>


<body>

	<div class="site-content">
		<?php include "includes/header.php"; ?>

        <div class="hero" data-bg-image="images/banner.png">
            <div class="container">
                <form action="#" onsubmit="return city_lat_long()" class="find-location">
                    <!--<input type="text" placeholder="Find your location..." value="<?php echo $_SESSION['city']?>" id="input_city" autocomplete="off">-->
                    <input type="text" placeholder="Find your location..." value="<?php echo $_SESSION['city']?>" id="autocomplete-input">
                    <input type="submit" value="Find">
                </form>

            </div>
        </div>
    

    <main class="main-content">

        <div class="fullwidth-block">
            <div class="container">
                <div class="row">
                    <div class="offset-md-3 col-md-6 offset-md-3">
                        <div id="response"></div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/app.js"></script>
    <script src="location.js"></script>
    <script>
        function showFoodPlaces(latitude, longitude) {
            console.log('Hello from food places');
            // console.log(latitude);
            getLocation();
            if(latitude == null){
                var latitude = sessionStorage.getItem('latitude');
                var longitude = sessionStorage.getItem('longitude');
            }
            // var latitude = sessionStorage.getItem('latitude');
            // var longitude = sessionStorage.getItem('longitude');
            console.log(latitude);
            console.log(longitude);
            $.ajax({
                url: "food-places-handler.php",
                type: "POST",
                data: {
                    latitude: latitude,
                    longitude: longitude
                },
                success: function(data, textStatus, error) {
                    $("#loader").hide();
                    // console.log(data);
                    var response = jQuery.parseJSON(data);
                    if (response["status"] === "success") {
                        $("#response").html(response["data"]);
                    } else if (response["status"] === "error") {
                        $("#response").text(response["data"]);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus);
                    console.log(errorThrown);
                }
        });
        }
        
        $('document').ready(function()  {
            showFoodPlaces();
        });
        
    </script>

    <script>
        var searchInput = document.getElementById('autocomplete-input');
        $(document).ready(function () {
        var autocomplete;
        console.log("hello");
        autocomplete = new google.maps.places.Autocomplete((searchInput), {
            types: ['geocode'],
        });
        
        google.maps.event.addListener(autocomplete, 'place_changed', function () {
            var near_place = autocomplete.getPlace();
            console.log(near_place);
        });
    });
	</script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxwa0bPhoi-_ojP7YYXNhL857c9HZuCGM&libraries=places"></script>

    <script>
        function city_lat_long(){
            var searchInput = document.getElementById('autocomplete-input').value;
            console.log(searchInput);
            $.ajax({
                url: "lat_long.php",
                type: "POST",
                data: {
                    search_input: searchInput
                },
                success: function(data, textStatus, error) {
                    var response = JSON.parse(data);
                    // console.log(response.status);
                    if (response["status"] === "success") {
                        var latitude = response["data"]["latitude"];
                        var longitude = response["data"]["longitude"];
                        showFoodPlaces(latitude, longitude);
                    } else if (response["status"] === "error") {
                        console.log("Error");
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus);
                    console.log(errorThrown);
                }  
        });
        }
    </script>

    <?php include "includes/footer.php"; ?>

    </div>

	<!-- Load Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>




</body>

</html>