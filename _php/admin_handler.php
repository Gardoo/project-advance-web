<?php
require_once('session.php');

$username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = $_POST['username'];
	$password = $_POST['password'];

	if($username == "" && $password = "") {
		header('location:../admin/login.php'); //check
	}

	//================================
	//========== VALIDATE ============
	//================================

	$conn = mysqli_connect('localhost', 'root', '','fitness_gym_club');   
	$sql = "SELECT * FROM admin_account WHERE username = '$username' AND password = '$password'";
	$result = mysqli_query($conn, $sql);

	$row = mysqli_fetch_array($result);

	//PHP ver. causes warning
	if($row['username'] == $username && $row['password'] == $password) {
		$_SESSION["user"] =  $row['username'];
		echo '<script type="text/javascript">'; 
		echo 'window.location.href = "../admin/index.php";';
		echo '</script>';
	} elseif($row['username'] != $username || $row['password'] != $password) {
		echo '<script type="text/javascript">'; 
		echo 'alert("Invalid Credentials");'; 
		echo 'window.location.href = "../admin/login.php";';
		echo '</script>';
	}
}
?>