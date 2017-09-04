<?php

function respond($locationName, $actionName) // create a response for the user based on their location, command and inventory
{
	global $map; // give the function access to the map

	$location = $map[$locationName]; // load the location into a variable

	$potentialNewLocationName = interpretCommand($location, $actionName);

	if ($potentialNewLocationName != false) // if the the command the user sent is understood
	{
		$newLocationName              = $potentialNewLocationName;
		$location                     = $map[$newLocationName];                // and new location to variables
		$return                       = $location['description'] . '<br><br>'; // return the new location description
		$_SESSION['data']['location'] = $newLocationName;
	}
	elseif ($actionName == 'reset' || $actionName == 'restart') // if a reset was requested
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
	$action = preg_replace('/ /', ')|(', $action);
	foreach ($location['actions'] as $key => $value) // search through all actions for a location
	{
		if (preg_match('/(' . $action . ')/', $key)) // if the users input matches the current action
		{
			return $value; // return the new location name
		}
	}

	return false; // if no match was found, ret0
}

?>
