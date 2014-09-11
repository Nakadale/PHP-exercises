<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional// EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml11-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang = "en"
<head>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
    <title>Exercise 2</title>
</head>
<body>
<?php
$array = array("abc","abcoe","avc","abree","cbs","edd","nba","pbs");
$low = 0;
$high = count($array);
$number = $array[ceil( ( $low + $high  ) )/2];
echo $number;
//echo strlen($number); 
//echo $low + (strlen($number) -1)/2;
$sum = $low + (strlen($number)-1)/2;
echo " " . substr($number,$sum,1);
?>
</body>
</html>