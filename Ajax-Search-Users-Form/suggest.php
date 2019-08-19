<?php
// People Array 
$people[] = "Rachel";
$people[] = "Rose";
$people[] = "Elena";
$people[] = "Mark";
$people[] = "Jessica";
$people[] = "Cody";
$people[] = "Christie";
$people[] = "Ashley";
$people[] = "Amanda";
$people[] = "Carl";
$people[] = "Fiona";
$people[] = "Laura";
$people[] = "Angela";
$people[] = "John";
$people[] = "Nicole";
$people[] = "Sam";
$people[] = "Jack";
$people[] = "Holly";
$people[] = "Molly";
$people[] = "Colleen";
$people[] = "Ozzy";
$people[] = "Greg";
$people[] = "Mallory";
$people[] = "Ben";
$people[] = "Josh";

// Get Query String, REQUEST SUPERGLOBAL
$q = $_REQUEST['q'];

$suggestion = "";

// Get Suggestions
if($q !== ""){
	$q = strtolower($q);
	$len = strlen($q);
	// Loop thru people
	foreach($people as $person){
		if(stristr($q, substr($person, 0, $len))){
			if($suggestion === ""){
				$suggestion = $person;
			} else {
				// Append person
				$suggestion .= ", $person";
			}
		}
	}
}

echo $suggestion === "" ? "No Suggestions" : $suggestion;