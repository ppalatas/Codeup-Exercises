<?php 

  // Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $dayOfWeek = date('N');

 switch($dayOfWeek) {
     case 1:
        echo date('N') . PHP_EOL;
        	break;
     case 2:
     	echo date('N') . PHP_EOL;
        	break;
     case 3:
		echo date('N') . PHP_EOL;
        	break;
     case 4:
		echo date('N') . PHP_EOL;
       	 break;
     case 5: 
		echo date('N') . PHP_EOL;
        	break;
     case 6: 
		echo date('N') . PHP_EOL;
        	break;
     case 7:
		echo date('N') . PHP_EOL;
        	break;
 }

 if ($dayOfWeek == 1){
 	 echo date('N') . PHP_EOL;

 } elseif ($dayOfWeek == 2){
 	 echo date('N') . PHP_EOL;

 } elseif ($dayOfWeek == 3){
 	 echo date('N') . PHP_EOL;

 } elseif ($dayOfWeek == 4){
 	 echo date('N') . PHP_EOL;

 } elseif ($dayOfWeek == 5){
 	 echo date('N') . PHP_EOL;

 } elseif ($dayOfWeek == 6){
 	 echo date('N') . PHP_EOL;
 	 
 } elseif ($dayOfWeek == 7){
 	 echo date('N') . PHP_EOL;
 }