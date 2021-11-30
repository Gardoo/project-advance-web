<?php 
require_once('_php/session.php'); // $SESSION START
require_once('_php/connect.php'); // DB CONNECTION

$username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = test_input($_POST['username']);
	$password = test_input($_POST['password']);

	$is_enter = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM register WHERE username = '$username' AND pword = '$password'"));

	if($is_enter) {
		$_SESSION["user"] =  $username;
		require('_php/fetch.php');
		echo '<script type="text/javascript">window.location.href = "profile/";</script>';
	} elseif ($is_enter === 0) {
		echo '<script type="text/javascript">alert("Invalid Credentials");</script>'; // use error string
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
	<title>Login | GoFIT</title>
	<meta name="viewport" content="width=device,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="_css/style.css">
</head>
<body>
	<form class="home container" method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<div class="content">
			<img src="_img/admin.png">
			<h4>Member Login</h4>

			<input type="username" name="username" placeholder="Username" <?php if(empty($username)): ?> autofocus <?php endif ?> value="<?= $username ?>" required>
			<input type="password" name="password" placeholder="Password" <?php if(!empty($username)): ?> autofocus <?php endif ?> required>
			<button type="submit" name="login">Login</button>
			<h4>Not a member? <a href="register.php">Sign Up</a></h4>
		</div>
	</form>
</body>
</html>