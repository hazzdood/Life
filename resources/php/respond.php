<?php

function respond($locationName, $actionName) // create a response for the user based on their location, command and inventory
{
	global $map; // give the function access to the map

	$locationName = 'start'; // set the default values for locationName
	$location     = [];      // and location

	$location = $map[$locationName]; // load the location into a variable

	if (isset($location['actions'][$actionName])) // if the the command the user sent is understood
	{
		$newLocationName = $location['actions'][$actionName]; // save the new location name
		$location        = $map[$newLocationName];            // and new location to variables
		$return          = $location['description'] . '<br><br>';           // return the new location description
	}
	elseif ($actionName == 'reset' || $actionName == 'restart')
	{
		$return = '';
	}
	else                                                // if not
	{
		$return = 'Sorry, I don\'t understand "' . $actionName . '"<br><br>';
	}

	return $return;
}

?>
