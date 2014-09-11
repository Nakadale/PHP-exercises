<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional// EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml11-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang = "en"
<head>
	<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
	<title>Predefined Variable</title>
</head>
<body>
<?php

// Create a shorthand version of the variable names:

$file = $_SERVER['SCRIPT_FILENAME'];
$user = $_SERVER['HTTP_USER_AGENT'];
$server = $_SERVER['SERVER_SOFTWARE'];

// Print the name of this script:
echo "<p>You are running the file:<br /><b>$file</b>\n";

// Print the server's information:
echo "<p>This server is running: <br /><b>$server</b>\n";

?>
</body>
</html>