<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Intermediate 2</title>
	<style>
		table {
			border-collapse: collapse;
			border:1px solid black;
		}
		td {
			padding: 5px;
		}
		tr:nth-child(even){
			background-color: gray;
		}
		.first {
			font-weight: bold;
			font-size: 1.1em;
			background-color: white;
		}
	</style>
</head>
<body>
	<table border="1">
		<?php
			$current_num = 0;
			for ($current_num; $current_num <= 9; $current_num++) { 
				echo "<tr>";
				if ($current_num == 0) {
					for ($i=0; $i <=9; $i++) { 
						echo '<td class="first">' . $i . '</td>';
					}	 
				} else {
					for ($i=0; $i <=9; $i++) { 
						if ($i == 0) {
							echo '<td class="first">' . ($i + $current_num) . '</td>';
						} else {
							echo '<td>' . $i * $current_num . '</td>';
						}
					}
				}
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>