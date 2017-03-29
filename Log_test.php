<?php 

require_once "Log.php";
$log = new Log();
$log->filename = "log-" . date("Y-m-d") . ".log";

$log->error("You have an error.") . PHP_EOL;

 ?>