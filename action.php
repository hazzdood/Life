<?php

require './resources/php/data.php';    // load the map and the users session
require './resources/php/respond.php'; // load the response manager

$location = 'start'; // set the default values for the location
$action   = '';      // and action

if (isset($_GET['value']))
{
	$action = $_GET['value'];
}
elseif (isset($_SESSION['data']['location']))
{
	$location = $_SESSION['data']['location'];
}

if ($action != '')
{
	$_SESSION['history'] = $_SESSION['history'] . createResponse($location, $action);
}

echo $_SESSION['history'];

?>
