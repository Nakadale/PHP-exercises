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
	</td><td align="center" valign="top" style="width:600px;">
		<?php
		$divenum = $_POST['hideval'];
		//$user = "root";
		//$pass = "dive";
		//$db = "sheaqu_dive";
		//$link = @mysql_connect( "localhost", $user, $pass );
		$user = "sheaqu_dive";
		$pass = "dive";
		$db = "sheaqu_dive";
		$link = @mysql_connect( "mysql4.freehostia.com", $user, $pass );
		if (!$link) {
		die("Couldn't connect to MySQL: ".mysql_error());
		}
		mysql_select_db($db,$link)
		or die ( "Couldn't open $db: ".mysql_error() );
		$query = mysql_query("select * from dive_info",$link );
		If ($query == TRUE) {
		} else { print "Update cannot be performed"; }
		$result = @mysql_query("SELECT * FROM dive_info WHERE dive_number=".$divenum."",$link);
		$num_rows = mysql_num_rows( $result );
		$row = mysql_fetch_assoc($result);
		echo '<form method="post" action="view_dive_schedule.php">';
		echo '<fieldset><legend style="color:white;">Dive Event Information</legend>';
		echo '<input type="hidden" name="dive_number" value='.$divenum.'>';
		echo '<table style="width:90%;text-align:left;">';
		echo '<tr><td width="35%"><b>&nbsp&nbsp&nbsp&nbsp Dive Name:</td></b>';
		echo '<td>'.$row['dive_name'].'</td></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp Boat Name:</td></b>';
		echo '<td>'.$row['boat_name'].'</td></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp Limit:</td></b>';
		echo '<td>'.$row['limits'].'</td></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp Price:</td></b>';
		echo '<td>'.$row['price'].'</td></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp Marina:</td></b>';
		echo '<td>'.$row['marina'].'</td></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp Marina Address:</td></b>';
		echo '<td>'.$row['marina_add'].'</td></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp Alternate Marina:</td></b>';
		echo '<td>'.$row['alt_marina'].'</td></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp Alternate Marina Address:</td></b>';
		echo '<td>'.$row['alt_marina_add'].'</td></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp Show Time:</td></b>';
		echo '<td>'.$row['showtime'].'</td></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp Remarks:</td></b>';
		echo '<td>'.$row['remarks'].'</td></p><br>';
		echo '</table><p>';
		echo '<div align="center"><input type="submit" name="submit" value="Back" /></div><p></fieldset></form>';
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