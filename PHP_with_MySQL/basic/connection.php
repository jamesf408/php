<?php
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', 'root');
	define('DB_NAME', 'email');

	$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	if (mysqli_connect_errno()) {
		echo 'Could not connect to the database';
	}
?>