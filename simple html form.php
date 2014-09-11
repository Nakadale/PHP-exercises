   <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional// EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml11-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang = "en"
<head>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
    <title>Simple HTML Form</title>
</head>
<body>
<form action="handle-form.php" method="post">
<fieldset><legend> Enter your information in the form below:</legend>
<p><b> Name: </b> <input type="text" value="name" size="20" maxlength="40" /></p>
<p><b> Email Address: </b> <input type="text" value="email" size="40" maxlength="60" /></p>
<p><b> Gender: </b> <input type="radio" name="gender" value="m" /> Male <input type="radio" name="gender" value="F" /> Female</p>

<P><B>Age: </b>
<select name="age">
	<option value = "0-29">Under 30</option>
	<option value = "30-60">Between 30 and 60</option>
	<option value = "60+">Over 60</option>
</select><p>
<P><B>Comments:</b> <textarea cols="40" rows="3" wrap="OFF" name="comments"></textarea></p>
</fieldset>
<div align="center"><input type="submit" value="Submit my Information" name="submit" /></div>
</form>
</body>
</html>