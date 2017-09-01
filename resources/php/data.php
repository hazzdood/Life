<?php

if ($_GET['value'] == 'reset' || $_GET['value'] == 'restart')
{
	$historyFilePath = realpath("./user/history.html"); // get the path to the file
	$historyFile     = fopen($historyFilePath, "w+");   // open the file for overwriting and reading

	$dataFilePath = realpath("./user/history.html"); // get the path to the file
	$dataFile     = fopen($historyFilePath, "w+");   // open the file for overwriting and reading

	fwrite($historyFile, "<span class='title'>Figure out a way to escape the place you are in</span><br>\n<br>\n\n");
	fwrite($dataFile, "{\n	\"location\": \"start\",\n	\"inventory\":\n	[\n		\"a low IQ\",\n	],\n}\n");
}
elseif ($_GET['value'] == '')
{
	$historyFilePath = realpath("./user/history.html"); // get the path to the file
	$historyFile     = fopen($historyFilePath, "r");    // open the file for append writing and reading

	$dataFilePath = realpath("./user/history.html"); // get the path to the file
	$dataFile     = fopen($historyFilePath, "a+");   // open the file for overwriting and reading
}
else
{
	$historyFilePath = realpath("./user/history.html"); // get the path to the file
	$historyFile     = fopen($historyFilePath, "a+");   // open the file for append writing and reading

	$dataFilePath = realpath("./user/history.html"); // get the path to the file
	$dataFile     = fopen($historyFilePath, "a+");   // open the file for overwriting and reading

	fwrite($historyFile, "> " . $_GET["value"] . "<br>\n");
}

rewind($historyFile);

$history = fread($historyFile, filesize($historyFilePath)); // read the contest of the file

$data = fread($dataFile, filesize($historyFilePath)); // read the contest of the file
$data = json_decode($data, true);                     // decode the json data to an assoc array

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
