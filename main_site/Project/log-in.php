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
	</td><td style="width:600px;" align="center" valign="top">
	<br />
		<!-- right area of webpage -->
		<table style="width:300;border:1px solid;">
		<tr>
		<form name="form1" method="post" action="checklogin.php">
		<td><table><tr>
		<td colspan="3"><strong>Admin Login </strong></td>
		</tr><tr>
		<td width="78">Username</td>
		<td width="6">:</td>
		<td width="294"><input name="myusername" type="text" id="myusername"></td>
		</tr><tr>
		<td>Password</td>
		<td>:</td>
		<td><input name="mypassword" type="text" id="mypassword"></td>
		</tr><tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td><input type="submit" name="Submit" value="Login"></td>
		</tr></table></td></form></tr></table>
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
