<?php
	session_start();
	date_default_timezone_set('America/Los_Angeles');
		
		if (!isset($_SESSION['total'])) {
			$_SESSION['total'] = 0;
		}
		if (!isset($_SESSION['result'])) {
			$_SESSION['result'] = array();
		}
	
		if (isset($_POST['place'])) 
		{
			
			$place = $_POST['place'];
			$random = 0;
			$style = 'green';
			$date = date('F jS Y H:i:s a');//date('F jS Y g:h a');

			if ($_POST['place'] == 'farm') {
				$random = rand(10,20);
			}
			else if ($_POST['place'] == 'cave') {
				$random = rand(5,10);
			}
			else if ($_POST['place'] == 'house') {
				$random = rand(2,5);
			}
			else if ($_POST['place'] == 'casino') {
				$random = rand(-50,50);
				if ($random < 0) {
					$style = 'red';
				}
			}
			$_SESSION['total'] += $random;
			
			$_SESSION['result'][] = '<span style="color: ' . $style . '">You entered a ' . $place . ' and ' . ($random < 0 ? "lost " . $random : "earned " . $random) . ' golds.' . ($random < 0 ? '...ouch!...!' : "") . '(' . $date . ')</span><br>';
	
		}
if (isset($_POST['reset'])) {
			session_destroy();
		}
header('Location: index.php');