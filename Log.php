<?php 



class Log {
	
	// In your Log class you will need:
	// A property called $filename where you store the name of the file for the log.
	//Filenames for classes should match their class name.

	public $filename;
	public $handle;

	public function __construct($prefix = 'log'){

		// run these specific lines of code as soon as we make a new log object 
		// take in a parameter called $prefix. if nothing is passed to the constructor, the $prefix should default to 'log'. 
		$this->filename = $prefix . "-" . date('Y-m-d') . "log";
		$this->handle = fopen($this->filename, 'a');
		
	}
	// public $logLevel;
	// public $message;

	// A method called logMessage() that will take in a log level and message as before. It will open the file stored in $filename for appending, output the message in the same format as before, and then close the handle.

	public function logMessage($logLevel, $message){
		$date = date("Y-m-d H:i:s");
	
		$logEntry = PHP_EOL . "$timeStamp - $level - $message";
		fwrite($this->handle, $logEntry);

	}

	// Methods info() and error() that will take in a message and forward it on to logMessage() along with the relevant log level.

	public function info($message){
		$this->logMessage("INFO", $message . PHP_EOL);
	}
	
	public function error($message){
		$this->logMessage("ERROR", $message . PHP_EOL);
	}

	public function __destruct(){
		fclose($this->handle);
	}

}
