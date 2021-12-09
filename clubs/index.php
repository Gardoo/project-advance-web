<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device,initial-scale=1.0">
	<link rel="icon" href="_img/gofit_logo.png" type="image/icon type">
	<link rel="stylesheet" type="text/css" href="../_css/style.css">
	<title>CLUBS | GoFIT</title>
</head>
<body>
	<!--HEADER (NOTIF, PROFILE)-->
	<div id="clubs">
		<h1>GoFit Gym Clubs</h1>
		<div class="c-container">
			<div class="card">
				<img src="../_img/pic101.png" alt="Jane">
				<div class="container">
					<h2>Sample Club</h2>
					<p>Club Description</p>
					<center>
						<p><button class="button">Join Club</button></p>
					</center>
				</div>
			</div>
			<?php
				$conn = mysqli_connect('localhost', 'root', '','gofit_db'); // DB CONNECTION

				function printData($row) {
					$str = '<div class="card">';
					$str .= '<img src="../_img/pic101.png" alt="Jane">';
					$str .= '<div class="container">';
					$str .= '<h2>' . $row[0] . '</h2>';
					$str .= '<p>' . $row[1] . '</p>';
					$str .= '<center><p><button class="button">Join Club</button></p></center>';
					$str = '</div></div>';
					return $str;
				}

				$rs = mysqli_query($conn, "SELECT name,description FROM clubs WHERE status='active' ORDER BY date_created");

				while ($row = mysqli_fetch_array($rs)) {
					echo printData($row);
				}
			?>
	</div>
</body>
</html>

