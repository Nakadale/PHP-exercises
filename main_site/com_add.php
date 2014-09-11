			<?php
			$com_name = $_GET['name'];
			$com_email = $_GET['email'];
			$comments = $_GET['comments'];
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
			
			?>