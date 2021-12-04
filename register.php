<?php 
$conn = mysqli_connect('localhost', 'root', '','gofit_db'); // DB CONNECTION

$fname = $lname = $dob = $sex = $pnum = $address = $email = $username = $password = $cpassword = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$fname = test_input($_POST['fname']);
	$lname = test_input($_POST['lname']);
	$dob = test_input($_POST['birthday']);
	$sex = test_input($_POST['gender']);
	$pnum = test_input($_POST['pnumber']);
	$address = test_input($_POST['address']);
	$email = test_input($_POST['email']);
	$username = test_input($_POST['username']);
	$password = test_input($_POST['password']);
	$cpassword = test_input($_POST['confirm_password']);

	$rs = mysqli_multi_query($conn, 
		"INSERT INTO accounts(fname,lname,date_joined) VALUES('$fname','$lname', '" . date("Y-m-d H:i:s") . "');" . 
		"INSERT INTO acc_login(username,password,level,user_id) SELECT '$username', '$cpassword', 3, accounts.user_id FROM accounts;" .
		"INSERT INTO acc_profile(dob,sex,address,pnum,email,user_id) SELECT '". date("Y-m-d H:i:s", strtotime($dob)) . "', '$sex', '$address', '$pnum', '$email', accounts.user_id FROM accounts");

	if ($rs) {
		echo '<script type="text/javascript">alert("Registered Sucessfully.");window.location.href = "index.php";</script>';
	} elseif ($rs === FALSE) {
		echo mysqli_error($conn); // use error string
	}
}

function test_input($data) {
	return trim(stripslashes(htmlspecialchars($data)));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="_css/style.css">
	<link rel="icon" href="_img/gofit_logo.png" type="image/icon type">
</head>
<body>
<div id="reg-body">
	<form class="formbox" method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<div class="title">Online Registration Form</div>
		
		<div class="user-info">
			<div class="t-box1">
				<span class="details">First Name:</span>		
				<input type="text" placeholder="First Name" name="fname" required>
			</div>
	
			<div class="t-box1">
				<span class="details">Last Name:</span>
				<input type="text" placeholder="Last Name" name="lname" required>
			</div>
	
			<div class="birthday">
				<label for="birthday">Birthday</label>
				<div class="birthday">
					<input type="date" id="birthday" name="birthday" name="birthday" required>
				</div>
			</div>
			
			<div class="gender">
				<span class="">Gender:</span>
				<div class="category">
					<select name="gender">
						<option value="none" selected>Gender</option>
						<option value="male">Male</option>
						<option value="female">Female</option>
						<option value="other">Other</option>
					</select>
				</div>
			</div>
	
			<div class="t-box1">
				<span class="details">Phone Number:</span>
				<input type="text" placeholder="Phone Number" name="pnumber" required>
			</div>
	
			<div class="t-box2">
				<span class="details">Physical Address:</span>
				<input type="text" placeholder="Physical Address" name="address" required>
			</div>

			<div class="t-box2">
				<span class="details">E-mail Address:</span>
				<input type="text" placeholder="E-mail Address" name="email" required>
			</div>

			<div class="t-box2">
				<span class="details">Username:</span>
				<input type="text" placeholder="Username" name="username" required>
			</div>

			<div class="t-box2">
				<span class="details">Password:</span>
				<input type="password" placeholder="Password" name="password" required>
			</div>

			<div class="t-box2">
				<span class="details">Confirm Password:</span>
				<input type="password" placeholder="Confirm Password" name="confirm_password" required>
			</div>
		</div>

		<div class="clearfix">
			<a href="index.php"><button type="button" class="cancelbtn" name="reg_user" >Cancel</button></a>
			<button type="submit" id="signUp" class="signupbtn" name="submit">Sign Up</button>
		</div>
	</form>
</div>
</body>
</html>
