<?php
	session_start();
	require_once('connection.php');
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP and SQL - Intermediate 2</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<div class="header">
	</div>
	<div class="register">
		<?php
			if (isset($_SESSION['message'])) {
				echo '<p class="success">' . $_SESSION['message'] . '</p>';
			}
		?>
		<h2>Register</h2>
		<?php
			if (isset($_SESSION['error'])) {
				echo '<div class=errors>';
				foreach ($_SESSION['error'] as $value) {
					echo '<span class="error">' . $value .'</span>';
				}
				echo '</div>';
			}	
		?>
		<form action="process.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="action" value="register">
			<div class="inputs">
				<div>
					<span></span> 
					<label for="first_name">First Name</label>
					<input type="text" name="first_name" id="first_name" placeholder="John" required 
						<?php 
							if (isset($_SESSION['error']))
							{
								echo 'value="' . $_SESSION['first_name'] . '"';
							} 
						?>
					>
				</div>
				<div>
					<span></span>
					<label for="last_name">Last Name</label>
					<input type="text" name="last_name" id="last_name" placeholder="Doe" required
					<?php 
							if (isset($_SESSION['error']))
							{
								echo 'value="' . $_SESSION['last_name'] . '"';
							} 
						?>
					>
				</div>
				<div>
					<span></span>
					<label for="email">Email</label>
					<input type="email" name="email" id="email" placeholder="youremail@mydomain.com" required
					<?php 
							if (isset($_SESSION['error']))
							{
								echo 'value="' . $_SESSION['email'] . '"';
							} 
						?>
					>
				</div>
				<div>
					<span></span>
					<label for="Password">Password</label>
					<input type="password" name="password" id="password" placeholder="password" required>
				</div>
				<div>
					<span></span>
					<label for="Confirm Password">Confirm Password</label>
					<input type="password" name="confirm_password" id="confirm_password" placeholder="confirm password" required>
				</div>
				<div>
					<span></span>
					<label for="birthdate">Birthdate</label>
					<input type="date" name="birthdate" id="birthdate"
					<?php 
							if (isset($_SESSION['error']))
							{
								echo 'value="' . $_SESSION['birthdate'] . '"';
							} 
						?>
					>
				</div>
			</div>
			<input type="submit" value="Register">
		</form>
		<div class="clear"></div>
	</div>
	<div class="login">
		<?=  (isset($_SESSION['login_error']) ? '<div class="errors"><span class="errors">' . $_SESSION['login_error']['message'] . '</span></div>' : '') ?>
		<form action="process.php" method="post">
			<input type="hidden" name="action" value="login">
			<label for="email">Login</label>
			<input type="text" name="email" id="email" placeholder="Your email address">
			<label for="password">Password</label>
			<input type="password" name="password" id="password">
			<input type="submit" value="Login">
		</form>
	</div>
</body>
</html>
<?php
	session_destroy();
?>