<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Compass Starter by Ariona, Rian</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

		<script src="myscript.js"></script>
	
	

	</head>


	<body>
		
		<div class="site-content">
			<div class="site-header">
				<div class="container">
					<a href="index.html" class="branding">
						<img src="images/logo.png" alt="" class="logo">
						<div class="logo-type">
							<h1 class="site-title">COLLIGA</h1>
							<small class="site-description">Get Info On Gambia's Weather</small>
						</div>
					</a>

					<!-- Default snippet for navigation -->
					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item current-menu-item"><a href="index.html">Home</a></li>
							
						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>

				</div>
			</div> <!-- .site-header -->

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
								<div class="day" id="day0"></div>
								<div class="date"></div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="location"></div>
								<div class="degree">
									<div class="num"><sup>o</sup>C</div>
									<div class="forecast-icon">
										<img class="icon" src="" alt="" width=90>
									</div>	
								</div>
								<span><img src="images/icon-umberella.png" alt="">20%</span>
								<span><img src="images/icon-wind.png" alt="">18km/h</span>
								<span><img src="images/icon-compass.png" alt="">East</span>
							</div>
						</div>

						
						<div class="forecast">
							<div class="forecast-header">
								<div class="day" id="day1"></div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="forecast-icon">
									<img src="" class="iconurl1" alt="" width=48>
								</div>
								<div class="degree" id="day1-max"><sup>o</sup>C</div>
								<small id="day1-min"><sup>o</sup></small>
							</div>
						</div>
						<div class="forecast">
							<div class="forecast-header">
								<div class="day" id="day2"></div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="forecast-icon">
									<img class="iconurl2" src="" alt="" width=48>
								</div>
								<div class="degree" id="day2-max"><sup>o</sup>C</div>
								<small id="day2-min"><sup>o</sup></small>
							</div>
						</div>
						<div class="forecast">
							<div class="forecast-header">
								<div class="day" id="day3"></div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="forecast-icon">
									<img class="iconurl3" src="" alt="" width=48>
								</div>
								<div class="degree" id="day3-max"><sup>o</sup>C</div>
								<small id="day3-min"><sup>o</sup></small>
							</div>
						</div>
						<div class="forecast">
							<div class="forecast-header">
								<div class="day" id="day4"></div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="forecast-icon">
									<img src="" alt="" class="iconurl4" width=48>
								</div>
								<div class="degree" id="day4-max"><sup>o</sup>C</div>
								<small id="day4-min"><sup>o</sup></small>
							</div>
						</div>
						
						
					</div>
				</div>
			</div>
			<main class="main-content">
			

				

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

			<footer class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<form action="#" class="subscribe-form">
								<input type="text" placeholder="Enter your email to subscribe...">
								<input type="submit" value="Subscribe">
							</form>
						</div>
						<div class="col-md-3 col-md-offset-1">
							<div class="social-links">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a>
								<a href="#"><i class="fa fa-pinterest"></i></a>
							</div>
						</div>
					</div>

					<p class="colophon">Copyright 2014 Company name. Designed by Themezy. All rights reserved</p>
				</div>
			</footer> <!-- .site-footer -->
		</div>
		
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>