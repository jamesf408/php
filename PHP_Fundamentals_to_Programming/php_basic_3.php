<?php
	$head_count = 0;
	$tail_count = 0;

	for ($flip_count=1; $flip_count <= 5000 ; $flip_count++) { 
		$flip = rand(0,1);
		if ($flip) {
			$tail_count++; 
			echo "Attempt #" . $flip_count . ": Throwing a coin... It's a tail! ... Got<b> " . $head_count . " head(s)</b> so far and<b> " . $tail_count ." tail(s)</b> so far";
		} else {
			$head_count++;
			echo "Attempt #" . $flip_count . ": Throwing a coin... It's a head! ... Got<b> " . $head_count . " head(s)</b> so far and<b> " . $tail_count ." tail(s)</b> so far";
		}
		echo "<br>";
	}
?>