<?php
function get_max_and_min($array) {
	$values['min'] = $array[0];
	$values['max'] = $array[0];

	foreach ($array as $value) { 
		
		if ($value > $values['max']) {
			$values['max'] = $value;
		} 
		if ($value < $values['min']) {
			$values['min'] = $value;
		} 
	}
	return $values;
}
	$numarray = array(8,6,77,55,23,9);

	$output = get_max_and_min($numarray);
	var_dump($output);

?>