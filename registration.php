<?php include('config.php')?>
<!DOCTYPE html>
<html>

	<head>
		<title>Registration Form</title>
		<link rel="icon" href="img/gofit_logo.png" type="image/icon type">
		<link rel="stylesheet" href="css/orf.css">
	</head>
<body>

	<form method="post" action="register.php"></form>
	<div class="position">

	<div class="mform">
	
	<div class="title">Online Registration Form</div>
	
	<form method="post" action="registration.php">
	
	<div class="user-info">
	
			<div class="t-box1">
				<span class="details">First Name:</span>		
				<input type="text" placeholder="First Name" name="fname" required>
			</div>
			
			<div class="t-box1">
				<span class="details">Last Name:</span>
				<input type="text" placeholder="Last Name" name="lname" required>
			</div>
			
<<<<<<< Updated upstream
			
			<form >
				<label for="birthday">Birthday</label>
				<input type="date" id="birthday" name="birthday" name="birthday" required="">


			</form>
=======
			<div class="t-box1">
				<span class="details">Username</span>		
				<input type="text" placeholder="Username" name="username" required>
			</div>
		
		<div class="t-box1">
				<label for="birthday">Birthday</label>
				<input type="date" id="birthday" name="birthday" name="birthday" required="">

</div>
			
>>>>>>> Stashed changes
			
			
			
			
			<div class="gender">
			<span class="">Gender:</span>
			<div class="category"  >
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
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>

	</form>
	</div>
	</div>
</body>
</html>
