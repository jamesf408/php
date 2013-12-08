<?php
	session_start();
	if (isset($_POST['action']) && $_POST['action'] = 'numfun') 
	{	
		foreach ($_POST as $name => $value) {
			if (empty($value)) 
			{
				$_SESSION['error'][$name] = 'Please fill out ' . $name . ' field.';
			}
			else 
			{
				switch ($name) {
					case 'num1':
					case 'num2':
					case 'series':
						if (!is_numeric($value)) {
							$_SESSION['error'][$name] = "please only use numbers in " . $name;
						}
					break;
				}
			}
			$_SESSION['num1'] = $_POST['num1'];
			$_SESSION['num2'] = $_POST['num2'];
			$_SESSION['series'] = $_POST['series'];
		}
	}
header('Location: index.php');
exit;
	
?>