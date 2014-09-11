<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional// EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml11-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang = "en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1">
    <title>Nakadale's Blog</title>
	<?php include "css_style5.php" ?>
<body>
<div id="container">
	<!--Header area of webpage-->
	<div style="position: absolute; top:10px; left:10px;">
	<a href="index2.php" style="color:white;"><img src="Img/wandering nakadale1.png" style="border-spacing:0px;border:0px;"></a>
	<!--start of navigation area of webpage-->
	<!--end of navigation area of webpage-->
	</div>
	<!--end of header of webpage-->
	<div id="body" style="position: absolute;top:257px;left:10px;width:980px;">
		<!-- right area of webpage -->
		<table>
		<tr><td valign="top" style="width:820px;">
			<!--<div style="width:820px;">-->
			<div style="background-image: url(Img/post1.png);background-repeat: no-repeat;width:810px;">
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
			echo '<br />';
			echo '<div style="position:absolute;left:40px;top:40px;">';
			$result = @mysql_query("SELECT * FROM main_bulletin ORDER BY post_ID DESC",$link);
			$num_rows = mysql_num_rows( $result );
			while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){
			$count++;
			if ($count== 1){
			echo '<table style="width:450px;border:0px solid;border-spacing:2px;">';
			echo '<input type="hidden" name="hideval" value="'.$row['post_id'].'">';
			echo '<tr ><td style="color:black;"><br /><b>';
			echo '<a href="msg.php?ID='.$row['post_id'].'" style="font-size:14px;color:">'.$row['post_title'].'</a></b><br />';
			echo 'Date Posted: '.$row['post_date'].'<br /><br />';
			echo wordwrap($row['post_content'],50,"\n",true).'<br />';
			echo '</td></tr></table>';
			}}
			echo '</div>';
			?>
			<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
			<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
			</div>
			<br />
		</td><td valign="top" align="center" style="width:160px;">
		<?php include "comments5.php" ?>
		</td></tr></table>
		<!--Footer of webpage-->
		<?php include "footer5.php" ?>
		<!--end of footer-->
	</div>
</div>


</body>
</html>