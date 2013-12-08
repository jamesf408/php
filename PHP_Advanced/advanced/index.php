<?php
	session_start();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Advanced - Advanced</title>
	<style>
		.maincontainer {
			width: 370px;
			margin: 15% auto;

		}
		.container {
			width: 370px;
			margin: 0 auto;
			padding: 5px;
			background: #cccccc;
		}
		.text .fields input {
			float: right;
			clear: both;
			width: 200px;
			border:1px solid gray;
			padding: 2px 5px;
		}
		.text .fields input, .text .fields label {
			line-height: 2em;
		}
		.action {
			margin-top: 20px;
		}
		div.error {
			position: relative;
			width: 100%;
			text-align: right;
		}
		div#errors {
			position: relative;
			left: 5px;
			background-color: red;
			color: white;
			padding: 10px 0;
			margin-bottom: 10px;
		}
		.center {
			text-align: center;
		}
		.error {
			color: red;
			font-size: .8em;
		}
		.clear {
			clear: both;
		}
	</style>
</head>
<body>
	<div class="maincontainer">
		<?php 
			if (isset($_SESSION['error'])) 
			{
				echo '<div id="errors">';
				echo '<p class="center">Please correct the information below.</p>';
				echo '<p class="center">There are ' . count($_SESSION['error']) . ' errors below.'; 
				echo '</div>';
			}
			?>
		<div class="container">
			<form action="process.php" method="post" enctype="multipart/form-data" accept-charset="utf-8">
				<input type="hidden" name="action" value="form_validation">
				<div class="text">
					<div class="fields">
						<?php 
							if (isset($_SESSION['error']['first_name'])) 
							{
								echo '<div class="error">First Name ' . $_SESSION['error']['first_name'] . '</div>';
							}
						?>
						<label for="first_name">First Name: </label>
						<input type="text" name="first_name" id="first_name" placeholder="John"
						<?php
							if (isset($_SESSION['error']['first_name'])) 
							{
								echo $_SESSION['classerror'];
							}
							else if (isset($_SESSION['error']))
							{
							echo 'value="' . $_SESSION['first_name'] . '"';
							}
						?>
						>
					</div>
					<div class="fields">
						<?php 
							if (isset($_SESSION['error']['last_name'])) 
							{
								echo '<div class="error">Last Name ' . $_SESSION['error']['last_name'] . '</div>';
							}

						?>
						<label for="last_name">Last Name: </label>
						<input type="text" name="last_name" id="last_name" placeholder="Doe"
							<?php
								if (isset($_SESSION['error']['last_name'])) 
								{
									echo $_SESSION['classerror'];
								}
								else if (isset($_SESSION['error']))
								{
									echo 'value="' . $_SESSION['last_name'] . '"';
								}
							?>
						>
					</div>
					<div class="fields">
						<?php 
							if (isset($_SESSION['error']['email'])) 
							{
								echo '<div class="error">Email ' . $_SESSION['email'] .  $_SESSION['error']['email'] . '</div>';
							}
						?>
						<label for="email">Email: </label>
						<input type="text" name="email" id="email" placeholder="youremail@domain.com"
							<?php
								if (isset($_SESSION['error']['email'])) 
								{
									echo $_SESSION['classerror'];
								}
								else if (isset($_SESSION['error']))
								{
									echo 'value="' . $_SESSION['email'] . '"';
								}
							?>
						>
					</div>
					<div class="fields">
						<?php 
							if (isset($_SESSION['error']['password'])) 
							{
								echo '<div class="error">Password ' . $_SESSION['error']['password'] . '</div>';
							}
						?>
						<label for="password">Password: </label>
						<input type="password" name="password" id="password" placeholder="Enter a password"
							<?php
								if (isset($_SESSION['error']['password'])) 
								{
									echo $_SESSION['classerror'];
								}
								else if (isset($_SESSION['error']))
								{
									echo 'value="' . $_SESSION['password'] . '"';
								}
							?>
						>
					</div>
					<div class="fields">
						<?php 
							if (isset($_SESSION['error']['confirm_password'])) 
							{
								echo '<div class="error">Confirm Password ' . $_SESSION['error']['confirm_password'] . '</div>';
							}
						?>
						<label for="confirm_password">Confirm Password: </label>
						<input type="password" name="confirm_password" id="confirm_password" placeholder="Re enter a password"
							<?php
								if (isset($_SESSION['error']['confirm_password'])) 
								{
									echo $_SESSION['classerror'];
								}
							?>
						>
					</div>
					<div class="fields">
						<?php 
							if (isset($_SESSION['error']['birthdate'])) 
							{
								echo '<div class="error">' . $_SESSION['error']['birthdate'] . '</div>';
							}
						?>
						<label for="birthdate">Birthdate: </label>
						<input type="text" name="birthdate" id="birthdate" placeholder="MM/DD/YYYY"
							<?php
								if (isset($_SESSION['error']['birthdate'])) 
								{
									echo $_SESSION['classerror'];
								}
								else if (isset($_SESSION['error']))
								{
									echo 'value="' . $_SESSION['birthdate'] . '"';
								}
							?>
						>
					</div>
				</div>
				<div class="clear"></div>
				<div class="fields">
					<?php 
						if (isset($_SESSION['file']['error'])) {
							echo '<div class="error">' . $_SESSION['error']['file'] . '</div>';
						}
					?>
					<label for="file">Profile Picture: </label>
					<input type="file" name="file" id="profile_picture">
				</div>
				<div class="action">
					<input type="submit" value="Submit">
					<input type="reset" value="Reset Form">
				</div>
			</form>
		</div>
	</div>
</body>
</html>
<?php
	session_destroy();
?>