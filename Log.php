<?php 

class Log {
	
	public $filename;

	function logMessage($logLevel, $message){
		$date = date("Y-m-d");
	
		$filename = "log-" . $date . ".log";
	
		$hours = date("Y-m-d" . " " . "h:i:s" . PHP_EOL);
		
		$handle = fopen($this->filename, 'a');
	
		fwrite($handle, $hours . $logLevel . " " . $message);
	
		fclose($handle);

	}

	function info($message){
		$this->logMessage("INFO", $message . PHP_EOL);
	}
	
	function error($message){
		$this->logMessage("ERROR", $message . PHP_EOL);
	}

}
