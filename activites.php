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

    <style>
        .container {
            padding: 2rem 0rem;
        }

        h4 {
            margin: 2rem 0rem 1rem;
        }

        .table-image {
        td, th {
            vertical-align: middle;
        }
        }
    </style>

</head>


<body>

<div class="site-content">
    <?php include "includes/header.php"; ?>

        <div class="fullwidth-block" id="height-block" data-bg-color="#262936">
            <div class="container">
                <h1 class="forecast-header">Potential Activities to engage</h1>
                <div class="container">
                    <form action="#" onsubmit="return callAPI()" class="find-location">
                        <input type="text" placeholder="Find your location..." value="<?php echo $_SESSION['city']?>" id="input_city" autocomplete="off">
                        <input type="submit" value="Find">
                    </form>
                    <div id="content">
                        <img id="loader" src="images/loding.gif" style="height:75px; width: 75px; margin-left: auto; margin-right: auto; display: block"  alt="Loading...">
                    </div>
                    <div id="response"></div>
                </div>
            </div>
        </div>

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/app.js"></script>
    <script src="location.js"></script>

    <?php include "includes/footer.php"; ?>

    <!-- Load Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <script>
        $(document).ready(function()    {
            // var height = $(window).height();
            // $("#height-block").css("height", height);
            $("#loader").hide();
            callAPI();
        });



        function callAPI()  {

            var city = $("#input_city").val();
            $("#loader").show();
            var sendData = {city: city};

            console.log(sendData);
            $.ajax({
                url: "activities-handler.php?city=" + city,
                type: "GET",
                dataType: 'JSON',
                success: function(data, textStatus, error) {
                    $("#loader").hide();
                    //var replaced_string = data.toString().replace(/ 0+(?![\. }])/g, ' ');
                    //var response = JSON.parse(replaced_string);
                    var response = data;
                    // console.log(response.data);
                    if (response.status === "success") {
                        $("#response").html(response.data);
                    } else if (response.status === "error") {
                        $("#response").text(response.data);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    $("#loader").hide();
                    console.log(textStatus);
                    console.log(errorThrown);
                }
            });
            return false;
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxwa0bPhoi-_ojP7YYXNhL857c9HZuCGM&libraries=places"></script>



</body>

</html>