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
<div id="container">
	<!--Header area of webpage-->
	<div id="header" style="position: absolute; top:10px; left:10px;">
	<img src="Images\banner.jpg">
	</div>
	<!--end of header of webpage-->
	<!--start of navigation area of webpage-->
	<?php include "navi.php" ?>
	<!--end of navigation area of webpage-->
	
		<!-- right area of webpage -->
		<?php
		echo '<form method="POST">';
		echo '<br>Sort: <select size="1" height="1" name="sorts">';
		echo 	'<option value="1">Asc</option>';
		echo 	'<option value="2">Desc</option>';
		echo '</select>';
		echo '<br>Keyword: <input type="text" name="search" size="30" class="text"  />&nbsp ';
		echo '<input type="submit" name="submit" value="Search" /></form>';
		echo '<p><table cols="2" border="1" cellpadding="0" cellspacing="0" align="center" width="100%">';
		 echo '<tr bgcolor="RGB(83,137,207)">';
			echo '<td align="center">Customer Reservation List</td>';
		 echo '</tr>';
		echo '</table>';
		echo '<table cols="2" border="1" cellpadding="0" cellspacing="0" align="center" width="100%">';
		 echo '<tr bgcolor="RGB(83,137,207)">';
			echo '<td align="center">Customer Name</td>';
			echo '<td align="center">Dive Name</td>';
			echo '<td align="center">Company Name</td>';
			echo '<td align="center">Home Phone</td>';
			echo '<td align="center">Work Phone</td>';
			echo '<td align="center">Mobile Phone</td>';
			echo '<td align="center">View Record</td>';
		echo '<p></tr>';
		searchresult();
		function searchresult(){
		$search = $_POST['search'];
		$sorts = $_POST['sorts'];
		//echo $_POST['search'];
		if ($_POST['search'] != NULL){
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
		if ($sorts == 1){
		$result = @mysql_query("SELECT * FROM cust_info WHERE dive_name LIKE '$search%' OR customer_number LIKE '$search%' OR company_name LIKE '$search%' OR first_name LIKE '$search%' OR last_name LIKE '$search%' ORDER BY customer_number ASC",$link);}
		else if ($sorts == 2){
		$result = @mysql_query("SELECT * FROM cust_info WHERE dive_name LIKE '$search%' OR customer_number LIKE '$search%' OR company_name LIKE '$search%' OR first_name LIKE '$search%' OR last_name LIKE '$search%' ORDER BY customer_number DESC",$link);}
		$num_rows = mysql_num_rows( $result );
		while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){ 
		echo '<tr bgcolor="RGB(207,228,255)">';
			echo '<td align="center">'.$row['last_name'].' ,'.$row['first_name'].'</td>';
			echo '<td align="center">'.$row['customer_number'].'</td>';
			echo '<td align="center">'.$row['company_name'].'</td>';
			echo '<td align="center">'.$row['home_phone'].'</td>';
			echo '<td align="center">'.$row['work_phone'].'</td>';
			echo '<td align="center">'.$row['mobile_phone'].'</td>';
			echo '<td align="center"><input type="hidden" name="hideval" value="'.$row['dive_number'].'">';
			echo '<input type="submit" name="Edit" value="View"></td>';	
		echo '<p></tr>';
		}}}
		echo '</table>';
		?>

		<!-- end of right area of webpage -->
		
	<!--Footer of webpage-->
	<?php include "footer.php" ?>
	<!--end of footer-->
	</div>	
</div>

</font>
</body>
</html>