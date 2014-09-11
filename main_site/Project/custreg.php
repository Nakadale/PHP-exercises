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
		<form action="Cust_registration_done.php" method="post">
		<fieldset><legend><font style="color:white;">Customer Registration</font></legend>
		<table border="0" width="90%" align="center">
		<tr><td><b>&nbsp&nbsp&nbsp&nbsp Dive Date:</b></td>
		<td><?php
		
		// This script make three pull-down menus
		// for an html form: months, days, years.
		
		//Make the months array:
		$months = array(1 => 'January', 'Febuary', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
		
		//Make the days and years arrays:
		$days = range(1,31);
		$years = range(2008, 2018);
		
		//Make the months pull-down menu:
		echo '<select name="month">';
		foreach ($months as $months => $value){
			echo "<option value=\"$months\">$value</option>\n";
		}
		echo '</select>';
		echo '&nbsp&nbsp';
		//Make the days pull-down menu:
		echo '<select name="day">';
		foreach ($days as $days => $value){
			echo "<option value=\"$value\">$value</option>\n";
		}
		echo '</select>';
		echo '&nbsp&nbsp';
		//Make the years pull-down menu:
		echo '<select name="year">';
		foreach ($years as $years => $value){
			echo "<option value=\"$value\">$value</option>\n";
		}
		echo '</select>';
		
		?></td></tr>
		<tr><td><b>&nbsp&nbsp&nbsp&nbsp Dive Name:</b></td>
		<td><input type="text" name="dive_name" size="20" maxlength="40"/></td></tr></p>
		<tr><td><b>&nbsp&nbsp&nbsp&nbsp Company Name:</b></td>
		<td><input type="text" name="company_name" size="40" maxlength="255" /></td></tr></p>
		<tr><td><b>&nbsp&nbsp&nbsp&nbsp First Name:</b></td>
		<td><input type="text" name="first_name" size="40" maxlength="60" /></td></tr></p>
		<tr><td><b>&nbsp&nbsp&nbsp&nbsp Last Name:</b></td>
		<td><input type="text" name="last_name" size="40" maxlength="60" /></td></tr></p>
		<tr><td><b>&nbsp&nbsp&nbsp&nbsp Home Phone:</b></td>
		<td><input type="text" name="home_phone" size="40" maxlength="60" /></td></tr></p>
		<tr><td><b>&nbsp&nbsp&nbsp&nbsp Work Phone:</b></td>
		<td><input type="text" name="work_phone" size="40" maxlength="60" /></td></tr></p>
		<tr><td><b>&nbsp&nbsp&nbsp&nbsp Mobile Phone:</b></td>
		<td><input type="text" name="mobile_phone" size="40" maxlength="60" /></td></tr></p>
		<tr><td><b>&nbsp&nbsp&nbsp&nbsp Certificate:</b></td>
		<td><input type="text" name="certificate" size="40" maxlength="60" /></td></tr></p>
		<tr><td><b>&nbsp&nbsp&nbsp&nbsp Pax:</b></td>
		<td><input type="text" name="pax" size="40" maxlength="60" /></tr></td></p>
		<tr><td><b>&nbsp&nbsp&nbsp&nbsp 80cuft:</b></td>
		<td><input type="text" name="80cuft" size="40" maxlength="60" /></tr></td></p>
		<tr><td><b>&nbsp&nbsp&nbsp&nbsp 67cuft:</b></td>
		<td><input type="text" name="67cuft" size="40" maxlength="60" /></tr></td></p>
		<tr><td><b>&nbsp&nbsp&nbsp&nbsp Rental:</b></td>
		<td><input type="text" name="rental" size="40" maxlength="60" /></tr></td></p>
		<tr><td><b>&nbsp&nbsp&nbsp&nbsp Rental Amount:</b></td>
		<td><input type="text" name="rent_amount" size="40" maxlength="60" /></tr></td></p>
		<tr><td><b>&nbsp&nbsp&nbsp&nbsp Dive Amount:</b></td>
		<td><input type="text" name="dive_amount" size="40" maxlength="60" /></tr></td></p>
		<tr><td><b>&nbsp&nbsp&nbsp&nbsp Total Amount:</b></td>
		<td><input type="text" name="total_amount" size="40" maxlength="60" /></tr></td></p>
		<tr><td><b>&nbsp&nbsp&nbsp&nbsp Remarks:</b></td> 
		<td><textarea name="remarks" rows="3" cols="30" maxlength="255"></textarea></tr></td></p><br>
		</table><p>
		<div align="center"><input type="submit" name="submit" value="Submit" /></div>
		</fieldset>
		<br>
		</form>
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