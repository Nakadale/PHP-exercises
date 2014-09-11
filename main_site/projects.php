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
	<div id="header" style="position: absolute; top:10px; left:10px;">
	<img src="Images/banner.jpg">
	<!--end of header of webpage-->
	<!--start of navigation area of webpage-->
	<?php include "navi.php" ?>
	<!--end of navigation area of webpage-->
	</div>
	<div id="body" style="position: absolute;top:257px;left:10px;width:980px;">
	
		<!-- right area of webpage -->
		<table style="background-color: RGB(89,146,215);" >
		<tr><td valign="top" align="center" style="width:770px;">
			<table style="background-color:RGB(83,137,207);width:750px;border:1px solid;">
				<tr><td style="text-align:left;"><br />
					Links to Projects made by Sherwin Lester V. Aquino with a short description of it's various feature's.<br />(download links not working due to my webhost's download limit)
				<br /><br />
					<strong>Pawnshop System for A&A Pawnshop</strong><br />This program was create using Microsoft Visual Basic 6 with Microsoft Access as it's back-end database. It's primary functions is to create, modify, remove, view transaction records as well as print receipts for every transaction. It also have a blacklist system that will alert the user(s) that a certain person cannot transact in their branch.	
				<br /><br />
					<strong>Payroll System for A&A Pawnshop</strong><br />This program was crete using Microsoft Visual Basic 6 with Microsoft Access as it's back-end database.It's primary functions is to create and compute salary for the employees of A&A and prints the computed salary. It also has data back-up and recovery features incase admins will need to restore data on another computer.
				<br /><br />
				<strong><a href="Downloads/Setup.zip">MDA Reservation System for Micronesia Diving Association</a></strong><br />This program was crete using Microsoft Visual Basic 6 with Microsoft Access as it's back-end database. It's primary features is to create, modify, remove and view dive event(s) as well as create, modify, remove and view customer reservations and print a receipt for the customer. It also has a dive matrix/calendar so user(s) can have a calendar view of dive event(s). It also has basic data back-up and recovery features.
				<br /><br />
				<br />Porfolio Projects made by Sherwin Lester V. Aquino
				<br /><br />
				<strong><a href="Project/index.php">Dive Reservation System</a></strong>
					<br />A website made using PHP with MySQL. It is still in initial designs. It's primary features is to create, modify, remove, and view dive event(s) as well as create, modify, remove, view customer reservations. 
				<br /><br />
				</td></tr>
				</table>
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