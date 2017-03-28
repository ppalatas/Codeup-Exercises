<?php 

$exclamationPoint = 'Hello! World!!!';

function remove_exclamation_marks($string) {
 
	$trimmed = str_replace("!", "", $string);

	return $trimmed;
}

echo remove_exclamation_marks($exclamationPoint) . PHP_EOL;