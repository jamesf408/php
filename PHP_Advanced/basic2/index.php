<?php 
session_start();
// var_dump($_SESSION);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Advanced Basic 2</title>
	<style>
		.red {
			color: red;
		}
		
	</style>
</head>
<body>
	<form action="process.php" method="post">
		<input type="hidden" name="action" value="numfun">
		<div>
			<label for="num1">Enter a number:</label>
		</div>
		<div>
			<input type="text" name="num1" id="num1" placeholder="num1">
		</div>
		<div>
			<label for="num2">Another number:</label>
		</div>
		<div>
			<input type="text" name="num2" id="num2" placeholder="num2">
		</div>
		<div>
			<label for="series">Series:</label>
		</div>
		<div>
			<input type="text" name="series" id="series" placeholder="series">
		</div>
		<input type="submit" value="Run Fibonacci">
	</form>

	<fieldset>
		<legend>Result</legend>
		<?php
			if (isset($_SESSION['error'])) {
				foreach ($_SESSION['error'] as $name => $message) {
					echo '<p>' . $message . '<p>';
				}
			}
		?>
		<p>
		<?php 
			// echo isset($_SESSION['num1'], $_SESSION['num2'], $_SESSION['series']);
			if (isset($_SESSION['num1'], $_SESSION['num2'], $_SESSION['series'])) {
				function fibo($num1, $num2, $series) {
					$fiboarray = array();
					$fiboarray[0] = $num1;
					$fiboarray[1] = $num2;
					for ($i=2; $i < $series; $i++) { 
						$fiboarray[$i] = $fiboarray[$i - 2] + $fiboarray[$i - 1];
					}
					return $fiboarray;
				}
				echo implode(", ", fibo($_SESSION['num1'], $_SESSION['num2'], $_SESSION['series']));
			}
		?>
	</p>
	</fieldset>
</body>
</html>
<?php
session_destroy();
?>