<?php
	// set a number of times to roll the dice
$number_of_rolls = 50;
	// loop through the number of times to roll the dice
for ($i=0; $i < $number_of_rolls; $i++) { 
		// count the number of attempts
		$count = $i +1;
		// generate a random number between 1 and 6
		$dice = rand(1,6);
		// output the current attempt and the dice that was just rolled
		echo 'Attempt # ' . $count . ' You rolled a ' . $dice . '<br>';
		// check to see if the current die matches the previous
		if($prev_dice == $dice)
		{
			// output a congrats
			echo "congrats you rolled the same number twice";
		}
		// keep track of previously rolled die
		$prev_dice = $dice;
		// add to the current count for the dice value rolled
		if (isset($dice_rolled[$dice])) {
			$dice_rolled[$dice]++;
		} else {
			$dice_rolled[$dice] = 1;
		}
		
	}
// loop through each potentially rolled value
foreach ($dice_rolled as $dice_number => $times_rolled) {
	$percentage = ($times_rolled / $number_of_rolls)*100;
	echo "Number " . $dice_number . ' : ' . $times_rolled . '/' . $number_of_rolls . ' (' . $percentage . '%)';
}
	// number of times rolled out of total rolls and a percentage

?>