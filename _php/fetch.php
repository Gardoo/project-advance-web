<?php
require_once('session.php');

function getData() {
	$con = mysqli_connect('localhost', 'root', '','fitness_gym_club');
	$sql = "SELECT * FROM register WHERE username = '" . $_SESSION["user"]. "'";
	$rs = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($rs);
	return $row;
}
?>