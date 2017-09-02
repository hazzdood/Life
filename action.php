<?php

require './resources/php/data.php';
require './resources/php/respond.php';

$location = 'start';
$action   = '';

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
