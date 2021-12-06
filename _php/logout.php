<?php
header("Location: http://localhost/project-advance-web/");

require_once 'session.php'; // $SESSION START
session_destroy();

foreach ($_COOKIE as $key => $value) {
	unset($_COOKIE[$key]);
	setcookie($key, FALSE, 1, "/", "localhost");
}
?>