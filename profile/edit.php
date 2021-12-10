<?php
require_once('../_php/session.php'); // $SESSION START
$conn = mysqli_connect('localhost', 'root', '','gofit_db'); // DB CONNECTION

$fname = $lname = $dob = $sex = $pnum = $address = $email = $username = $password = $opassword = $npassword = $cpassword = $user_id = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$fname = test_input($_POST['fname']);
	$lname = test_input($_POST['lname']);
	$dob = test_input($_POST['birthday']);
	$sex = test_input($_POST['gender']);
	$pnum = test_input($_POST['pnumber']);
	$address = test_input($_POST['address']);
	$email = test_input($_POST['email']);
	$username = test_input($_POST['username']);
	$opassword = test_input($_POST['old-password']);
	$npassword = test_input($_POST['new-password']);
	$cpassword = test_input($_POST['confirm-password']);

	if($opassword != $_SESSION['password']) {
		echo '<script type="text/javascript">alert("Old password incorrect.");</script>';
	} elseif($opassword == $_SESSION['password']) {
		$q = "UPDATE accounts SET fname='$fname',lname='$lname' WHERE user_id='" . $_SESSION['user_id'] . "';";
		$q .= "UPDATE acc_login SET username='$username',password='$cpassword' WHERE user_id='" . $_SESSION['user_id'] . "';";
		$q .= "UPDATE acc_profile SET dob='$dob',sex='$sex',address='$address',pnum='$pnum',email='$email' WHERE user_id='" . $_SESSION['user_id'] . "'";

		$rs = mysqli_multi_query($conn, $q);

		if ($rs) {
			$_SESSION["username"] =  $username;
			require('../_php/fetch.php');
			echo '<script type="text/javascript">alert("Updated Sucessfully.");window.location.href = "index.php";</script>';
		} elseif ($rs === FALSE) {
			echo mysqli_error($conn); // use error string
		}
	}
}

function test_input($data) {
	return trim(stripslashes(htmlspecialchars($data)));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../_css/style.css">
	<link rel="icon" href="../_img/gofit_logo.png" type="image/icon type">
	<title>Edit Profile | GoFIT</title>
</head>
<body>
<div id="edit-body">
	<form class="formbox editbox" method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<div class="title">Edit Information</div>

		<input type="hidden" id="identifier" value="<?= $_SESSION['user_id'] ?>">

		<div class="user-info">
			<div class="t-box1">
				<span for="fname">First Name:</span>
				<input type="text" id="fname" name="fname" placeholder="First Name" value="<?= $_SESSION['fname']?>" required>
			</div>

			<div class="t-box1">
				<span for="lname">Last Name:</span>
				<input type="text" id="lname" name="lname" placeholder="Last Name" value="<?= $_SESSION['lname'] ?>" required>
			</div>

			<div class="birthday">
				<label for="birthday">Birthday:</label>
				<div class="birthday">
					<input type="date" id="birthday" name="birthday" name="birthday" value="<?= date('Y-m-d',strtotime($_SESSION['dob'])) ?>" required>
				</div>
			</div>

			<div class="gender">
				<span class="">Gender:</span>
				<div class="category">
					<select name="gender">
						<option value="male" <?php if($_SESSION['sex'] == 'male'): ?> selected <?php endif ?>>Male</option>
						<option value="female" <?php if($_SESSION['sex'] == 'female'): ?> selected <?php endif ?>>Female</option>
						<option value="other" <?php if($_SESSION['sex'] == 'other'): ?> selected <?php endif ?>>Other</option>
					</select>
				</div>
			</div>

			<div class="t-box1">
				<span class="details">Phone Number:</span>
				<input type="text" placeholder="Phone Number" name="pnumber" value="<?= $_SESSION['pnum']?>" required>
			</div>

			<div class="t-box2">
				<span class="details">Physical Address:</span>
				<input type="text" placeholder="Physical Address" name="address" value="<?= $_SESSION['address']?>" required>
			</div>

			<div class="t-box2">
				<span class="details">E-mail Address:</span>
				<input type="text" placeholder="E-mail Address" name="email" value="<?= $_SESSION['email']?>" required>
			</div>

			<div class="t-box2">
				<span class="details">Username:</span>
				<input type="text" placeholder="Username" name="username" value="<?= $_SESSION['user']?>" required>
			</div>

			<div class="t-box2">
				<span class="details">Enter Old Password:</span>
				<input type="password" name="old-password" placeholder="Old Password" required>
			</div>

			<div class="t-box2">
				<span class="details">Enter New Password:</span>
				<input type="password" name="new-password" placeholder="New Password" required>
			</div>

			<div class="t-box2">
				<span class="details">Confirm New Password:</span>
				<input type="password" name="confirm-password" placeholder="Confirm New Password" required>
			</div>
		</div>

		<div class="clearfix">
			<a href="index.php"><button type="button" class="cancelbtn" name="reg_user" >Cancel</button></a>
			<button type="submit" class="signupbtn" name="submit">Save</button>
		</div>
	</form>
</div>
</body>
</html>