<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional// EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml11-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang = "en"
<head>
	<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
	<title>Numbers</title>
</head>
<body>
<?php

//set the variables:
$quantity = 30; // Buying 30 widgets.
$price = 119.95;
$taxrate = 0.05; //%5 tax tax

//calculate the total
$total = $quantity * $price;
$total = $total + ($total * $taxrate); //calculate and add the tax.

//format the total
$total = number_format ($total,2);

// Print the results
echo '<p> You are purchasing <b>' . $quantity .'<b> widget(s) at a cost of <b> $' . $price . '<b/> each. with tax, the total comes to <b> $' . $total . '</b>.</p>';

?>
</body>
</html>