<?php
// add hi to the array 


$array = ['pants', 'shirt', 'shoes'];

function addToArray($array, $string){
	
	array_push($array, $string);

}
echo addToArray($array, 'Hi');