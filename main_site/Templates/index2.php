<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional// EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml11-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang = "en"
<head>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
    <title>My Website</title>
	<style media="screen" type="text/css">
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
<body>



		<table style="position:absolute;left:0px;top:25px;width:980px;border:0px solid;"><tr><td>
		<form method="post">
		<table style="border-spacing:0px;"><tr><td id="com" align="left">
		<fieldset style="width:190px;"><legend><font color="white">Leave a comment!</font></legend><br />
		<label for="name1">Name</label><br />
		<input type="text" name="name" tabindex="1" size="20" maxlength="50" /><br />
		<label for="email1">Email</label><br />
		<input type="text" name="email" tabindex="2" size="20"/><br />
		<label for="comments">Comments</label><br />
		<textarea name="comments" rows="6" cols="20" tabindex="4" class='pc_input' wrap="soft" id="comments"></textarea><br />
		<input type="submit" name="doit" value="Submit" tabindex="5" class='pc_submit'>
		</fieldset>
		</td></tr></table></form>
		</td></tr>
		<tr><td>
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
		</td></tr></table>

</body>
</html>