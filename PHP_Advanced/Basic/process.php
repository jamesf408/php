<?php 
	session_start();
	if (isset($_POST['action']) && $_POST['action'] == 'monthinfo') {
		
		foreach ($_POST as $name => $value) {
			if (!empty($value)) {
				$_SESSION[$name] = $value;
			} 
			else
			{
				$_SESSION[$name] = '';
				$_SESSION['error'][$name] = 'Please select a ' . $name;
			}
			// CHECKS TO SEE WHAT QUARTER THE SELECTED MONTH IS IN
		if ($value == "January" || $value == "February" || $value == "March") {
			$_SESSION['quarter'] = '1st';
		} else if ($value == "April" || $value == "May" || $value == "June") {
			$_SESSION['quarter'] = '2nd';
		} else if ($value == "July" || $value == "August" || $value == "September") {
			$_SESSION['quarter'] = '3rd';
		} else if ($value == "October" || $value == "November" || $value == "December") {
			$_SESSION['quarter'] = '4th';
		}
		// CHECKS TO SEE WHAT SEASON THE SELECTED MONTH IS IN
		if ($value == "December" || $value == "January" || $value == "February") {
			$_SESSION['season'] = 'Winter';
		} else if ($value == "March" || $value == "April" || $value == "May") {
			$_SESSION['season'] = 'Spring';
		} else if ($value == "June" || $value == "July" || $value == "August") {
			$_SESSION['season'] = 'Summer';
		} else if ($value == "September" || $value == "October" || $value == "November") {
			$_SESSION['season'] = 'Fall';
		}

		switch ($value) {
			case 'January':
				$_SESSION['birthstone'] = 'Garnet';
				break;
			case 'February':
				$_SESSION['birthstone'] = 'Amethyst';
				break;
			case 'March':
				$_SESSION['birthstone'] = 'Aquamarine, Heliotrope';
				break;
			case 'April':
				$_SESSION['birthstone'] = 'Diamond';
				break;
			case 'May':
				$_SESSION['birthstone'] = 'Emerald';
				break;
			case 'June':
				$_SESSION['birthstone'] = 'Pearl, Moonstone, Alexandrite';
				break;
			case 'July':
				$_SESSION['birthstone'] = 'Ruby';
				break;
			case 'August':
				$_SESSION['birthstone'] = 'Peridot';
				break;
			case 'September':
				$_SESSION['birthstone'] = 'Sapphire';
				break;
			case 'October':
				$_SESSION['birthstone'] = 'Opal, Tourmaline';
				break;
			case 'November':
				$_SESSION['birthstone'] = 'Topaz, Citrine';
				break;
			case 'December':
				$_SESSION['birthstone'] = 'Turquoise, Zircon, Tanzanite';
				break;
		}
		}

	}
	// var_dump($_SESSION);

	// if (isset($_POST['action']) && $_POST['action'] == 'monthinfo') {
	// 	if (!isset($_POST['month']))
	// 		$curr_month = 'Choose a month';
	// 	else
	// 		$curr_month = $_POST['month'];
			
	// }
header('Location: index.php');
	
?>