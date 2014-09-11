   <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional// EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml11-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang = "en"
<head>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
    <title>selectform2</title>
</head>
<body>
<form action="selectform2.php" method="post">
<p>Name: <input type="text" name="user" /></p>
<p>
Address:
<br />
<textarea cols="40" rows="5" wrap="OFF" name="address"></textarea>
</P>
<P>
Products:
<br />
<select name="products[]" multiple="multiple">
<option>Sonic Screwdriver</option>
<option>Tricorder</option>
<option>ORAC AI</option>
<option>HAL 2000</option>
</select>
</p>
<p><input type="submit" value="Hit It!" /></P>
</form>
</div>
</body>
</html>