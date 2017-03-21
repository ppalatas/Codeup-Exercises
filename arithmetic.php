<?php
$a = 6; 

$b = 2;

// function(throwErrorMessage($a, $b)){
// 	return "ERROR: Both arguments must be numbers\n" . $a . "and" . $b . "are not numeric." . PHP_EOL;
// }

function add($a, $b){
	if(is_numeric($a) && is_numeric($b)){
    	return $a + $b;
		} else {
        	return "ERROR: Both arguments must be numbers\n" . $a . "and" . $b . "are not numeric." . PHP_EOL;
    }
}

function subtract($a, $b)
{
	if(is_numeric($a) && is_numeric($b)){
    	return $a - $b;
		} else {
        	return  "ERROR: Both arguments must be numbers\n" . $a . "and" . $b . "are not numeric." . PHP_EOL;
    	}
}

function multiply($a, $b)
{
	if(is_numeric($a) && is_numeric($b)){
    	return $a * $b;
		} else {
        	return  "ERROR: Both arguments must be numbers\n" . $a . "and" . $b . "are not numeric." . PHP_EOL;
    	} 
}

function divide($a, $b)
{
	if(is_numeric($a) && is_numeric($b))
	{
    	if($b === 0)
    	{
    		return "ERROR: You cannot divide by zero";
    	}
    	else 
    	{
    		return $a / $b;
    	} 
    }
    else
    {
   	   return "ERROR: Both arguments must be numbers\n" . $a . "and" . $b . "are not numeric." . PHP_EOL;
    }
}


function modulus($a, $b){
	if(is_numeric($a) && is_numeric($b))
	{
    	if($b === 0)
    	{
    		return "ERROR: You cannot divide by zero";
    	}
    	else 
    	{
    		return $a % $b;
    	} 
    }
    else
    {
   	   return "ERROR: Both arguments must be numbers\n" . $a . "and" . $b . "are not numeric." . PHP_EOL;
    }
}


// function


echo add($a, $b) . PHP_EOL;

echo subtract($a, $b) . PHP_EOL;

echo multiply($a, $b) . PHP_EOL;

echo divide($a, $b) . PHP_EOL;

echo modulus($a, $b) . PHP_EOL;

