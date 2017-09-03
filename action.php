<?php

require './resources/php/data.php';    // load the map and the users session
require './resources/php/respond.php'; // load the response manager

$location = 'start'; // set the default values for the location
$action   = '';      // and action

if (isset($_GET['action']))
{
	$action = $_GET['action'];
}
elseif (isset($_SESSION['data']['location']))
{
	$location = $_SESSION['data']['location'];
}

$_SESSION['history'] = $_SESSION['history'] . createResponse($location, $action);

echo $_SESSION['history'];

?>
