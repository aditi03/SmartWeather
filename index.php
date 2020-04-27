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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- Loading main css file -->
	<link type="text/css" rel="stylesheet" href="style.css">

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
			<form action="#" class="find-location">
				<input type="text" placeholder="Find your location..." id="autocomplete-input">
				<input type="submit" value="Find">
			</form>

		</div>



		<div class="container" id="search-toggle-container" style="height: 350px; width: 500px; position: relative; top: -200px; z-index: 999;display:none; background: #323544;">
		<div class="today" style=" background: rgba(0, 0, 0, 0.1); padding: 10px; text-align: center; font-weight: 400;">Today</div>
		<div class="forecast-content" style=" font-size: 15px; font-size: 1.7142857143em; color: white; font-weight: 700;">
										<div id="Search-City" class="location" style="float:left"></div>
										<div class="degree" style="float:left;">
											<div id="Search-temp" class="num"style="float:left; font-size: 90px; font-size: 6.4285714286rem; margin-right: 30px;"></div>
											<div class="forecast-icon">
												<img id="Search-icon1" alt="" width=90>
											</div>
										</div>
										<span id="Search-precip" style="float:left; clear:left; padding-right:10px;"><img src="images/icon-umberella.png" style= "width:22px;height:22px;"alt="">20%</span>
										<span id="Search-wind" style="float:left;padding-right:10px;"><img src="images/icon-wind.png" alt="">18km/h</span>
										<span id="Search-direction" style="float:left; "><img src="images/icon-compass.png" alt=""style= "width:22px;height:22px;">East</span>
							</div>
		</div>


		<div class="forecast-table">
			<div class="container">
				<div class="forecast-container">
					
						
					<div class="today forecast">
						<div class="forecast-header">
							<div class="day">Today</div>
							<div class="date" id="date1"></div>
						</div> <!-- .forecast-header -->
						<div class="forecast-content">
							<div id="City" class="location"></div>
							<div class="degree">
								<div id="temp" class="num"></div>
								<div class="forecast-icon">
									<img id="icon1" alt="" width=90>
								</div>

						</div>
						<span id="precip"><img src="images/icon-umberella.png" alt="">20%</span>
						<span id="wind"><img src="images/icon-wind.png" alt="">18km/h</span>
						<span id="direction"><img src="images/icon-compass.png" alt="">East</span>
					</div>
				</div>
				<div class="forecast">
					<div class="forecast-header">
						<div class="day" id="date2"></div>
					</div> <!-- .forecast-header -->
					<div class="forecast-content">
						<div class="forecast-icon">
							<img id=icon3 alt="" width=48>
						</div>
						<div class="degree" id="day1_max"></div>
						<div id="day1_min"> <small></small></div>
					</div>
				</div>
				<div class="forecast">
					<div class="forecast-header">
						<div class="day" id="date3"></div>
					</div> <!-- .forecast-header -->
					<div class="forecast-content">
						<div class="forecast-icon">
							<img id=icon5 alt="" width=48>
						</div>
						<div class="degree" id="day2_max"></div>
						<div id="day2_min"> <small></small></div>
					</div>
				</div>
				<div class="forecast">
					<div class="forecast-header">
						<div class="day" id="date4"></div>
					</div> <!-- .forecast-header -->
					<div class="forecast-content">
						<div class="forecast-icon">
							<img id=icon7 alt="" width=48>
						</div>
						<div class="degree" id="day3_max"></div>
						<div id="day3_min"> <small></small></div>
					</div>
				</div>
				<div class="forecast">
					<div class="forecast-header">
						<div class="day" id="date5"></div>
					</div> <!-- .forecast-header -->
					<div class="forecast-content">
						<div class="forecast-icon">
							<img id=icon12 alt="" width=48>
						</div>
						<div class="degree" id="day4_max"></div>
						<div id="day4_min"> <small></small></div>
					</div>
				</div>
				<div class="forecast">
					<div class="forecast-header">
						<div class="day" id="date6"></div>
					</div> <!-- .forecast-header -->
					<div class="forecast-content">
						<div class="forecast-icon">
							<img id="icon13" alt="" width=48>
						</div>
						<div class="degree" id="day5_max"></div>
						<div id="day5_min"> <small></small></div>
					</div>
				</div>
				<div class="forecast">
					<div class="forecast-header">
						<div class="day" id="date7"></div>
					</div> <!-- .forecast-header -->
					<div class="forecast-content">
						<div class="forecast-icon">
							<img id="icon14" alt="" width=48>
						</div>
						<div class="degree" id="day6_max"></div>
						<div id="day6_min"> <small></small></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<main class="main-content">
		<div class="fullwidth-block">
			<div class="container">
				<h2 class="section-title">Hourly Forecast</h2>
				<div class="horizontal-scrollable">
					<div class="row text-center" id="MainContainer">
					</div>
				</div>
			</div>
		</div>

		<div class="fullwidth-block" data-bg-color="#262936">
			<div class="container">
				<h2 class="section-title">Emergency Numbers</h2>
				<div class="row">
					<div class="col-md-10">
						<div>
							<h1 id="country"></h1>
							<table>
								<tr style="color: #bfc1c8">
									<th scope="row" style="padding:0 15px 0 15px; font-size:20px">Police</th>
									<th scope="row" style="padding:0 15px 0 15px; font-size:20px">Ambulance</th>
									<th scope="row" style="padding:0 15px 0 15px; font-size:20px">Fire</th>
								</tr>
								<tr>
									<td style="padding:0 15px 0 15px; font-size:20px" id="police"></td>
									<td style="padding:0 15px 0 15px; font-size:20px" id="ambulance"></td>
									<td style="padding:0 15px 0 15px; font-size:20px" id="fire"></td>
								</tr>
							</table>	
						</div>
					</div>
					<!--<div class="col-md-4">
						<div class="news">
							<div class="date">06.10</div>
							<h3><a href="#">Doloremque laudantium totam sequi </a></h3>
							<p>Nobis architecto consequatur ab, ea, eum autem aperiam accusantium placeat vitae facere explicabo temporibus minus distinctio cum optio quis, dignissimos eius aspernatur fuga. Praesentium totam, corrupti beatae amet expedita veritatis.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="news">
							<div class="date">06.10</div>
							<h3><a href="#">Doloremque laudantium totam sequi </a></h3>
							<p>Enim impedit officiis placeat qui recusandae doloremque possimus, iusto blanditiis, quam optio delectus maiores. Possimus rerum, velit cum natus eos. Cumque pariatur beatae asperiores, esse libero quas ad dolorem. Voluptates.</p>
						</div>
					</div>-->
				</div>
			</div>
		</div>

		<div class="fullwidth-block">
			<div class="container">
				<div id = "clothing" style="font-weight: bold; font-size: 20px; text-align: center;"></div>
				<div><img style="height: 300px; display: block; margin-left: auto; margin-right: auto" id="clothing_image" src=""></div>
			</div>
		</div>
	</main> <!-- .main-content -->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/app.js"></script>
	<script src="location.js"></script>
	<script>
		function addDiv() {
			var toAdd = document.createDocumentFragment();
			for (var i = 0; i < 24; i++) {
				var cell = document.createElement('div');
				cell.id = 'cell' + i;
				cell.className = 'col-xs-4';

				var header = document.createElement('div');
				header.id = 'header' + i;
				header.className = "forecast-header";
				var time = document.createElement('div');
				time.id = 'time' + i;
				time.className = "day";

				header.appendChild(time);

				var content = document.createElement('div');
				content.id = 'content' + i;
				content.className = "forecast-content";

				var icon = document.createElement('div');
				icon.className = "forecast-icon";

				var img = document.createElement('img');
				img.width = 48;
				img.id = 'hourly_icon' + i;
				icon.appendChild(img);

				var temp = document.createElement('div');
				temp.id = 'hourly_temp' + i;
				temp.className = "degree";

				var feels = document.createElement('div');
				feels.id = 'hourly_feels' +  i;
				feels.className = "degree";


				content.appendChild(temp);
				content.appendChild(feels);
				content.appendChild(icon);

				cell.appendChild(header);
				cell.appendChild(content);

				toAdd.appendChild(cell);
			}

			document.getElementById("MainContainer").appendChild(toAdd);
		}

		addDiv();

		function showWeather() {
			getLocation();
			var latitude = sessionStorage.getItem('latitude');
			var longitude = sessionStorage.getItem('longitude');
			$.ajax({
				url: "weather.php",
				type: "POST",
				data: {
					latitude: latitude,
					longitude: longitude
				},
				success: function(data, textStatus, error) {

					var res = jQuery.parseJSON(data);
					n = new Date();
					y = n.getFullYear();
					m = n.getMonth();
					d = n.getDate();
					document.getElementById("City").textContent = res.city;
					document.getElementById("temp").innerHTML = res.temp + '<sup>o</sup>F';
					document.getElementById("wind").textContent = res.wind + ' mph';
					document.getElementById("icon1").src = 'http://openweathermap.org/img/wn/' + res.icon + '.png';

					document.getElementById("date1").innerHTML = m + "/" + d + "/" + y;
					document.getElementById("day1_max").innerHTML = res.daily_data[0].temp.max + '<sup>o</sup>F';
					document.getElementById("day1_min").innerHTML = res.daily_data[0].temp.min + '<sup>o</sup>F';
					document.getElementById("icon3").src = 'http://openweathermap.org/img/wn/' + res.daily_data[0].weather[0].icon + '.png';

					document.getElementById("date2").innerHTML = m + "/" + String(Number(d) + 1) + "/" + y;
					document.getElementById("day2_max").innerHTML = res.daily_data[1].temp.max + '<sup>o</sup>F';
					document.getElementById("day2_min").innerHTML = res.daily_data[1].temp.min + '<sup>o</sup>F';
					document.getElementById("icon5").src = 'http://openweathermap.org/img/wn/' + res.daily_data[1].weather[0].icon + '.png';

					document.getElementById("date3").innerHTML = m + "/" + String(Number(d) + 2) + "/" + y;
					document.getElementById("day3_max").innerHTML = res.daily_data[2].temp.max + '<sup>o</sup>F';
					document.getElementById("day3_min").innerHTML = res.daily_data[2].temp.min + '<sup>o</sup>F';
					document.getElementById("icon7").src = 'http://openweathermap.org/img/wn/' + res.daily_data[2].weather[0].icon + '.png';

					document.getElementById("date4").innerHTML = m + "/" + String(Number(d) + 3) + "/" + y;
					document.getElementById("day4_max").innerHTML = res.daily_data[3].temp.max + '<sup>o</sup>F';
					document.getElementById("day4_min").innerHTML = res.daily_data[3].temp.min + '<sup>o</sup>F';
					document.getElementById("icon12").src = 'http://openweathermap.org/img/wn/' + res.daily_data[3].weather[0].icon + '.png';

					document.getElementById("date5").innerHTML = m + "/" + String(Number(d) + 4) + "/" + y;
					document.getElementById("day5_max").innerHTML = res.daily_data[4].temp.max + '<sup>o</sup>F';
					document.getElementById("day5_min").innerHTML = res.daily_data[4].temp.min + '<sup>o</sup>F';
					document.getElementById("icon13").src = 'http://openweathermap.org/img/wn/' + res.daily_data[4].weather[0].icon + '.png';

					document.getElementById("date6").innerHTML = m + "/" + String(Number(d) + 5) + "/" + y;
					document.getElementById("day6_max").innerHTML = res.daily_data[5].temp.max + '<sup>o</sup>F';
					document.getElementById("day6_min").innerHTML = res.daily_data[5].temp.min + '<sup>o</sup>F';
					document.getElementById("icon14").src = 'http://openweathermap.org/img/wn/' + res.daily_data[5].weather[0].icon + '.png';

					document.getElementById("date7").innerHTML = m + "/" + String(Number(d) + 6) + "/" + y;

					for (let i = 0; i < 24; i++) {

						var time = new Date(res.hourly_data[i].dt * 1000);
						document.getElementById("time" + i).innerHTML = time.toLocaleString('en-US', {
							hour: 'numeric',
							hour12: true
						});
						document.getElementById("hourly_temp" + (i)).innerHTML = res.hourly_data[i].temp + '<sup>o</sup>F';
						document.getElementById("hourly_feels" + (i)).innerHTML = res.hourly_data[i].feels_like + '<sup>o</sup>F';
						document.getElementById("hourly_icon" + (i)).src = 'http://openweathermap.org/img/wn/' + res.hourly_data[i].weather[0].icon + '.png';
					}
					// document.getElementById("date1").innerHTML = m + "/" + d + "/" + y;

					showClothing(res);
				},
				error: function(jqXHR, textStatus, errorThrown) {
					console.log("Failure");
				}
			});
		}
		showWeather();
	</script>

	<script>
		function emergencyNumbers(){
			getLocation();
			var latitude = sessionStorage.getItem('latitude');
			var longitude = sessionStorage.getItem('longitude');
			$.ajax({
				url: "emergency-number.php",
				type: "POST",
				data: {
					latitude: latitude,
					longitude: longitude
				},
				success: function(data, textStatus, error) {
					data = JSON.parse(data);
					res = data["data"];
					// console.log(data["data"]);
					var country = res[0];
					var police = res[1];
					var ambulance = res[2];
					var fire = res[3];
					document.getElementById("country").innerHTML = country;
					document.getElementById("police").innerHTML = police;
					document.getElementById("ambulance").innerHTML = ambulance;
					document.getElementById("fire").innerHTML = fire;
					// console.log(country);
				},
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus);
                    console.log(errorThrown);
                }  
        });
        }
		emergencyNumbers();
	</script>

	<script>
		function showClothing(result)	{
			console.log("Inside method");
			console.log(result);
			var current_temp = result.temp;
			var rain_possibility = result.hourly_data[0].clouds;
			var humidity = result.hourly_data[0].humidity;

			// console.log(humidity);

			var text_to_set = "";
			var image_to_set = "";

			if(current_temp > 70)	{
				// Summer
				text_to_set = "It is hot outside, so wear cool layers such as camisoles or T-shirts paired with sunglasses or a cap."
				image_to_set = "summer.jpg"
			}	else if (current_temp <= 70 && current_temp > 50)	{
				// Pleasant
				text_to_set = "The weather outside is pleasant so you can wear mild clothing such as hoodies, shirts, trousers, skirts paired with a light scarf and shoes.";
				image_to_set = "pleasant.jpg";
			}	else if(current_temp <= 50)	{
				// Winter
				text_to_set = "It is cold outside, so wear warm clothes such as flannel, sweater, jacket paired with thickscarf, muffler and long boots and also a coat if necessary.";
				image_to_set = "winter.jpg";
			}

			if(rain_possibility > 70)	{
				text_to_set += " It is rainy outside so we recommend you to wear or carry Windsheater, Umbrella and Gum boots.";
				image_to_set = "rainy.jpg";
			}

			if((current_temp > 25 && current_temp < 35 && humidity < 30) && (current_temp < 20 && humidity > 95))	{
				text_to_set += " It is snowing outside so we recommend Jackets, Sweaters, Thermals, Snow boots, Beanies, Ear muffs, Gloves.";
				image_to_set = "snow.jpg";
			}

			$("#clothing").text(text_to_set);
			$("#clothing_image").attr("src", "images/" + image_to_set);
		}
		// showClothing();
	</script>

	<?php include "includes/footer.php"; ?>

	<!-- Load Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

	<script>
		$("li#login-button.menu-item").click(function() {
			Swal.fire({
				title: 'Credentials',
				html: '<input type="email" id="username" class="swal2-input" placeholder="Enter your email ID" ></input>' +
					'<input type="password" id="password" class="swal2-input" placeholder="Enter your password"></input>',
				confirmButtonText: 'Login',
				preConfirm: () => {
					let username = Swal.getPopup().querySelector('#username').value;
					let password = Swal.getPopup().querySelector('#password').value;
					if (username === '' || password === '') {
						Swal.showValidationMessage('Username/Password empty')
					}
					return {
						username: username,
						password: password
					}
				}
			}).then((result) => {
				console.log(result.value);
				$.ajax({
					url: "login-handler.php",
					type: "POST",
					data: result.value,
					success: function(data, textStatus, error) {
						if (data === "Success") {
							location.reload();
						} else if (data === "Wrong Credentials") {
							Swal.fire(data);
						}
					},
					error: function(jqXHR, textStatus, errorThrown) {
						console.log(textStatus);
					}
				});
			});

		});


		$("li#register-button.menu-item").click(function() {
			console.log('inside register');
			Swal.fire('Hello');
			Swal.fire({
					title: 'Register Credentials',
					html: '<input type="email" id="register_username" class="swal2-input" placeholder="Enter your email ID"></input>' +
						'<input type="password" id="register_password" class="swal2-input" placeholder="Enter your password"></input>'+
						'<input type="tel" id="phone_number" class="swal2-input" placeholder="Enter your phone number as 123-456-7890"  pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"></input>' +
						'<input type="text" id="location" class="swal2-input" placeholder="Enter your current location"></input>',
					confirmButtonText: 'Register',
					preConfirm: () => {
						let username = Swal.getPopup().querySelector('#register_username').value;
						let password = Swal.getPopup().querySelector('#register_password').value;
						let phone_number = Swal.getPopup().querySelector('#phone_number').value;
						let location = Swal.getPopup().querySelector('#location').value;

						if (username === '' || password === ''|| phone_number===''|| location=== '') {
							Swal.showValidationMessage('Username/Password/Phone Number/Location empty');
						}
						return {
							username: username,
							password: password,
							phone_number: phone_number,
							location: location
						}
					}
				})
				.then((result) => {console.log(result.value);
					$.ajax({
						url: "register-handler.php",
						type: "POST",
						data: result.value,
						success: function(data, textStatus, error) {
							if (data == "Success") {
								location.reload();
							} else if (data == "Incorrect Data Entered") {
								Swal.fire(data);
							}
						},
						error: function(jqXHR, textStatus, errorThrown) {
							console.log(textStatus);
						}
					});


					//Swal.fire(`Username: ${result.value.username}\nPassword: ${result.value.password}`)
				});
		});
	</script>

	<!--Code for autocomplete-->
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
		console.log(near_place["address_components"][0]["long_name"]);
		var city = near_place["address_components"][0]["long_name"];
		var url1="http://api.openweathermap.org/data/2.5/weather?q="+city+"&appid=3834874aba8c0049f99e21ed98f0aa04";
		getWeatherPredictions(url1).then(data=>{console.log(data);
		document.getElementById("search-toggle-container").style.display="block";
		document.getElementById("Search-City").textContent = data["name"];
		var degreeToFahrenheit= (1.8*(data["main"]["temp"] -273.15)+32).toFixed(2);
		document.getElementById("Search-temp").innerHTML = degreeToFahrenheit + '<sup>o</sup>F';
		document.getElementById("Search-wind").textContent = data["wind"]["speed"]+' mph' ;
		console.log(data["weather"][0]["icon"]);
		document.getElementById("Search-icon1").src = 'http://openweathermap.org/img/wn/' + data["weather"][0]["icon"] + '.png';
		});
	});
	
	async function getWeatherPredictions(url1){
		let response = await fetch(url1);
		let data = await response.json();
		return data;
	}
});

	</script>
	
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxwa0bPhoi-_ojP7YYXNhL857c9HZuCGM&libraries=places"></script>

</body>

</html>