<?php


// Create a file in your exercises directory called Log.php. The naming here is important; this file will contain a class called Log that will be the wrapper for your logger functions. Filenames for classes should match their class name.
// In your Log class you will need:
// A property called $filename where you store the name of the file for the log.
// A method called logMessage() that will take in a log level and message as before. It will open the file stored in $filename for appending, output the message in the same format as before, and then close the handle.
// Methods info() and error() that will take in a message and forward it on to logMessage() along with the relevant log level.
// Create a log_test.php file in your exercises directory. At the top of log_test.php, be sure to require_once 'Log.php';. In your code, you will need to:
// Create an instance of the Log class
// Set the $filename property in the class; use the format log-YYYY-MM-DD.log.
// Call the methods logMessage(), info(), and error() with to test the functionality of each.
// Use log_test.php to test your class by calling it from the command line.
// For future thought: Our test script had to manually generate and assign the filename property. Furthermore, logMessage() must repeatedly open and close the file handle each time it is called. If there was some what to initialize values when creating an object, how could we take advantage of that to solve these problems?


public function logMessage($logLevel, $message)
{
	$date = date("Y-m-d");

	$file = "log-" . $date . ".log";

	$hours = date("Y-m-d" . " " . "h:i:s" . PHP_EOL);
	
	$handle = fopen($file, 'a');

	fwrite($handle, $hours . $logLevel . " " . $message);

	fclose($handle);

    // todo - complete this function
}

function logInfo(){

logMessage("INFO", "This is an info message." . PHP_EOL);
}

function logError(){

logMessage("ERROR", "This is an info message.");
}

logInfo();
logError();
