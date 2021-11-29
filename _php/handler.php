<?php
require_once('session.php');

if(isset($_GET["a"])) {
	if($_GET["a"] == "user") {
		userLogin();
	} elseif ($_GET["a"] == "admin") {
		adminLogin();
	} elseif ($_GET["a"] == "logout") {
		logout();
	}
}

function userLogin() {
	$username = $_POST['username'];
	$password = $_POST['password'];

	if($username == "" && $password = "") {
	   header('location:login.php'); //check
	} 

	$conn = mysqli_connect('localhost', 'root', '','fitness_gym_club');
	$sql = "SELECT * FROM register WHERE username = '$username' AND pword = '$password'";
	$result = mysqli_query($conn, $sql);

	$row = mysqli_fetch_array($result);

	//PHP ver. causes warning
	if($row['username'] == $username && $row['pword'] == $password) {
	   $_SESSION["user"] =  $row['username'];
	   echo '<script type="text/javascript">'; 
	   echo 'window.location.href = "../profile.php";';
	   echo '</script>';
	} else {
	   echo '<script type="text/javascript">'; 
	   echo 'alert("Invalid Credentials");'; 
	   echo 'window.location.href = "../login.php";';
	   echo '</script>';
	}
}

function adminLogin() {
	$username = $_POST['username'];
	$password = $_POST['password'];

	if($username == "" && $password = "") {
	   header('location:login.php'); //check
	}

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
	} else {
	   echo '<script type="text/javascript">'; 
	   echo 'alert("Invalid Credentials");'; 
	   echo 'window.location.href = "../admin/login.php";';
	   echo '</script>';
	}
}

function logout() {
	session_destroy();
	echo '<script type="text/javascript">';
	echo 'window.location.href = "../index.php";';
	echo '</script>';
}
?>