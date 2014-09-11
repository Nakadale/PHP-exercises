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
		<table style="background-color: RGB(89,146,215);"> <!---->
		<tr><td align="center" valign="top" style="width:770px;">
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
			$result = @mysql_query("SELECT * FROM Main_bulletin ORDER BY post_ID DESC",$link);
			$num_rows = mysql_num_rows( $result );
			while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){ 
			echo '<table style="width:750px;border:0px solid;border-spacing:0px;">';
			echo '<input type="hidden" name="hideval" value="'.$row['post_id'].'">';
			echo '<tr id="com_head"><td>'.$row['post_date'].',&nbsp&nbsp';
			echo '<a href="msg.php?ID='.$row['post_id'].'">'.$row['post_title'].'</a></td></tr>';
			echo '<tr id="com_body"><td>'.wordwrap($row['post_content'],106,"\n",true).'</td></tr>';
			echo '</table>';
			echo '<img src="Images/bulfoot.png"><p>';
			}
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