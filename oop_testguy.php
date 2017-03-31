<?php 

 // 2) Write a class of Pet:
 //        - write properties for species, weight, color, name
 //        - write methods for eat, move, sleep
 //        - Instantiate 3 different pet objects and set all properties in oop_test.php.

// this is my object 
require "Petoop.php";
$firstPet = new Pet();


//writing the properties of the firstPet - setting the properties
$firstPet->species = "dog";
$firstPet->weight = "71.5";
$firstPet->color = "black"; 
$firstPet->name = "Strider";

$firstPet->sleep();

$firstPet->eat();

$firstPet->move();
















$secondPet = new Pet();
$thirdPet = new Pet();
































// Procedural code
//creating a new object
$guy = new Person();

$guy->name = "Bob";
$guy->age = "43";

// echo returnName($name);
	//echo then the object you want echoed and the the function to make it happen
echo $guy->returnName();

// echoAge($age);
$guy->echoAge();

// $employed = getJob($employed);
$guy->employed();

// var_dump($employed);
var_dump $guy->employed();

// $age = getOlder($age);
$guy->getOlder();

// echoAge($age);

$guy->echoAge();

// $age = passAway($age);

$guy->passAway();

// echoAge($age);
echo $guy->echoAge();

































 ?>