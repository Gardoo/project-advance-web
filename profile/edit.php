<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Profile | GoFIT</title>
</head>
<body>
	<form method="post">
		<div>
			<label for="fname">First Name</label>
			<input type="text" id="fname" name="fname" placeholder="First Name" required>
			
			<label for="lname">Last Name</label>
			<input type="text" id="lname" name="lname" placeholder="Last Name" required>
		</div>

		<div>
			<label for="bdate">Birthdate</label>
			<input type="date" id="bdate" name="bdate" min="" max="">

			<label>Gender</label>
			<input type="radio" id="male" name="gender" value="Male">
			<label for="male">Male</label>
			<input type="radio" id="female" name="gender" value="Female">
			<label for="female">Female</label>
		</div>

		<div>
			<label for="phone">Phone Number</label>
			<!--ADD BEFORE FOR +63-->
  			<input type="tel" id="phone" name="phone" pattern="[0-9]{3} [0-9]{3} [0-9]{4}" placeholder="999 123 4567">
			
			<label for="address">Physical Address</label>
			<input type="text" id="address" name="address">
			<label for="city">City</label>
			<input type="text" id="city" name="city">

			<label for="email">E-mail Address</label>
  			<input type="email" id="email" name="email">
		</div>

		<div>
			<label for="user">Username</label>
			<input type="text" id="user" name="user" placeholder="Username" required>
			<button>Change Password</button>
		</div>
		<button>Cancel</button><button>Save</button>
	</form>
</body>
</html>