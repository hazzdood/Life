<?php

if ($_GET['value'] == 'reset' || $_GET['value'] == 'restart')
{
	$userFilePath = realpath("./user.html"); // get the path to the file
	$userFile     = fopen($userFilePath, "w+");     // open the file for overwriting and reading

	fwrite($userFile, "<span class='title'>Figure out a way to escape the place you are in</span><br>\n<br>\n\n");
}
elseif ($_GET['value'] == '')
{
	$userFilePath = realpath("./user.html"); // get the path to the file
	$userFile     = fopen($userFilePath, "r");      // open the file for append writing and reading
}
else
{
	$userFilePath = realpath("./user.html"); // get the path to the file
	$userFile     = fopen($userFilePath, "a+");     // open the file for append writing and reading

	fwrite($userFile, "> " . $_GET["value"] . "<br>\n");
}

rewind($userFile);

$user = fread($userFile, filesize($userFilePath)); // read the contest of the file

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
