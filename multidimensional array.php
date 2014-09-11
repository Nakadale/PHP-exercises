<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional// EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml11-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang = "en"
<head>
	<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
	<title>Multi Dimensional Arrays</title>
</head>
<body>
<p>Some North American States, Provinces, and Territories:</p>
<?php

//Create one array:
$mexico = array(
'YU' => 'Yucatan',
'BC' => 'Baja California',
'OA' => 'Oaxaca');

//Create another array:
$us = array(
'MD' => 'Maryland',
'IL' => 'Illinois',
'PA' => 'Pennsylvania',
'IA' => 'Iowa');

//Create a third array:
$canada = array(
'QC' => 'Quebec',
'AB' => 'Alberta',
'NT' => 'Northwest Territories',
'YT' => 'Yukon',
'PE' => 'Prince Edward Island');

//Combine the arrays:
$n_america = array(
'Mexico' => $mexico,
'United States' => $us,
'Canada' => $canada);

//Loop through the countries:
foreach($n_america as $country => $list){

//Print a heading
echo "<h2>$country</h2><ul>";

//Print each state, province, or territory:
foreach ($list as $list => $value)
{ echo "<li>$list - $value</li>\n"; }
echo '</ul>';
}
?>

</body>
</html>