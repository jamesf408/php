<?php
	function register($connection, $post) 
	{
		foreach ($post as $name => $value) 
	    	{
		        if(empty($value))
		        {
		            $_SESSION['error'][$name] = "sorry, " . $name . " cannot be blank";
		        }
	        	else
	        	{
		            switch ($name) 
		            {
		                case 'first_name':
		                case 'last_name':
	                        if(is_numeric($value))
	                        {
	                            $_SESSION['error'][$name] = $name . ' cannot contain numbers';
	                        }
		                break;
		                case 'email':
	                        if(!filter_var($value, FILTER_VALIDATE_EMAIL))
	                        {
	                            $_SESSION['error'][$name] = $name . ' is not a valid email';
	                        }
		                break;
		                case 'password':
	                        $password = $value;
	                        if(strlen($value) < 5)
	                        {
	                            $_SESSION['error'][$name] = $name . ' must be greater than 5 characters';
	                        }
		                break;
		                case 'confirm_password':
	                        if($password != $value)
	                        {
	                            $_SESSION['error'][$name] = 'Passwords do not match';
	                        }
		                break;
		                case 'birthdate':
							if (!empty($value)) 
							{
								$birthdate = explode('-', $value);
								// var_dump($birthdate);
								if (!is_numeric($birthdate[1]) || !is_numeric($birthdate[1]) || !is_numeric($birthdate[1])) {
									$_SESSION['error'][$name] = $name . ' is not a valid date';
								}
								else if (!checkdate($birthdate[1], $birthdate[2], $birthdate[0]))
			                    {
			                        $_SESSION['error'][$name] = $name . ' is not a valid date';
			                    }
							}	
						break;
		            }
	            }        
	        }
	        $_SESSION['first_name'] = $post['first_name'];
	        $_SESSION['last_name'] = $post['last_name'];
	        $_SESSION['email'] = $post['email'];
	        $_SESSION['birthdate'] = $post['birthdate'];
	        header('Location: index.php');
	}

	function login($connection, $post) {
		if (empty($post['email']) || empty($post['password'])) 
    	{
    		   	$_SESSION['login_error']['message'] = "Email or Password cannot be blank";
    		   	header('Location: index.php');
	    }
	    else
	    {
	    	$query = "SELECT id, password
                      FROM users
                      WHERE email = '".$post['email']."'";
                $result = mysqli_query($connection, $query);
                $row = mysqli_fetch_assoc($result);

	    	if (empty($row)) {
	    		$_SESSION['login_error']['message'] = 'Could not find Email in database';
	    		header('Location: index.php');
	    		exit;
	    	}
	    	else
	    	{
	    		if (crypt($post['password'], $row['password']) != $row['password']) 
	    		{
	    			$_SESSION['login_error']['message'] = 'incorrect password';
	    			header('Location: index.php');
	    			exit;
	    		}
	    		else
	    		{
	    			$_SESSION['user_id'] = $row['id'];
	    			header('Location: profile.php?id=' . $row['id']);
	    			exit;
	    		}
	    	}
	    }
	}

	function logout() {
		$_SESSION = array();
		session_destroy();
		header('Location: index.php');
    	exit;
	}
?>