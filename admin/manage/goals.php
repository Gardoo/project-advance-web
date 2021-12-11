<?php
$dir = 'Manage Goals';
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
			<h2>Manage Goals</h2>
			<form id="goto_date" method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
				Goal:<textarea>input text</textarea>
				Enter Date:<textarea>input text</textarea>
				<button type="submit" name="create">Create</button>
			</form>
			<div class="data">
				<table id="goals">
					<tr>
						<th>Day<span></span></th>
						<th>Goal</th>
						<th>Actions</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</body>
</html>