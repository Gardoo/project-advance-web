<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login | GoFIT</title>
	<meta name="viewport" content="width=device,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="_css/style.css">
</head>
<body>
	<form class="home container" method="post" action="_php/user_handler.php"">
		<div class="content">
			<img src="_img/admin.png">
			<h4>Member Login</h4>

			<input type="username" name="username" placeholder="Username" required>
			<input type="password" name="password" placeholder="Password" required>
			<button type="submit" name="login">Login</button>
			<h4>Not a member? <a href="register.php">Sign Up</a></h4>
		</div>
	</form>
</body>
</html>