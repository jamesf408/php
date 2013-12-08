<?php
	$num_array = array();
	for ($i=0; $i < 10000; $i++) {
		$random_num = rand(0,10000);
		$num_array[] = $random_num;
	}

function selectionSort($array) {
        for ($i = 0; $i<count($array); $i++) {
            $min = $i;
            $length = count($array);
            for ($j = $i + 1; $j < $length; $j++) {
                if ($array[$j] < $array[$min]) {
                    $min = $j;
                }
            }
            $tmp = $array[$min];
            $array[$min] = $array[$i];
            $array[$i] = $tmp;
        }
        return $array;
    }
$start = microtime(true);
var_dump(selectionSort($num_array));
$end = microtime(true);

$time = $end - $start;
echo $time;


?>