<?php

// How would I add the string "lion" after "gorilla"?
// This exercise is done for you
$animals = ['snake', 'gorilla', 'parrot'];
$animalToAdd = 'lion';

// Array splice lets you add an element to an array at a given place

// For instance, we are searching the $animals array
// At the 2nd element - keep in mind that this doesn't go based off index #, but
// rather count($animals)

// The animal at array_splice(2) is 'gorilla', then we specify that we are only adding 1 element
// by putting array_splice(2, 0);

// So far, we have array_splice($arrayToSearch, 2, 0, "string");
// ^^ the above line would search an array called $arrayToSearch, find element 2, and add "string"
// to the right of it

array_splice($animals, 3, 0, $animalToAdd);
var_dump($animals);

$index = array_search('parrot', $animals)
if($index !== FALSE){
	unset($animals[$index]);
}

array_unshift($animals, $animalToAdd);
var_dump($animals);

