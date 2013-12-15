<?php
	define('DB_HOST', 'jafdojowall.db.6033877.hostedresource.com');
	define('DB_USER', 'jafdojowall');
	define('DB_PASS', 'Cortez3110!');
	define('DB_NAME', 'jafdojowall');

	$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	if (mysqli_connect_errno()) {
		echo 'There was a problem connecting to the database';
		echo mysqli_connect_errno();
	}

?>