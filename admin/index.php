<?php require_once '../_php/session.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Admin</title>
	<meta name="viewport" content="width=device,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../_css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Koh+Santepheap:wght@100&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/09cccaa74d.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="admin">
		<!--SIDE NAVBAR-->
		<?php require '../_php/sidebar.php'; ?>

		<div class="container">
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
			<div class="announcement">
				<h3><a href=""><i class="fas fa-plus-circle"></i> Add Announcement </a></h3>
				<h3><a href=""><i class="fas fa-plus-circle"></i> Add Event </a></h3>
			</div>

			<!--ADMIN LOGS-->
			<div class="admin-log">
				<h1>Admin Log</h1>
			</div>
		</div>
	</div>
</body>
</html>