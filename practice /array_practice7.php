<?php 
//Write a PHP script to sort the following associative array : Go to the editor 

//array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") 

// a) ascending order sort by value 
// b) ascending order sort by Key 
// c) descending order sorting by Value 
// d) descending order sorting by Key 

$array = array("Sophia"=>"31", "Jacob"=>"41", "William"=>"39", "Ramesh"=>"40");

foreach($array as $value => $key){
	asort($array);
}
	var_dump($array);

foreach($array as $value => $key){
	krsort($array);
}
	var_dump($array);

foreach($array as $value => $key){
	arsort($array);
}
	var_dump($array);

foreach($array as $value => $key){
	ksort($array);
}
	var_dump($value);

 ?>