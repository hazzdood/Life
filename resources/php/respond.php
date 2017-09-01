<?php

function createResponse($location, $action)
{
	$locationName = 'start';
	$location     = null;
	$actionName   = null;
	$action       = null;

	if (isset($location))
	{
		$locationName = $location;
	}

	$location = $map[$locationName];

	if (isset($action))
	{
		$actionName = $action;

		if (isset($location['actions'][$actionName]))
		{
			$newLocationName = $location['actions'][$actionName];

			$location = $map[$newLocationName];
		}
	}

	return $return;
}

?>
