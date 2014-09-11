<?
session_start();
if(!session_is_registered(myusername)){
header("location:log-in.php");
}
?>

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
	</td><td style="width:600px;" align="center">
	<br />
		<table style="background-color: RGB(89,146,215);" >
		<tr><td valign="top" align="left" style="width:571px;">
		<?php include "post_navi.php" ?>
		</td></tr>
		<tr><td valign="top" align="center" style="width:571px;">
		<br />	
		<?php
		$user = "root";
		//$pass = "dive";
		$db = "sheaqu_dive";
		$link = @mysql_connect( "localhost", $user, $pass );
		//$user = "sheaqu_dive";
		//$pass = "dive";
		//$db = "sheaqu_dive";
		//$link = @mysql_connect( "mysql4.freehostia.com", $user, $pass );
		if (!$link) {
		die("Couldn't connect to MySQL: ".mysql_error());
		}
		mysql_select_db($db,$link)
		or die ( "Couldn't open $db: ".mysql_error() );
		echo '<table style="width:571px;border:1px solid;border-spacing:2px;">';
		$result = @mysql_query("SELECT * FROM comments ORDER BY comment_number DESC",$link);
		$num_rows = mysql_num_rows( $result );
		while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){ 
		echo '<tr id="com_head"><td><table><tr>';
		echo '<td style="width:500px;">'.$row['com_name'].', '.$row['com_email'].'</td>';
		echo '<td style="text-align:right;width:100px;"><a href="comdel.php?ID='.$row['comment_number'].'">Delete Comment</a></td></table></td></tr>';
		echo '<tr id="com_body"><td>'.wordwrap($row['com_comment'],106,"\n",true).'<p></td></tr>';
		}
		echo '</table><br />';
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