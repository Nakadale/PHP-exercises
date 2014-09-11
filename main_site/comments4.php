			<div style="text-align:left;border-spacing:0px;background-color:RGB(123,92,52);">
			<br />
			<form method="get" action="http://www.google.com/search">
			<table style="width:160px;text-align:center;"><tr><td>
			<input type="text"   name="q" size="20" maxlength="255" value="" />
			<input id="but" type="submit" value="Google Search" /></td></tr></table>			
			</form>
			<br /><br />
			<center style="font-size:18px;">NAVIGATION</center>
			<table style="background-color:RGB(123,92,52);width:160px;text-align:right;font-size:24px;">
			<tr><td>

			<a href ="index.php" style="color:white;">HOME</a><br />
			<a href ="projects.php" style="color:white;">PROJECTS</a><br />
			<a href ="about.php" style="color:white;">CONTACTS</a><br />
			</td></tr></table>
			<br /><br />
			<center style="font-size:18px;">COMMENTS</center>
			<form method="GET" action="com_add.php">
			<table style="background-color:RGB(123,92,52);width:160px;"><tr><td>
			<fieldset>
			<label for="name1">Name</label><br />
			<input type="text" name="name" tabindex="1" size="18" maxlength="50" /><br />
			<label for="email1">Email</label><br />
			<input type="text" name="email" tabindex="2" size="18"/><br />
			<label for="comments">Comments</label><br />
			<textarea name="comments" rows="6" cols="14" tabindex="4" class='pc_input' wrap="soft" id="comments"></textarea><br />
			<input id="but" type="submit" name="doit" value="Submit" tabindex="5" class='pc_submit'>
			</fieldset>
			</form>
			</div>
			<br />
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
			$result = @mysql_query("SELECT * FROM main_comments ORDER BY comment_number DESC",$link);
			$num_rows = mysql_num_rows( $result );
			while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){ 
			echo '<table style="width:158px;border:0px solid;border-spacing:0px;">';
			echo '<tr><td id="com_head">'.wordwrap($row['com_name'], 15, "\n",true).'</td></tr>';
			echo '<tr><td id="com_body">'.wordwrap($row['com_comment'], 15, "\n",true).'</td></tr>';
			echo '</table><br />';
			}
			?>
			</td></tr></table>