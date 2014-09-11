			<div style="text-align:left;">
			<form method="get" action="http://www.google.com/search">
			<fieldset><legend style="color:white;">Google Search</legend><br />
			<input type="text"   name="q" size="25" maxlength="255" value="" /><br /><br />
			<input id="but" type="submit" value="Google Search" />			
			</fieldset>
			</form>
			<br />
			<form method="post">
			<fieldset><legend style="color:white;">Leave a comment!</legend><br />
			<label for="name1">Name</label><br />
			<input type="text" name="name" tabindex="1" size="20" maxlength="50" /><br />
			<label for="email1">Email</label><br />
			<input type="text" name="email" tabindex="2" size="20"/><br />
			<label for="comments">Comments</label><br />
			<textarea name="comments" rows="6" cols="20" tabindex="4" class='pc_input' wrap="soft" id="comments"></textarea><br />
			<input id="but" type="submit" name="doit" value="Submit" tabindex="5" class='pc_submit'>
			</fieldset></form>
			</div>
			<br />
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

			$result = @mysql_query("SELECT * FROM main_comments ORDER BY comment_number DESC",$link);
			$num_rows = mysql_num_rows( $result );
			while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){ 
			echo '<table style="width:200px;border:0px solid;border-spacing:0px;">';
			echo '<tr><td id="com_head">'.wordwrap($row['com_name'], 29, "\n",true).'</td></tr>';
			echo '<tr><td id="com_body">'.wordwrap($row['com_comment'], 29, "\n",true).'</td></tr>';
			echo '</table>';
			echo '<img src="Images/comfoot.png"><p>';
			}
			
			?>