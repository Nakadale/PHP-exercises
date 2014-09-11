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
			<tr><td align="left">
			<br />
			&nbsp	
			I'm Sherwin Lester V. Aquino. I was born in the Solano, Nueva Vizcaya, Philippines on June 15, 1984.<br /> &nbsp
			I'm currently 25 years old. Im proficient with using Visual Basic particularly Visual Basic 6. I'm <br /> &nbsp
			also proficient using Adobe Photoshop and Adobe(previously Macromedia) Flash. What am I doing now?<br /> &nbsp
			I'm currently self studying Web Development using PHP and MySQL. I also watching alot of anime at<br /> &nbsp
			the moment when i'm not busy.
			<br />
			<br /> &nbsp
			Here's my E-mail if anyone want to contact me.<br /> &nbsp
			Lester.sherwin@gmail.com<br />
			<br /><br /><br /><br /><br /><br /><br />
			&nbsp Alternatively, you can also contact me <a href="contact.php">here</a>
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