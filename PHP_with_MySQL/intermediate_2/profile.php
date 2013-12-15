<?php
	session_start();
	require_once('connection.php');
	$query = "SELECT first_name, last_name, email, birthdate
			  FROM users
			  WHERE id = " . $_GET['id'];
	$result = mysqli_query($connection, $query);
	$row = mysqli_fetch_assoc($result);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Profile Page</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<div class="header">
		<p>
			<?php
				if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == $_GET['id']) {
					echo 'Welcome ' . $row['first_name'] . ' ' . $row['last_name'] . '. <a href="process.php?logout=1">Logout</a>';
				} else if (!isset($_SESSION['user_id'])) {
					echo '<a href="index.php">Login</a>';
				}
			?>
		</p>	
	</div>
	<div class="profile">
		<h1><?= $row['first_name'] . ' ' . $row['last_name'] ?></h1>
		<p><a href="mailto:<?= $row['email'] ?>"><?= $row['email'] ?></a></p>
		<p>Birthday: <?= date('M d, Y', strtotime($row['birthdate'])) ?></p>
	</div>
</body>
</html>