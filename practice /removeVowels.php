<?php  

$letters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i'];

function deleteVowels($array){
	$newArray = []; 
	foreach($array as $letter){
		if($letter != 'a' && $letter != 'e' && $letter != 'i'){
			$newArray[] = $letter;
		}
	}
	return $newArray;
}
print_r (deleteVowels($letters));