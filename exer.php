<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional// EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml11-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang = "en"
<head>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
    <title>exercise 3</title>
</head>
<body>
<?php
$N = 5;
$x1 = 15;
$x2 = 23;
$x3 = 4;
$x4 = 20;
$x5 = 8;//$x6 = 6;

$x = ($x1+$x2+$x3+$x4+$x5)/$N;
$diff1 = $x1 - $x;
$diff2 = $x2 - $x ;
$diff3 = $x3 - $x;
$diff4 = $x4 - $x;
$diff5 = $x5 - $x;
$diff6 = (($diff1*$diff1) + ($diff2*$diff2) + ($diff3*$diff3) + ($diff4*$diff4) + ($diff5*$diff5));// + ($diff7*$diff7));
Echo "<p> Fair Dice Method for getting the variance";
Echo "Integer Inputs are:" . $x1 . " " . $x2 . " ". $x3 . " ". $x4 . " ". $x5 . " ";
echo "<p> ((".$x1.")2 + (".$x2.")2 + (".$x3.")2 + (".$x4.")2 + (".$x5.")2 ) / 5"; // = " . $x;
echo "<p> (".($diff1*$diff1)." + ".($diff2*$diff2)." + ".($diff3*$diff3)." + ".($diff4*$diff4)." + ".($diff5*$diff5).") / 5 =" . $diff6;
echo "<p>1/6 * " .$diff6 . " = " . (1/($N-1)) * $diff6;


//echo $diff6;// * $diff6 * $diff6) * (1/$N);
?>
</body>
</html>