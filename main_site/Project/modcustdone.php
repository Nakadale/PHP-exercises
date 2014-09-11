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
	</td><td align="center" style="width:600px;">
		<!-- right area of webpage -->
		<?php
		$customer_number = $_POST['customer_number'];
		$dive_name = $_POST['dive_name'];
		$company_name = $_POST['company_name'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$home_phone = $_POST['home_phone'];
		$work_phone = $_POST['work_phone'];
		$mobile_phone = $_POST['mobile_phone'];
		$certificate = $_POST['certificate'];
		$pax = $_POST['pax'];
		$cuft80 = $_POST['80cuft'];
		$cuft67 = $_POST['67cuft'];
		$rental = $_POST['rental'];
		$rental_amt = $_POST['rent_amount'];
		$dive_amt = $_POST['dive_amount'];
		$total_amt = $_POST['total_amount'];
		$remarks = $_POST['comments'];
		$month = $_POST['month'];
		$day = $_POST['day'];
		$year = $_POST['year'];
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
		mysql_select_db($db, $link)
		or die ( "Couldn't open $db: ".mysql_error() );
		$query = mysql_query("UPDATE cust_info SET dive_name ='".$dive_name."',company_name ='".$company_name."',first_name ='".$first_name."',last_name ='".$last_name."',home_phone ='".$home_phone."',work_phone ='".$work_phone."',mobile_phone ='".$mobile_phone."',certificate ='".$certificate."',pax ='".$pax."',80cuft ='".$cuft80."',67cuft ='".$cuft67."',rental ='".$rental."',rent_amount ='".$rental_amt."',dive_amount ='".$dive_amt."',total_amount ='".$total_amt."',remarks='".$remarks."' WHERE customer_number ='".$customer_number."'",$link );
		If ($query == TRUE) {
		//print "Updated: ".mysql_affected_rows($link);
		echo '<div style="text-align:center;">Record Updated<br />';
		echo '<form action="index.php"><input type="submit" value="Back to Main" /></form>';
		} else { print "Update cannot be performed"; }
		$result = @mysql_query("SELECT * FROM cust_info",$link );
		$num_rows = mysql_num_rows( $result );
		?>

		<!-- end of right area of webpage -->
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