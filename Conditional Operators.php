<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional// EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml11-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang = "en"
<head>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
    <title>Conditional Operators</title>
</head>
<body>
<?php

//assign value:

$blackjackplayer1 = 22;

//conditional operator:

($blackjackplayer1 <= 21) 
? print "player 1 is still in the game."
: print "player 1 is out of the action." ;
//($blackjackplayer1 <= 22) ? $result = "player 1 is out of the action.": ;
//($blackjackplayer1 <= 23) ? $result = "player 2 is out of the action.": ;

//echo "<p>$result</p>";
?>
</body>
</html>