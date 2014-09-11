   <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional// EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml11-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang = "en"
<head>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
    <title>selectform2</title>
</head>
<body>
<div>
<?php
print "Welcome<b> ".$_POST['user']."</b><br/>\n";
print "Your address is: <br/><b>".$_POST['address']."</b><br/>\n";

if (is_array( $_POST['products'] ) ) {
	print "<p>Your Product choices are: </p>\n";
	print "<ul>\n";
	
foreach ($_POST['products'] as $value) {
	print "<li>$value</li>\n";
}
print "</ul>\n";	
}
?>
</form>
</body>
</html>