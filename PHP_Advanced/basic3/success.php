<?php
	session_start();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		* {
			font-family: sans-serif;
		}
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
			background-color: green;
			font-size: 1.2em;
		}
	</style>
</head>
<body>
	<div>
		<?php 
			echo '<p> The email address you entered ' . $_SESSION['email'] . ' is a VALID email address! Thank you!</p>';
		?>
	</div>
</body>
</html>

<?php //$_SESSION = array() ?>