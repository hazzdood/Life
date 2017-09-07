<?php

require './resources/php/map.php'; // load the map

$title = 'Life. Just life.'; // set the title

$location = 'start'; // set the default values for the location
$action   = '';      // and action

session_start(); // start a session to save or load the users data

if (isset($_GET['value'])) // if a command was submitted
{
	$action = $_GET['value']; // save it
}

if (isset($_SESSION['data']['location'])) // if a location is saved to the users session
{
	$location = $_SESSION['data']['location']; // save it
}

if ($action == 'reset' || $action == 'restart' || !isset($_SESSION['old'])) // if a restart was called or the session has just been created
{
	session_unset(); // empty the users session

	$_SESSION['old']     = true;                                                                                            // remember that this session has been opened
	$_SESSION['data']    = ["location" => "start"];                                                                         // put in the default values for data
	$_SESSION['history'] = '<span class="title">' . $title . '</span><br><br>' . $map['start']['description'] . '<br><br>'; // and history
}
elseif ($action != '')                                                                                                // if not and a command was given
{
	$_SESSION['history'] = $_SESSION['history'] . "> " . $_GET["value"] . "<br>\n"; // append it to the history
}

?>
