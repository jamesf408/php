<?php
$states = array('CA', 'WA', 'VA', 'UT', 'AZ');
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Basic Assignment 2</title>
</head>
<body>
	<select name="states1" id="states1">
		<?php 
		for ($i=0; $i < count($states); $i++) { 
			echo '<option id="' . $states[$i] . '"">' . $states[$i] . "</option>";
			}
		?>
	</select>
	<select name="states2" id="states2">
	<?php
		foreach ($states as $value) {
			echo "<option>" . $value . "</option>";
		}
	?>
	</select>
	<select>
	<?php
		array_push($states, 'NJ', 'NY', 'DE');

		foreach ($states as $value) {
			echo "<option>" . $value . "</option>";
		}
	?>
	</select>
</body>
</html>