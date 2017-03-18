<?php 


//	- Outputs the states and abbreviations of all the states starting with vowels.

	$states = [
	    'AL' => 'Alabama',
	    'AK' => 'Alaska',
	    'AZ' => 'Arizona',
	    'AR' => 'Arkansas',
	    'CA' => 'California',
	    'CO' => 'Colorado',
	    'CT' => 'Connecticut',
	    'DE' => 'Delaware',
	    'DC' => 'District of Columbia',
	    'FL' => 'Florida',
	    'GA' => 'Georgia',
	    'HI' => 'Hawaii',
	    'ID' => 'Idaho',
	    'IL' => 'Illinois',
	    'IN' => 'Indiana',
	    'IA' => 'Iowa',
	    'KS' => 'Kansas',
	    'KY' => 'Kentucky',
	    'LA' => 'Louisiana',
	    'ME' => 'Maine',
	    'MD' => 'Maryland',
	    'MA' => 'Massachusetts',
	    'MI' => 'Michigan',
	    'MN' => 'Minnesota',
	    'MS' => 'Mississippi',
	    'MO' => 'Missouri',
	    'MT' => 'Montana',
	    'NE' => 'Nebraska',
	    'NV' => 'Nevada',
	    'NH' => 'New Hampshire',
	    'NJ' => 'New Jersey',
	    'NM' => 'New Mexico',
	    'NY' => 'New York',
	    'NC' => 'North Carolina',
	    'ND' => 'North Dakota',
	    'OH' => 'Ohio',
	    'OK' => 'Oklahoma',
	    'OR' => 'Oregon',
	    'PA' => 'Pennsylvania',
	    'PR' => 'Puerto Rico',
	    'RI' => 'Rhode Island',
	    'SC' => 'South Carolina',
	    'SD' => 'South Dakota',
	    'TN' => 'Tennessee',
	    'TX' => 'Texas',
	    'VI' => 'US Virgin Islands',
	    'UT' => 'Utah',
	    'VT' => 'Vermont',
	    'VA' => 'Virginia',
	    'WA' => 'Washington',
	    'WV' => 'West Virginia',
	    'WI' => 'Wisconsin',
	    'WY' => 'Wyoming'
	];

	foreach($states as $state => $name){
		$xName = strpos($name, "x");
		
		if($xName){
			echo $name . "\n";
		}
	}

	foreach($states as $state => $name){
		$xName = strpos($name, "a");

		if(!$xName){
			echo "\t" . $name . "\n";
		}
	}

	foreach($states as $state => $name){
		
		if($name[0] == 'A'  || $name[0] == 'E' || $name[0] == 'I' || $name[0] == 'O' || $name[0] == 'U'){
			echo $name . PHP_EOL;
		}	
	}

	foreach($states as $state => $name){
		
		if($state[0] == 'A' || $state[0] == 'E' || $state[0] == 'I' || $state[0] == 'O' || $state[0] == 'U'){
			echo "\t" . $state . PHP_EOL;
		}	
	}
// Exercises Part 2
// Use a foreach to make a new array containing states that start with and end with vowels
	// call the array $statesStartingAndEndingWithVowels
	// echo "These are states starting and ending with vowels"
	// then echo each state name in this new array
	
	foreach($states as $state => $name){
		$vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
		$statesStartingAndEndingWithVowels = [];

		if (in_array($name[0], $vowels, $strict = true) && (in_array(substr($name, -1), $vowels, $strict = true))){
			echo "\t" . "These are states starting and ending with vowels" . " " . $name . PHP_EOL;
			$statesStartingAndEndingWithVowels[] = $name;
		}
	}

// use a foreach to construct a new array containing states with names that are more than one word.
	// call the array $statesWithMoreThanOneWordNames
	// echo "These are the states with more than one word in their name"
	// then echo each state name below

	$statesStartingAndEndingWithVowels = [];
	foreach ($states as $state => $name){
		if(strpos($name, ' ') !== false){
			echo "These are the States with more than one word in their name: " . $name . PHP_EOL;
		}
	}
// use a foreach to construct a new array of all the states with "North" "East" "South" or "West"
	// call the array $arrayOfCardinalStates
	// echo "These are states with north, south, east, or west in their name"

	$arrayOfCardinalStates = [];

	foreach($states as $state => $name){
		$directions = ['North', 'East', 'South', 'West'];
	
	if(strstr($name, "North") || strstr($name, "East") || strstr($name, "South") || strstr($name, "West")){
		echo "These are States with north, south, east, or west in their name: " . PHP_EOL . " " . $name . PHP_EOL;
	}
}


