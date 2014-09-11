<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<title>Updating data data</title>
</head>
<body>
<?php
$user = "root";
//$pass = "password";
$db = "dive";
$link = @mysql_connect( "localhost", $user, $pass );
if (!$link) {
die("Couldn't connect to MySQL: ".mysql_error());
}
print "<h2>Successfully connected to server</h2>\n\n";
mysql_select_db($db, $link)
or die ( "Couldn't open $db: ".mysql_error() );
print "Successfully selected database \"$db\"<br />\n";
$query = mysql_query("UPDATE dive_info SET dive_name ='tester', boat_name ='works!', limit = 10 WHERE
dive_number=5",$link );
If ($query == TRUE) {
print "Updated: ".mysql_affected_rows($link);
} else { print "Update cannot be performed"; }
$result = @mysql_query("SELECT * FROM dive_info",$link );
$num_rows = mysql_num_rows( $result );
print "<table border=\"1\">\n";
while ( $a_row = mysql_fetch_row( $result ) ) {
print "<tr>\n";
foreach ( $a_row as $field ) {
print "\t<td>".$field."</td>\n";
}
print "</tr>\n";
}
print "</table>\n";
mysql_close( $link );
?>
</body>
</html>