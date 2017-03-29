<?php  


// Open the File 

function openFile(){
	$file = 'text/contacts.txt';
	$handle = fopen($file, "r");
	$contacts = trim(fread($handle, filesize($file)));
	fclose($handle);
	return($contacts);
}


// Create a function that takes in a file string and returns it as an array (you may choose to reuse the function from the file read exercise).

// - Create a show all function that takes in an array and echoes out all element / contacts in a clear way to the command line that matches the curriculum.

function dataArray(){
	
	$contacts = openFile();
	$newArrayFromString = explode("\n", $contacts);
	$emptyArray = [];

	foreach($newArrayFromString as $key => $contact){
	
		$explodedArray = explode("|", $contact);
		$emptyArray[$key]['Name'] = $explodedArray[0];
		$emptyArray[$key]['Number'] = $explodedArray[1];
	}

	return $emptyArray;
}

$dataArray = dataArray();




function showAll($dataArray){
	// var_dump($dataArray);
	echo " Name" . "\t" . "\t" . "|" . "\t" . "  Number" . PHP_EOL;
	echo "------------------------------------" . PHP_EOL;
	foreach($dataArray as $key => $person){
		// var_dump($person);
		$person2 = $person['Name'] . "\t" . "|" . "\t" . $person['Number'] . PHP_EOL;
		echo $person2;
	}
}

showAll(dataArray());



// - Create a search function that takes in an array and a string that searches an array for a given substring string and if found in a given element, it will echo out the given element in a way that matches the command line formatting for the show all function.

function search($dataArray){


	fwrite(STDOUT, "Please Type in a contact name" . PHP_EOL);
	$userInputs = trim(fgets(STDIN)); 
	$results =[];
	foreach ($dataArray as $index => $contact) {
		
		$search = (strpos($contact['Name'], $userInputs) !== false);
		if (isset($userInputs))
		{
			if ($search === true)
			{
				array_push($results, $contact);
			} 
			
		}
	}
	fwrite(STDOUT, "This is what we found for your contact: " . PHP_EOL);
	print_r($results);
}

// search($dataArray);



// - Create a delete function that takes in a file name, an array, and a string that searches each array element for a sub-string of the specified string and if found, rewrites to the specified file with all elements except the element that contains the passed-in string.

function delete($dataArray){
	$userInputs = trim(fgets(STDIN)); 	
	if(search($dataArray)){

	foreach($dataArray as $index => $contact){
		if($contact['Name'] == $userInputs)
		{
			fwrite(STDOUT, "Would you like to delete this contact?");
			$userInputs = trim(fgets(STDIN));

		if ($userInputs === 'yes' || $userInputs === "Yes"){
			unset($dataArray[$index]);
	
		}
		}else{
			fwrite(STDOUT, "There were no contacts by that name");
		}

		}
	}
	var_dump($dataArray);
}
	
	delete($dataArray); 




function addContact($file, $name, $number){

// create a loop that cycles through your typed string for a name that matches ..... probably an if statement 
fwrite(STDOUT, "Please Type in a contact name" . PHP_EOL);

$userInputs = trim(fgets(STDIN)); 
$results =[];
foreach ($dataArray as $index => $contact) {
	
	$search = (strpos($contact['Name'], $userInputs) !== false);
	if (isset($userInputs))
	{
		if ($search === true)
		{
			array_push($results, $contact);
		} 
	}
}

fwrite(STDOUT, "This is what we found for your contact: " . PHP_EOL);
print_r($results);

}



// - Create a function that continues to prompt the user for a numeric input between 1 and 5 if any other input is given, echoes out what action each selection will yield, and if a valid user input is given, returns the number.

Function numericInputPrompt(){

}
// - Create a run app function that takes in a file name and continues to run until the user gives an input of 5 to exit the application. The function should contain a switch statement to prompt the user for additional inputs and passes in those input values to the appropriate function call for a given selection for each case of the switch statement.


function menu(){
	switch()

}

// - Your entire application should run with single call to the runApp($filename) function.




// function parseContacts($filename)
// {
//     $contacts = array();

//     // todo - read file and parse contacts

// 		$file = 'text/contacts.txt';
		
// 		$handle = fopen($file, "r"); 
		
// 		filesize($file) . PHP_EOL;
		
// 		$contents = trim(fread($handle, filesize($file)));

// 		//Seperates the strings inside from inputting 
// 		$contentsArray = explode("\n", $contents);
// 		fclose($handle);

// 	foreach($contentsArray as $content){
		

// 		$explodedArray = explode("|", $content);

// 		// $newArray['Name'] = $explodeArray[0]; -- Renames the index of the key of [0]
// 		$newArray['Name'] = $explodedArray[0];
// 		$newArray['Number'] = localize_us_number($explodedArray[1]);
// 		var_dump($newArray);

// }
//     return $contacts;
// }

// var_dump(parseContacts('contacts.txt'));