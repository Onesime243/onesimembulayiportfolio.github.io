<?php


$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$from = 'From: Onesimeportfolio.com'; 
$to = 'mbonesime@gmail.com'; 
$subject = 'Email From Onesime Portfolio';

$body = " From: $name\n E-Mail: $email\n Message: $message";

if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
       $success = "Message successfully sent";
    } else {
        $success = "Message Sending Failed, try again";
    }
}
?>

<?php

header('location: https://Onesimeportfolio.com/');
exit;



?>