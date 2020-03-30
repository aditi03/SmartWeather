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
					<form action="#" class="find-location">
						<input type="text" placeholder="Find your location...">
						<input type="submit" value="Find">
					</form>

				</div>
			</div>
			<div class="forecast-table">
				<div class="container">
					<div class="forecast-container">
						<div class="today forecast">
							<div class="forecast-header">
								<div class="day">Monday</div>
								<div class="date">6 Oct</div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="location">New York</div>
								<div class="degree">
									<div class="num">23<sup>o</sup>C</div>
									<div class="forecast-icon">
										<img src="images/icons/icon-1.svg" alt="" width=90>
									</div>	
								</div>
								<span><img src="images/icon-umberella.png" alt="">20%</span>
								<span><img src="images/icon-wind.png" alt="">18km/h</span>
								<span><img src="images/icon-compass.png" alt="">East</span>
							</div>
						</div>
						<div class="forecast">
							<div class="forecast-header">
								<div class="day">Tuesday</div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="forecast-icon">
									<img src="images/icons/icon-3.svg" alt="" width=48>
								</div>
								<div class="degree">23<sup>o</sup>C</div>
								<small>18<sup>o</sup></small>
							</div>
						</div>
						<div class="forecast">
							<div class="forecast-header">
								<div class="day">Wednesday</div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="forecast-icon">
									<img src="images/icons/icon-5.svg" alt="" width=48>
								</div>
								<div class="degree">23<sup>o</sup>C</div>
								<small>18<sup>o</sup></small>
							</div>
						</div>
						<div class="forecast">
							<div class="forecast-header">
								<div class="day">Thursday</div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="forecast-icon">
									<img src="images/icons/icon-7.svg" alt="" width=48>
								</div>
								<div class="degree">23<sup>o</sup>C</div>
								<small>18<sup>o</sup></small>
							</div>
						</div>
						<div class="forecast">
							<div class="forecast-header">
								<div class="day">Friday</div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="forecast-icon">
									<img src="images/icons/icon-12.svg" alt="" width=48>
								</div>
								<div class="degree">23<sup>o</sup>C</div>
								<small>18<sup>o</sup></small>
							</div>
						</div>
						<div class="forecast">
							<div class="forecast-header">
								<div class="day">Saturday</div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="forecast-icon">
									<img src="images/icons/icon-13.svg" alt="" width=48>
								</div>
								<div class="degree">23<sup>o</sup>C</div>
								<small>18<sup>o</sup></small>
							</div>
						</div>
						<div class="forecast">
							<div class="forecast-header">
								<div class="day">Sunday</div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="forecast-icon">
									<img src="images/icons/icon-14.svg" alt="" width=48>
								</div>
								<div class="degree">23<sup>o</sup>C</div>
								<small>18<sup>o</sup></small>
							</div>
						</div>
					</div>
				</div>
			</div>
			<main class="main-content">
				<div class="fullwidth-block">
					<div class="container">
						<h2 class="section-title">Live cameras</h2>
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<div class="live-camera">
									<figure class="live-camera-cover"><img src="images/live-camera-1.jpg" alt=""></figure>
									<h3 class="location">New York</h3>
									<small class="date">8 oct, 8:00AM</small>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="live-camera">
									<figure class="live-camera-cover"><img src="images/live-camera-2.jpg" alt=""></figure>
									<h3 class="location">Los Angeles</h3>
									<small class="date">8 oct, 8:00AM</small>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="live-camera">
									<figure class="live-camera-cover"><img src="images/live-camera-3.jpg" alt=""></figure>
									<h3 class="location">Chicago</h3>
									<small class="date">8 oct, 8:00AM</small>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="live-camera">
									<figure class="live-camera-cover"><img src="images/live-camera-4.jpg" alt=""></figure>
									<h3 class="location">London</h3>
									<small class="date">8 oct, 8:00AM</small>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="fullwidth-block" data-bg-color="#262936">
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<div class="news">
									<div class="date">06.10</div>
									<h3><a href="#">Doloremque laudantium totam sequi </a></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo saepe assumenda dolorem modi, expedita voluptatum ducimus necessitatibus. Asperiores quod reprehenderit necessitatibus harum, mollitia, odit et consequatur maxime nisi amet doloremque.</p>
								</div>
							</div>
							<div class="col-md-4">
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
							</div>
						</div>
					</div>
				</div>

				<div class="fullwidth-block">
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<h2 class="section-title">Application features</h2>
								<ul class="arrow-feature">
									<li>
										<h3>Natus error sit voluptatem accusantium</h3>
										<p>Doloremque laudantium totam rem aperiam Inventore veritatis et quasi architecto beatae vitae.</p>
									</li>
									<li>
										<h3>Natus error sit voluptatem accusantium</h3>
										<p>Doloremque laudantium totam rem aperiam Inventore veritatis et quasi architecto beatae vitae.</p>
									</li>
									<li>
										<h3>Natus error sit voluptatem accusantium</h3>
										<p>Doloremque laudantium totam rem aperiam Inventore veritatis et quasi architecto beatae vitae.</p>
									</li>
								</ul>
							</div>
							<div class="col-md-4">
								<h2 class="section-title">Weather analyssis</h2>
								<ul class="arrow-list">
									<li><a href="#">Accusantium doloremque laudantium rem aperiam</a></li>
									<li><a href="#">Eaque ipsa quae ab illo inventore veritatis quasi</a></li>
									<li><a href="#">Architecto beatae vitae dicta sunt explicabo</a></li>
									<li><a href="#">Nemo enim ipsam voluptatem quia voluptas</a></li>
									<li><a href="#">Aspernatur aut odit aut fugit, sed quia consequuntur</a></li>
									<li><a href="#">Magni dolores eos qui ratione voluptatem sequi</a></li>
									<li><a href="#">Neque porro quisquam est qui dolorem ipsum quia</a></li>
								</ul>
							</div>
							<div class="col-md-4">
								<h2 class="section-title">Awesome Photos</h2>
								<div class="photo-grid">
									<a href="#"><img src="images/thumb-1.jpg" alt="#"></a>
									<a href="#"><img src="images/thumb-2.jpg" alt="#"></a>
									<a href="#"><img src="images/thumb-3.jpg" alt="#"></a>
									<a href="#"><img src="images/thumb-4.jpg" alt="#"></a>
									<a href="#"><img src="images/thumb-5.jpg" alt="#"></a>
									<a href="#"><img src="images/thumb-6.jpg" alt="#"></a>
									<a href="#"><img src="images/thumb-7.jpg" alt="#"></a>
									<a href="#"><img src="images/thumb-8.jpg" alt="#"></a>
									<a href="#"><img src="images/thumb-9.jpg" alt="#"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main> <!-- .main-content -->

			<?php include "includes/footer.php";?>
		</div>
		
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>

		<!-- Load Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

		<script>
			$("li#login-button.menu-item").click(function()	{
				Swal.fire({
  					title: 'Credentials',
  					html: '<input type="text" id="username" class="swal2-input" placeholder="Enter your username"></input>' +
    					'<input type="password" id="password" class="swal2-input" placeholder="Enter your password"></input>',
  					confirmButtonText: 'Login',
  					preConfirm: () => {
    				let username = Swal.getPopup().querySelector('#username').value
    				let password = Swal.getPopup().querySelector('#password').value
    				if (username === '' || password === '') {
      				Swal.showValidationMessage(`Username/Password empty`)
  				 				 				}
    				return {username: username, password: password}
  					}
				}).then((result) => {
					console.log(result.value);
					$.ajax({
						url: "login-handler.php",
						type: "POST",
						data: result.value,
						success: function(data, textStatus, error)	{
							if(data == "Success")	{
								location.reload();
							}	else	{
								Swal.fire(data);
							}
						},
						error: function(jqXHR, textStatus, errorThrown)	{
							console.log(textStatus);
						}
					});
				});

			});


			$("#register-button").click(function()	{
				Swal.fire({
  					title: 'Credentials',
  					html: '<input type="text" id="username" class="swal2-input" placeholder="Enter your username"></input>' +
    					'<input type="password" id="password" class="swal2-input" placeholder="Enter your password"></input>',
  					confirmButtonText: 'Login',
  					preConfirm: () => {
    				let username = Swal.getPopup().querySelector('#username').value
    				let password = Swal.getPopup().querySelector('#password').value
    				if (username === '' || password === '') {
      					Swal.showValidationMessage(`Username/Password empty`)
  				 	}
    				return {username: username, password: password}
  					}
				}).then((result) => {
					
  					Swal.fire(`Username: ${result.value.username}\nPassword: ${result.value.password}`)
					});
				});
		</script>
		
	</body>

</html>