<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional// EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml11-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang = "en"
<head>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
    <title>Dive Event List</title>
</head>
</body>
<?php
$user = "root";
//$pass = "dive";
$db = "dive";
$link = @mysql_connect( "localhost", $user, $pass );
//$user = "sheaqu_dive";
//$pass = "dive";
//$db = "sheaqu?dive";
//$link = @mysql_connect( "mysql4.freehostia.com", $user, $pass );
if (!$link) {
die("Couldn't connect to MySQL: ".mysql_error());
}
mysql_select_db($db,$link)
or die ( "Couldn't open $db: ".mysql_error() );
$query = mysql_query("select * from dive_info",$link );
If ($query == TRUE) {
} else { print "Update cannot be performed"; }
$result = @mysql_query("SELECT * FROM dive_info ORDER BY dive_number DESC",$link);
$num_rows = mysql_num_rows( $result );
$row = mysql_fetch_assoc($result);
$lastID = $row['dive_number'];
echo '<body background="abstract_color_background_picture_8016.jpg">';
echo '<font face="Arial" size="2" color="white"><br><br><br><br>';
echo '<div align="center"><INPUT TYPE="button" VALUE="Back" onClick="history.go(-1);return true;">&nbsp&nbsp<input type=button value="Refresh Page" onClick="window.location.reload()">&nbsp&nbsp<input type="button" value="Close Window" onclick="window.close()"></div><br>';
echo 'last record number is: '.$row['dive_number'];
echo '<table cols="2" border="1" cellpadding="0" cellspacing="0" align="center" width="130%">';
 echo '<tr>';
	echo '<td align="center">Dive Event List</td>';
 echo '</tr>';
echo '</table>';
echo '<table cols="2" border="1" cellpadding="0" cellspacing="0" align="center" width="130%">';
echo '<tr>';
	echo '<td align="center">Dive Number</td>';
	echo '<td align="center">Dive Date</td>';
	echo '<td align="center">Dive Name</td>';
	echo '<td align="center">Boat Name</td>';
	echo '<td align="center">Marina</td>';
	echo '<td align="center">Marina Address</td>';
	echo '<td align="center">Alternate Marina</td>';
	echo '<td align="center">Alternate Marina Address</td>';
	echo '<td align="center">Show Time</td>';
	echo '<td align="center">Limit</td>';
	echo '<td align="center">Price</td>';
echo '<p></tr>';
for ($counter=1;$counter<=$lastID;$counter++){
$result = @mysql_query("SELECT * FROM dive_info WHERE dive_number = ".$counter."",$link );//
$row = mysql_fetch_assoc($result);
if ($row['dive_number'] != NULL){
echo '<tr>';
	echo '<td align="center">'.$row['dive_number'].'</td>';
	echo '<td align="center">'.$row['dive_month'].'/'.$row['dive_day'].'/'.$row['dive_year'].'</td>';
	echo '<td align="center">'.$row['dive_name'].'</td>';
	echo '<td align="center">'.$row['boat_name'].'</td>';
	echo '<td align="center">'.$row['marina'].'</td>';
	echo '<td align="center">'.$row['marina_add'].'</td>';
	echo '<td align="center">'.$row['alt_marina'].'</td>';
	echo '<td align="center">'.$row['alt_marina_add'].'</td>';
	echo '<td align="center">'.$row['showtime'].'</td>';
	echo '<td align="center">'.$row['limits'].'</td>';
	echo '<td align="center">'.$row['price'].'</td>';
echo '<p></tr>';
}}
//		code to get the total number of fields in DB.
//mysql_connect("mysql153.secureserver.net","java2s","password");
//   mysql_select_db("java2s");// databasename
//   $fields = mysql_list_fields("java2s","Employee");// databasename and tablename
//  echo "Total number of fields returned: ".mysql_num_fields($fields).".<br />";


echo '</table>';
echo '</font>';
echo '</body>';
?>
</body>
</html>