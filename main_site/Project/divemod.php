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
	</td><td valign="top" style="width:600px;text-align:left;">
		<?php
		$divenum = $_POST['dive_number'];
		$user = "root";
		//$pass = "dive";
		$db = "sheaqu_dive";
		$link = @mysql_connect( "localhost", $user, $pass );
		//$user = "sheaqu_dive";
		//$pass = "dive";
		//$db = "sheaqu_dive";
		//$link = @mysql_connect( "mysql4.freehostia.com", $user, $pass );
		
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
		echo '<br /><form method="post" action="moddivedone.php">';
		echo '<fieldset><legend style="color:white;">Dive Event Information</legend>';
		echo '<input type="hidden" name="dive_number" value='.$divenum.'>';
		echo '<table style="width:90%;">';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp Dive Event Number:</td></b>';
		echo '<td>'.$row['dive_number'].'</td></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp Dive Name:</td></b>';
		echo '<td><input type="text" name="dive_name" size="40" maxlength="40" value="'.$row['dive_name'].'"></td></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp Boat Name:</td></b>';
		echo '<td><input type="text" name="boat_name" size="40" maxlength="60" value="'.$row['boat_name'].'"></td></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp Limit:</td></b>';
		echo '<td><input type="text" name="limit" size="40" maxlength="60" value="'.$row['limits'].'"></td></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp Price:</td></b>';
		echo '<td><input type="text" name="price" size="40" maxlength="60" value="'.$row['price'].'"></td></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp Marina:</td></b>';
		echo '<td><input type="text" name="marina" size="40" maxlength="60" value="'.$row['marina'].'"></td></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp Marina Address:</td></b>';
		echo '<td><input type="text" name="marina_add" size="40" maxlength="60" value="'.$row['marina_add'].'"></td></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp Alternate Marina:</td></b>';
		echo '<td><input type="text" name="alt_marina" size="40" maxlength="60" value="'.$row['alt_marina'].'"></td></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp Alternate Marina Address:</td></b>';
		echo '<td><input type="text" name="alt_marina_add" size="40" maxlength="60" value="'.$row['alt_marina_add'].'"></td></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp Show Time:</td></b>';
		echo '<td><select name="showtime">';
		echo '<option value="12:00 AM">12:00 AM</option><option value="12:30 AM">12:30 AM</option>';
		echo '<option value="01:00 AM">01:00 AM</option><option value="01:30 AM">01:30 AM</option>';
		echo '<option value="02:00 AM">02:00 AM</option><option value="02:30 AM">02:30 AM</option>';
		echo '<option value="03:00 AM">03:00 AM</option><option value="03:30 AM">03:30 AM</option>';
		echo '<option value="04:00 AM">04:00 AM</option><option value="04:30 AM">04:30 AM</option>';
		echo '<option value="05:00 AM">05:00 AM</option><option value="05:30 AM">05:30 AM</option>';
		echo '<option value="06:00 AM">06:00 AM</option><option value="06:30 AM">06:30 AM</option>';
		echo '<option value="07:00 AM">07:00 AM</option><option value="07:30 AM">07:30 AM</option>';
		echo '<option value="08:00 AM">08:00 AM</option><option value="08:30 AM">08:30 AM</option>';
		echo '<option value="09:00 AM">09:00 AM</option><option value="09:30 AM">09:30 AM</option>';
		echo '<option value="10:00 AM">10:00 AM</option><option value="10:30 AM">10:30 AM</option>';
		echo '<option value="11:00 AM">11:00 AM</option><option value="11:30 AM">11:30 AM</option>';
		echo '<option value="12:00 PM">12:00 PM</option><option value="12:30 PM">12:30 PM</option>';
		echo '<option value="01:00 PM">01:00 PM</option><option value="01:30 PM">01:30 PM</option>';
		echo '<option value="02:00 PM">02:00 PM</option><option value="02:30 PM">02:30 PM</option>';
		echo '<option value="03:00 PM">03:00 PM</option><option value="03:30 PM">03:30 PM</option>';
		echo '<option value="04:00 PM">04:00 PM</option><option value="04:30 PM">04:30 PM</option>';
		echo '<option value="05:00 PM">05:00 PM</option><option value="05:30 PM">05:30 PM</option>';
		echo '<option value="06:00 PM">06:00 PM</option><option value="06:30 PM">06:30 PM</option>';
		echo '<option value="07:00 PM">07:00 PM</option><option value="07:30 PM">07:30 PM</option>';
		echo '<option value="08:00 PM">08:00 PM</option><option value="08:30 PM">08:30 PM</option>';
		echo '<option value="09:00 PM">09:00 PM</option><option value="09:30 PM">09:30 PM</option>';
		echo '<option value="10:00 PM">10:00 PM</option><option value="10:30 PM">10:30 PM</option>';
		echo '<option value="11:00 PM">11:00 PM</option><option value="11:30 PM">11:30 PM</option>';
		echo '</select></td></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp Remarks:</td></b>';
		echo '<td><textarea name="comments" rows="3" cols="30" maxlength="255">'.$row['remarks'].'</textarea></td></p><br>';
		echo '</table><p>';
		echo '<div align="center"><input type="submit" name="submit" value="Submit" /></div><p></fieldset></form>';
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