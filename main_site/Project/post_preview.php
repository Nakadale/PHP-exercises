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
	<img src="Images\banner.jpg">
	</div>
	<!--end of header of webpage-->
	<div id="body" style="position: absolute; top:180px; left:10px;">
	<!--start of navigation area of webpage-->
	<?php include "navi.php" ?>
	<!--end of navigation area of webpage-->
	
		<!-- right area of webpage -->
		<table><tr><td>
		<table style="position:absolute;left:0px;top:25px;width:770px;border:1px solid;"><tr><td align="center">	
			<?php
			$post = $_POST['post'];
			echo '<p><table border="1" width="80%>"<tr>';
			echo '<td align="left">'.$post.'</td>';
			echo '<tr><td align="center" width="45"><p><p><input type="submit" name="Edit" value="Submit Post"></td></tr>';
			echo '</tr></table>';
			?>
		</td></tr></table>
		
		<table style="position:absolute;left:0px;top:25px;width:980px;border:0px solid;"><tr><td align="right">		
		<form method="post">
		<table style="border-spacing:0px;"><tr><td align="left">
		<font face="arial" color="white" size="2">
		<fieldset style="width:190px;"><legend><font color="white">Leave a comment!</font></legend><br />
		<label for="name1">Name</label><br />
		<input type="text" name="name" tabindex="1" size="20" maxlength="50" /><br />
		<label for="email1">Email</label><br />
		<input type="text" name="email" tabindex="2" size="20"/><br />
		<label for="comments">Comments</label><br />
		<textarea name="comments" rows="6" cols="20" tabindex="4" class='pc_input' wrap="soft" id="comments"></textarea><br />
		<input type="submit" name="doit" value="submit" tabindex="5" class='pc_submit'>
		</fieldset></font>
		</td></tr></table>		
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
		if ($com_name != NULL && $com_email != NULL && $comments != NULL){
		$query = "INSERT INTO main_comments( com_name, com_email, com_comment)
		values( '".$com_name."', '".$com_email."', '".$comments."')";
		mysql_query($query,$link)
		or die ( "INSERT error: ".mysql_error() );}
		echo '<br><table align="right" style="width:205px;border-spacing:0px;border:0px solid;padding-bottom:100px;">';
		$result = @mysql_query("SELECT * FROM main_comments ORDER BY comment_number DESC",$link);
		$num_rows = mysql_num_rows( $result );
		while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){ 
		echo '<tr align="left" bgcolor="RGB(83,137,207)"><td><font color="white">'.$row['com_name'].'&nbsp&nbsp';
		echo '</font></td></tr>';
		echo '<tr align="left" bgcolor="RGB(207,228,255)"><td><font color="black">'.$row['com_comment'].'<p></font></td></tr>';
		}
		echo '</table>';
		?>
		<!--Footer of webpage-->
		<?php include "footer.php" ?>
		<!--end of footer-->
		</td></tr></table>
	</div>	
</div>

</body>
</html>