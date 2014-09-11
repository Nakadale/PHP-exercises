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
	#header {
		background:#ff0;
		padding:10px;
	}
	#body {
		padding:10px;
		padding-bottom:60px;	/* Height of the footer */
	}
	#footer {
		position:absolute;
		bottom:0;
		width:100%;
		height:60px;			/* Height of the footer */
	}
	/* other non-essential CSS */
	#header p,
	#header h1 {
		margin:0;
		padding:10px 0 0 10px;
	}
	#footer p {
		margin:0;
		padding:10px;
	}
	</style>
	<!--[if lt IE 7]>
	<style media="screen" type="text/css">
	#container {
		height:100%;
	}
	</style>
	<![endif]-->
<body bgcolor="RGB(61,100,165)">
	<div id="container" style="min-height: 100%;margin-bottom: -50px;position: relative;">

	<div id="header" style="position: absolute; top:10px; left:10px;  float: left;">
	<center><img src="Images\banner.jpg"></center>
	</div>
	
	<div id="navigation" style="position: absolute; top:210px; left:10px; float: left;">
	<table style="border:0px solid;border-spacing:0px;">
	<tr>
	<td valign="top" align="left" bgcolor="RGB(61,100,165)">
	<a href ="index.php"><img src="Images\Home.jpg" border="0"></a><br>
	<a href ="DiveReg.php"><img src="Images\divereg.jpg" border="0"></a><br>
	<a href ="modify_view_dive.php"><img src="Images\divemod.jpg" border="0"></a><br>
	<a href ="canceldiveevent.php"><img src="Images\divecan.jpg" border="0"></a><br>
	<a href ="custreg.php"><img src="Images\custreg.jpg" border="0"></a><br>
	<a href ="modify_view_cust.php"><img src="Images\custmod.jpg" border="0"></a><br>
	<a href ="cancelcustomerregistration.php"><img src="Images\custcan.jpg" border="0"></a><br>
	<a href="view_dive_schedule.php"><img src="Images\diveview.jpg" border="0"></a><br>
	<a href="view_customer_list.php"><img src="Images\custview.jpg" border="0"></a><br>
	
	<!--<a href=""><img src="Images\logout.jpg" border="0"></a><br>-->
	<p><!--<img src="Images\tellno.jpg">-->	
	</td></tr>
	<tr><td><br>
	<form method="post">
	<font face="arial" color="white" size="2">
	<div id="commentforma"><label for="name1">Name</label><br />
	<input type="text" name="name" tabindex="1" size="20" maxlength="50" /><br />
	<label for="email1">Email</label><br />
	<input type="text" name="email" tabindex="2" size="20"/><br />
	<div id="commentformb"><label for="comments">Comments</label><br />
	<textarea name="comments" rows="6" cols="22" tabindex="4" class='pc_input' wrap="soft" id="comments"></textarea><br />
	<input type="submit" name="doit" value="submit" tabindex="5" class='pc_submit'>
	</div></font>
	</td></tr>
	</table>
	<?php
	$com_name = $_POST['name'];
	$com_email = $_POST['email'];
	$comments = $_POST['comments'];
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
	if ($com_name != NULL && $com_email != NULL && $comments != NULL){
	$query = "INSERT INTO comments( com_name, com_email, comment)
	values( '".$com_name."', '".$com_email."', '".$comments."')";
	mysql_query($query,$link)
	or die ( "INSERT error: ".mysql_error() );}
	echo '<br><table style="width:200px;border-spacing:0px;">';
	$result = @mysql_query("SELECT * FROM comments ORDER BY comment_num DESC",$link);
	$num_rows = mysql_num_rows( $result );
	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){ 
	echo '<tr align="left" bgcolor="RGB(83,137,207)"><td><font color="white">'.$row['com_name'].'&nbsp&nbsp';
	echo '</font></td></tr>';
	echo '<tr align="left" bgcolor="RGB(207,228,255)"><td><font color="black">'.$row['comment'].'<p></font></td></tr>';
	}
	echo '</table><br><br>';
	?>
	</div>
	
</div>	
</body>	
</html>