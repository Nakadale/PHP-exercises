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
	<div id="body" style="position: absolute;top:257px;left:10px;width:980px;border:0px solid;">
	
		<!-- right area of webpage -->
		<table style="background-color: RGB(89,146,215);" >
		<tr><td valign="top" align="left" style="width:770px;">
		<?php include "post_navi.php" ?>
		</td></tr>
		<tr><td valign="top" align="center" style="width:770px;">
		<br />	
		<?php
		$post_title = $_POST['post_title'];
		$post_content = $_POST['post'];
		$post_id = $_POST['post_id'];
		$date = date("Y-m-d");
		$time = date("H:i:s A");
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
		$query = mysql_query("UPDATE main_bulletin SET post_title ='".$post_title."', post_time ='".$time."', post_date ='".$date."' post_content ='".$post_content."' WHERE post_id = '".$post_id."'",$link );
		If ($query == TRUE) {
		echo '<p><div align="top">Post Updated<br>';
		echo '<form action="post_modify.php"><input type="submit" value="Back to Modify Post"/></form>';
		} else { print "<br>Update cannot be performed"; }
		$result = @mysql_query("SELECT * FROM main_bulletin",$link );
		$num_rows = mysql_num_rows( $result );
		?>
		
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