<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Software Technology</title>
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
			<h1 id="colorlib-logo"><a href="https://softwaretechn.co.ke">Software Technology</a></h1>
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li><a href="https://softwaretechn.co.ke">Home</a></li><br>
					<li><a href="/about">About</a></li><br>
					<li><a href="/services">Services</a></li><br>
					<li><a href="/work">Products</a></li><br>
					<li><a href="/contact">Contact</a></li><br>
					<li><a href="/blog/vacancies">Career</a></li><br>
                      <li><a href="/gallery">Gallery</a></li><br>
					 <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sign Up<i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="/register" style="color: black">Register</a></li>
					        <li><a href="/login" style="color: black">login</a></li>
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
			<div class="colorlib-services">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<h2 class="colorlib-heading">WE GOT YOU</h2>
						</div>
					</div>
					<?php  
				$conn=mysqli_connect('localhost','datacons_user','FlamigoKelvin@890','datacons_main_db');
				if(!$conn){
					echo "not connected";
				}
				else{
					$email=$_POST['email'];
					$password=hash('sha256',$_POST['password']);
					$sql=mysqli_query($conn,"SELECT * FROM register WHERE email='info@dataconsultancy.co.ke' AND password='$password'");
					$res=mysqli_num_rows($sql);
					if($res<1){
						echo "<h3>please check your inputs and try again<br>Wrong Password or Email!!</h3>";
						// header('location:register.html');
						
					}
					else{
						$x= date('Y-m-d H:i:s'); 
						echo "<H3>DATE AND TIME NOW:  ".$x ."<br></H3>";
						echo "congratulation, login successful <br> <H4s> click to view the Admin Page <a href=\" users.php\">Admin</a></H4> ";
						



					}
				}
			?>

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
	
	
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>

