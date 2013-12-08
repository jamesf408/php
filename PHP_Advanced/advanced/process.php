<?php
	session_start();

	if (isset($_POST['action']) && $_POST['action'] == 'form_validation') 
	{
		$classerror = '';
		foreach ($_POST as $name => $value) 
		{
			$_SESSION['first_name'] = $_POST['first_name'];
			$_SESSION['last_name'] = $_POST['last_name'];
			$_SESSION['email'] = $_POST['email'];
			$_SESSION['password'] = $_POST['password'];
			$_SESSION['confirm_password'] = $_POST['confirm_password'];
			$_SESSION['birthdate'] = $_POST['birthdate'];
			$birthdate = $_POST['birthdate'];
			switch ($name) 
			{
				case 'first_name':
				case 'last_name':
					if (empty($value)) 
					{
						$_SESSION['error'][$name] = 'cannot be blank.';
					} 
					if (is_numeric($value)) 
					{
						$_SESSION['error'][$name] = 'cannot contain numbers.';
					}
					break;
				case 'email':
					if (empty($value)) 
					{
						$_SESSION['error'][$name] = 'cannot be blank.';
					}
					else if (!filter_var($value, FILTER_VALIDATE_EMAIL)) 
					{
						$_SESSION['error'][$name] = $value . ' is an invalid email.';
					}
					break;
				case 'password':
					if (empty($value)) 
					{
						$_SESSION['error'][$name] = 'cannot be blank.';
					}
					else if (strlen($value) < 7) 
					{
						$_SESSION['error'][$name] = 'should be at least 7 characters.';
					}
					break;
				case 'confirm_password':
					if (empty($value)) {
						$_SESSION['error'][$name] = 'cannot be blank.';
					}
					else if ($value !== $_POST['password']) 
					{
						$_SESSION['error'][$name] = 'doesn\'t match password.';
					}
					break;
				case 'birthdate':
					if (!empty($value)) 
					{
						$birthdate = explode('/',$value);
						// var_dump($birthdate);
	                    if(!checkdate($birthdate[0], $birthdate[1], $birthdate[2]))
	                    {
	                        $_SESSION['error'][$name] = $name . ' is not a valid date';
	                    }
					}	
					break;
			}
		}
		if($_FILES['file']['error'] > 0)
	        {
	            $_SESSION['error']['file'] = "Error on file upload Return Code: ".$_FILES['file']['error'];
	        }
	        else
	        {
	            $directory = 'upload/'; // set directory
	            $file_name = $_FILES['file']['name']; // set file name
	            $file_path = $directory.$file_name; // set path
	            
	            {
	                if(!move_uploaded_file($_FILES['file']['tmp_name'], $file_path)) // move_uploaded_files is what moves the files
	                {
	                    $_SESSION['error']['file'] = $file_name . " could not be saved";
	                }
	            }
	        }

			if (isset($_SESSION['error'])) 
			{
				$classerror = ' style="background-color:#ffffcc;"';
			}
	}
	$_SESSION['file_path'] = $file_path;
	$_SESSION['file_name'] = $file_name;
	$_SESSION['classerror'] = $classerror;
	
	if (isset($_SESSION['error'])) 
	{
		header('Location: index.php');
		exit;
	}
	else
	{
		header('Location: success.php');
		exit;
	}
?>