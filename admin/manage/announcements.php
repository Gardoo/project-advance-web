<?php
require_once('../../_php/session.php'); // $SESSION START
$conn = mysqli_connect('localhost', 'root', '','gofit_db'); // DB CONNECTION

function printData($row) {
	$str = "<tr>";
	$str .= "<td>" . $row[0] . "</td>";
	$str .= "<td>" . ucwords($row[1]) . "</td>";
	$str .= "<td>" . ucwords($row[2]) . "</td>";
	$str .= "<td>" . ucwords($row[3]) . "</td>";
	$str .= "<td>" . $row[4] . "</td>";
	$str .= "</tr>";
	return $str;
}

function printBranches($row) {
	$str = '<option value="' . $row[0] . '">';
	$str .= ucwords($row[1]);
	$str .= "<option>";
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
	<title>Manage Announcements | GoFIT</title>
	<link rel="stylesheet" type="text/css" href="../../_css/style.css">
</head>
<body>
	<div class="admin">
		<!--SIDE NAVBAR-->
		<?php require '../../_php/sidebar.php' ?>

		<div class="container">
			<h2>Announcements</h2>
			<form id="create_ann" method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
				<label for="title">Title:</label>
				<input type="text" id="title" name="title" placeholder="Title" required>
				
				<label for="description">Description:</label>
				<textarea name="description" rows="3"></textarea>
				
				<label for="to">Send to:</label>
				<select id="to" name="to">
					<option value="ALL">...</option>
					<option value="ALL">All</option>
					<?php
						$rs = mysqli_query($conn, "SELECT branch_id,location FROM branches WHERE status='active' ORDER BY location");

						if ($rs) {
							while ($row = mysqli_fetch_array($rs)) {
								echo printBranches($row);
							}
						}
					?>
				</select>
				<button type="submit" name="create">Create</button>
			</form>
			<div class="data">
				<table id="announcements">
					<tr>
						<th>Date created<span></span></th>
						<th>Sent to</th>
						<th>Title</th>
						<th>Description</th>
						<th>Announcer</th>
					</tr>
					<?php
						$rs = mysqli_query($conn, "SELECT date_created,to,title,description,username FROM announcements JOIN acc_login ON announcements.user_id = acc_login.user_id ORDER BY date_created");

						if ($rs) {
							while ($row = mysqli_fetch_array($rs)) {
								echo printData($row);
							}
						}
					?>
				</table>
			</div>
		</div>
	</div>
</body>
</html>