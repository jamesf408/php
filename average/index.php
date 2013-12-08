<?php 
function compute_average($array) 
{	
	$total = 0;
	$number_of_values = count($array);
	foreach ($array as $value) {
		$total += $value;
	}
	$average = $total / $number_of_values;
	return $average;
}

$numbers = array(34, 345, 56, 64, 12, 2);
$average = compute_average($numbers);

echo $average;

?>