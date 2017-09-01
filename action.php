<?php

require './resources/php/data.php';
require './resources/php/respond.php';

echo $history;

echo createResponse($_GET['location'], $_GET['action']);

?>
