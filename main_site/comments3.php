			<div style="text-align:left;border-spacing:0px;">
			<img src="Images/GOOGLE TOP3.PNG">
			<form method="get" action="http://www.google.com/search">
			<table style="background-color:RGB(196,196,196);width:160px;text-align:center;"><tr><td>
			<input type="text"   name="q" size="20" maxlength="255" value="" />
			<input id="but" type="submit" value="Google Search" /></td></tr></table>			
			</form>
			<img src="Images/GOOGLE BOTTOM3.PNG">
			<br /><br />
			<img src="Images/NAVI TOP3.PNG">
			<table style="background-color:RGB(196,196,196);width:160px;text-align:right;font-size:24px;">
			<tr><td>
			<a href ="index.php" style="color:white;">HOME</a><br />
			<a href ="projects.php" style="color:white;">PROJECTS</a><br />
			<a href ="about.php" style="color:white;">ABOUT</a><br />
			</td></tr></table>
			<img src="Images/NAVI BOTTOM3.PNG"><br /><br />

			<form method="POST">
			<img src="Images/COMMENTS TOP3.PNG">
			<table style="background-color:RGB(196,196,196);width:160px;"><tr><td>
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
			echo '<table style="width:158px;border:0px solid;border-spacing:2px;">';
			echo '<tr><td id="com_head">'.wordwrap($row['com_name'], 15, "\n",true).'</td></tr>';
			echo '<tr><td id="com_body">'.wordwrap($row['com_comment'], 15, "\n",true).'</td></tr>';
			echo '</table>';
			}
			?>
			</td></tr></table>
			<img src="Images/COMMENTS BOTTOM3.PNG">