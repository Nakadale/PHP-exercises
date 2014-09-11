<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional// EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml11-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang = "en"
<head>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
    <title>My Website</title>
	<?php include "css_style.php" ?>
<body>
<div id="container">
	<!--Header area of webpage-->
	<div id="header" style="position: absolute; top:10px; left:10px;border:0px solid;">
	<img src="Images/banner.jpg">
	<!--end of header of webpage-->
	<!--start of navigation area of webpage-->
	<?php include "navi.php" ?>
	<!--end of navigation area of webpage-->

	</div>
	<div id="body" style="position:absolute;top:257px;left:10px;width:980px;">
		<!-- right area of webpage -->
		<table style="background-color: RGB(89,146,215);">
		<tr><td valign="top" align="center" style="width:770px;">
			<table style="background-color:RGB(83,137,207);width:750px;border:1px solid;">
			<tr><td>
				<table><tr><td style="width:200px;"></td>
				<td style="text-align:left;">
				<br />Name: <br />
				<input type="text" size="53" maxlength="65" name="name" /><br />
				Your Email: <br />
				<input type="text" size="53" maxlength="65" name="email" /><br />
				Message: <br />
				<textarea cols="40" rows="20" wrap="PHYSICAL" maxlength="3000" name="message"></textarea><br />
				</td></tr>
				<tr><td style="width:200px;"></td>
				<td style="text-align:center;"><br /><input type="submit" name="Submit" value="Submit" /><br /><br /></td></tr></table>
			</td></tr></table>
		</td><td valign="top" align="center" style="width:210px;">
			<?php include "comments.php" ?>
			<br />
		</td></tr></table>
		<!--Footer of webpage-->
		<?php include "footer.php" ?>
		<!--end of footer-->
	</div>	
</div>
</body>
</html>