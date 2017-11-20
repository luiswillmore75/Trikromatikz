<?php

$name = $_GET['name'];
$gender = $_GET['gender'];
$email = $_GET['email'];
$country = $_GET['country'];
$message = $_GET['message'];

$mailmsg = 'You got a mail from '.$name.' '.' with the following message: \r\n'.$message;

$to = 'trikromatikz@gmail.com';
$subject = 'Website Contact Form';
$headers = 'From: '.$email;

mail($to,$subject,$mailmsg,$headers);
header('Location: index.html');

 ?>
