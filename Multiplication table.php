<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional// EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml11-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang = "en"
<head>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
    <title>Multiplication Table</title>
</head>
</body>
<form method="POST">
Minimum Number:  <input type="text" value="" name="min" />
<br>
Maximum Number: <input type="text" value="" name="max" />
<br>
<input type="submit">
</form>
<?php
$start = $_POST[min];
$end = $_POST[max];
echo '<font size= "5"><center>Multiplication Table</center></font>';
echo '<table cols="2" border="1" cellpadding="0" cellspacing="0" align="center" width="50%">';
for ($count = $start;$count<=$end;$count++){
 echo '<tr>';
	for ($count1 = $start;$count1<=$end;$count1++){
	echo '<td>';
	echo ($count * $count1);
	echo '</td>';
}
echo '<p></tr>';
}
?>
</body>
</html>