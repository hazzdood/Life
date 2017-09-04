<?php

require './resources/php/data.php';    // load the map and the users session
require './resources/php/respond.php'; // load the response manager

if ($action != '') // if an action was sent from the user
{
	$_SESSION['history'] = $_SESSION['history'] . respond($location, $action); // create a response and append it to the history
}


echo $_SESSION['history']; // print the history

?>
