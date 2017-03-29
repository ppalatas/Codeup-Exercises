<?php 
function pageController(){

	$_GET;

	var_dump($_GET);

	$data = array();

	$data['message'] = 'counter';
	if(isset($_GET['q'])){
		$data['counter'] = $_GET['counter'];
	} else {
		$data['counter'] = 0;
	}

	if(isset($_GET['q'])){
		if($_GET['q'] == 'hit'){
			$data['counter']++;
		} else{
			$data['counter']--;
		}
	}
	return $data;
}
extract(pageController());





 ?>

 <!DOCTYPE html>
 	<html>
 	<head>
 		<title>Ping</title>
 	</head>
 	<body>
 		<form method ="GET" action = "pong.php">
			<input type = "hidden" name = "counter" value = <?php $counter ?>>
			<input type = "hidden" name = "q" value = "hit">
			<button type = "submit">HIT</button>
 		</form>
		<form method = "GET" action = "pong.php">
			<input type = "hidden" name = "counter" message = <?php $counter ?>>
			<input type = "hidden" name = "q" value = "miss">
			<button type = "submit">MISS</button>
		</form>
 	</body>
 </html>