<?php
	session_start();
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
			header('Location: index.php');
			}
		if (empty($_SESSION['error'])) 
		{
			header('Location: success.php');
		}	
	}
	// var_dump($_SESSION);
?>