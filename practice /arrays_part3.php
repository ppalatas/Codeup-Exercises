<?php

// #1
// How would you access the string "Grace" in the $arr?

$arr = ['name' => 'Paul',
'names' => ['Grace', 'Randy', 'Tom', 'Tracey', 'Reggie']];


foreach($arr as $name => $names){
    if($name == 'names'){
        echo $names[0] . PHP_EOL;
    }
}





// #2
// How would you access the string "Boston" in $arrTwo?

$arrTwo = ['California', ['Texas', 'Missouri', 'Massachusets' => ['Boston']]];

// Type the answer to #2 below this line
print_r($arrTwo);


foreach($arrTwo as $state => $v2){
    if ($v2 == 'Texas'){
        echo $v2[0];
    }
}





















// Don't scroll too far down unless you want the answer to problem #2







































































// // foreach through the first array
// foreach($arrTwo as $index)
// {
//     // check if the array index is greater than California
//     if($index > 0)
//     {
//         // if it is, for each through the second array
//         foreach($index as $key => $val)
//         {
//             // check if the key === 'Massachusets'
//             if($key === 'Massachusets')
//             {
//                 // if it does, echo the value of that key
//                 foreach($val as $KEY => $VAL)
//                 {
//                     // uncomment the line below this to echo "Boston"
//                     // echo $VAL . PHP_EOL;
//                 }
//             }
//         }
//     }
// }