   <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional// EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml11-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang = "en"
<head>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
    <title>Results</title>
</head>
<body>
<?php
$fname1 = $_POST['fname1'];
$fname2 = $_POST['fname2'];
$lname1 = $_POST['lname1'];
$lname2 = $_POST['lname2'];
$age1 = $_POST['age1'];
$age2 = $_POST['age2'];
$button1 = $_POST['button1'];
$button2 = $_POST['button2'];
$score;
if (($button1 == "Male" && $button2 == "Male") || ($button1 == "Female" && $button2 == "Female")) {
	$score = $score - 20;
}
if (substr($fname1,0,1) == substr($fname2,0,1)){
	$score = $score + 20;
}
if (strlen($fname1) == strlen($fname2)){
	$score = $score + 20;
}

if (age1-age2 <5 ){
	$score = $score + 20;
}
if (lname1 != lname2){
	$score = $score + 20;
}
if ($button1 != $button2){
	$score = $score + 20;
}

echo "Your compatibility score is: ". $score;
?>
</form>
</body>
</html>