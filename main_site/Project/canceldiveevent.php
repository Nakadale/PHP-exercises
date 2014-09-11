<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional// EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml11-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang = "en"
<head>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
    <title>Dive Reservation System</title>
	<?php include "style_set.php" ?>
<body>
<div id="container">
	<!--Header area of webpage-->
	<div id="header">
	<img src="Images/banner.jpg">
	</div>
	<!--end of header of webpage-->
	<div id="body">
	<table style="background-color: RGB(89,146,215);"><tr><td valign="top">
	<!--start of navigation area of webpage-->
	<?php include "navi.php" ?>
	<!--end of navigation area of webpage-->
	</td><td align="left" valign="top" style="width:557px;overflow: auto;margin: 0px 16px 8px 0px;float:left;">
		<?php
		$user = "root";
		//$pass = "dive";
		$db = "sheaqu_dive";
		$link = @mysql_connect( "localhost", $user, $pass );
		//$user = "sheaqu_dive";
		//$pass = "dive";
		//$db = "sheaqu_dive";
		//$link = @mysql_connect( "mysql4.freehostia.com", $user, $pass );
		echo '<br /><form method="POST"><fieldset>';
		echo 'Sort: <select size="1" height="1" name="sorts">';
		echo 	'<option value="1">Asc</option>';
		echo 	'<option value="2">Desc</option>';
		echo '</select>';
		echo '&nbsp&nbsp&nbsp Keyword: <input type="text" name="search" size="30" class="text" />';
		echo ' <input type="submit" name="submit" value="Search" ></fieldset></form>';
		echo '<br /><table style="width:100%;">';
		echo '<tr>';
			echo '<td align="center">Cancel Dive Event</td>';
		echo '</tr>';
		echo '</table>';
		echo '<table border="1" style="width:1000px;">';
		 echo '<tr id="com_head">';
			echo '<td style="width:8%;">Dive Number</td>';
			echo '<td style="width:7%;">Dive Date</td>';
			echo '<td style="width:17%;">Dive Name</td>';
			echo '<td style="width:17%;">Boat Name</td>';
			echo '<td style="width:12%;">Marina</td>';
			//echo '<td align="center">Marina Address</td>';
			echo '<td style="width:12%;">Alternate Marina</td>';
			//echo '<td align="center">Alternate Marina Address</td>';
			echo '<td style="width:8%;">Show Time</td>';
			echo '<td style="width:7%;">Limit</td>';
			echo '<td style="width:7%;">Price</td>';
			echo '<td>Cancel</td>';
		echo '</tr>';
		$search = $_POST['search'];
		$sorts = $_POST['sorts'];
		if (!$link) {
		die("Couldn't connect to MySQL: ".mysql_error());
		}
		mysql_select_db($db,$link)
		or die ( "Couldn't open $db: ".mysql_error() );
		if ($sorts == 1){
		$result = @mysql_query("SELECT * FROM dive_info WHERE dive_name LIKE '$search%' OR dive_number LIKE '$search%' OR boat_name LIKE '$search%' ORDER BY dive_number ASC",$link);}
		else if ($sorts == 2){
		$result = @mysql_query("SELECT * FROM dive_info WHERE dive_name LIKE '$search%' OR dive_number LIKE '$search%' OR boat_name LIKE '$search%' ORDER BY dive_number DESC",$link);}
		else if ($sorts == NULL ){
		$result = @mysql_query("SELECT * FROM dive_info WHERE dive_name LIKE '$search%' OR dive_number LIKE '$search%' OR boat_name LIKE '$search%' ORDER BY dive_number ASC",$link);}	
		$num_rows = mysql_num_rows( $result );
		while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){ 
		echo '<tr id="com_body"><form action="divedel.php" method="POST">';
			echo '<td>'.$row['dive_number'].'</td>';
			echo '<td>'.$row['dive_month'].'/'.$row['dive_day'].'/'.$row['dive_year'].'</td>';
			echo '<td>'.$row['dive_name'].'</td>';
			echo '<td>'.$row['boat_name'].'</td>';
			echo '<td>'.$row['marina'].'</td>';
			//echo '<td>'.$row['marina_add'].'</td>';
			echo '<td>'.$row['alt_marina'].'</td>';
			//echo '<td>'.$row['alt_marina_add'].'</td>';
			echo '<td>'.$row['showtime'].'</td>';
			echo '<td>'.$row['limits'].'</td>';
			echo '<td>'.$row['price'].'</td>';
			echo '<td>';
			echo '<input type="hidden" name="hideval" value="'.$row['dive_number'].'">';
			echo '<input type="submit" name="Edit" value="Cancel"></td>';
		echo '<p></form></tr>';
		}
		echo '</table>';
		?>
	</td>
	<td valign="top" style="width:190px;">
	<?php include "comment.php" ?>
	</td>
	</tr></table>
	<!--Footer of webpage-->
	<?php include "footer.php" ?>
	<!--end of footer-->
	</div>	
</div>

</body>
</html>