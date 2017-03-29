<?php 

$_GET;

if(isset($_GET['username'])){

	$username = $_GET['username'];
} else {

	$username = '';
}

if (isset($_GET['password'])){

	$password = $_GET['password'];

} else {
	echo "Please Enter your password."
}

 ?>

 <!DOCTYPE html>
 <html>
 	<head>
 		<title>User Login</title>
 	</head>
 <body>
 	<form method ="GET" action ="GETusername.php">
 		<label name = "Username">Username: </label>
 		<input type ="text" name = "username" id = "username"></form>
 	</form>

 	<form method = "GET" action ="GETpassword.php">
 		<label name = "Password">Password: </label>
 		<input type = "password" name = "pasword" id = "password">
 	</form>
 		<button type="submit">Login</button>

 	<h3><?php echo $username ?></h3>

 </body>
 </html>