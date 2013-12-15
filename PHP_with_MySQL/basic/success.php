<?php
	session_start();
	require_once('connection.php');

	if (isset($_POST['remove']) && $_POST['remove'] == 'delete') {
		$id = $_POST['mid'];
		$person = $_SESSION['users_id'];
		$query = "DELETE FROM messages 
				  WHERE id = $id
				  AND users_id = ";

		mysqli_query($connection, $query);
	}
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
		div.container {
			width: 400px;
			margin:15% auto 0 auto;
		}
		input[type="text"] {
			width: 300px;
			padding: 5px;
		}
		/*input[type="submit"] {
			float: right;
			margin-right: 45px;
			font-size: 1.2em;
		}*/
		div.success {
			padding:40px;
			background-color: green;
			font-size: 1.2em;
			text-align: center;
		}
		li {
			margin:10px 0;
		}
		li form {
			float: right;
		}
	</style>
</head>
<body>
	<div class="container">
			<?php 
				if (isset($_SESSION['email'])) {
					echo '<div class="success"><p> The email address you entered ' . $_SESSION['email'] . ' is a VALID email address! Thank you!</p></div>';
				}
				if (isset($_POST['remove'])) {
					echo '<div class="success"><p>' . $_POST['email'] . ' has been removed.</p></div>';
				}
			?>
			<p style="text-decoration:underline;">Email Addresses Entered:</p>
		<ul>
			<?php
				$query = "SELECT * FROM emails";
				$results = mysqli_query($connection, $query);
				while ($row = mysqli_fetch_assoc($results)) 
				{
				?>
					<li> <?= $row['email_address'] ?> 
						<form action="<?= htmlentities($_SERVER['PHP_SELF']) ?>" method="post">
							<input type="hidden" name="remove" value="delete">
							<input type="hidden" name="id" value=" <?= $row['id'] ?>">
							<input type="hidden" name="email" value="<?= $row['email_address'] ?>">
							<input type="submit" value="Delete">
						</form>
					</li>
				<?php
				}
			?>
		</ul>
		<button onclick="window.location.assign('index.php');">Enter Another Email</button>
	<div>
</body>
</html>

<?php session_destroy(); ?>