// <?php  


//Nathan loves cycling.

// Because Nathan knows it is important to stay hydrated, he drinks 0.5 litres of water per hour of cycling.

// You get given the time and you need to return the number of litres Nathan will drink, rounded to the smallest value.

// For example:

// time = 3 		litres = 1
// time = 6.7 		litres = 3

// time = 11.8     litres = 5 -->




// create a loop that represents hours cycled up to 10 hours
for ($h = 0; $h < 10; $h++){
	
	//create a variable for water and if 1 hour has passed, add .5 litres of water 
	$water = $h * .50;

	echo "time = $h" . "\t" . "Liters = $water" . PHP_EOL;

}