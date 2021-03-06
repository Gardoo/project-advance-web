<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>FITNESS</title>
	<meta name="viewport" content="width=device,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="js/func.js"></script>
</head>
<body>
	<!-- VIEWPORT HOME -->
	<div class="home" id="bg-woman">
		<!--cannot modify (bottom wave)-->
		<div class="custom-shape-divider-bottom-1632050936">
			<svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
		        <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
		    </svg>
		</div>

		<!-- logo -->
		<img src="img\gofit_banner.png" class="logo">

		<!-- background content: welcome -->
		<div class="welcome">
			<h3>Welcome to our</h3>
			<h1>Fitness<br>Gym Club</h1>
			<a href="registration.php"><button type="button" class="btn">Get Membership Now</button></a>
		</div>

		<!-- background content: links and menu -->
		<div class="sidebar">
			<span onclick="openNav()"><img src="https://cdn-icons-png.flaticon.com/512/189/189790.png" class="menu"></span>
			<!-- overlay -->
			<div id="myNav" class="overlay">
				<!-- close button -->
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<!-- content -->
				<div class="overlay-content">
					<a href="user_login.php">Login</a>
					<a href="#mid">Services</a>
					<a href="#">Blog</a>
					<a href="#">Class</a>
					<a href="#">Contact</a>
					<a href="#">About</a>
				</div>
			</div>

			<!-- side items -->
			<div class="links">
				<a href=""><img src="img/fb.png"></a>
				<a href=""><img src="img/tw.png"></a>
				<a href=""><img src="img/ig.png"></a>
				<img src="img/share.png">
				<img src="img/info.png">
				<a href="login.php"><img src="img/admin.png"></a>
			</div>
		</div>
	</div>

	<!-- PROGRAMS (TITLE) -->
	<div class="programs">	
		<h1>Services We Offered</h1><br>
		<h5>We believe fitness should be accessible to everyone, everywhere,<br>regardless of income or access to a gym.</h5>
	</div>

	<!-- PROGRAMS (OFFERS) -->
	<div class="wrapper">
		<div class="card">
			<img src="https://www.inlifehealthcare.com/wp-content/uploads/2016/11/stock-footage-aerobics-class-stepping-together-led-by-instructor-and-lifting-dumbbells-at-the-gym.jpg">
			<div class="info">
				<h1>Class</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>
			</div>
		</div>
		
		<div class="card">
			<img src="https://www.phillymag.com/wp-content/uploads/sites/3/2020/04/at-home-workout-getty-main.jpg">
			<div class="info">
				<h1>Workout From Home</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>
			</div>
		</div>
		
		<div class="card">
			<img src="https://www.history.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cfl_progressive%2Cq_auto:good%2Cw_1200/MTY0OTE4ODAzMDQwMzE0Njg1/yoga-gettyimages-1142820079-promo.jpg">
			<div class="info">
				<h1>Clubs</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>
			</div>
		</div>
	</div>

	<!-- PROGRAMS (SUBTITLE) -->
	<div class="offers">	
		<h1>Class, Workout From Home, Clubs</h1>
	</div>

	<!-- CLASSES -->
	<div class="classes">
		<div class="class-info">
			<h2>Attend Free<br>Class</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore<br> et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation <br>ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure <br>dolor in reprehenderit in <br>voluptate velit esse
			cillum dolore eu fugiat nulla pariatur.</p>
		</div>
		<img src="https://i.ytimg.com/vi/FL_fAd_K720/maxresdefault.jpg">	
	</div>

	<!-- GO TOP -->
	<button id="go-top" title="Back to Top">Top</button>

	<!-- FOOTER -->
	<div id="botbar">
		<div class="logo">
			LOGO
		</div>
		<div>
			<div class="div-bot">SUBSCRIPTIONS</div>
			<ul>
				<li class="bot"><a href="">MEMBERSHIP</a></li>
				<li class="bot"><a href="">CLASSES</a></li>
			</ul>
		</div>
		<div>
			<div class="div-bot">COMMUNITY</div>
			<ul>
				<li class="bot"><a href="">SOCIAL MEDIA</a></li>
				<li class="bot"><a href="">EVENTS</a></li>
			</ul>
		</div>
		<div>
			<div class="div-bot">ABOUT</div>
			<ul>
				<li class="bot"><a href="">FITNESS</a></li>
				<li class="bot"><a href="">OUR TEAM</a></li>
			</ul>
		</div>
	</div>
</body>
</html>
