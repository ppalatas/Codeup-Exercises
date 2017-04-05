 <?php  

 // 5) Write a class of Rectangle:
 //        - write properties for width, height, area

 //        - write a method of calculateArea() that when called calculates the area and sets the value of the area property ** You will need to use $this **

 //        - write a method of changeDimensions($length1, $length2) which sets new values for the width and height

 //        - Instantiate a Rectangle object in oop_test.php and set width and height to 2 and 3. 

 //        - Call and echo the results of calculateArea(). Call changeDimensions(4, 6), call calculateArea() and echo out the new area.




class Rectangle
{
	public $width;
	public $height;
	public $area;
	
	public function calculateArea($a, $b)
	{
	
		return $a * $b; 
	}
	
	public function changeDimensions($length1, $length2)
	{
	
	
	}


}
 
 // 4) Write a class of Restaurant:
 //        - write at least 5 properties of your choice // (e.g. name, numberOfEmployees, cuisine, hoursOfOperation, etc.) examples
 //        - write at least 5 methods of your choice // (e.g. cookOrder(), takeOrder(), cleanTable() etc.)
 //        - Instantiate a restaurant object and set all properties to match your favorite restaurant in oop_test.php.

// class Restaurant{ 
// 	 public $name;
// 	 public $hoursOfOperation;
// 	 public $foodServed;
// 	 public $numberOfEmployees;
// 	 public $wages;
	
	
// 	 public function nameOfRestaurant(){
// 	 	echo $this->name . PHP_EOL;
// 	}
	
// 	public function takeOrder(){
// 		echo "We'll have your order out in 15 minutes" . PHP_EOL;
// 	}
	
// 	public function deliverFood(){
// 		echo "Here is your order!" . PHP_EOL;
// 	}
	
// 	public function askPay(){
// 		echo "What is your hourly pay here? ... I need a new job." . PHP_EOL;
// 	}
	
// 	public function hourlyWageOfEmployees(){
// 		echo "Hi, how much do you make an hour here?" . PHP_EOL;
// 	}

// }



// class Car{

// // these are the variables for information about the object that you are storing with this class 

// 	// - write properties for make, model, color, miles
// public $make;
// public $model;
// public $color;
// public $miles;

//  // write methods for turnOn(), turnOff(), brake(), honk(), accelerate()

// public function turnOn()
// {
// 	echo "Your " . $this->make . " just turned on" . PHP_EOL;
// }

// public function turnOff()
// {
// 	echo "Your " . $this->make . " just turned off" . PHP_EOL;
// }

// public function brake()
// {
// 	echo "Your " . $this->make . " just applied the brakes" . PHP_EOL;
// }

// public function honk()
// {
// 	echo "Your " . $this->make . " just honked" . PHP_EOL;
// }
//  public function accelerate()
//  {
//  	echo "You are accelerating super fast" . PHP_EOL . PHP_EOL; 
//  }

//  //- write a method driveToDestination() that calls the other methods in a logical order

//  public function driveToDestination()
//  {
//  	$this->turnOn();
//  	$this->accelerate();
//  	$this->honk();
//  	$this->brake();
//  	$this->turnOff();
//  }

// }




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