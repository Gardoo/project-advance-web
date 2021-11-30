<?php
require_once('session.php'); // $SESSION START
require_once('connect.php'); // DB CONNECTION

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

$row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM register WHERE username = '" . $_SESSION["user"] . "'"));

foreach ($row as $key => $value) {
	$dt = new user_data($key, $value);
}
?>