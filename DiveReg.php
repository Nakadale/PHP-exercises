<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional// EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml11-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang = "en"
<head>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
    <title>Dive Event Registration</title>
<body background="abstract_color_background_picture_8016.jpg">
<font face="Arial" size="2" color="white">
<form action="registration_done.php" method="post">
<fieldset><legend>Enter Dive Event Information in the form below:</legend>
<p><b>&nbsp&nbsp&nbsp&nbsp Dive Date:</b>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<?php

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
	echo "<option value=\"$days\">$value</option>\n";
}
echo '</select>';
echo '&nbsp&nbsp';
//Make the years pull-down menu:
echo '<select name="year">';
foreach ($years as $years => $value){
	echo "<option value=\"$years\">$value</option>\n";
}
echo '</select>';

?>
<p><b>&nbsp&nbsp&nbsp&nbsp Dive Name:</b>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="text" name="dive_name" size="20" maxlength="40"
/></p>
<p><b>&nbsp&nbsp&nbsp&nbsp Boat Name:</b> 
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="text" name="boat_name" size="40"
maxlength="60" /></p>
<p><b>&nbsp&nbsp&nbsp&nbsp Limit:</b>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="text" name="limit" size="40"
maxlength="60" /></p>
<p><b>&nbsp&nbsp&nbsp&nbsp Price:</b>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="text" name="price" size="40"
maxlength="60" /></p>
<p><b>&nbsp&nbsp&nbsp&nbsp Marina:</b>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="text" name="marina" size="40"
maxlength="60" /></p>
<p><b>&nbsp&nbsp&nbsp&nbsp Marina Address:</b>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="text" name="marina_add" size="40"
maxlength="60" /></p>
<p><b>&nbsp&nbsp&nbsp&nbsp Alternate Marina:</b>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="text" name="alt_marina" size="40"
maxlength="60" /></p>
<p><b>&nbsp&nbsp&nbsp&nbsp Alternate Marina Address:</b>
&nbsp&nbsp
<input type="text" name="alt_marina_add" size="40"
maxlength="60" /></p>
<p><b>&nbsp&nbsp&nbsp&nbsp Age:</b>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<select name="showtime">
<option value="12:00 AM">12:00 AM</option>
<option value="12:30 AM">12:30 AM</option>
<option value="01:00 AM">01:00 AM</option>
<option value="01:30 AM">01:30 AM</option>
<option value="02:00 AM">02:00 AM</option>
<option value="02:30 AM">02:30 AM</option>
<option value="03:00 AM">03:00 AM</option>
<option value="03:30 AM">03:30 AM</option>
<option value="04:00 AM">04:00 AM</option>
<option value="04:30 AM">04:30 AM</option>
<option value="05:00 AM">05:00 AM</option>
<option value="05:30 AM">05:30 AM</option>
<option value="06:00 AM">06:00 AM</option>
<option value="06:30 AM">06:30 AM</option>
<option value="07:00 AM">07:00 AM</option>
<option value="07:30 AM">07:30 AM</option>
<option value="08:00 AM">08:00 AM</option>
<option value="08:30 AM">08:30 AM</option>
<option value="09:00 AM">09:00 AM</option>
<option value="09:30 AM">09:30 AM</option>
<option value="10:00 AM">10:00 AM</option>
<option value="10:30 AM">10:30 AM</option>
<option value="11:00 AM">11:00 AM</option>
<option value="11:30 AM">11:30 AM</option>
<option value="12:00 PM">12:00 PM</option>
<option value="12:30 PM">12:30 PM</option>
<option value="01:00 PM">01:00 PM</option>
<option value="01:30 PM">01:30 PM</option>
<option value="02:00 PM">02:00 PM</option>
<option value="02:30 PM">02:30 PM</option>
<option value="03:00 PM">03:00 PM</option>
<option value="03:30 PM">03:30 PM</option>
<option value="04:00 PM">04:00 PM</option>
<option value="04:30 PM">04:30 PM</option>
<option value="05:00 PM">05:00 PM</option>
<option value="05:30 PM">05:30 PM</option>
<option value="06:00 PM">06:00 PM</option>
<option value="06:30 PM">06:30 PM</option>
<option value="07:00 PM">07:00 PM</option>
<option value="07:30 PM">07:30 PM</option>
<option value="08:00 PM">08:00 PM</option>
<option value="08:30 PM">08:30 PM</option>
<option value="09:00 PM">09:00 PM</option>
<option value="09:30 PM">09:30 PM</option>
<option value="10:00 PM">10:00 PM</option>
<option value="10:30 PM">10:30 PM</option>
<option value="11:00 PM">11:00 PM</option>
<option value="11:30 PM">11:30 PM</option>
</select></p>
<p><b>&nbsp&nbsp&nbsp&nbsp BBQ:</b>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="text" name="bbq" size="40"
maxlength="60" /></p>
<p><b>&nbsp&nbsp&nbsp&nbsp Remarks:</b>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<textarea name="remarks" rows="3"
cols="40" maxlength="255"></textarea></p><br>

</fieldset>
<p>
<div align="center"><input type="submit" name="submit" value="Submit Dive Event Information" /></div>
<?php
?>
</font>
</form>
</body>
</html>