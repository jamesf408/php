<?php
	session_start();
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Success!</title>
	<style>
		div {
			width: 350px;
			margin:15% auto;
			padding: 20px;
			background-color: green;
			color: white;
			font-size: 1.3em;
			text-align: center;

		}
	</style>
</head>
<body>
	<div>
		<?php 
			echo '<p>Welcome ' . $_SESSION['first_name'] . '!<br>You have successfully created a profile.</p>'; 
			echo '<img src="' . $_SESSION['file_path'] . '" width="300" alt="' . $_SESSION['file_name'] . '">';

		?>

	</div>
</body>
</html>