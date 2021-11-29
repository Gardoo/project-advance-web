<?php
   session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Admin</title>
	<meta name="viewport" content="width=device,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
	<link href="https://fonts.googleapis.com/css2?family=Koh+Santepheap:wght@100&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/09cccaa74d.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="admin">
		<!--SIDE NAVBAR-->
		<div class="side">
			<img src="https://icon-library.com/images/d8e850139c_3510.png">
			<h1>Administrator</h1>
			<a href="#"><i class="fas fa-columns"></i> 	Dashboard</a>
			<a href="#"><i class="fas fa-blog"></i> 	Blog</a>
			<a href="#"><i class="far fa-calendar"></i> 	Calendar</a>
			<a href="index.php"><i class="fas fa-home"></i>	Homepage</a>
			<a href="#"><i class="fas fa-archive"></i> 	Archive</a>
			<a href="#" onclick="manage()"><i class="fas fa-gifts"></i> 	Manage Account</a>
			<a href="index.php"><i class="fas fa-sign-out-alt"></i> 	Signout</a>
		</div>
		<!--CONTENTS TOTAL-->
		<div class="admin-content">
			<h1>Dashboard</h1><br>

			<div class="content">
				<h3>Total Members</h3>
				<p>0</p>
				<h2><a href="#">Click For more info</a></h2>
			</div>

			<div class="content">
				<h3>Class Attendance</h3>
				<p>0</p>
				<h2><a href="#">Click For more info</a></h2>
			</div>

			<div class="content">
				<h3>Club Members</h3>
				<p>0</p>
				<h2><a href="#">Click For more info</a></h2>
			</div>
		</div>
		<!--CREATIONS-->
		<div class="announcement" >
			<h3><i class="fas fa-plus-circle"></i> Add Announcement </h3>
			<h3><i class="fas fa-plus-circle"></i> Add Event </h3>
		</div>
		<!--ADMIN LOGS-->
		<div class="admin-log">
			<h1>Admin Log</h1>
		</div>
		<!--ADMIN CTRL ????? ASK ?????-->
		<div class="admin-settings">
			<h1>Manage Settings</h1>
			<div class="manage-content">
				<div class="settings">
					<h2>Change Password</h2>
				</div>

				<div class="settings">
					<h2>Add Admin Account</h2>
				</div>

				<div class="settings">
					<h2>Change Username</h2>
				</div>
			</div>
		</div>
	</div>
</body>
</html>