<?php 
//  XXX Create a log_test.php file in your exercises directory. At the top of log_test.php, be sure to require_once 'Log.php';. In your code, you will need to:

	// Use log_test.php to test your class by calling it from the command line.
	// For future thought: Our test script had to manually generate and assign the filename 	property. Furthermore, logMessage() must repeatedly open and close the file handle each time it is called. If there was some what to initialize values when creating an object, how could we take advantage of that to solve these problems?


require_once "Log.php";

// XXX Create an instance of the Log class
$log = new Log();

$log->error("$bob is undefined ");


// Set the $filename property in the class; use the format log-YYYY-MM-DD.log.
// $log->info("user logged in");
// $log->("Some other user logged in");

// $log->error("Something went wrong");


// Call the methods logMessage(), info(), and error() with to test the functionality of each.

// $firstLog->logMessage() . PHP_EOL;

// $firstLog->error("You have an error.") . PHP_EOL;

// $firstLog->info("Here is your info.") . PHP_EOL;

 ?>