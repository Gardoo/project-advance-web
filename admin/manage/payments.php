<?php
require_once('../../_php/session.php'); // $SESSION START
$conn = mysqli_connect('localhost', 'root', '','gofit_db'); // DB CONNECTION
$dir = 'Manage Transactions';

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
			<h2>Manage Transactions</h2>
			<form id="create_trans" method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
				<label for="username">Username:</label>
				<input type="text" id="username" name="username" placeholder="Username" required>
				
				<label for="months">Subscription:</label>
				<select id="months" name="months" onchange="">
					<option value="none" selected>...</option>
					<option value="1">1 month</option>
					<option value="3">3 months</option>
					<option value="6">6 months</option>
					<option value="12">1 year</option>
				</select>
				<!--USE AJAX-->
				<label for="enddate">End date:</label>
				<input type="date" id="enddate" name="enddate" value="<?= date('m/d/Y H:i:s', strtotime('+')) ?>" readonly>
				<!--USE AJAX-->
				<label for="payment">Payment:</label>
				<input type="text" id="payment" name="payment" value="" readonly>

				<button type="submit" name="create">Create Transaction</button>
			</form>
			<div class="data">
				<table id="payments">
					<tr>
						<th>Transaction Number</th>
						<th>Username</th>
						<th>Date</th>
						<th>End Date</th>
						<th>Payment</th>
						<th class="action">Actions</th>
					</tr>

					<?php
						$rs = mysqli_query($conn, "SELECT trans_id,user_id,trans_date,until,payment FROM payments ORDER BY trans_date DESC");

						while ($row = mysqli_fetch_array($rs)) {
							echo printData($row);
						}
					?>
				</table>
			</div>
		</div>
	</div>
</body>
</html>

