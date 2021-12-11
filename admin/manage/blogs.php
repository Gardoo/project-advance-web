<?php
require_once('../../_php/session.php'); // $SESSION START
$conn = mysqli_connect('localhost', 'root', '','gofit_db'); // DB CONNECTION
$dir = 'Manage Blogs';

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
	<?php require '../../_php/header.php' ?>
</head>
<body>
	<div class="admin">
		<!--SIDE NAVBAR-->
		<?php require '../../_php/sidebar.php' ?>

		<div class="container">
			<h2>Manage Blogs</h2>
			<form id="create_blog" method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
				<label for="title">Title:</label>
				<input type="text" id="title" name="title" placeholder="Title" required>
				
				<label for="content">Content:</label>
				<textarea name="content" rows="4"></textarea>
				
				<button type="submit" name="create">Publish</button>
			</form>
			<div class="data">
				<table id="blogs">
					<tr>
						<th>Image Path</th>
						<th>Title</th>
						<th>Date<span></span></th>
						<th>Author</th>
						<th class="action">Actions</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</body>
</html>