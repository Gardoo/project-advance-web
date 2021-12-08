<?php require_once('../../_php/session.php'); // $SESSION START ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Manage Accounts | GoFIT</title>
	<link rel="stylesheet" type="text/css" href="../../_css/style.css">
</head>
<body>
	<div class="admin">
		<!--SIDE NAVBAR-->
		<?php require '../../_php/sidebar.php' ?>

		<div class="container">
			<h2>Manage Accounts</h2>
			<div class="data">
				<table id="accounts">
					<tr>
						<th>Username<span></span></th>
						<th>Name<span></span></th>
						<th>Status</th>
						<th>Address</th>
						<th>Branch</th>
						<th>E-mail</th>
						<th>Date Joined<span></span></th>
						<th>Level</th>
						<th class="action">Actions</th>
					</tr>

					<?php
						$conn = mysqli_connect('localhost', 'root', '','gofit_db'); // DB CONNECTION

						function printData($row) {
							$str = "<tr>";
							$str .= "<td>" . $row[0] . "</td>";
							$str .= "<td>" . ucwords($row[1]) . " " . ucwords($row[2]) . "</td>";
							$str .= "<td>" . ucwords($row[3]) . "</td>";
							$str .= "<td>" . ucwords($row[4]) . "</td>";
							$str .= "<td></td>";
							$str .= "<td>" . $row[5] . "</td>";
							$str .= "<td>" . $row[6] . "</td>";
							$str .= "<td>" . $row[7] . "</td>";
							$str .= "<td><button>Change Level</button><button class='dabtn'>Deactivate</button></td>";
							$str .= "</tr>";
							return $str;
						}

						$filter = array("","","");
						$str = implode(',',$filter);

						$rs = mysqli_query($conn, "SELECT username,fname,lname,status,address,email, date_joined,level FROM accounts JOIN acc_profile ON accounts.user_id = acc_profile.user_id JOIN acc_login ON acc_profile.user_id = acc_login.user_id ORDER BY '$str'");

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