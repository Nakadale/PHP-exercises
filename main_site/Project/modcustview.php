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
		$custnum = $_POST['hideval'];
		//$user = "root";
		//$pass = "dive";
		//$db = "sheaqu_dive";
		//$link = @mysql_connect( "localhost", $user, $pass );
		$user = "sheaqu_dive";
		$pass = "dive";
		$db = "sheaqu_dive";
		$link = @mysql_connect( "mysql4.freehostia.com", $user, $pass );
		//echo $custnum;
		if (!$link) {
		die("Couldn't connect to MySQL: ".mysql_error());
		}
		mysql_select_db($db,$link)
		or die ( "Couldn't open $db: ".mysql_error() );
		$query = mysql_query("select * from cust_info",$link );
		If ($query == TRUE) {
		} else { print "Update cannot be performed"; }
		$result = @mysql_query("SELECT * FROM cust_info WHERE customer_number = '".$custnum."'",$link);
		$num_rows = mysql_num_rows( $result );
		$row = mysql_fetch_assoc($result); 
		echo '<form method="post" action="custmod.php">';
		echo '<input type="hidden" name="customer_number" value='.$custnum.'>';
		echo '<fieldset><legend><font color="white">Customer Registration Information</font></legend>';
		echo '<p><table border="0" width="90%" align="center">';
		echo '<tr><td width="30%"><b>&nbsp&nbsp&nbsp&nbsp Dive Name:</b></td>';
		echo '<td>'.$row['dive_name'].'</td></tr></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp Company Name:</b></td>';
		echo '<td>'.$row['company_name'].'</td></tr></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp First Name:</b></td>';
		echo '<td>'.$row['first_name'].'</td></tr></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp Last Name:</b></td>';
		echo '<td>'.$row['last_name'].'</td></tr></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp Home Phone:</b></td>';
		echo '<td>'.$row['home_phone'].'</td></tr></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp Work Phone:</b></td> ';
		echo '<td>'.$row['work_phone'].'</td></tr></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp Mobile Phone:</b></td>';
		echo '<td>'.$row['mobile_phone'].'</td></tr></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp Certificate:</b></td>';
		echo '<td>'.$row['certificate'].'</td></tr></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp Pax:</b></td>';
		echo '<td>'.$row['pax'].'</td></tr></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp 80cuft:</b></td> ';
		echo '<td>'.$row['80cuft'].'</td></tr></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp 67cuft:</b></td>';
		echo '<td>'.$row['67cuft'].'</td></tr></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp Rental:</b></td>';
		echo '<td>'.$row['rental'].'</td></tr></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp Rental Amount:</b></td>';
		echo '<td>'.$row['rent_amount'].'</td></tr></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp Dive Amount:</b></td>';
		echo '<td>'.$row['dive_amount'].'</td></tr></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp Total Amount:</b></td>';
		echo '<td>'.$row['total_amount'].'</td></tr></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp Remarks:</b></td> ';
		echo '<td>'.$row['remarks'].'</td></tr></p></table><br>';
		echo '<div align="center"><input type="submit" name="submit" value="Modify Customer Reservation" /></div><br>';
		echo '</fieldset></form>';
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