<?php
// add hi to the array 


$array = ['pants', 'shirt', 'shoes'];

function addString($arrayx, $stringToPush){
	array_push($arrayx, $stringToPush);
	return $arrayx;
}

var_dump(addString($array, "Hi"));