<?php





//Create a function that returns TRUE or FALSE if an array value is found. Search for Tina and Bob in $names. Make sure it works as expected.

// function checkArrays($array, $name){
// 	// echo array_search('Dana', $array);

// 	if(array_search($name, $array) !== FALSE){
// 		return  "TRUE";
// 	} else{
// 		return  "FALSE";
// 	}
// }
// // checkArrays($names, 'Fer');

// // echo checkArrays($names, 'Tina');
// // echo checkArrays($names, 'Matt');
// // echo checkArrays($names, 'Mike');


// //Create a function to compare 2 arrays that returns the number of values in common between the arrays. Use the 2 example arrays and make sure your solution uses array_search().

// function compareArrays($listofNames, $arrayToCompare){
	
// 	$c = 0;

// 	foreach($listofNames as $name){
// 		if(checkArrays($arrayToCompare, $name)){
// 			$c++;
// 		}
// 	}
// 	return $c;
// }

// echo compareArrays($names, $compare);






// Write a function called combine_arrays() that will take in two array values as parameters and return a new array with values from both.

// If the arrays have the same value at the same index, then it should only be added once.
// If the values differ, then the value from the first array should be added and then the second.
// The function will need to use at least two of the array functions we discussed: array_shift(), array_unshift(), array_push(), and array_pop().
// Test your combine_arrays() function with $names and $compare. The resulting array should look like:

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function combine_arrays($names, $compare){

	// made a new array for the two arrays to be put in to
	$newArray = []; 

	foreach($names as $array1 => $key){
		echo $array1[$key] . PHP_EOL;
		echo $compare[$key] . PHP_EOL;
		if ($array1[$key] !== $compare[$key]){
			array_push($newArray, $key);
			// array_push($newArray, $key);
		}
		return $newArray;
	}

}
		echo combine_arrays($names, $compare);







