 <?php  

class Car{

// these are the variables for information about the object that you are storing with this class 

	// - write properties for make, model, color, miles
public $make;
public $model;
public $color;
public $miles;

 // write methods for turnOn(), turnOff(), brake(), honk(), accelerate()

public function turnOn()
{
	echo "Your " . $this->make . " just turned on" . PHP_EOL;
}

public function turnOff()
{
	echo "Your " . $this->make . " just turned off" . PHP_EOL;
}

public function brake()
{
	echo "Your " . $this->make . " just applied the brakes" . PHP_EOL;
}

public function honk()
{
	echo "Your " . $this->make . " just honked" . PHP_EOL;
}
 public function accelerate()
 {
 	echo "You are accelerating super fast" . PHP_EOL . PHP_EOL; 
 }

 //- write a method driveToDestination() that calls the other methods in a logical order

 public function driveToDestination()
 {
 	$this->turnOn();
 	$this->accelerate();
 	$this->honk();
 	$this->brake();
 	$this->turnOff();
 }

}






























// // 2) Write a class of Pet:
//  //        - write properties for species, weight, color, name
//  //        - write methods for eat, move, sleep
//  //        - Instantiate 3 different pet objects and set all properties in oop_test.php.

//  class Pet{

// // Variable definitions for what you want outputted as information on your test page. 
// 	public $species;
// 	public $weight;
// 	public $color;
// 	public $name;


// 	public function eat()
// 	{
// 		echo $this->name . " just ate!" . PHP_EOL;
// 	}

// 	public function sleep()
// 	{
// 		echo $this->name . " is asleep" . PHP_EOL;
// 	}

// 	public function move()
// 	{
// 		echo $this->name . "is on the move";
// 	}
// }
//  