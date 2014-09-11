			<div style="text-align:left;border-spacing:0px;">
			<form method="get" action="http://www.google.com/search">
			<img src="Images/NEW IMGS/GOOGLETOP.png">
			<div style="background-image: url(Images/mainback.png);background-repeat: repeat;width:160px;text-align:center;">
			<input type="text"   name="q" size="20" maxlength="255" value="" />
			<input id="but" type="submit" value="Google Search" /></div>			
			<img src="Images/NEW IMGS/GOOGLEBOT.PNG">
			</form>
			<br />
			<ul class="navi">
			<img src="Images/NEW IMGS/NAVI.PNG">
			<div style="background-image: url(Images/mainback.png);background-repeat: repeat;width:160px;text-align:right;font-size:24px;">
			<li><a href ="index.php" style="color:white;">HOME</a></li>
			<li><a href ="projects.php" style="color:white;">PROJECTS</a></li>
			<li><a href ="about.php" style="color:white;">CONTACTS</a></li>
			</div><img src="Images/NEW IMGS/NAVIBOT.PNG"></ul>
			<br />

			<form method="POST">
			<img src="Images/NEW IMGS/COMTOP.PNG">
			<div style="background-image: url(Images/mainback.png);background-repeat: repeat;width:160px;">
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
			echo '<table style="width:159px;border:0px solid;border-spacing:2px;">';
			echo '<tr><td>'.wordwrap($row['com_name'], 15, "\n",true).'</td></tr>';
			echo '<tr><td id="com_body" style="background-color:RGB(207,228,255);">'.wordwrap($row['com_comment'], 15, "\n",true).'</td></tr>';
			echo '</table>';
			}
			?>
			</div>
			<img src="Images/NEW IMGS/COMBOT.PNG">