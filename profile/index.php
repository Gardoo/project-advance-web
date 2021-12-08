<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>FITNESS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../_css/profile.css">
	<link rel="icon" href="../_img/gofit_logo.png" type="image/icon type">

</head>
<body>
	<!--HEADER (NOTIF, PROFILE)-->
	<div id="sec-left">
		<div id="user-card">
			<div id="photo" class="clearfix"></div>
			<div id="top-card">
				<h3><?= $_COOKIE['fname'] . " " . $_COOKIE['lname'] ?> (<?= $_COOKIE['username'] ?>)</h3>
				<h4><?= ucfirst($_COOKIE['status']) ?></h4>
				<p>(Until dd/MMMM/yyyy) <button id="renewbtn">Renew</button></p>
			</div>
			<div>
				<div><b>Address: </b><?= $_COOKIE['address'] ?></div>
				<div><b>E-mail: </b><?= $_COOKIE['email'] ?></div>
				<div><b>Contact #: </b><?= $_COOKIE['pnum'] ?></div>
			</div>
			<div><button id="editbtn">Edit Information</button></div>
		</div>
<h2>Class Schedule</h2>
		<div id="calendar">
			<div id="weeklysched">
				  <button id="daybtn" class="days" onclick="currentDiv(1)">Sun</button>
				  <button id="daybtn" class="days" onclick="currentDiv(2)">Mon</button> 
				  <button id="daybtn" class="days" onclick="currentDiv(3)">Tue</button> 
				  <button id="daybtn" class="days" onclick="currentDiv(4)">Wed</button>
				  <button id="daybtn" class="days" onclick="currentDiv(5)">Thu</button> 
				  <button id="daybtn" class="days" onclick="currentDiv(6)">Fri</button> 
				  <button id="daybtn" class="days" onclick="currentDiv(7)">Sat</button>   
			</div>

			<div>
				  <img class="mySlidesDate" src="../_img/SL1.jpg" width="100%" height="100%">
				  <img class="mySlidesDate" src="../_img/SL2.jpg" width="100%" height="100%">
				  <img class="mySlidesDate" src="../_img/SL3.jpg" width="100%" height="100%">
				  <img class="mySlidesDate" src="../_img/SL1.jpg" width="100%" height="100%">
				  <img class="mySlidesDate" src="../_img/SL2.jpg" width="100%" height="100%">
				  <img class="mySlidesDate" src="../_img/SL3.jpg" width="100%" height="100%">
				  <img class="mySlidesDate" src="../_img/SL2.jpg" width="100%" height="100%">
			</div>

			<div id="weeklysched">
				   <button id="ctrlbtn" onclick="plusDivs(-1)">❮❮ Prev</button>
				   <button id="ctrlbtn" onclick="">Current Day</button>
				   <button id="ctrlbtn" onclick="plusDivs(1)">Next ❯❯</button>
			  </div>
		</div>

	</div> <!-- END DIV SEC-LEFT -->

	<div id="sec-mid">
		<div id="monthly-class">
			<div id="top-class">
				<h3>CLUBNAME</h3>
				<h4>Class Name</h4>
			</div>
			<div id="register-class">
				<button id="registerbtn">Registered</button>
				<p>1 member registered</p>
			</div>
			<p>&emsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			<h4>Video Lessons</h4>
			<div id="monthly-dow">
				<div><span>1</span></div>
				<p>Video Description or link ?</p>
				<div><span>2</span></div>
				<p>Video Description or link ?</p>
				<div><span>3</span></div>
				<p>Video Description or link ?</p>
				<div><span>4</span></div>
				<p>Video Description or link ?</p>
				<div><span>5</span></div>
				<p>Video Description or link ?</p>
				<div><span>6</span></div>
				<p>Video Description or link ?</p>
				<div><span>7</span></div>
				<p>Video Description or link ?</p>
			</div>
		</div>
		
		<div id="monthly-class">
			<div id="top-class">
				<h3>CLUBNAME</h3>
				<h4>Class Name</h4>
			</div>
			<div id="register-class">
				<button id="registerbtn">Registered</button>
				<p>1 member registered</p>
			</div>
			<p>&emsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			<h4>Video Lessons</h4>
			<div id="monthly-dow">
				<div><span>1</span></div>
				<p>Video Description or link ?</p>
				<div><span>2</span></div>
				<p>Video Description or link ?</p>
				<div><span>3</span></div>
				<p>Video Description or link ?</p>
				<div><span>4</span></div>
				<p>Video Description or link ?</p>
				<div><span>5</span></div>
				<p>Video Description or link ?</p>
				<div><span>6</span></div>
				<p>Video Description or link ?</p>
				<div><span>7</span></div>
				<p>Video Description or link ?</p>
			</div>
		</div>

	</div> <!-- END DIV SEC-MID -->

	<div id="sec-right">
		<h2>Announcements</h2>
			<div id="announcements">
				<div>
					<img class="mySlidesAn" src="../_img/SL1.jpg" width="100%" height="100%">
					<img class="mySlidesAn" src="../_img/SL2.jpg" width="100%" height="100%">
					<img class="mySlidesAn" src="../_img/SL3.jpg" width="100%" height="100%">
				</div>
			</div>

		<div id="clubs">
			<h2>Clubs</h2>
				<div class="card-club">
					<h3>BODYBUILDING CLUB</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<p>0 members</p>
					<div class="clearfix"><a href="">View</a></div>
				</div>
				<div class="card-club">
					<h3>DANCING CLUB</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<p>0 members</p>
					<div class="clearfix"><a href="">View</a></div>
				</div>
				<div class="card-club">
					<h3>SWIMMING CLUB</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<p>0 members</p>
					<div class="clearfix"><a href="">View</a></div>
				</div>
		</div>

		
	</div> <!-- END DIV SEC-RIGHT -->

		<script>

		// JS in Announcement

			var myIndex = 0;
			carousel();

			function carousel() {
			var i;
			var x = document.getElementsByClassName("mySlidesAn");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";  
			}
			myIndex++;
			if (myIndex > x.length) { myIndex = 1 }    
			x[myIndex-1].style.display = "block";  
			setTimeout(carousel, 20000); // Change image every 20 seconds
		}

		// JS in Weekly Calendar

			var slideIndex = 1;
			showDivs(slideIndex);

			function plusDivs(n) {
			  showDivs(slideIndex += n);
			}

			function currentDiv(n) {
			  showDivs(slideIndex = n);
			}

			function showDivs(n) {
			  var a;
			  var x2 = document.getElementsByClassName("mySlidesDate");
			  var dots = document.getElementsByClassName("days");
			  if (n > x2.length) {slideIndex = 1}    
			  if (n < 1) {slideIndex = x2.length}
			  for (a = 0; a < x2.length; a++) {
			    x2[a].style.display = "none";  
			  }
			  for (a = 0; a < dots.length; a++) {
			    dots[a].className = dots[a].className.replace(" crntbtn", "");
			  }
			  x2[slideIndex-1].style.display = "block";  
			  dots[slideIndex-1].className += " crntbtn";
			}

		</script>

</body>
</html>