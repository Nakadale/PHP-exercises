<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional// EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml11-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang = "en"
<head>
	<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
	<title>Constants</title>
</head>
<body>
<?php

// Set today's date as a constant:
define ('TODAY','August 24, 2009');

// Prints a message, using predefined constants and the TODAY Constant:
echo '<p>Today is ' . TODAY . '.<br />This server is running version <b>' . PHP_VERSION . '</b> on PHP on the <b>' . PHP_OS . '</b> operating system.</p>';
?>
</body>
</html>