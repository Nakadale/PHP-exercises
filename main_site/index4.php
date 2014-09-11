<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional// EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml11-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang = "en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1">
    <title>My Website</title>
	<?php include "css_style4.php" ?>
<body>
<div id="container">
	<!--Header area of webpage-->
	<div style="position: absolute; top:10px; left:10px;">
	<img src="Images/orange theme2.jpg" style="color:RGB();border:0px solid;">
	<!--start of navigation area of webpage-->
	<br />
	<!--end of navigation area of webpage-->
	</div>

	<!--end of header of webpage-->
	<div id="body" style="position: absolute;top:257px;left:10px;width:980px;">
		<!-- right area of webpage -->
		
		<table style="border-spacing:0px;"> <!---->
		<tr><td align="LEFT" valign="top" style="width:820px;">
			<table align="left" style="border-spacing:10px;background-color:RGB(123,92,52);width:810px;"><tr><td>
			<?php
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
			echo '<table style="width:780px;" valign="top">';
			$result = @mysql_query("SELECT * FROM main_bulletin ORDER BY post_ID DESC",$link);
			$num_rows = mysql_num_rows( $result );
			while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){
			$count++;
			if (($count%2) == 1){
			echo '<tr><td valign="top">';
				if ($count==1){ echo '<font style="font-size:20px;"> Newest Post</font> ';}
				if ($count==3){ echo '<font style="font-size:16x;"><b> Archive</b></font> ';}
			echo '<table style="width:380px;border:0px solid;border-spacing:0px;">';
			echo '<input type="hidden" name="hideval" value="'.$row['post_id'].'">';
			echo '<tr id="com_head"><td>';
				if ($count==1){ echo '<font style="font-size:18px;">';}
			echo '<a href="msg.php?ID='.$row['post_id'].'">'.wordwrap($row['post_title'],40,"\n",true).'</a><br />';
				if ($count==1){ echo '</font>';}
			echo 'Date Posted: '.$row['post_date'].'</td></tr>';
			echo '<tr id="com_body"><td><table><tr><td style="width:10px;"></td><td>';
			echo wordwrap($row['post_content'],40,"\n",true).'</td><td style="width:10px;"></td></tr></table>';
			echo '</td></tr></table><br /></td>';
			}
			if (($count%2) == 0){
			echo '<td valign="top">';
				if ($count==2){ echo '<font style="font-size:18px;"> Previous Post</font>';}
				if ($count%2==0){ echo '<br />';}
			echo '<table style="width:380px;border:0px solid;border-spacing:0px;">';
			echo '<input type="hidden" name="hideval" value="'.$row['post_id'].'">';
			echo '<tr id="com_head"><td>';
			echo '<a href="msg.php?ID='.$row['post_id'].'">'.wordwrap($row['post_title'],40,"\n",true).'</a><br />';
			echo 'Date Posted: '.$row['post_date'].'</td></tr>';
			echo '<tr id="com_body"><td><table><tr><td style="width:10px;"></td><td>';
			echo wordwrap($row['post_content'],40,"\n",true).'</td><td style="width:10px;"></td></tr></table>';
			echo '</td></tr></table><br /></td></tr>';
			}
			}
			echo '</table><br />';
			?>
			</td></tr></table>
		</td><td valign="top" align="center" style="width:160px;">
		<?php include "comments4.php" ?>
		<p />
		</td></tr></table>
		<br />
		<!--Footer of webpage-->
		<?php include "footer4.php" ?>
		<!--end of footer-->

	</div>
</div>


</body>
</html>