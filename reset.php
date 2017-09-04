<?php

session_start();

session_unset();
session_destroy();

?>

<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="refresh" content="1;url=./index.html">
		<script type="text/javascript">
			window.location.href = "./index.html"
		</script>
		<title>Page Redirection</title>
	</head>
	<body>
		If you are not redirected automatically, follow <a href='./index.html'>this link</a>
	</body>
</html>
