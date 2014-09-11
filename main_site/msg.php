<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional// EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml11-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang = "en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1">
    <title>My Website</title>
	<?php include "css_style.php" ?>
<body>
<div id="container">
	<!--Header area of webpage-->
	<div style="position: absolute; top:10px; left:10px;">
	<img src="Images/banner.jpg">
	<!--start of navigation area of webpage-->
	<?php include "navi.php" ?>
	<!--end of navigation area of webpage-->
	</div>


	<!--end of header of webpage-->
	<div id="body" style="position: absolute;top:257px;left:10px;width:980px;">
		<!-- right area of webpage -->
		<table style="background-color: RGB(89,146,215);">
		<tr><td valign="top" align="center" style="width:770px;">
			<br />
			<?php
			$post_id = $_GET['ID'];
			//$user = "root";
			//$pass = "dive";
			//$db = "sheaqu_dive";
			//$link = @mysql_connect( "localhost", $user, $pass );
			$user = "sheaqu_dive";
			$pass = "dive";
			$db = "sheaqu_dive";
			$link = @mysql_connect( "mysql4.freehostia.com", $user, $pass );
			//echo $post_id;
			if (!$link) {
			die("Couldn't connect to MySQL: ".mysql_error());
			}
			mysql_select_db($db,$link)
			or die ( "Couldn't open $db: ".mysql_error() );
			echo '<table style="width:750px;border:1px solid;">';
			$result = @mysql_query("SELECT * FROM main_bulletin WHERE post_id = ".$post_id,$link);
			$num_rows = mysql_num_rows( $result );
			$row = mysql_fetch_assoc($result);
			echo '<tr id="com_head"><td>'.$row['post_date'].',&nbsp&nbsp '.$row['post_title'].'</td></tr>';
			echo '<tr id="com_body"><td>'.wordwrap($row['post_content'],106,"\n",true).'<p></td></tr>';
			echo '</table>';
			?>
		</td><td valign="top" align="center" style="width:210px;">
			<?php include "comments.php" ?>
		<p />
		</td></tr></table>
		<!--Footer of webpage-->
		<?php include "footer.php" ?>
		<!--end of footer-->
	</div>
</div>


</body>
</html>