<?php
	session_start();
  require_once('connection.php');
	if (isset($_POST['action']) && $_POST['action'] == 'signup') 
	{
		$_SESSION['first_name'] = $_POST['first_name'];
		$_SESSION['last_name'] = $_POST['last_name'];
		$_SESSION['email'] = $_POST['email'];
		foreach ($_POST as $name => $value) 
		{
			if (empty($value)) 
			{
				$_SESSION['error'][$name] = " cannot be blank";
			}
		}
		if (empty($_POST['email'])) 
    {
			$_SESSION['error']['email'] = 'Email cannot be blank';
		}
		else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
		{
			$_SESSION['error']['email'] = $value . ' is not a valid email';
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
      
            if(!move_uploaded_file($_FILES['file']['tmp_name'], $file_path)) // move_uploaded_files is what moves the files
            {
                $_SESSION['error']['file'] = $file_name . " could not be saved";
            }
        }
   	}
   	if (empty($_SESSION['error'])) 
    {
      $first_name = trim($_POST['first_name']);
      $last_name = trim($_POST['last_name']);
      $email = trim($_POST['email']);

   		$_SESSION['message'] = '<p class="success">You have been added to the list!</p>';
      $query = "INSERT INTO students (first_name, last_name, email, pic_url, created_at, updated_at)
                VALUES ('" . $first_name . "', '" . $last_name . "', '" . $email . "', '" . $file_path . "', NOW(), NOW())";
      $result = mysqli_query($connection, $query);

      if ($result) 
      {
          $student_id = mysqli_insert_id($connection);
          foreach ($_POST['topics'] as $topic) 
          {
            $query = "INSERT INTO topics_has_students (students_id, topics_id) VALUES ($student_id, $topic)";
            mysqli_query($connection, $query);
          }
      }
    }
      header('Location: index.php'); 
?>