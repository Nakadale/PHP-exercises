<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<title>Inserting data data</title>
</head>
<body>
<?php
DEFINE ('DB_USER', 'root'); // Insert your database username into the quotes. 
DEFINE ('DB_PASSWORD', ''); // Insert your database password into the quotes. 
DEFINE ('DB_HOST', 'localhost'); // This will most likely stay the same. 
DEFINE ('DB_NAME', 'testdb'); //Insert your actual database name in the quotes. 
$dbc = @mysql_connect (DB_HOST, DB_USER, DB_PASSWORD) OR die ('Could not connect to MySQL: ' . mysql_error()); //@ is to o not show errors on the page 
@mysql_select_db (DB_NAME) OR die('Could not select the database: ' . mysql_error() ); 
if(isset($_POST['submit'])){ //if the form was submited 
  
$search = $_POST['search']; //put in $search what the user entered  
    
if(trim($search) == ''){ //if the user didn't type a keyword 
        
$errors = '<font color="red">Please enter a keyword</font><br /><br />'; 
} 
if($errors == ''){ //if we don't have any errors  
// $search holds what the user typed 
$query = "SELECT * from testtable WHERE testfield LIKE '%$search%'";  
$result = mysql_query($query) or die(mysql_error()); 
if($result){ 
display_form();//redisplay the search box 
echo "<h1>found ". mysql_num_rows($result)." results</h1><br />"; 
echo "<ul>"; 
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){ 
$mess=$row['post']; 
$view = 'page.php?id='.$row['id']; 
echo "<li><a href=".$view.">".$row['title'].'</a></li>'; 
echo '<p style="margin-right:100px;margin-top: 0px;">'.snippet($mess, 200, true).'</p>';
//bring only 200 chars from database 
} 
} 
} 
} 

if(!isset($_POST['submit']) || $errors != ''){  
echo $errors; 
display_form();//display first time the search box 
} 
function display_form(){   
?>
<form id="search" action="<?php $_SERVER['PHP_SELF']; ?>" method="post"> 
Keyword: <input type="text" name="search" size="30" class="text"  /><br /> 
<input type="submit" name="submit" value="Search" /> 
</form> 
<?php
}    
function snippet($text, $chars, $dots = false) 
{ 
$end_char = substr($text, $chars, 1); 
if(preg_match('#S#', $end_char)) 
{ 
$chars += strpos($text, ' ', $chars) - $chars; 
} 
$ret = ($dots) ? substr($text, 0, $chars) . '...' : substr($text, 0, $chars); 
return $ret ; 
}  
?>
</body>
</html>