<?php include(config.php);?>
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
				<input type="text" placeholder="First Name" required>
			</div>
			
			<div class="t-box1">
				<span class="details">Last Name:</span>
				<input type="text" placeholder="Last Name" required>
			</div>
			
			
			<form >
				<label for="birthday">Birthday</label>
				<input type="date" id="birthday" name="birthday">


			</form>
			
			
			
			
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
				<input type="text" placeholder="Phone Number" required>
			</div>
			
			<div class="t-box2">
				<span class="details">Physical Address:</span>
				<input type="text" placeholder="Physical Address" required>
			</div>

			<div class="t-box2">
				<span class="details">E-mail Address:</span>
				<input type="text" placeholder="E-mail Address" required>
			</div>

			<div class="t-box2">
				<span class="details">Password:</span>
				<input type="password" placeholder="Password" required>
			</div>

			<div class="t-box2">
				<span class="details">Confirm Password:</span>
				<input type="password" placeholder="Confirm Password" required>
			</div>

	</div>

    <div class="clearfix">
      <a href="index.php"><button type="button" class="cancelbtn" name="register" >Cancel</button></a>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>

	</form>
	</div>
	</div>
</body>
</html>
