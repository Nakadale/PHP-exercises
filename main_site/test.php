<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional// EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml11-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang = "en"
<head>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
    <title>My Website</title>
	<style media="screen" type="text/css">
	html,
	body {
		margin:0;
		padding:0;
		height:100%;
	}
	#tblcom {
		width:200px;
		border:0px;
		border-spacing:0px;
		position: absolute; 
		top:10px; 
		left:10px;
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
		//$link = @mysql_connect( "mysql4.freehostia.com", $user, $pass );\

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
		echo '<table id="tblcom">';
		$result = @mysql_query("SELECT * FROM comments ORDER BY comment_number DESC",$link);
		$num_rows = mysql_num_rows( $result );
		while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){ 
		echo '<tr align="left" bgcolor="RGB(83,137,207)"><td><font color="white">'.$row['com_name'].'</font></td></tr>';
		echo '<tr align="left" bgcolor="RGB(207,228,255)"><td><font color="black">'.$row['com_comment'].'<p></font></td></tr>';
		}
		echo '</table>';		
		?>

</font>
</body>
</html>