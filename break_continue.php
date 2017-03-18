<?php  

$random = rand(1, 100); 

for ($i = 1; $i <= 100; $i++){
	if ($i % 2){
		continue;
	}
	echo $i . PHP_EOL;
}

