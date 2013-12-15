<?php
	session_start();
	require_once('connection.php');
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		div {
			width: 400px;
			margin:20% auto;
			text-align: center;
		}
		input[type="text"] {
			width: 300px;
			padding: 5px;
		}
		input[type="submit"] {
			float: right;
			margin-right: 45px;
			font-size: 1.2em;
		}
		div p {
			padding:40px;
			background-color: red;
			font-size: 1.2em;
		}
	</style>
</head>
<body>
	<div>
		<?php 
			if (isset($_SESSION['error'])) {
				foreach ($_SESSION['error'] as $name => $value) {
					echo '<p>' . $value . '</p>';
				}
			}
			?>
		<h2>Please enter your email address</h2>
		<form action="process.php" method="post">
			<input type="hidden" name="action" value="email_validation">
			<input type="text" name="email" id="email" placeholder="Enter email address">
			<br>
			<input type="submit" value="Submit">
		</form>
	</div>
</body>
</html>

<?php $_SESSION = array() ?>