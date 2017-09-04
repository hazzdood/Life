<?php

$location = 'start'; // set the default values for the location
$action   = '';      // and action

session_start(); // start a session to save or load the users data

if (isset($_GET['value'])) // if a command was submitted
{
	$action = $_GET['value']; // save it
}

if (isset($_SESSION['data']['location']))
{
	$location = $_SESSION['data']['location'];
}

if ($action == 'reset' || $action == 'restart' || !isset($_SESSION['old'])) // if a restart was called or the session has just been created
{
	session_unset();

	$_SESSION['old']     = true;                                                                                                                                             // remember that this session has been opened
	$_SESSION['data']    = ["location" => "start", "inventory" => ["a low IQ"]];                                                                                             // put in the default values for data
	$_SESSION['history'] = "<span class='title'>Title :)</span><br><br>You are sitting by a babbling brook. A chimpanzee sits next to you polishing a tin whistle.<br><br>"; // and history
}
elseif ($action != '')                                                                                                                                                 // if a command was given
{
	$_SESSION['history'] = $_SESSION['history'] . "> " . $_GET["value"] . "<br>\n"; // append it to the history
}

// create the map
$map =
[
	'start'           =>
	[
		'name'        => 'start',
		'description' => 'You are sitting by a babbling brook. A chimpanzee sits next to you polishing a tin whistle.',
		'actions'     =>
		[
			'walk north'   => 'forest',
			'tickle chimp' => 'brook-chimp-mad',
		],
	],

	'brook-chimp-mad' =>
	[
		'name'        => 'brook-chimp-mad',
		'description' => 'You are sitting by a babbling brook. A chimpanzee with a tin whistle looks at you menacingly.',
		'actions'     =>
		[
			'walk north'   => 'forest',
			'tickle chimp' => 'brook-chimp-very-mad',
		],
	],
]

?>
