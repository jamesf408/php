<?php
session_start();			

$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');

// CREATES THE OPTION MENU FOR THE MONTHS
function list_months($array) {
	for ($i=0; $i <= count($array)-1 ; $i++) { 
		echo '<option>' . $array[$i] . '</option>';
	}
}
// CHECKS TO SEE IF VARIABLES ARE NOT SET
if (!isset($_SESSION['quarter'],$_SESSION['season'],$_SESSION['birthstone'] )) {
	$_SESSION['quarter'] = '';
	$_SESSION['season'] = '';
	$_SESSION['birthstone'] = '';
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Advanced Basic</title>
	<style>
		#error {
			background-color: red;
			color: white;
		}
	</style>
</head>
<body>
	<form action="process.php" method="post">
		<input type="hidden" name="action" value="monthinfo">
		<div id="error">
			<?php
				if (isset($_SESSION['error']))
					foreach ($_SESSION['error'] as $name => $message) 
						echo '<p>' . $message . '</p>';
			?>
		</div>
		<div>
			<label for="month">Choose A Month</label>
			<select name="month">
				<option value=""></option>
				<?php list_months($months); ?>
			</select>
			<input type="submit" value="Enter">
		</div>
	</form>	
	<fieldset>
		<legend>Result</legend>
		<h1>
			<?php 
				if (empty($_SESSION['month'])) {
					echo 'select a month';
				}
				else
					echo $_SESSION['month']; 

				?>
		</h1>
		<p>Quarter: <?= $_SESSION['quarter']; ?></p>
		<p>Season: <?= $_SESSION['season']; ?></p>
		<p>Birthstone: <?= $_SESSION['birthstone']; ?></p>
	</fieldset>
</body>
</html>
<?php $_SESSION = array(); ?>