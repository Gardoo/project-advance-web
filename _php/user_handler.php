<?php
require_once('session.php');

$username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = $_POST['username'];
	$password = $_POST['password'];
}

if($username == "" && $password = "") {
	header('location:login.php'); //check
}

//================================
//========== VALIDATE ============
//================================

$conn = mysqli_connect('localhost', 'root', '','fitness_gym_club');
$sql = "SELECT * FROM register WHERE username = '$username' AND pword = '$password'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result);

//PHP ver. causes warning
if($row['username'] == $username && $row['pword'] == $password) {
$_SESSION["user"] =  $row['username'];
	echo '<script type="text/javascript">'; 
	echo 'window.location.href = "../profile/index.php";';
	echo '</script>';
} else {
	echo '<script type="text/javascript">'; 
	echo 'alert("Invalid Credentials");'; 
	echo 'window.location.href = "../login.php";';
	echo '</script>';
}
?>