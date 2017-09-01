<?php

if ($_GET['value'] == 'reset' || $_GET['value'] == 'restart')
{
	$dataFilePath = realpath("./user/data.json"); // get the path to the file
	$dataFile     = fopen($dataFilePath, "w+");   // open the file for overwriting and reading

	rewind($dataFile);
	fwrite($dataFile, "{\n	\"location\": \"start\",\n	\"inventory\":\n	[\n		\"a low IQ\",\n	],\n}\n");

	$data = json_decode("{\n	\"location\": \"start\",\n	\"inventory\":\n	[\n		\"a low IQ\",\n	],\n}\n", true); // decode the json data to an assoc array

	$historyFilePath = realpath("./user/history.html"); // get the path to the file
	$historyFile     = fopen($historyFilePath, "w+");   // open the file for overwriting and reading

	fwrite($historyFile, "<span class='title'>Figure out a way to escape the place you are in</span><br>\n<br>\n\n");
}
elseif ($_GET['value'] == '')
{
	$dataFilePath = realpath("./user/data.json");              // get the path to the file
	$dataFile     = fopen($dataFilePath, "a+");                // open the file for overwriting and reading
	$data         = fread($dataFile, filesize($dataFilePath)); // read the contest of the file
	$data         = json_decode($data, true);                  // decode the json data to an assoc array

	$historyFilePath = realpath("./user/history.html"); // get the path to the file
	$historyFile     = fopen($historyFilePath, "r");    // open the file for append writing and reading
}
else
{
	$dataFilePath = realpath("./user/data.json");              // get the path to the file
	$dataFile     = fopen($dataFilePath, "a+");                // open the file for overwriting and reading
	$data         = fread($dataFile, filesize($dataFilePath)); // read the contest of the file
	$data         = json_decode($data, true);                  // decode the json data to an assoc array

	$historyFilePath = realpath("./user/history.html"); // get the path to the file
	$historyFile     = fopen($historyFilePath, "a+");   // open the file for append writing and reading

	fwrite($historyFile, "> " . $_GET["value"] . "<br>\n");
}

rewind($historyFile);

$history = fread($historyFile, filesize($historyFilePath)); // read the contest of the file

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
