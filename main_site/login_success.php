<?
session_start();
if(!session_is_registered(myusername)){
header("location:log-in.php");
}
?>

<html>
<body>
Login Successful
</body>
</html>