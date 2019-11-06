<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];
				   
$to = "qdlyles@gmail.com";
$subject = "Lyles Dobermans Client";
$body = "Name: $name \n Contact# $phone \n Email: $email \n\n Message: $message";

mail ($to,$subject,$body);

echo "Message has been sent";
?>

<html>
<body>

<a href="http://www.camcolordesigns.com/lyles"><button>Back to Lyles Dobermans</button></a>
</body>
</html>