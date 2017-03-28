<?php 
// Write a PHP script to calculate and display average temperature, 
// five lowest and highest temperatures. 

// Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73

// Expected Output :
// Average Temperature is : 70.6 
// List of seven lowest temperatures : 60, 62, 63, 63, 64, 
// List of seven highest temperatures : 76, 78, 79, 81, 85, 

$temperatures = array (78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

$average = array_sum($temperatures) / count($temperatures);

	sort($temperatures);


// sort($temperatures, 'sort_flags = sort_numeric');
var_dump($temperatures);







echo "The Average Temperature is:" . " " . $average . " " . PHP_EOL;

$i = 0;

do
{
	echo "The seven lowest temperatures are :" . " ";
	echo $temperatures[$i++] . "," . " " . $temperatures[$i++] . "," . $temperatures[$i++] . "," . $temperatures[$i++] . "," . $temperatures[$i++] . "," . $temperatures[$i++] . "," . $temperatures[$i++] . PHP_EOL;
	
} while($i <= 7);












 ?>