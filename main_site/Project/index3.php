<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional// EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml11-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang = "en"
<head>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
    <title>Dive Reservation System</title>
	<style media="screen" type="text/css">
	html,
	body {
		margin:0;
		padding:0;
		height:100%;
	}
	#container {
		min-height:100%;
		position:relative;
	}
	#body {
		padding:0px;
		padding-bottom:100px;	/* Height of the footer */
	}
	#footer {
		position:absolute;
		bottom:0px;
		width:100%;
		height:5px;			/* Height of the footer */
	</style>
	<!--[if lt IE 7]>
	<style media="screen" type="text/css">
	#container {
		height:100%;
	}
	</style>
	<![endif]-->
<body bgcolor="RGB(61,100,165)">
<font face="arial" color="white" size="2">
<div id="container">
	<!--Header area of webpage-->
	<div id="header" style="position: absolute; top:10px; left:10px;">
	<img src="Images\banner.jpg">
	</div>
	<!--end of header of webpage-->
	<!--start of navigation area of webpage-->
	<?php include "navi.php" ?>
	<!--end of navigation area of webpage-->
	
		<!-- right area of webpage -->
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
		echo '<table style="width:770px;border:0px;border-spacing:0px;position: absolute; top:0px; left:204px;">';
		$result = @mysql_query("SELECT * FROM bulletin ORDER BY post_ID DESC",$link);
		$num_rows = mysql_num_rows( $result );
		while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){ 
		echo '<input type="hidden" name="hideval" value="'.$row['post_id'].'"/>';
		echo '<tr align="left" bgcolor="RGB(83,137,207)"><td><font color="white">'.$row['post_date'].',&nbsp&nbsp';
		echo '<a href="msg.php?ID='.$row['post_id'].'">'.$row['post_title'].'</font></td></tr>';
		echo '</a>';
		echo '<tr align="left" bgcolor="RGB(207,228,255)"><td><font color="black">'.$row['post_content'].'<p></font></td></tr>';
		}
		echo '</table>';
		?>
		<!-- end of right area of webpage -->
		
	<!--Footer of webpage-->
	<?php include "footer.php" ?>
	<!--end of footer-->
	</div>	
</div>

</font>
</body>
</html>