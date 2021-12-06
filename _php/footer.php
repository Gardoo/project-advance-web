<div id="botbar">
	<!--LEFT SIDE-->
	<div class="logo">
		<div></div>
	</div>

	<!--MIDDLE-->
	<?php if(!empty($_SESSION["user"])): ?>
		<ul>
			<li><a href="profile/">Profile</a></li>
			<li><a href="_php/logout.php">Log-out</a></li>
		</ul>
	<?php endif ?>
	<ul>
		<?php if(empty($_SESSION["user"])): ?>
			<li><a href="login.php">Log-in</a></li>
		<?php endif ?>
		<li><a href="">Services</a></li>
		<li><a href="">Blog</a></li>
		<li><a href="">Class</a></li>
		<li><a href="">About</a></li>
	</ul>

	<!--RIGHT SIDE-->
	<div id="contacts">
		<h3>Contact Us</h3>
		<ul>
			<li>Caloocan Branch</li>
			<li>286 Kabatuhan Rd Deparo Caloocan City</li>
			<li>+63 912 887 8239</li>
			<li>floresjake021600@gmail.com</li>
		</ul>
		<ul>
			<li>BRANCH</li>
			<li>Address</li>
			<li>Number</li>
			<li>E-mail</li>
		</ul>
		<ul>
			<li>BRANCH</li>
			<li>Address</li>
			<li>Number</li>
			<li>E-mail</li>
		</ul>
	</div>
</div>
<div id="copy">
	Copyright &copy; <?= date("Y") . "." ?> GoFIT. All rights reserved.
</div>