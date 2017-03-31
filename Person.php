 <?php  
// 2) Write a class of Pet:
 //        - write properties for species, weight, color, name
 //        - write methods for eat, move, sleep
 //        - Instantiate 3 different pet objects and set all properties in oop_test.php.

 class Pet{

// Variable definitions for what you want outputted as information on your test page. 
	public $species;
	public $weight;
	public $color;
	public $name;


	public function eat()
	{
		echo $this->"Your pet just ate!";
	}

	public function sleep()
	{
		echo $this->"Your pet is now sleeping";
	}

	public function move()
	{
		echo $this->"Your pet is on the move";
	}
}
 