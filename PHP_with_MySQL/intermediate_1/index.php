<?php
	session_start();
	require_once('connection.php');

	// var_dump($_SESSION);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP and MySQL - Basic III</title>
	<style>
		.container {
			width: 500px;
			margin:0 auto;
		}
		.checkboxes {
			display: inline-block;
			margin:10px;
		}
		span {
			font-size: .8em;
			color: red;
		}
		.students {
			background-color: #cccccc;
			padding: 10px;
		}
		.students h2 {
			font-family: sans-serif;
			border-bottom: 4px solid #666666;
			text-transform: uppercase;
			color: #666666;
			clear: both;
		}
		.profiles {
			float: left;
			margin: 10px;
			padding: 10px;
			font-size: .7em;
			text-align: center;
			background-color: #ffffff;
		}
		.topics {
			/*display: block;*/
			clear: both;
		}
		.clear {
			clear: both;
		}
		.success {
			color: green;
		}
	</style>
</head>
<body>
	<div class="container">
		<?php 
			echo (isset($_SESSION['message']) ? $_SESSION['message'] : '');
		?>
		<h1>Register for our Newsletter!</h1>
		<form action="process.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="action" value="signup">
			<div>
				<label for="first_name">First Name</label>
				<input type="text" name="first_name" id="first_name">
				<span>
					<?= (isset($_SESSION['error']['first_name']) ? $_SESSION['error']['first_name'] : '') ?>
				</span>
			</div>
			<div>
				<label for="last_name">Last Name</label>
				<input type="text" name="last_name" id="last_name">
				<span>
					<?= (isset($_SESSION['error']['last_name']) ? $_SESSION['error']['last_name'] : '') ?>
				</span>
			</div>
			<div>
				<label for="email">Email</label>
				<input type="text" name="email" id="email">
				<span>
					<?= (isset($_SESSION['error']['email']) ? $_SESSION['error']['email'] : '') ?>
				</span>
			</div>
			<div>
				<label for="profile">Upload Picture</label>
				<input type="file" name="file"><br>
				<span>
					<?= (isset($_SESSION['error']['file']) ? $_SESSION['error']['file'] : '') ?>
				</span>
			</div>
			<fieldset>
				<legend>What topics are you interested in hearing about?</legend>
				<?php
					$query = "SELECT * FROM topics ORDER BY topics.name";
					$topics = fetchAll($connection, $query);

					foreach ($topics as $topic)
					{
						// var_dump($topic);
					?>

						<div class="checkboxes"><input type="checkbox" name="topics[]" value="<?= $topic['id'] ?>"><?= $topic['name'] ?></div>
					<?php
					}
				?>
			</fieldset>
			<input type="submit" value="Sign up">
		</form>
		<h2>See what other students are interested in!</h2>
		<div class="students">
			<?php
				$query = "SELECT topics.name AS topics, topics.id, CONCAT_WS(' ', students.first_name, students.last_name) AS sname, students.email, students.pic_url
					      FROM students
						  LEFT JOIN topics_has_students ts ON students.id = ts.students_id
						  LEFT JOIN topics ON ts.topics_id = topics.id
					      ORDER BY topics.id";
				$student_profiles = fetchAll($connection, $query);
	
				$prev_topic = '';
				foreach ($student_profiles as $profile) {
					if($profile['topics'] != $prev_topic){
						echo '<h2 class="topics">' . $profile['topics'].'</h2>';
					}
					echo '<div class="profiles">';
					echo '<img src="'.$profile['pic_url'].'" width="100" height="100"><br>';
					echo $profile['sname']. '<br>' . $profile['email'];
					echo '</div>';
				
					$prev_topic = $profile['topics'];
				}
			?>
			<div class="clear"></div>
		</div>
	</div>
</body>
</html>
<?php
	session_destroy();
?>
