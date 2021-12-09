<?php require_once '_php/session.php'; // $SESSION START ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>GoFIT</title>
	<meta name="viewport" content="width=device,initial-scale=1.0">
	<link rel="icon" href="_img/gofit_logo.png" type="image/icon type">
	<link rel="stylesheet" type="text/css" href="_css/style.css">
	<link rel="stylesheet" type="text/css" href="_css/all.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="_js/func.js"></script>
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
		<img src="_img\gofit_banner.png" class="logo">

		<!-- background content: welcome -->
		<div class="welcome">
			<h3>Welcome to our</h3>
			<h1>Fitness<br>Gym Club</h1>
			<a href="register.php"><button type="button">Get Membership Now</button></a>
		</div>

		<!-- background content: links and menu -->
		<div class="sidebar">
			<span><img src="https://cdn-icons-png.flaticon.com/512/189/189790.png" class="menu"></span>
			<!-- overlay -->
			<div id="myNav" class="overlay">
				<!-- close button -->
				<a href="javascript:void(0)" class="closebtn">&times;</a>
				<!-- content -->
				<div class="overlay-content">
					<?php if(empty($_SESSION["user"])): ?>
						<a href="login.php">Login</a>
					<?php else: ?>
						<a href="profile/">Profile</a>
					<?php endif ?>
					<a href="#programs">Services</a>
					<a href="blog.php">Blog</a>
					<a href="#contacts">Contact</a>
					<a href="about.php">About</a>
				</div>
			</div>

			<!-- side items -->
			<div class="links">
				<a href=""><img src="_img/fb.png"></a>
				<a href=""><img src="_img/tw.png"></a>
				<a href=""><img src="_img/ig.png"></a>
				<img src="_img/share.png">
				<img src="_img/info.png">
				<?php if((!empty($_SESSION["level"]) && $_SESSION["level"] == 1) || empty($_SESSION["level"])): ?>
					<a href="admin/login.php"><img src="_img/admin.png"></a>
				<?php endif ?>
			</div>
		</div>
	</div>

	<!-- PROGRAMS (TITLE) -->
	<div id="programs">	
		<center>
			<h1>Services We Offered</h1><br>
			<div class="unline"></div><br>
			<h5>We believe fitness should be accessible to everyone, everywhere,<br>regardless of income or access to a gym.</h5>
		</center>
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

	<br><br>

	<center>
		<!-- PROGRAMS (SUBTITLE) -->
		<div class="offers">	
			<h1>Class, Workout From Home, Clubs</h1>
		</div>

		<!-- HIGHLIGHTS -->
		<div id="highlights">
			<center>
				<h1>GoFit Highlights</h1><br>
				<div class="unline"></div><br>
			<h5>Find what you need in your fitness journey.</h5>
			</center>
		</div>

		<div>
			<img class="mySlides" src="_img/SL1.jpg" width="90%" height="650px">
			<img class="mySlides" src="_img/SL2.jpg" width="90%" height="650px">
			<img class="mySlides" src="_img/SL3.jpg" width="90%" height="650px">
		</div>

		<script>
		var myIndex = 0;
		carousel();

		function carousel() {
			var i;
			var x = document.getElementsByClassName("mySlides");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";  
			}
			myIndex++;
			if (myIndex > x.length) { myIndex = 1 }    
			x[myIndex-1].style.display = "block";  
			setTimeout(carousel, 4000); // Change image every 4 seconds
		}
		</script>
	</center>
 
	<br>
	<br>

	<a href="Sample.php"><button >sample</button></a><!---Sample Page dont Delete button--->

	<!-- GO TOP -->
	<button id="go-top" title="Back to Top">Top</button>

	<!-- FOOTER -->
	<?php include_once("_php/footer.php") ?>
</body>
</html>
