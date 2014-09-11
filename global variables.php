   <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional// EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml11-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang = "en"
<head>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
    <title>Global Variables</title>
</head>
<body>
<?php

// local variable
$life;
function meaningtolife(){
	print "The meaning of life is $life<br />";
}
meaningtolife();
//global variable
function meaningoflife2(){
	global $life;
	print "the meaning of life is $life<br />";
}
meaningoflife2();

//$life = 42;
function meaningoflife3(){
	print "the meaning of life is $GLOBALS["$life"]<br />";
}
meaningoflife3();
?>
</form>
</body>
</html>