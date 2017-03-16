<?php 
$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach($things as $thing){
	if (is_string($thing)){
		echo "{$thing}" . PHP_EOL;

	} else if (is_string($thing)){
		echo "{$thing}" . PHP_EOL;

	} else if (is_null($thing)){
		echo "{$thing}" . PHP_EOL;

	} else if (is_array($thing)){
		echo "{$thing}" . PHP_EOL;

	} else if (is_float($thing)) {
		echo "{$thing}" . PHP_EOL;

	} else if (is_string($thing)){
		echo "{$thing}" . PHP_EOL;

	} else if (is_bool($thing)){
		echo "{$thing}" . PHP_EOL;
	} else if (is_integer($thing)){
		echo "{$thing}" . PHP_EOL;
	} 
}

// Construct a loop that iterates through each value and outputs its type as either integer, float, boolean, array, null, or string.

// Construct a loop that iterates through each value and outputs only values with a type that is scalar.

// Create a loop that will echo out every value, including those nested in arrays. Output should look like this.

//  Sgt. Pepper
//  11

//  Array (loop through inner array display here)
//  3.14
//  12 + 7

//  11


