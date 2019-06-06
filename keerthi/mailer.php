<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['phonenumber'];
$website = $_REQUEST['website'];
$to = "info@bsitsoftware.com";
$subject = "Contact Form Details";

$body = " From: $name\n\n E-Mail: $email\n\n message: $phonenumber\n\n website:\n\n $website";

mail($to, $subject, $body);
 
// redirect to confirmation
header('Location: confirmation.php');

?>