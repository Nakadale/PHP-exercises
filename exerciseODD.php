<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional// EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml11-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang = "en"
<head>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
    <title>Odd & Even</title>
</head>
<?php
$Num1 = 2;
$Num2 = $Num1%2;
$Num3 = 2;
$Num4 = $Num3%2;
if ($Num2 == 0 && $Num4 == 0){ 
echo "<p>Both Numbers are even. This is their sum: " .($Num1+$Num3);}
if ($Num2 == 1 && $Num4 == 1){ 
echo "<p>Both Numbers are odd. This is their Difference: " .($Num1-$Num3);}
if (($Num2 == 0 && $Num4 == 1) || ($Num2 == 1 && $Num4 == 0)) {
echo "<p>One of the two numbers is even. This is their Product: " .($Num1*$Num3);}	

$number1 = 5;
$number2 = $number1%5 ;
$number3 = 10;
$number4 = $number3%5;

if ($number2 == 0 && $number4 == 0){ 
echo "<p>Both Numbers are multiples of 5. This is their sum: " .($number1+$number3);}
if ($number2 != 0 && $number4 != 0){ 
echo "<p>Both Numbers are not multiple of 5. This is their product: " .($number1*$number3);}
if (($number2 == 0 && $number4 != 0)) {
echo "<p>One of the two numbers is a multiple of 5. This is their square: " .($number1*$number1);}	
if (($number2 != 0 && $number4 == 0)) {
echo "<p>One of the two numbers is a multiple of 5. This is their square: " .($number3*$number3);}

$string = "ABCDE";
echo "<p><p> The String is " . $string ."<p>"; 
//switch(STRTOUPPER(substr($string,0,1))){
//case "A" : Echo "The String Begins with a Vowel";Break;
//case "B" : Echo "The String Begins with a Consonant";Break;
//case "C" : Echo "The String Begins with a Consonant";Break;
//case "D" : Echo "The String Begins with a Consonant";Break;
//case "E" : Echo "The String Begins with a Vowel";Break;
//case "F" : Echo "The String Begins with a Consonant";Break;
//case "G" : Echo "The String Begins with a Consonant";Break;
//case "H" : Echo "The String Begins with a Consonant";Break;
//case "I" : Echo "The String Begins with a Vowel";Break;
//case "J" : Echo "The String Begins with a Consonant";Break;
//case "K" : Echo "The String Begins with a Consonant";Break;
//case "L" : Echo "The String Begins with a Consonant";Break;
//case "M" : Echo "The String Begins with a Consonant";Break;
//case "N" : Echo "The String Begins with a Consonant";Break;
//case "O" : Echo "The String Begins with a Vowel";Break;
//case "P" : Echo "The String Begins with a Consonant";Break;
//case "Q" : Echo "The String Begins with a Consonant";Break;
//case "R" : Echo "The String Begins with a Consonant";Break;
//case "S" : Echo "The String Begins with a Consonant";Break;
//case "T" : Echo "The String Begins with a Consonant";Break;
//case "U" : Echo "The String Begins with a Vowel";Break;
//case "V" : Echo "The String Begins with a Consonant";Break;
//case "X" : Echo "The String Begins with a Consonant";Break;
//case "Y" : Echo "The String Begins with a Consonant";Break;
//case "Z" : Echo "The String Begins with a Consonant";Break;
//}
$F = STRTOUPPER(substr($string,0,1));
if ($F == "A" || $F == "E" || $F == "I" || $F == "O" ||$F == "U")
{ Echo "The String Begins with a Vowel"; }
if ($F == "B" || $F == "C" || $F == "D" || $F == "F" ||$F == "G"||$F == "H"||$F == "J"||$F == "K"||$F == "L"||$F == "M"||$F == "N"||$F == "P"||$F == "Q"||$F == "R"||$F == "S"||$F == "T"||$F == "V"||$F == "W"||$F == "X"||$F =="Y"||$F == "Z"){
Echo "The String Begins with a Consonant"; }
?>
</body>
</html>