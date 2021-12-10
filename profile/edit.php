<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="../_img/gofit_logo.png" type="image/icon type">
	<title>Edit Profile | GoFIT</title>
</head>

<style>
	
#reg-body {
	font-family: sans-serif;
	position: relative;
	height: calc(100vh - 20px);
	padding: 10px;
	color: black;
	display: block;
	justify-content: center;
	align-items: center;
}

/*------------ Form ------------*/
.formbox {
	position: absolute;
	max-width: 580px;
	left: 300px;
	padding: 10px 40px;
	background: ghostwhite;
	border: 2px solid lightgray;
	border-radius: 25px;
}

/*------------ elements ------------*/
.title::before {
	position: absolute;
	height: 4px;
	width: 100%;
	content: ' ';
	left: 0;
	bottom: 0;
	background: lightgray;
}

.title {
	position: relative;
	padding-bottom: 10px;
	text-align: center;
	font-size: 40px;
	font-weight: 500;
}

.user-info {
	margin: 20px 0 12px 0;
	/*top: 10; */
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
}

.t-box1 {
	margin-bottom: 10px;
	width: 47%;
}

.t-box2 {
	margin-bottom: 10px;
	width: 100%;
}

[class^="t-box"] > input {
	height: 30px;
	width: 100%;
	padding-left: 15px;
	outline: none;
	font-size: 16px;
	border-bottom-width: 3px;
	border: 3px solid #ccc;
	border-radius: 10px;
	background: whitesmoke;
	transition: all 0.3s ease;
}

[class^="t-box"] > input:focus{
	border-color: #9900ff;
}

[class^="t-box"] > .details {
	display: block;
	font-weight: 500;
	margin-bottom: 5px;
}

.birthday > .birthday, 
.gender > .category { /*??? & fix nested*/
	height: 30px;
	width: 100%;
	margin: 8px 1px;
	display: flex;
	justify-content: space-between;
}

button[class*="btn"] {
	padding: 14px 20px;
	margin: 5px 0;
	color: white;
	border: none;
	border-radius: 25px;
	cursor: pointer;
	opacity: 0.9;
}

button[class*="btn"]:hover {
	opacity: 0.7;
}

.cancelbtn {
	float: left;
	width: 49%;
	background-color: #ff3333;
}

.savebtn {
	float: right;
	width: 49%;
	background-color: #9900ff;
}


</style>


<body>
<div id="reg-body">
	<form class="formbox" method="post">
		<div class="title">Edit Information</div>

		<div class="user-info">

		<div class="t-box1">
			<span for="fname">First Name:</span>
			<input type="text" id="fname" name="fname" placeholder="First Name" required>
		</div>

		<div class="t-box1">
			<span for="lname">Last Name:</span>
			<input type="text" id="lname" name="lname" placeholder="Last Name" required>
		</div>

		<div class="birthday">
				<label for="bdate">Birthdate:</label>
			<div class="birthday">
				<input type="date" id="bdate" name="bdate" min="" max="">
			</div>
		</div>

		<div class="gender">
				<label>Gender:</label>
			<div class="category">
				<input type="radio" id="male" name="gender" value="Male">
				<label for="male">Male</label>
				<input type="radio" id="female" name="gender" value="Female">
				<label for="female">Female</label>
			</div>
		</div>

		<div class="t-box1">
			<span for="phone">Phone Number:</span>
			<!--ADD BEFORE FOR +63-->
  			<input type="tel" id="phone" name="phone" pattern="[0-9]{3} [0-9]{3} [0-9]{4}" placeholder="999 123 4567">
  		</div>

		<div class="t-box2">
			<span for="address">Physical Address:</span>
			<input type="text" id="address" name="address">
		</div>

		<div class="t-box2">	
			<span for="city">City:</span>
			<input type="text" id="city" name="city">
		</div>

		<div class="t-box2">
			<span for="email">E-mail Address:</span>
  			<input type="email" id="email" name="email">
		</div>

		<div class="t-box2">
			<span for="user">Username:</span>
			<input type="text" id="user" name="user" placeholder="Username" required>
		</div>

		<div class="t-box2">
			<span for="user">Enter Old Password:</span>
			<input type="password" id="" name="password" placeholder="Password" required>
		</div>

		<div class="t-box2">
			<span for="user">Enter New Password:</span>
			<input type="password" id="" name="newpass" placeholder="New Password" required>
		</div>

		<div class="t-box2">
			<span for="user">Confirm New Password:</span>
			<input type="password" id="" name="confirm_newpass" placeholder="Confirm New Password" required>
		</div>

	</div>

		<div class="">
			<button type="button" class="cancelbtn">Cancel</button>
			<button type="button" class="savebtn">Save</button>
		</div>

	</form>
</div>
</body>
</html>