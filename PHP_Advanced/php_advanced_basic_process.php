<?php
	session_start();
	header('Location: php_advanced_basic.php');

	if (isset($_GET['action']) && $_GET['action'] = 'monthinfo') 
	{
		foreach ($_GET as $name => $value) 
		{
		// CHECKS TO SEE WHAT QUARTER THE SELECTED MONTH IS IN
		if ($value == "January" || $value == "February" || $value == "March") 
		{
			$quarter = '1st';
		} else if ($value == "April" || $value == "May" || $value == "June") 
		{
			$quarter = '2nd';
		} else if ($value == "July" || $value == "August" || $value == "September") 
		{
			$quarter = '3rd';
		} else if ($value == "October" || $value == "November" || $value == "December") 
		{
			$quarter = '4th';
		}
		// CHECKS TO SEE WHAT SEASON THE SELECTED MONTH IS IN
		if ($value == "December" || $value == "January" || $value == "February") 
		{
			$season = 'Winter';
		} else if ($value == "March" || $value == "April" || $value == "May") 
		{
			$season = 'Spring';
		} else if ($value == "June" || $value == "July" || $value == "August") 
		{
			$season = 'Summer';
		} else if ($value == "September" || $value == "October" || $value == "November") 
		{
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