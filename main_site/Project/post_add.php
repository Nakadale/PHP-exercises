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
		<!-- right area of webpage -->
		<table style="background-color: RGB(89,146,215);" >
		<tr><td valign="top" align="left" style="width:571px;">
		<?php include "post_navi.php" ?>
		</td></tr>
		<tr><td valign="top" align="center" style="width:571px;">
		<?php
		echo '<form method="POST">';
		echo '<p><table style="border:0px solid;">';
		echo '<tr align="left"><td>Post Title:<br /><input type="text" size="80" maxlength="80" name="post_title" /></td></tr>';
		echo '<tr align="left"><td>Post Content:<br /><textarea cols="60" rows="20" wrap="OFF" maxlength="3000" name="post"></textarea></td>';
		echo '<tr><td align="center"><p><p>';
		//echo '<input type="submit" name="Edit" value="Preview Post">'; 
		echo '&nbsp&nbsp <input type="submit" name="submit" value="Submit Post"></td>';
		echo '</tr></table></form>';
		?>
		
		<?php
		$title = $_POST['post_title'];
		$post = $_POST['post'];
		$date = date("Y-m-d");
		$time = date("H:i:s A");
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
		if (($post != NULL) && ($title != NULL)) {
		$query = "INSERT INTO bulletin( post_title, post_date, post_time, post_content)
		values( '".$title."', '".$date."', '".$time."', '".$post."')";
		mysql_query($query,$link)
		or die ( "INSERT error: ".mysql_error() );}
		echo '<table style="width:571px;border:1px solid;border-spacing:2px;">';
		$result = @mysql_query("SELECT * FROM bulletin ORDER BY post_ID DESC",$link);
		$num_rows = mysql_num_rows( $result );
		while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){ 
		echo '<input type="hidden" name="hideval" value="'.$row['post_id'].'" />';
		echo '<tr id="com_head"><td>'.$row['post_date'].', '.$row['post_title'].'</td></tr>';
		echo '<tr id="com_body"><td>'.wordwrap($row['post_content'],106,"\n",true).'<p></td></tr>';
		//echo '<tr><td>huh </td></tr>';
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