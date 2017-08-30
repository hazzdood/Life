<?php

require './resources/php/data.php';
require './resources/php/layout.php';
require './resources/php/view.php';

$locationName = 'start';
$location     = null;
$actionName   = null;
$action       = null;

if (isset($_GET['location']))
{
	$locationName = $_GET['location'];
}

$location = $map[$locationName];

if (isset($_GET['action']))
{
	$actionName = $_GET['action'];

	if (isset($location['actions'][$actionName]))
	{
		$newLocationName = $location['actions'][$actionName];

		$location = $map[$newLocationName];
	}
}

renderLayout(['content' => getGameView($location)]);

?>
