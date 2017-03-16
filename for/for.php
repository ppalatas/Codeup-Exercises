<?php 


// print off even numbers from numbers inputted by a user 


fwrite(STDOUT, "Enter in the starting even number\n");
	
$start = trim(fgets(STDIN));
	
fwrite(STDOUT, "Enter the ending number.\n");

$end = trim(fgets(STDIN));

fwrite(STDOUT, "Enter the number to count by: \n");

$countBy = trim(fgets(STDIN));
	
	if (empty($countBy)){
		$countBy = 1;

	}
// input


	if (!is_numeric($start) || !is_numeric($end)){

		fwrite(STDOUT, "Your input has to be numeric \n");
	}

/* initialization, */
for ($i = $start; $i <= $end; $i+= $countBy){

	//process modulus
	// if ($i % 2 === 0){

	//output: only even numbers 
	echo $i . PHP_EOL;

	// }
}

//pair of numbers: i.e. min and max which would be an argv value 

//modulus would be used to print the even numbers 

















