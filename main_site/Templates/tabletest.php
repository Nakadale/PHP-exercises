
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
   "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang = "en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
    <title>My Website</title>
	<style media="screen" type="text/css">
	html,
	body {
		margin:0;
		padding:0;
		height:100%;
		background-color: RGB(61,100,165);
		font-family: Arial;
		font-size: 12px;
		color:white;
	}
	#footer {
		position:absolute;
		bottom:0px;
		width:100%;
		height:5px;			/* Height of the footer */
	}
  	#head {
    word-wrap: break-word;
    width:200px;
    font-family: Arial;
	font-size: 12px;
	color:white;
  	}
  	#body {
    word-wrap: break-word;
    width:200px;
    font-family: Arial;
	font-size: 12px;
	color:black;
  	}
  	table {
		border-spacing:0px;
		border:1px solid;
	}
</style>
</head>
<body>

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
		$query = "INSERT INTO main_comments( com_name, com_email, com_comment)
		values( '".$com_name."', '".$com_email."', '".$comments."')";
		mysql_query($query,$link)
		or die ( "INSERT error: ".mysql_error() );}
		
		echo '<table style="border-spacing:1px;border:1px solid;padding-bottom:100px;">';
		$result = @mysql_query("SELECT * FROM main_comments ORDER BY comment_number DESC",$link);
		$num_rows = mysql_num_rows( $result );
		while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){ 
		echo '<tr><td id="head" align="left" bgcolor="RGB(83,137,207)">'.$row['com_name'].'</td></tr>';
		echo '<tr><td id="body" align="left" bgcolor="RGB(207,228,255)">'.$row['com_comment'].'</td></tr>';
		}
		echo '</table>';
		?>

</body>
</html>