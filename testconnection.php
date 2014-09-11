<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<title>Connecting to a database</title>
</head>
<body>
<?php
$db = "testtable";
$link = @mysqli_connect( "localhost",,);
if (!$link) {
die("Couldn't connect to MySQL: ".mysqli_error());
}
mysqli_select_db($link, $db)
or die ( "Couldn't open $db: ".mysqli_error() );
print "Successfully selected database \"$db\"<br />\n";
$query = "INSERT INTO address_book( first_name, last_name, address, phone, email )
values('Regnard', ‘Raquedan', ‘Quezon City’,’09192907711’, ‘regnard@raquedan.com'
)";
print "running query: <br />\n$query<br />\n";
mysqli_query($link, $query)
or die ( "INSERT error: ".mysql_error() );
</body>
</html>