<?php

session_start(); // start a session to save the users data

if ($_GET['value'] == 'reset' || $_GET['value'] == 'restart' || !isset($_SESSION['old'])) // is a restart was called or the session has just been created
{
	session_unset();

	$_SESSION['old']     = true;                                                                                       // remember that this session has been opened
	$_SESSION['data']    = ["location" => "start", "inventory" => ["a low IQ"]];                                       // put in the default values for data
	$_SESSION['history'] = "<span class='title'>Figure out a way to escape the place you are in</span><br>\n<br>\n\n"; // and history
}
elseif ($_GET['value'] != '')                                                                                    // if a command was given
{
	$_SESSION['history'] = $_SESSION['history'] . "> " . $_GET["value"] . "<br>\n"; // append it to the history
}

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
