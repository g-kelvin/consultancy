<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>DATA CONSULTANCY LIMITED</title>
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
			<h1 id="colorlib-logo"><a href="index.html">DATA CONSULTANCY</a></h1>
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li><a href="index.html">Home</a></li><br>
					<li><a href="services.html">Services</a></li><br>
					<li><a href="about.html">About</a></li><br>
					<li><a href="work.html">Products</a></li><br>
					<li><a href="contact.html">Contact</a></li><br>
					<li><a href="blog/vacancies.html">Career</a></li><br>
                     <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Media<i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="blog/blog.html" style="color: black">Blog</a></li>
					        <li><a href="gallery.html" style="color: black">Gallery</a></li>
                        </ul>
                    </li><br>
					 <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sign Up<i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="register.html" style="color: black">Register</a></li>
					        <li><a href="login.html" style="color: black">login</a></li>
                        </ul>
                    </li>
					

				</ul>
			</nav>

			<div style="color: white">
				<p><small>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                 Copyright &copy;<script>document.write(new Date().getFullYear());</script>
			</div>
		</aside>

		<div id="colorlib-main">

			<div class="colorlib-contact">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
							<h2 class="colorlib-heading">messages</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5">
							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<?php 

							$conn=mysqli_connect('localhost','datacons_user','FlamigoKelvin@890','datacons_main_db');
							if (!$conn){
								echo "error ";//no connection
							}
							else {//all working well
								$qry = "SELECT * FROM feedback ORDER BY id DESC  LIMIT 3";
								$res=mysqli_query($conn,$qry);
								if(mysqli_num_rows($res)>0){
									while ($row= mysqli_fetch_assoc($res)){
										echo "Name= ". $row['name']. "<br>"."Telephone Number= ".$row['telephone']. "<br>"."Email= ".$row['email']. "<br>"."Subject= ".$row['subject']. "<br>"."Message= ".$row['message']."<br>"."Time Posted =".$row['daten']."  "."<a href=\"deleteuser.php\">Delete</a>"."<hr/> <br><br>";
										
									}
								}
							}?>
						</div>
						</div>

						<div class="col-md-7 col-md-push-1">
							<div class="row">
								<div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInLeft">
									<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
							<h2 class="colorlib-heading">Users</h2>
						</div>
									
									<?php 

							$conn=mysqli_connect('localhost','root','kelvingauki','consultancy');
							if (!$conn){
								echo "error ";//no connection
							}
							else {//all working well
								$qry = "SELECT * FROM register ORDER BY id DESC LIMIT 3 ";
								$res=mysqli_query($conn,$qry);
								if(mysqli_num_rows($res)>0){
									while ($row= mysqli_fetch_assoc($res)){
										echo "Telephone Number= ".$row['telephone']. "<br>"."Email= ".$row['email']. "<br>"."Password= ".$row['password']."  "."<a href=\"deleteuser.php\">Delete</a>"."<hr/> <br><br>";
										
										
									}
								}
							}


						 ?>

								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- <div id="map"></div>	 -->

			
		</div>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Sticky Kit -->
	<script src="js/sticky-kit.min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	
	
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>

