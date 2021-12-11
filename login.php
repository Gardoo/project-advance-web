<?php 
require_once('_php/session.php'); // $SESSION START
$dir = 'Log-in';

if(!empty($_SESSION["user"])) {
	echo '<script type="text/javascript">window.location.href = "profile/";</script>';
}

$conn = mysqli_connect('localhost', 'root', '','gofit_db'); // DB CONNECTION

$username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = test_input($_POST['username']);
	$password = test_input($_POST['password']);

	$is_enter = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM acc_login WHERE username = '$username' AND password = '$password'"));

	if($is_enter) {
		$_SESSION["username"] =  $username;
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
	<?php require '_php/header.php' ?>
</head>
<body>
	<form class="home u-container" method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
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