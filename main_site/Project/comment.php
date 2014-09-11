		<table><tr><td style="text-align:left;">
			<br />
			<form method="post">
			<fieldset><legend style="color:white;">Leave a comment!</legend><br />
			<label for="name1">Name</label><br />
			<input type="text" name="name" tabindex="1" size="20" maxlength="50" /><br />
			<label for="email1">Email</label><br />
			<input type="text" name="email" tabindex="2" size="20"/><br />
			<label for="comments">Comments</label><br />
			<textarea name="comments" rows="6" cols="20" tabindex="4" class='pc_input' wrap="soft" id="comments"></textarea><br />
			<input type="submit" name="doit" value="Submit" tabindex="5" class='pc_submit'>
			</fieldset></form>
		</td></tr>
		<tr><td align="center">
		<?php
		if ($_POST['name'] == NULL){
		$com_name = "Anonymuos";
		}
		else {
		$com_name = $_POST['name'];
		}
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
		if ($comments != NULL){
		$query = "INSERT INTO comments( com_name, com_email, com_comment)
		values( '".$com_name."', '".$com_email."', '".$comments."')";
		mysql_query($query,$link)
		or die ( "INSERT error: ".mysql_error() );}
		$result = @mysql_query("SELECT * FROM comments ORDER BY comment_number DESC",$link);
		$num_rows = mysql_num_rows( $result );
		while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){ 
		echo '<br /><table style="width:190px;border:1px solid;border-spacing:2px;">';
		echo '<tr id="com_head"><td><font color="white">'.$row['com_name'].'</td></tr>';
		echo '<tr id="com_body"><td><font color="black">'.wordwrap($row['com_comment'],29,"\n",true).'</td></tr>';
		echo '</table>';
		}
		?>
		<br />
		</td></tr></table>