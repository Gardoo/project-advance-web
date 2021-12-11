<?php
require_once '../_php/session.php';
$dir = 'Admin Dashboard';

/**if(!empty($_SESSION["user"]) && $_SESSION["level"] != 1) {
	echo '<script type="text/javascript">alert("Unathorized access."); window.location.href = "../";</script>';
} elseif (empty($_SESSION["user"])) {
	echo '<script type="text/javascript">window.location.href = "login.php";</script>';
}**/ // UPDATE DB FIRST!!!

$conn = mysqli_connect('localhost', 'root', '','gofit_db'); // DB CONNECTION

// GET TOTAL: MEMBERS
$q = "SELECT COUNT(*) FROM acc_login JOIN accounts ON acc_login.user_id = accounts.user_id WHERE level=3 AND status='active';";
$q .= "SELECT COUNT(*) FROM clubs WHERE status='active';";
$q .= "SELECT COUNT(*) FROM branches WHERE status='active';";

if (mysqli_multi_query($conn, $q)) {
	do {
		$result = mysqli_store_result($conn); // store current result
		if ($result) {
			$row[] = mysqli_fetch_row($result);
		} else if ($result === FALSE) {
			echo mysqli_error($conn); // use error string
			break;
		}
	} while (mysqli_next_result($conn)); // current = next result
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php require '../_php/header.php' ?>
	<link href="https://fonts.googleapis.com/css2?family=Koh+Santepheap:wght@100&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/09cccaa74d.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="admin">
		<!--SIDE NAVBAR-->
		<?php require '../_php/sidebar.php' ?>

		<div class="container">
			<!--CONTENTS TOTAL-->
			<div class="admin-content">
				<h1>Dashboard</h1><br>

				<div class="content">
					<h3>Total Members</h3>
					<p><?php foreach($row[0] as $key => $value) print_r($value) ?></p>
					<h2><a href="#">Click For more info</a></h2>
				</div>

				<div class="content">
					<h3>Registered Clubs</h3>
					<p><?php foreach($row[1] as $key => $value) print_r($value) ?></p>
					<h2><a href="#">Click For more info</a></h2>
				</div>

				<div class="content">
					<h3>Total Branches</h3>
					<p><?php foreach($row[2] as $key => $value) print_r($value) ?></p>
					<h2><a href="#">Click For more info</a></h2>
				</div>
			</div>

			<!--CREATIONS-->
			<div class="announcement">
				<h3><a href="manage/announcements.php"><i class="fas fa-plus-circle"></i> Add Announcement</a></h3>
			</div>

			<!--ADMIN LOGS-->
			<div class="admin-log">
				<h1>Admin Log</h1>
			</div>
		</div>
	</div>
</body>
</html>