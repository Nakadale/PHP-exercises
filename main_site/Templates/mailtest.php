<html>
<body>
<?PHP 

$date = date ("l, F jS, Y"); 
$time = date ("h:i A"); 

$msg = "Below is the result of your feedback form. It was submitted on $date at $time.\n\n"; 

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    foreach ($_POST as $key => $value) { 
        $msg .= ucfirst ($key) ." : ". $value . "\n"; 
    }
}
else {
    foreach ($_GET as $key => $value) { 
        $msg .= ucfirst ($key) ." : ". $value . "\n"; 
    }
}

mail("angel_of_ryu03@yahoo.com", "Test email using PHP", "Test content of email", "From: Sherwin!!!!");
//mail($to, $subject, $msg, $headers); 
if ($forward == 1) { 
    header ("Location:$location"); 
} 
else { 
    echo "Thank you for submitting our form. We will get back to you as soon as possible."; 
} 

?>
<?php  
// Your email address $email = "you@example.com";  
// The subject $subject = "Enter your subject here";  
// The message $message = "Enter your message here";  
//mail("angel_of_ryu03@yahoo.com", "Test email using PHP", "Test content of email", "From: Sherwin!!!!");  
//echo "The email has been sent.";  
?>
</body>
</html> 