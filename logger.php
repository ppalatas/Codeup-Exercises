<?php

function logMessage($logLevel, $message)
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