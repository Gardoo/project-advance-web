<?php
require_once('../../_php/session.php'); // $SESSION START
$conn = mysqli_connect('localhost', 'root', '','gofit_db'); // DB CONNECTION

function printData($row) {
	$str = "<tr>";
	$str .= "<td>" . $row[0] . "</td>";
	$str .= "<td>" . $row[1] . "</td>";
	$str .= "<td>" . $row[2] . "</td>";
	$str .= "<td>" . $row[3] . "</td>";
	$str .= "<td></td>";
	$str .= "</tr>";
	return $str;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../_css/style.css">
	<title>Manage Branches | GoFIT</title>
</head>
<body>
	<div class="admin">
		<!--SIDE NAVBAR-->
		<?php require '../../_php/sidebar.php' ?>

		<div class="container">
			<h2>Manage Branches</h2>
			<form id="create_bran" method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
				<label for="location">Location:</label>
				<input type="text" id="location" name="location" placeholder="Location" required>

				<label for="address">Address:</label>
				<textarea name="address" rows="3"></textarea>
				
				<button type="submit" name="create">Create</button>
			</form>
			<div class="data">
				<table id="goals">
					<tr>
						<th>Location<span></span></th>
						<th>Address</th>
						<th>Status</th>
						<th>Date Added<span></span></th>
						<th>Actions</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</body>
</html>