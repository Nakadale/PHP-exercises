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
	</td><td align="center" style="width:600px;">
		<!-- right area of webpage -->
		<?php
		$dive_number = $_POST['dive_number'];
		$dive_name = $_POST['dive_name'];
		$boat_name = $_POST['boat_name'];
		$limit = $_POST['limit'];
		$price = $_POST['price'];
		$marina = $_POST['marina'];
		$marina_add = $_POST['marina_add'];
		$alt_marina = $_POST['alt_marina'];
		$alt_marina_add = $_POST['alt_marina_add'];
		$showtime = $_POST['showtime'];
		$bbq = $_POST['bbq'];
		$remarks = $_POST['comments'];
		$month = $_POST['month'];
		$day = $_POST['day'];
		$year = $_POST['year'];
		//$user = "root";
		//$pass = "dive";
		//$db = "sheaqu_dive";
		//$link = @mysql_connect( "localhost", $user, $pass );
		$user = "sheaqu_dive";
		$pass = "dive";
		$db = "sheaqu_dive";
		$link = @mysql_connect( "mysql4.freehostia.com", $user, $pass );
		//echo $dive_number;
		if (!$link) {
		die("Couldn't connect to MySQL: ".mysql_error());
		}
		mysql_select_db($db, $link)
		or die ( "Couldn't open $db: ".mysql_error() );
		$query = mysql_query("UPDATE dive_info SET dive_name ='".$dive_name."',boat_name ='".$boat_name."',limits =".$limit.",price =".$price.",marina ='".$marina."',marina_add ='".$marina_add."',alt_marina ='".$alt_marina."',alt_marina_add ='".$alt_marina_add."',showtime ='".$showtime."',bbq ='".$bbq."',remarks ='".$remarks."' WHERE
		dive_number = '".$dive_number."'",$link );
		If ($query == TRUE) {
		echo '<p><div align="top">Record Updated<br>';
		echo '<form action="index.php"><input type="submit" value="Back to Main"/></form>';
		} else { print "<br>Update cannot be performed"; }
		$result = @mysql_query("SELECT * FROM dive_info",$link );
		$num_rows = mysql_num_rows( $result );
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