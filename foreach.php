<?php 

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

// Construct a loop that iterates through each value and outputs its type as either integer, float, boolean, array, null, or string.

foreach($things as $thing){
	if(is_integer($thing)){
		echo $thing . " " . "is an integer!" . PHP_EOL;

	} elseif(is_float($thing)){
		echo $thing . " " . "is a decimal number!" . PHP_EOL;

	} elseif (is_string($thing)){
		echo $thing . " " . "is a string!" . PHP_EOL;

	} elseif(is_array($thing)){
		echo $thing . " " . "is an array!" . PHP_EOL;

	} elseif(is_bool($thing)){
		echo $thing . " " . "is a boolean!" . PHP_EOL;

	} else {
		echo $thing . " " . "NULL" . PHP_EOL;
	}

}

// Construct a loop that iterates through each value and outputs only values with a type that is scalar.
// $things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);


foreach ($things as $thing){
	if(is_scalar($thing)){
		echo $thing . PHP_EOL;
	}
}

foreach($things as $thing){
	if(is_array($thing)){
		foreach($thing as $value){
			echo $value . PHP_EOL;
		}
	}
}






