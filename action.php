<?php

require './resources/php/data.php';    // load the map and the users session
require './resources/php/respond.php'; // load the response manager

$location = 'start'; // set the default values for the location
$action   = '';      // and action
if ($action != '') // if an action was sent from the user
{
	$_SESSION['history'] = $_SESSION['history'] . respond($location, $action); // create a response and append it to the history
}


echo $_SESSION['history'];

?>
