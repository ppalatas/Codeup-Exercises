<?php 



$player1 = ['Rock', 'Paper', 'Scissors' ];
$player2 = ['Rock', 'Paper', 'Scissors' ];

function whoWonRockPaperScissors($array1, $array2){
	$firstplayerRandomMove = mt_rand(0, count($array1) -1);

	$randomValue = $array1[$firstplayerRandomMove];

	$secondPlayerRandomMove = mt_rand(0, count($array2) -1);

	$randomValuePlayer2 = $array2[$secondPlayerRandomMove];

	$comparison = $randomValue . PHP_EOL . $randomValuePlayer2 . PHP_EOL;

	
	echo "Player 1 chose $randomValue" . PHP_EOL . "Player 2 chose $randomValuePlayer2" . PHP_EOL;
 
 // if random value is rock and rock is greater than 
	if($randomValue == 'Rock' && $randomValuePlayer2 == 'Rock' || $randomValue == 'Paper' && $randomValuePlayer2 == 'Paper' || $randomValue == 'Scissors' && $randomValuePlayer2 == 'Scissors'){
		echo "You tied! Try Again!";

	} else if ($randomValue == 'Rock' && $randomValuePlayer2 == 'Scissors' || $randomValue == 'Paper' && $randomValuePlayer2 == 'Rock' || $randomValue == 'Scissors' && $randomValuePlayer2 == 'Paper'){
		
		echo "Player 1 wins!";
	} else {
		echo "Player 2 Wins!";
	}
}

whoWonRockPaperScissors($player1, $player2);













 ?>