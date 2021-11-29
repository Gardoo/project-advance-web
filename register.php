<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="_css/orf.css">
	<link rel="icon" href="_img/gofit_logo.png" type="image/icon type">
</head>
<body>
<div class="position">
	<div class="mform">
		<!--
			=======================================================
			===================NO USERNAME INPUT===================
			=======================================================
			========SEPARATE ACC DETAILS AND PERSONAL INFO=========
			=======================================================
		-->
		<form method="post" action="_php/config.php" >
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
		
				<label for="birthday">Birthday</label>
				<input type="date" id="birthday" name="birthday" name="birthday" required="">		
				
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
				<button type="submit" id="signUp" class="signupbtn" name="submit" onclick="signup">Sign Up</button>
			</div>
		</form>
	</div>
</body>
</html>
