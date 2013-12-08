<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Validation</title>
	<style>
		form {
			width: 500px;
		}
	</style>
</head>
<body>
	<?php
		if(isset($_SESSION['error'])) {
			foreach ($_SESSION['error'] as $name => $message) {
				?>
				<p><?=$message ?></p>
				<?php
			}
		}
	else if (isset($_SESSION['success_message']))
	{
		echo '<p>' . $_SESSION['success_message'];
	}
	?>
	<form action="process_form.php" method="post" enctype="multipart/form-date">
		<input type="hidden" name="action" value="register">
		<input type="text" name="first_name" id="first_name" placeholder="enter first name">
		<input type="text" name="last_name" id="last_name" placeholder="enter last name">
		<input type="text" name="email" id="email" placeholder="enter email">
		<input type="password" name="password" id="password" placeholder="password">
		<input type="text" name="birthdate" id="birthdate" placeholder="enter birthdate MM/DD/YYYY">
		<input type="file" name="file" id="file">
		<input type="submit" value="Submit">

	</form>
</body>
</html>
<?php
	$_SESSION = array();
?>