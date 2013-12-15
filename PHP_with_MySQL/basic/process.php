<?php
	session_start();
	require_once('connection.php');

	if(isset($_POST['action']) && $_POST['action'] == 'email_validation') 
	{
		foreach ($_POST as $name => $value) 
		{
			if (isset($_POST['email'])) {
				$_SESSION['email'] = $_POST['email'];
			}
			if (empty($value)) 
			{
				$_SESSION['error'][$name] = $name . ' cannot be blank.';
			} 
			else 
			{
				switch ($name) 
				{
					case 'email':
						if(!filter_var($value, FILTER_VALIDATE_EMAIL)) 
						{
							$_SESSION['error'][$name] = $value . ' is not a valid email';
						}
						break;
				}
			}
			}
		if (empty($_SESSION['error'])) 
		{
			$query = "INSERT INTO emails (email_address, created_at, updated_at)
					  VALUES ('" . mysqli_real_escape_string($connection, $_POST['email']) . "', NOW(), NOW())";

			mysqli_query($connection, $query);
			header('Location: success.php');
			exit;
		}
		else
		{
			header('Location: index.php');
			exit;
		}
	}
	// var_dump($_SESSION);
?>