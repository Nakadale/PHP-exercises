<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<title>Connecting to a database</title>
</head>
<body>
<?php
$user = "root";
$db = "testdb";
$link = @mysql_connect( "localhost", $user);
if (!$link) {
die("Couldn't connect to MySQL: ".mysql_error());
}
print "<h2>Successfully connected to server</h2>\n\n";

mysql_select_db($db,$link)
or die ( "Couldn't open $db: ".mysql_error() );
print "Successfully selected database \"$db\"<br />\n";
mysql_close( $link );
?>
</body>
</html>