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
	</td><td align="center" valign="top" style="width:600px;">
		<?php
		$custnum = $_POST['customer_number'];
		//$user = "root";
		//$pass = "dive";
		//$db = "sheaqu_dive";
		//$link = @mysql_connect( "localhost", $user, $pass );
		$user = "sheaqu_dive";
		$pass = "dive";
		$db = "sheaqu_dive";
		$link = @mysql_connect( "mysql4.freehostia.com", $user, $pass );
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
		echo '<form method="post" action="modcustdone.php">';
		echo '<input type="hidden" name="customer_number" value="'.$custnum.'">';
		echo '<fieldset><legend><font color="white">Customer Registration Information</font></legend>';
		echo '<p><table style="width:90%;text-align:left;">';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp Customer Registration Number:</b></td>';
		echo '<td>'.$row['customer_number'].'</td></tr></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp Dive Name:</b></td>';
		echo '<td><input type="text" name="dive_name" size="40" maxlength="40" value="'.$row['dive_name'].'"></td></tr></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp Company Name:</b></td>';
		echo '<td><input type="text" name="company_name" size="40" maxlength="255"  value="'.$row['company_name'].'"></td></tr></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp First Name:</b></td>';
		echo '<td><input type="text" name="first_name" size="40" maxlength="60" value="'.$row['first_name'].'"></td></tr></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp Last Name:</b></td>';
		echo '<td><input type="text" name="last_name" size="40" maxlength="60" value="'.$row['last_name'].'"></td></tr></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp Home Phone:</b></td>';
		echo '<td><input type="text" name="home_phone" size="40" maxlength="60" value="'.$row['home_phone'].'"></td></tr></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp Work Phone:</b></td> ';
		echo '<td><input type="text" name="work_phone" size="40" maxlength="60" value="'.$row['work_phone'].'"></td></tr></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp Mobile Phone:</b></td>';
		echo '<td><input type="text" name="mobile_phone" size="40" maxlength="60" value="'.$row['mobile_phone'].'"></td></tr></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp Certificate:</b></td>';
		echo '<td><input type="text" name="certificate" size="40" maxlength="60"  value="'.$row['certificate'].'"></td></tr></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp Pax:</b></td>';
		echo '<td><input type="text" name="pax" size="40" maxlength="60" value="'.$row['pax'].'"></td></tr></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp 80cuft:</b></td> ';
		echo '<td><input type="text" name="80cuft" size="40" maxlength="60" value="'.$row['80cuft'].'"></td></tr></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp 67cuft:</b></td>';
		echo '<td><input type="text" name="67cuft" size="40" maxlength="60" value="'.$row['67cuft'].'" ></td></tr></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp Rental:</b></td>';
		echo '<td><input type="text" name="rental" size="40" maxlength="60" value="'.$row['rental'].'" ></td></tr></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp Rental Amount:</b></td>';
		echo '<td><input type="text" name="rent_amount" size="40" maxlength="60" value="'.$row['rent_amount'].'" ></td></tr></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp Dive Amount:</b></td>';
		echo '<td><input type="text" name="dive_amount" size="40" maxlength="60" value="'.$row['dive_amount'].'" ></td></tr></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp Total Amount:</b></td>';
		echo '<td><input type="text" name="total_amount" size="40" maxlength="60" value="'.$row['total_amount'].'" ></td></tr></p>';
		echo '<tr><td><b>&nbsp&nbsp&nbsp&nbsp Remarks:</b></td> ';
		echo '<td><textarea name="comments" rows="3" cols="30" maxlength="255">'.$row['remarks'].'</textarea>
		</td></tr></p></table><br />';
		echo '<div align="center"><input type="submit" name="submit" value="Submit" /></div><br>';
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