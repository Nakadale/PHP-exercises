<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional// EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml11-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang = "en"
<head>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
    <title>POST test</title>
</head>
</body>
<form method="POST">
Name: <input type="text" value="" name="fname" />
Age: <input type="text" value="" name="age" />
<input type="submit"/>
/</form>

<?php
//$name = $_REQUEST["fname"];
$test = 17;
var_dump($test);
$test = (string)$test;
var_dump($test);
//echo $test;
//echo $name;
?>
</body>
</html>