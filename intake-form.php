<?php
// When we unzipped PHPMailer, it unzipped to
// public_html/PHPMailer_5.2.0
require("lib/phpmailer/PHPMailerAutoload.php");

// $email and $message are the data that is being
// posted to this page from our html contact form
$email = $_REQUEST['email'] ;
$name = $_REQUEST['name'] ;
$message = $_REQUEST['message'] ;
$phone = $_REQUEST['phone'] ;
$additional = $_REQUEST['additionalInfo'] ;
$fundedOption = $_REQUEST['fundedOption'] ;


include 'includes/smtp.php'; 

// $email = $_REQUEST['email'] ;
$mail->From = $email;

// below we want to set the email address we will be sending our email to.
$mail->AddAddress("brianandgarcia@gmail.com", "Scorpion Computer Services");
// set word wrap to 50 characters
$mail->WordWrap = 50;
// set email format to HTML
$mail->IsHTML(true);

$mail->Subject = "SCS: New Lead";

// $message is the user's message they typed in
// on our contact us page. We set this variable at
// the top of this page with:
// $message = $_REQUEST['message'] ;
$mail->Body    = "
<strong>New Scorpion Lead</strong><br><br>
<strong>Your Name:</strong> $name<br><br>
<strong>Email:</strong> $email<br><br>
<strong>Your Funded Need, Wish or Problem:</strong> $message<br><br>
<strong>Phone Number:</strong> $phone <br><br>
<strong>Requested Additional Info:</strong> $additional $fundedOption
";
$mail->AltBody = $message;

if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

$mail = new PHPMailer();
$mail->From = 'csforms@myscorpiontest.com';
$mail->FromName = 'Scorpion Computer Services';

// below we want to set the email address we will be sending our email to.
$mail->AddAddress($email);

// set word wrap to 50 characters
$mail->WordWrap = 50;
// set email format to HTML
$mail->IsHTML(true);

$mail->Subject = "We Will Be In Touch!";

$message = "Thank you for contacting Scorpion Computer Services. One of our specialists will contact you if more information is required.";
$mail->Body = $message;
$mail->AltBody = $email;

$mail->Send();

header("Location: thank_you");

?>