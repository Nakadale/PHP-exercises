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
	</td><td valign="top" style="width:580px;">
	<!--start of middle area of webpage-->
		<form action="registration_done.php" method="post">
		<fieldset><legend style="color:white;">Dive Event Information</legend>
		<p>	
			<table style="text-align:left;">
			<tr><td><b>&nbsp&nbsp&nbsp&nbsp Dive Date:</b></td>
			<td>
			<?php
			//Make the months array:
			$months = array(1 => 'January', 'Febuary', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
			//Make the days and years arrays:
			$days = range(1,31);
			$years = range(2008, 2018);
			//Make the months pull-down menu:
			echo '<select name="month">';
			foreach ($months as $months => $value){	echo "<option value=\"$months\">$value</option>\n";}
			echo '</select>';
			echo '&nbsp&nbsp';
			//Make the days pull-down menu:
			echo '<select name="day">';
			foreach ($days as $days => $value){ echo "<option value=\"$value\">$value</option>\n";}
			echo '</select>';
			echo '&nbsp&nbsp';
			//Make the years pull-down menu:
			echo '<select name="year">';
			foreach ($years as $years => $value){ echo "<option value=\"$value\">$value</option>\n";}
			echo '</select>';
			?></td>
			<tr><td><b>&nbsp&nbsp&nbsp&nbsp Dive Name:</b></td>
			<td><input type="text" name="dive_name" size="40" maxlength="60"/></td></tr></p>
			<tr><td><b>&nbsp&nbsp&nbsp&nbsp Boat Name:</b> </td>
			<td><input type="text" name="boat_name" size="40" maxlength="60" /></td></tr></p>
			<tr><td><b>&nbsp&nbsp&nbsp&nbsp Limit:</b></td>
			<td><input type="text" name="limit" size="40" maxlength="60" /></td></tr></p>
			<tr><td><b>&nbsp&nbsp&nbsp&nbsp Price:</b></td>
			<td><input type="text" name="price" size="40" maxlength="60" /></td></tr></p>
			<tr><td><b>&nbsp&nbsp&nbsp&nbsp Marina:</b></td>
			<td><input type="text" name="marina" size="40" maxlength="60" /></td></tr></p>
			<tr><td><b>&nbsp&nbsp&nbsp&nbsp Marina Address:</td></b>
			<td><input type="text" name="marina_add" size="40" maxlength="60" /></td></tr></p>
			<tr><td><b>&nbsp&nbsp&nbsp&nbsp Alternate Marina:</td></b>
			<td><input type="text" name="alt_marina" size="40" maxlength="60" /></td></tr></p>
			<tr><td><b>&nbsp&nbsp&nbsp&nbsp Alternate Marina Address:</td></b>
			<td><input type="text" name="alt_marina_add" size="40" maxlength="60" /></td></tr></p>
			<tr><td><b>&nbsp&nbsp&nbsp&nbsp Show Time:</td></b>
			<td><select name="showtime">
			<option value="12:00 AM">12:00 AM</option><option value="12:30 AM">12:30 AM</option>
			<option value="01:00 AM">01:00 AM</option><option value="01:30 AM">01:30 AM</option>
			<option value="02:00 AM">02:00 AM</option><option value="02:30 AM">02:30 AM</option>
			<option value="03:00 AM">03:00 AM</option><option value="03:30 AM">03:30 AM</option>
			<option value="04:00 AM">04:00 AM</option><option value="04:30 AM">04:30 AM</option>
			<option value="05:00 AM">05:00 AM</option><option value="05:30 AM">05:30 AM</option>
			<option value="06:00 AM">06:00 AM</option><option value="06:30 AM">06:30 AM</option>
			<option value="07:00 AM">07:00 AM</option><option value="07:30 AM">07:30 AM</option>
			<option value="08:00 AM">08:00 AM</option><option value="08:30 AM">08:30 AM</option>
			<option value="09:00 AM">09:00 AM</option><option value="09:30 AM">09:30 AM</option>
			<option value="10:00 AM">10:00 AM</option><option value="10:30 AM">10:30 AM</option>
			<option value="11:00 AM">11:00 AM</option><option value="11:30 AM">11:30 AM</option>
			<option value="12:00 PM">12:00 PM</option><option value="12:30 PM">12:30 PM</option>
			<option value="01:00 PM">01:00 PM</option><option value="01:30 PM">01:30 PM</option>
			<option value="02:00 PM">02:00 PM</option><option value="02:30 PM">02:30 PM</option>
			<option value="03:00 PM">03:00 PM</option><option value="03:30 PM">03:30 PM</option>
			<option value="04:00 PM">04:00 PM</option><option value="04:30 PM">04:30 PM</option>
			<option value="05:00 PM">05:00 PM</option><option value="05:30 PM">05:30 PM</option>
			<option value="06:00 PM">06:00 PM</option><option value="06:30 PM">06:30 PM</option>
			<option value="07:00 PM">07:00 PM</option><option value="07:30 PM">07:30 PM</option>
			<option value="08:00 PM">08:00 PM</option><option value="08:30 PM">08:30 PM</option>
			<option value="09:00 PM">09:00 PM</option><option value="09:30 PM">09:30 PM</option>
			<option value="10:00 PM">10:00 PM</option><option value="10:30 PM">10:30 PM</option>
			<option value="11:00 PM">11:00 PM</option><option value="11:30 PM">11:30 PM</option>
			</select></td></p>
			<tr><td><b>&nbsp&nbsp&nbsp&nbsp Remarks:</td></b>
			<td><textarea name="remarks" rows="3" cols="30" maxlength="255"></textarea>
			</td></tr></table>
		<p>
		<div align="center"><input type="submit" name="submit" value="Submit" /></div><br />
		</fieldset></form><br />
	</td><td valign="top" style="width:200px;text-align:center;">
	<!-- right area of webpage -->
	<?php include "comment.php" ?>
	<!-- end of right area of webpage -->
	</td></tr></table>

	<!--Footer of webpage-->
	<?php include "footer.php" ?>
	<!--end of footer-->
	</div>	
</div>
</body>
</html>