<?php
	session_start();
	echo '<h1>$_COOKIE</h1>';
	var_dump($_COOKIE);
	echo '<h1>$_SESSION</h1>';
	var_dump($_SESSION);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test File</title>
</head>
<body>
	<form action="test_process.php" method="get" enctype="multipart/form-data">
		<input type="text" name="name" id="name">
		<input type="text" name="music" id="music">
		<input type="file" name="my_file" id="my_file">
		<input type="submit" value="Submit">
	</form>
</body>
</html>

<?php 
$_SESSION = array();
// unset($_SERVER['music']); //unset a single variable
?>