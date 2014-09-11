<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional// EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml11-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang = "en"
<head>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
	<title>If Statement</title>    
	</head>
<body>
<?php

$examplevar = 5;

//if ($examplevar) { // Condition Evaluates to "True" IF the value of $examplevar is not False,0,0.0, "0", " ", NULL
if ($examplevar == 5) {
	echo "<p>The condition evaluates to true.</P>";
	echo '<p>$examplevar is equal '. "$examplevar. </P>";
	echo "<p>Each of these lines will be printed.</P>";
	}
echo "<p> This Statement always execute after the if statement.</P>";
?>
</body>
</html>

