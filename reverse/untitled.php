<?php
function reverse($array) {
	$new_ary = array();
	for ($i=count($array) - 1; $i > -1; $i--) { 
		$new_ary[] = $array[$i] . '<br>';
	}
	return $new_ary;
}

$ary_of_values = array("dave", "joe", 44, "trish", "cars", 98);

$reversed = reverse($ary_of_values);

for ($i=0; $i < count($reversed); $i++) { 
	echo $reversed[$i];
}
	
?>