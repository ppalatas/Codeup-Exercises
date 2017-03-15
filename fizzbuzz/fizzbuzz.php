<?php 

/* Write a program that prints the numbers from 1 to 100.-- But for multiples of three print “Fizz” instead of the number and for the multiples of five print “Buzz”. For numbers which are multiples of both three and five print “FizzBuzz”. */


//Create Variable for numbers

	// $numbers = $i;

// Output printing numbers from 1 to 100
	for ($i = 1; $i <= 100; $i++){
		
// Use an if statement and modulus to show if the number is divisable by 3
	
		if ($i % 3 === 0 && $i % 5 === 0){

			echo "FizzBuzz" . PHP_EOL;
		
//divisable by 5 
		} else if ($i % 5 === 0){
	
			echo "buzz" . PHP_EOL;

//divisable by 3 && 5 
		} else if ($i % 3 === 0){
			echo "Fizz" . PHP_EOL;
		
		} else {
			
			echo $i . PHP_EOL;
		}
	}

























