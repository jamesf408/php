<?php
function grade($score) {
	if ($score < 70) {
		return 'D';
	} else if ($score < 80) {
		return 'C';
	} else if ($score < 90) {
		return 'B';
	} else if ($score <= 100) {
		return 'A';
	}
}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Basic I - Assignment - James</title>
</head>
<body>
<?php
	for ($i=0; $i <= 100 ; $i++) { 
		$number = rand(50,100);
		$score = $number;
		echo "<h1>Your Score: " . $score . "/100</h1>";
		echo "<h2>Your grade is " . grade($score) . ".</h2>";		
	}
?>
</body>
</html>