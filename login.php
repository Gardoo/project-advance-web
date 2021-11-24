<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<form action="admin_login.php" method="post">
		<div class="popup" id="form">
			<div class="popup-content">
				<img src="img/admin.png">
				<h4>Admin Login</h4>
				<input type="username" name="username" placeholder="username" required>
				<input type="password" name="password" placeholder="password" required>
				<button type="submit" name="login">Login</button>
			</div>
		</div>
	</form>
</body>
</html>