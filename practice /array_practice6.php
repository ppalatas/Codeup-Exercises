<?php 
// Write a PHP script that inserts a new item in an array in any position. 

// Expected Output : 
// Original array :  1 2 3 4 5  

// After inserting '$' the array is : 1 2 3 $ 4 5 



$original = array(1, 2, 3, 4, 5);

array_push($original, 6);

var_dump($original);

 ?>