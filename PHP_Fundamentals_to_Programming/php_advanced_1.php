<?php
$users = array( 
   array('first_name' => 'Michael', 'last_name' => ' Choi '),
   array('first_name' => 'John', 'last_name' => 'Supsupin'),
   array('first_name' => 'Mark', 'last_name' => ' Guillen'),
   array('first_name' => 'KB', 'last_name' => 'Tonel'),
   array('first_name' => 'James', 'last_name' => 'Farris'),
   array('first_name' => 'Bob', 'last_name' => 'Builder'),
   array('first_name' => 'Frank', 'last_name' => 'Sinatra'),
   array('first_name' => 'Fred', 'last_name' => 'Flinstone'),
   array('first_name' => 'Harry', 'last_name' => 'Potter'),
   array('first_name' => 'Al', 'last_name' => 'Pacino'),
   array('first_name' => 'Don', 'last_name' => 'King'),
   array('first_name' => 'Mike', 'last_name' => 'Tyson'),
   array('first_name' => 'Bill', 'last_name' => 'Gates'),
   array('first_name' => 'Steve', 'last_name' => 'Jobs')   
);
function call_users_foreach($array) {
	$i = 1;
	foreach ($array as $row) {
		echo "<tr><td>" . $i++ . "</td>";
		foreach ($row as $value) {
			echo "<td>" . $value . "</td>";
		}
		$trimmed = trim($row['first_name']) . " " . trim($row['last_name']);
		echo "<td>" . $trimmed . "</td>";
		echo "<td>" . strtoupper($trimmed) . "</td>";
		echo "<td>" . strlen($trimmed) . "</td>";
		echo "</tr>";

	}
}

function call_users_for($array) {
	$count = 1;
	for ($i=0; $i < count($array); $i++) { 
		$trimmed = $array[$i]['first_name'] . " " . $array[$i]['last_name'];
		echo "<tr><td>" . $count++ . "</td>";
		echo "<td>" . $array[$i]['first_name'] . "</td>";
		echo "<td>" . $array[$i]['last_name'] . "</td>";
		echo "<td>" . $trimmed . "</td>";
		echo "<td>" . strtoupper($trimmed) . "</td>";
		echo "<td>" . strlen($trimmed) . "</td></tr>";
		}

}
$posts = array();
var_dump($posts);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		table {
			margin-bottom:20px;
		}
		tbody tr:nth-child(5n) {
			color:white;
			background-color: black;
		}
	</style>
</head>
<body>
	<?php
		$count = 1;
		foreach ($users as $field => $value) {
			
		}
	?>
	<table border="1">
		<caption>Foreach Loop</caption>
		<thead>
			<th>User #</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Full Name</th>
			<th>Full Name in upper case</th>
			<th>Length of name</th>
		</thead>
		<tbody>
			
				<?php call_users_foreach($users); ?>
			
		</tbody>
	</table>
	<table border="1">
		<caption>For Loop</caption>
		<thead>
			<th>User #</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Full Name</th>
			<th>Full Name in upper case</th>
			<th>Length of name</th>
		</thead>
		<tbody>
			
				<?php call_users_for($users); ?>
			
		</tbody>
	</table>
</body>
</html>