<?php

$mail = new PHPMailer();
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->SMTPDebug = 0;
$mail->SMTPAuth = false;
$mail->SMTPSecure = "none";
$mail->Host = 'localhost';  // Specify main and backup SMTP servers
$mail->Port = 25;    
$mail->Username = "";                 // SMTP username
$mail->Password = "";                         // SMTP password


?>