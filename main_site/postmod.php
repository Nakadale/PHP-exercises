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
		$post_id = $_GET['ID'];
		$date = date("Y-m-d");
		$time = date("H:i:s A");
		//$user = "root";
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
		echo '<table style="width:750px;border:1px solid;">';
		$result = @mysql_query("SELECT * FROM Main_bulletin WHERE post_ID =".$post_id."",$link);
		$num_rows = mysql_num_rows( $result );
		$row = mysql_fetch_assoc($result);
		echo '<form method="POST" action="postupdate.php">';
		echo '<input type="hidden" name="post_id" value='.$post_id.'>';
		echo '<p><table style="border:0px solid;">';
		echo "<tr align="left"><td>Post Title:<br /><input type="text" size="80" maxlength="80" name="post_title" value="'.$row['post_title'].'"></td></tr>";
		echo '<tr align="left"><td>Post Content:<br /><textarea cols="60" rows="20" wrap="OFF" maxlength="3000" name="post">'.$row['post_content'].'</textarea></td>';
		echo '<tr><td align="center"><p><p>';
		echo '&nbsp&nbsp <input type="submit" name="submit" value="Update Post"></td>';
		echo '</tr></table></form>';
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