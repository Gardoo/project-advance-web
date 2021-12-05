<?php
require_once('session.php'); // $SESSION START
$conn = mysqli_connect('localhost', 'root', '','gofit_db'); // DB CONNECTION

final class user_data {
	function __construct(private $name, private $value) {
		$this->$name = $name;
		$this->$value = $value;
		$this->create();
	}

	private function create() {
		return setcookie($this->name, $this->value, time() + 86400, "/");
	}

	public function delete() {
		return setcookie($this->$name, null, -1, "/");
	}
}

$row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT fname,lname,status,dob,sex,address,pnum,email,username FROM accounts JOIN acc_profile ON accounts.user_id = acc_profile.user_id JOIN acc_login ON acc_profile.user_id = acc_login.user_id WHERE username = '" . $_SESSION["user"] . "'")); // fix to make ALL EXCEPT

foreach ($row as $key => $value) {
	$dt = new user_data($key, $value);
}
?>