<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional// EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml11-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang = "en"
<head>
	<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
	<title>Calendar</title>
</head>
</body>
<form action ="calendar.php" method="post">

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

//Make the days pull-down menu:
echo '<select name="day">';
foreach ($days as $days => $value){
	echo "<option value=\"$value\">$value</option>\n";
}
echo '</select>';

//Make the years pull-down menu:
echo '<select name="year">';
foreach ($years as $years => $value){
	echo "<option value=\"$value\">$value</option>\n";
}
echo '</select>';
?>
</form>
</body>
</html>