<?php
	if(!isset($_SESSION) || session_id() == '' || session_status() === PHP_SESSION_NONE) {
		session_start();
	}
?>