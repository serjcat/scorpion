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

$mail = new PHPMailer(true);
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Host = 'secure.emailsrvr.com';  // Specify main and backup SMTP servers
$mail->Port = 465;    
$mail->Username = "scsforms@scorpioncomputerservices.com";                 // SMTP username
$mail->Password = "1]g&4@9'%]&4&;L";                         // SMTP password

// $email = $_REQUEST['email'] ;
$mail->From = $email;

// below we want to set the email address we will be sending our email to.
$mail->AddAddress("brianandgarcia@gmail.com", "Brian Garcia");
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

header("Location: thank_you");

?>