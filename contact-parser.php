<?php

function localize_us_number($phone) {
  $numbers_only = preg_replace("/[^\d]/", "", $phone);
  return preg_replace("/^1?(\d{3})(\d{3})(\d{4})$/", "$1-$2-$3", $numbers_only);
}

function parseContacts($filename)
{
    $contacts = array();

    // todo - read file and parse contacts

		$file = 'text/contacts.txt';
		
		$handle = fopen($file, "r"); 
		
		filesize($file) . PHP_EOL;
		
		$contents = trim(fread($handle, filesize($file)));

		//Seperates the strings inside from inputting 
		$contentsArray = explode("\n", $contents);
		fclose($handle);

	foreach($contentsArray as $content){
		

		$explodedArray = explode("|", $content);

		// $newArray['Name'] = $explodeArray[0]; -- Renames the index of the key of [0]
		$newArray['Name'] = $explodedArray[0];
		$newArray['Number'] = localize_us_number($explodedArray[1]);
		var_dump($newArray);

	}
    return $contacts;
}

var_dump(parseContacts('contacts.txt'));
