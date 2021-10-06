<?php

session_start();

$username = "";
$email	  = "";
$errors = array();

$db = mysqli_connect('localhost','root','',fitnes_gym_club) or die("could not connect")

//Register user

$firstname = mysqli_real_escape_string($db, $_POST['fname']);
$lname = mysqli_real_escape_string($db,$_POST['lname']);
$birthday = mysqli_real_escape_string($db,$_POST['birthday']);
$gender = mysqli_real_escape_string($db,$_POST['gender']);
$address = mysqli_real_escape_string($db,$_POST['address']);
$email = mysqli_real_escape_string($db,$_POST['email']);
$pnumber = mysqli_real_escape_string($db,$_POST['pnumber']);
$pword = mysqli_real_escape_string($db,$_POST['password']);
$cpword = mysqli_real_escape_string($db,$_POST['confirm_pword']);

//validation

if(empty($username){array_push($errors,"username is required")});
	if(empty($email){array_push($errors,"Email is required")});
		if(empty($pword){array_push($errors,"Password is required")});
			if($pword != $cpword){array_push($errors, "Password do not match")};



// check existing user
			$user_check_query = "SELECT * FROM user WHERE email = '$email' = '$email' limit 1 	";
			$results =mysql_query($db,$email_check_query);
			$user = mysqli_fetch($result);


if($user){

	if($user['email'] == $email){array_push($errors,'Email Already exist');}
}

//Register no errors
if(count($errors) == 0){

	$pword = password_hash($pword, PASSWORD_DEFAULT);
	$query = "INSERT INTO user (email,fname,lname,pnumber,pword,cpword,birthday,gender,address) VALUES ($email,$fname,$lname,$pnumber,$pword,$cpword,$birthday,$gender,$address)";

		mysqli_query($db,$query);
		$_SESSION['email'] = $email;
		$_SESSION['success'] = "You are now login"

		header('location index.php');
}





















?>