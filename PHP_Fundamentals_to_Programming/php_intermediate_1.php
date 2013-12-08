<?php
	function draw_stars($x) {
		for ($i=0; $i < count($x); $i++) {
			if (!is_int($x[$i])) {
				for ($y=0; $y < strlen($x[$i]); $y++) {
					echo strtolower(substr($x[$i], 0, 1));
				}
			} else {
				for ($j=0; $j < $x[$i]; $j++) { 
					echo '*';
				}
			}
			echo '<br>';
		}
	}
	$num_stars = array(4,7,54,23,2,3,34,5);
	$another_array = array(4, "Tom", 1, "Michael", 5, 7, "Jimmy Smith");

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Intermediate 1</title>
</head>
<body>
	<h1>Part 1 (draw_stars)</h1>
	<p><?php draw_stars($num_stars); ?></p>
	<h1>Part 2</h1>
	<p><?php draw_stars($another_array); ?></p>
</body>
</html>