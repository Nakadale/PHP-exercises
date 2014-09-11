    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional// EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml11-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang = "en"
<head>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
    <title>calculator</title>
</head>
<body>
<form method="POST" name="calc">
First Number: <input type="text" size="10" maxlength="10" name="num1" /><br>
Second Number: <input type="text" size="10" maxlength="10" name="num2" /><br>
Select Operation: <select name="operation">
	<option value = "+">Addition(+)</option>
	<option value = "-">Subtraction(-)</option>
	<option value = "*">Multiplication(*)</option>
	<option value = "/">Division(/)</option>
	<option value = "%">Modulus(%)</option>
</select><p>
<input type="submit" name="submit" /><p>
</form>
<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$oper = $_POST['operation'];

echo "The answer is : ";
switch ($oper){
	case "+": $sum = $num1 + $num2;break;
	case "-": $sum = $num1 - $num2;break;
	case "*": $sum = $num1 * $num2;break;
	case "/": $sum = $num1 / $num2;break;
	case "%": $sum = $num1 % $num2;break;
}
echo $sum;
?>
</form>
</body>
</html>