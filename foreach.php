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

foreach($things as $thing){
	if (is_scalar($thing)){
		echo "{$thing}" . " " . "is Scalar" . PHP_EOL;
	}
}


foreach($things as $element){

	echo (gettype($element)) . PHP_EOL;
}




