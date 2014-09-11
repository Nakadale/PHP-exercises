   <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional// EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml11-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang = "en"
<head>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
    <title>compatibility calculator</title>
</head>
<body>
<form action="result.php" method="POST">
<table border = "2">
<tl>
<td>Name of First Person</td>
<td><input type="text" size="20" maxlength="50" name="fname1" /></td>
<td><input type="text" size="10" maxlength="50" name="lname1" /><br></td>
<td><input type="radio" value="Male" name="button1" /> Male <br></td>
<td><input type="radio" value="Female" name="button1" /> Female <br></td>
<td>Age: <input type="text" size="10" maxlength="50" name="age1" /></td>
</tl>
<tr>
<tl>
<td>Name of Second Person</td>
<td><input type="text" size="20" maxlength="50" name="fname2" /></td>
<td><input type="text" size="10" maxlength="50" name="lname2" /><br></td>
<td><input type="radio" value="Male" name="button2" /> Male <br></td>
<td><input type="radio" value="Female" name="button2" /> Female <br></td>
<td>Age: <input type="text" size="10" maxlength="50" name="age2" /></td>
</tl>
<p>
<input type="submit" name="submit" />
</form>
</body>
</html>