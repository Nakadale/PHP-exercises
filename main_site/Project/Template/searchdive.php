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
		echo '<br><form method="POST">';
		echo 'Sort: <select size="1" height="1" name="sorts">';
		echo 	'<option value="1">Asc</option>';
		echo 	'<option value="2">Desc</option>';
		echo '</select>';
		echo '&nbsp&nbsp&nbspKeyword: <input type="text" name="search" size="30" class="text" />';
		echo ' <input type="submit" name="submit" value="Search" ></form><br>';
		echo '<table cols="2" border="1" cellpadding="0" cellspacing="0" align="center" width="100%">';
		 echo '<tr bgcolor="RGB(83,137,207)">';
			echo '<td align="center">Dive Event List</td>';
		 echo '</tr>';
		echo '</table>';
		echo '<table cols="2" border="1" cellpadding="0" cellspacing="0" align="center" width="100%">';
		echo '<tr bgcolor="RGB(83,137,207)">';
			echo '<td align="center" width="8%">Dive Number</td>';
			echo '<td align="center" width="15%">Dive Date</td>';
			echo '<td align="center" width="13%">Dive Name</td>';
			echo '<td align="center" width="13%">Boat Name</td>';
			echo '<td align="center" width="10%">Marina</td>';
			//echo '<td align="center">Marina Address</td>';
			echo '<td align="center" width="10%">Alternate Marina</td>';
			//echo '<td align="center">Alternate Marina Address</td>';
			echo '<td align="center" width="10%">Show Time</td>';
			echo '<td align="center" width="7%">Limit</td>';
			echo '<td align="center" width="7%">Price</td>';
			echo '<td align="center">View Record</td>';
			echo '<p></tr>';
		searchresult();
		function searchresult(){
		$search = $_POST['search'];
		$sorts = $_POST['sorts'];
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
		$result = @mysql_query("SELECT * FROM dive_info WHERE dive_name LIKE '$search%' OR dive_number LIKE '$search%' OR boat_name LIKE '$search%' ORDER BY dive_number ASC",$link);}
		else if ($sorts == 2){
		$result = @mysql_query("SELECT * FROM dive_info WHERE dive_name LIKE '$search%' OR dive_number LIKE '$search%' OR boat_name LIKE '$search%' ORDER BY dive_number DESC",$link);}
		$num_rows = mysql_num_rows( $result );
		while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){ 
		echo '<tr bgcolor="RGB(207,228,255)"><form method="post" action="diveview.php">';
			echo '<td align="center">'.$row['dive_number'].'</td>';
			echo '<td align="center">'.$row['dive_month'].'/'.$row['dive_day'].'/'.$row['dive_year'].'</td>';
			echo '<td align="center">'.$row['dive_name'].'</td>';
			echo '<td align="center">'.$row['boat_name'].'</td>';
			echo '<td align="center">'.$row['marina'].'</td>';
			//echo '<td align="center">'.$row['marina_add'].'</td>';
			echo '<td align="center">'.$row['alt_marina'].'</td>';
			//echo '<td align="center">'.$row['alt_marina_add'].'</td>';
			echo '<td align="center">'.$row['showtime'].'</td>';
			echo '<td align="center">'.$row['limits'].'</td>';
			echo '<td align="center">'.$row['price'].'</td>';
			echo '<td align="center"><input type="hidden" name="hideval" value="'.$row['dive_number'].'">';
			echo '<input type="submit" name="Edit" value="View"></td>';
		echo '<p></form></tr>';
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