<?php 

//PRACTICE LOOPS 

// Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no hyphen(-) at starting and ending position. - See more at: http://www.w3resource.com/php-exercises/php-for-loop-exercises.php#sthash.9wUunJFV.dpuf

	for ($i = 1; $i <= 10; $i++){
		if ($i <= 9){
			
			echo $i  . "-";
			
		} else {
			echo $i;
		}
	}


//Create a script using a for loop to add all the integers between 0 and 30 and display the total. - See more at: http://www.w3resource.com/php-exercises/php-for-loop-exercises.php#sthash.9wUunJFV.dpuf

$sum = 0;  
for($x=1; $x<=30; $x++)  
{  
$sum +=$x;  
}  
echo "The sum of the numbers 0 to 30 is $sum"."\n"; 