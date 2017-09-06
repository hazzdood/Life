<?php

function respond($locationName, $actionName) // create a response for the user based on their location, command and inventory
{
	global $map; // give the function access to the map

	$location = $map[$locationName]; // load the location into a variable

	$potentialNewLocationName = interpretCommand($location, $actionName); // try to interpret the command and save the output

	if ($potentialNewLocationName != false) // if the the command the user sent is understood
	{
		$newLocationName              = $potentialNewLocationName;             // save it
		$location                     = $map[$newLocationName];                // and the new new location to variables
		$return                       = $location['description'] . '<br><br>'; // then return the new location description
		$_SESSION['data']['location'] = $newLocationName;                      // and save the new location to the users session
	}
	elseif ($actionName == 'reset' || $actionName == 'restart')          // if a reset was requested
	{
		$return = ''; // don't return anything
	}
	else        // if not
	{
		$return = 'Sorry, I don\'t understand "' . $actionName . '"<br><br>'; // tell the user the command wasn't understood
	}

	return $return; // return
}

function interpretCommand($location, $action) // interpret the users input
{
	$action = preg_replace('/ /', ')|(', $action); // separate the command into words

	foreach ($location['actions'] as $key => $value) // search through all actions for a location
	{
		if (preg_match('/(' . $action . ')/', $key)) // if any of the words in the uses command are found in the current action
		{
			return $value; // return the new location name
		}
	}

	return false; // if no match was found, ret0
}

?>
