<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional// EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml11-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang = "en"
<head>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
    <title>Dive Reservation System</title>
	<?php include "style_set.php" ?>
<body>
<div id="container">
	<!--Header area of webpage-->
	<div id="header">
	<img src="Images/banner.jpg">
	</div>
	<!--end of header of webpage-->
	<div id="body">
	<table style="background-color: RGB(89,146,215);"><tr><td valign="top">
	<!--start of navigation area of webpage-->
	<?php include "navi.php" ?>
	<!--end of navigation area of webpage-->
	</td><td align="left" valign="top" style="width:557px;overflow: auto;margin: 0px 16px 8px 0px;float:left;">
		<?php
		echo '<br /><form method="POST"><fieldset>';
		echo 'Sort: <select size="1" height="1" name="sorts">';
		echo 	'<option value="1">Asc</option>';
		echo 	'<option value="2">Desc</option>';
		echo '</select>';
		echo '&nbsp&nbsp Keyword: <input type="text" name="search" size="30" class="text"  />&nbsp ';
		echo '<input type="submit" name="submit" value="Search" /></fieldset></form>';
		echo '<br /><table style="width:100%;">';
		 echo '<tr>';
			echo '<td align="center">Cancel Customer Reservation List</td>';
		 echo '</tr>';
		echo '</table>';
		echo '<table border="1" style="width:1000px;">';
		 echo '<tr id="com_head">';
			echo '<td style="width:250px;">Customer Name</td>';
			echo '<td style="width:250px;">Dive Name</td>';
			echo '<td style="width:150px;">Company Name</td>';
			echo '<td style="width:100px;">Home Phone</td>';
			echo '<td style="width:100px;">Work Phone</td>';
			echo '<td style="width:100px;">Mobile Phone</td>';
			echo '<td style="width:50px;">Cancel</td>';
		echo '<p></tr>';
		searchresult();
		function searchresult(){
		$search = $_POST['search'];
		$sorts = $_POST['sorts'];
		//echo $_POST['search'];
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
		if ($sorts == 1){
		$result = @mysql_query("SELECT * FROM cust_info WHERE dive_name LIKE '$search%' OR customer_number LIKE '$search%' OR company_name LIKE '$search%' OR first_name LIKE '$search%' OR last_name LIKE '$search%' ORDER BY customer_number ASC",$link);}
		else if ($sorts == 2){
		$result = @mysql_query("SELECT * FROM cust_info WHERE dive_name LIKE '$search%' OR customer_number LIKE '$search%' OR company_name LIKE '$search%' OR first_name LIKE '$search%' OR last_name LIKE '$search%' ORDER BY customer_number DESC",$link);}
		else if ($sorts == NULL){
		$result = @mysql_query("SELECT * FROM cust_info WHERE dive_name LIKE '$search%' OR customer_number LIKE '$search%' OR company_name LIKE '$search%' OR first_name LIKE '$search%' OR last_name LIKE '$search%' ORDER BY customer_number ASC",$link);}
		$num_rows = mysql_num_rows( $result );
		while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){ 
		echo '<tr id="com_body"><form action="custdel.php" method="POST">';
			if (($row['last_name'] == NULL) && ($row['first_name'] == NULL))
			{ echo '<td></td>';}
			else if (($row['last_name'] != NULL) && ($row['first_name'] == NULL))
			{ echo '<td>'.$row['last_name'].'</td>'; }
			else if (($row['last_name'] == NULL) && ($row['first_name'] == NULL))
			{ echo '<td>'.$row['first_name'].'</td>'; }
			else if (($row['last_name'] != NULL) && ($row['first_name'] != NULL))
			{ echo '<td>'.$row['last_name'].', '.$row['first_name'].'</td>'; }
			echo '<td>'.$row['dive_name'].'</td>';
			echo '<td>'.$row['company_name'].'</td>';
			echo '<td>'.$row['home_phone'].'</td>';
			echo '<td>'.$row['work_phone'].'</td>';
			echo '<td>'.$row['mobile_phone'].'</td>';
			echo '<td><input type="hidden" name="custno" value="'.$row['customer_number'].'">';
			echo '<input type="submit" name="delete" value="Cancel"></td>';	
		echo '<p></form></tr>';
		}}
		echo '</table>';
		?>
	</td>
	<td valign="top" style="width:190px;">
	<?php include "comment.php" ?>
	</td>
	</tr></table>
	<!--Footer of webpage-->
	<?php include "footer.php" ?>
	<!--end of footer-->
	</div>	
</div>

</body>
</html>