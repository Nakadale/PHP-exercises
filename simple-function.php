   <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional// EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml11-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang = "en"
<head>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
    <title>Simple Function</title>
</head>
<body>
<?php

function printcompanyname($companyname){
echo "<p>$companyname</p>";	
changecolor();
}

function changecolor(){
echo "<h1 style = \"color:#FF0000\">Error!!!</h1>\n";	
}
printcompanyname("Course Technology");
?>
</form>
</body>
</html>