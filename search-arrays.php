<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];




//Create a function that returns TRUE or FALSE if an array value is found. Search for Tina and Bob in $names. Make sure it works as expected.

function checkArrays($array, $name){
	// echo array_search('Dana', $array);

	if(array_search($name, $array) !== FALSE){
		return  "TRUE";
	} else{
		return  "FALSE";
	}
}
// checkArrays($names, 'Fer');

// echo checkArrays($names, 'Tina');
// echo checkArrays($names, 'Matt');
// echo checkArrays($names, 'Mike');


//Create a function to compare 2 arrays that returns the number of values in common between the arrays. Use the 2 example arrays and make sure your solution uses array_search().

function compareArrays($listofNames, $arrayToCompare){
	
	$c = 0;

	foreach($listofNames as $name){
		if(checkArrays($arrayToCompare, $name)){
			$c++;
		}
	}
	return $c;
}

echo compareArrays($names, $compare);