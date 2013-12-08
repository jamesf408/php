<?php
// VARIABLES
	// $first_name = 'James';
	// $last_name = 'Farris';
	// $occupation = 'Student';
	// $num = 5;

// ARRAYS
	// $students = array();
	// $students[] = 'James';
	// $students[] = 'Fred';
	// $students[] = 'Larson';

	// echo "This is student 0: " . $students[0]. '<br>';
	// echo "This is student 1: " . $students[1]. '<br>';
	// echo "This is student 2: " . $students[2]. '<br>';

	// $students = array(
	// 				 array("James", "Farris", 20),
	// 				 array("Bob", "Barker", 60),
	// 				 array("Jose", "Martinez", 40)
	// 	);
	// echo $students[0][1];

	// var_dump($students);

	// ASSOCIATIVE ARRAY
	// $student = array("first_name" => "James", "last_name" => "Farris", "age" => 20);
	// echo $student["first_name"] . "<br>";
	// echo $student["last_name"];

// CONDITIONALS
	// $name = '';
	// $on_guest_list = true;
	// $guest_number = 0;
	// $age = 0;
	// $party_message = '';

	// if ($on_guest_list) {
	// 	$party_message = 'Hey ' . $name . '! Welcome to the party!';
	// } else if ($name == 'Joey' || $name == 'Sarah') {
	// 	$party_message = 'sorry ' . $name . '. You are not allowed.'; 
	// } else if ($guest_number > 10) {
	// 	$party_message = 'guest list full';
	// } else if ($age < 21) {
	// 	// some code...
	// }
	
	// $number = 2;

	// switch ($number) {
	// 	case 1:
	// 		echo "Red - " . $number;
	// 		break;
	// 	case 2:
	// 		echo "orange - " . $number;
	// 		break;
	// 	case 3:
	// 		echo "yellow - " . $number;
	// 		break;
	// 	case 4:
	// 		echo "green - " . $number;
	// 		break;
	// 	case 5:
	// 		echo "blue - " . $number;
	// 		break;
	// 	case 6:
	// 		echo "purple - " . $number;
	// 		break;
	// 	default:
	// 		# code...
	// 		break;
	// }

// LOOPS
	// for ($i=0; $i < 10; $i++) { 
	// 	echo $i . '<br>';
	// 	for ($j=0; $j < 2; $j++) { 
	// 		echo $j;
	// 	} echo '<br>';
	// } 

	// echo '<table border="1">';
	// for ($i=0; $i <= 25; $i++) { 
	// 	echo '<tr>';
	// 	for ($j=0; $j <= 25; $j++) { 
	// 		echo '<td>' . $j . '</td>';
	// 	} 
	// 	echo '</tr>';
	// }
	// echo '</table>'; 

	// $students = array(
	// 		 array("first_name" => "James", "last_name" => "Farris", "age" => 20),
	// 		 array("first_name" => "Bob", "last_name" => "Barker", "age" => 60),
	// 		 array("first_name" => "Juan", "last_name" => "Garcia", "age" => 40)
	// 	);

	// foreach ($students as $row) {
	// 	echo '<p>';
	// 	foreach ($row as $person => $value) {
	// 		echo $person . ': ' . $value . '<br>';
	// 	}
	// 	echo '</p>';
	// }

// FUNCTIONS
	// function print_array($array) {
	// 	echo "There are " . count($array) . " values in the array. <br>";
	// 	foreach ($array as $value) {
	// 		echo $value . "<br>";
	// 	}
	// }

	// $samples = array("abc", "def", "ghi");
	// print_array($samples);
	// $samples = array("John", "George", "Harry");
	// print_array($samples);
	// $samples = array(13, 23, 56);
	// print_array($samples);

// BUILT IN FUNCTIONS
	// STRING FUNCTIONS
	// $str = "I am a string with MANY words";
	// echo 'The variable that is being referenced below is <br>' . $str;
	// echo "<p>The string length of the str variable is " . strlen($str) . "</p>";
	// echo "<p>The string is lower case: " . strtolower($str) . "</p>";
	// echo "<p>Each word uppercase would look like: " . ucwords($str) . "</p>";
	// echo "<p>Replace each space with an underscore: " . str_replace(' ', '_', $str) . "</p>";
	// echo "<p>The string starting with the first occurance of the word 'with': " . stristr($str, 'with') . "</p>";
	// echo "<p>The word string starts at the index character: " . strpos($str, 'string') . "</p>";

	// ARRAY FUNCTIONS
	// $ary = explode(' ', $str);
	// echo "Exloded array" . '<br>';
	// foreach ($ary as $index => $value) {
	// 	echo "index: ".$index . ", value: " .$value."<br>";
	// } 
	
	// echo "The number of words in the array: ".count($ary)."<br>";
	
	// sort($ary);
	// echo "Sort array" . '<br>';
	// foreach ($ary as $index => $value) {
	// 	echo "index: ".$index . ", value: " .$value."<br>";
	// } 

	// echo "New string in alphabetical order: " . implode(' ', $ary);

	//NUMERIC FUNCTIONS
	// $number = 55;

	// echo "is the string numeric : " . is_numeric($str). "<br>";
	// echo "is the string numeric : " . is_numeric($ary). "<br>";
	// echo "is the string numeric : " . is_numeric($number). "<br>";

	// //OTHER FUNCTIONS
	// $empty_value = '';
	// echo "is the empty string empty : " . empty($empty_value). "<br>";
	// echo "is the empty string set : " . isset($empty_value). "<br>";
	// echo "is the non existent variable set : " . isset($non_existent_variable). "<br>";
?>
<!-- <!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo 'Hello people' ?></title>
</head>
<body>
	<h1><?php echo "$first_name $last_name, my occupation is $occupation"; ?></h1>
	<?php
		echo $_SERVER['DOCUMENT_ROOT'];
	?>
</body>
</html> -->