<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional// EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml11-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang = "en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1">
    <title>My Website</title>
	<?php include "css_style2.php" ?>
<body>
<div id="container">
	<!--Header area of webpage-->
	<div style="position: absolute; top:10px; left:10px;">
	<img src="Images/new banner curved.jpg" style="border-spacing:0px;">
	<!--start of navigation area of webpage-->
	<br />
	<!--end of navigation area of webpage-->
	</div>
	<!--end of header of webpage-->
	<div id="body" style="position: absolute;top:257px;left:10px;width:980px;">
		<!-- right area of webpage -->
		<table>
		<tr><td valign="top" style="width:820px;">
			<!--<div style="width:820px;">-->
			<img src="Images/NEW IMGS/MAINTOP2.png"> 
			<div style="background-image: url(Images/mainback.png);background-repeat: repeat;width:810px;">
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
			echo '<div style="width:780px;text-align:center;font-size:26px;"><b>NEWS UPDATES</b></div>';
			echo '<div style="width:780px;" align="center">';
			//echo '<table style="width:780px;border-spacing:10px;" valign="top">';
			//echo '<tr><td valign="top" align="center">';
			$result = @mysql_query("SELECT * FROM main_bulletin2 ORDER BY post_ID DESC",$link);
			$num_rows = mysql_num_rows( $result );
			while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){
			echo '<table style="width:380px;border:0px solid;border-spacing:2px;">';
			echo '<input type="hidden" name="hideval" value="'.$row['post_id'].'">';
			echo '<tr ><td id="com_head">';
			echo '<a href="msg.php?ID='.$row['post_id'].'" style="font-size:16px;color:">'.$row['post_title'].'</a><br />';
			echo 'Date Posted: '.$row['post_date'].'<br />';
			echo wordwrap($row['post_content'],40,"\n",true).'';
			echo '</td></tr></table>';
			}
			echo '</div>';
			//echo '</td></tr></table>'
			?>
			</div>
			<img src="Images/NEW IMGS/MAINBOT2.PNG">
		</td><td valign="top" align="center" style="width:160px;">
		<?php include "comments2.php" ?>
		<p />
		</td></tr></table>
		<br />
		<!--Footer of webpage-->
		<?php include "footer2.php" ?>
		<!--end of footer-->

	</div>
</div>


</body>
</html>