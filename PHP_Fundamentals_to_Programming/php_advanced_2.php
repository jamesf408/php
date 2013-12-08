<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Advanced 2</title>
	<style>
		td {
			width:40px;
			height: 40px;
		}
		.red {
			background-color: red;
		}
		.black {
			background-color: black;
		}
	</style>
</head>
<body>
	<?php
	echo "<table>";
	for ($count=0; $count <= 7; $count++) { 
		echo "<tr>";
		if ($count % 2 == 0) {
			for ($i=0; $i <=7; $i++) { 
				if ($i % 2 == 0 ) {
					echo '<td class="red"></td>';
				} else {
					echo '<td class="black"></td>';
				}
			}	 
		} else {
			for ($i=0; $i <=7; $i++) { 
				if ($i % 2 == 0 ) {
					echo '<td class="black"></td>';
				} else {
					echo '<td class="red"></td>';
				}
			}
		}
		echo "</tr>";
	}
	echo "</table>";
?>
</body>
</html>