<?php
session_start();
$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
$curr_month = '';
$quarter = '';
$season = '';
$birthstone = '';

// CREATES THE OPTION MENU FOR THE MONTHS
function list_months($array) {
	for ($i=0; $i <= count($array)-1 ; $i++) { 
		echo '<option>' . $array[$i] . '</option>';
	}
}

// CHECKS TO SEE IF A MONTH HAS BEEN SELECTED, IF NOT DISPLAY MESSAGE
if (isset($_GET['month'])) {
	$curr_month = $_GET['month'];
} else {
	$curr_month = 'Choose a month';
} 

// CHECKS IF A SESSION HAS BEEN SET, IF SO LOOP THROUGH THE GET ARRAY
if (isset($_SESSION)) {
	foreach ($_GET as $name => $value) {
		// CHECKS TO SEE WHAT QUARTER THE SELECTED MONTH IS IN
		if ($value == "January" || $value == "February" || $value == "March") {
			$quarter = '1st';
		} else if ($value == "April" || $value == "May" || $value == "June") {
			$quarter = '2nd';
		} else if ($value == "July" || $value == "August" || $value == "September") {
			$quarter = '3rd';
		} else if ($value == "October" || $value == "November" || $value == "December") {
			$quarter = '4th';
		}
		// CHECKS TO SEE WHAT SEASON THE SELECTED MONTH IS IN
		if ($value == "December" || $value == "January" || $value == "February") {
			$season = 'Winter';
		} else if ($value == "March" || $value == "April" || $value == "May") {
			$season = 'Spring';
		} else if ($value == "June" || $value == "July" || $value == "August") {
			$season = 'Summer';
		} else if ($value == "September" || $value == "October" || $value == "November") {
			$season = 'Fall';
		}

		switch ($value) {
			case 'January':
				$birthstone = 'Garnet';
				break;
			case 'February':
				$birthstone = 'Amethyst';
				break;
			case 'March':
				$birthstone = 'Aquamarine, Heliotrope';
				break;
			case 'April':
				$birthstone = 'Diamond';
				break;
			case 'May':
				$birthstone = 'Emerald';
				break;
			case 'June':
				$birthstone = 'Pearl, Moonstone, Alexandrite';
				break;
			case 'July':
				$birthstone = 'Ruby';
				break;
			case 'August':
				$birthstone = 'Peridot';
				break;
			case 'September':
				$birthstone = 'Sapphire';
				break;
			case 'October':
				$birthstone = 'Opal, Tourmaline';
				break;
			case 'November':
				$birthstone = 'Topaz, Citrine';
				break;
			case 'December':
				$birthstone = 'Turquoise, Zircon, Tanzanite';
				break;
		}
	}
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Advanced Basic</title>
	<style>
		* {
			font-family: sans-serif;
		}
		h1 {
			text-align: center;
		}
		div {
			width: 300px;
			position: relative;
			margin-bottom: 40px;
			text-align: right;
		}
		input[type="submit"] {
			display: block;
			width: 75px;
			position: absolute;
			right: 0;
			margin-top: 20px;
		}
		fieldset {
			width: 30%;
		}
	</style>
</head>
<body>
	<form action="php_advanced_basic.php" method="get">
		<input type="hidden" name="action" value="monthinfo">
		<div>
			<label for="month">Choose A Month</label>
			<select name="month">
				<option></option>
				<?php list_months($months); ?>
			</select>
			<input type="submit" value="Enter">
		</div>
	</form>	
	<fieldset>
		<legend>Result</legend>
		<h1>
			<?php echo $curr_month;	?>
		</h1>
		<p>Quarter: <?php echo $quarter; ?> </p>
		<p>Season: <?php echo $season; ?></p>
		<p>Birthstone: <?php echo $birthstone; ?></p>

	</fieldset>
	<?php
		var_dump($_SESSION);
	?>
</body>
</html>
<?php
	$_SESSION = array();
?>