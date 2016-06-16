<?php
// When we unzipped PHPMailer, it unzipped to
// public_html/PHPMailer_5.2.0
require("lib/phpmailer/PHPMailerAutoload.php");

// $email and $message are the data that is being
// posted to this page from our html contact form
$firstName = $_REQUEST['firstName'] ;
$lastName = $_REQUEST['lastName'] ;
$phone = $_REQUEST['phone'] ;
$email = $_REQUEST['email'] ;
$resume = $_REQUEST['file'] ;
$location = $_REQUEST['location'] ;
$expertise = $_REQUEST['expertise'] ;
$partTime = $_REQUEST['partTime'] ;
$fullTime = $_REQUEST['fullTime'] ;
$totalWeekly = $_REQUEST['totalWeekly'] ;
$additionalInfo = $_REQUEST['additionalInfo'] ;

$mail = new PHPMailer();

// set mailer to use SMTP
$mail->IsSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "brianandgarcia@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "3Y#S%87Fz%MU#GfpTjBGbhyrpnb%wY8b";

// $email is the user's email address the specified
// on our contact us page. We set this variable at
// the top of this page with:
// $email = $_REQUEST['email'] ;
$mail->From = $email;

// below we want to set the email address we will be sending our email to.
$mail->AddAddress("brian@briangarcia.me", "Brian Garcia");
// set word wrap to 50 characters
$mail->WordWrap = 50;
// set email format to HTML
$mail->IsHTML(true);

$mail->Subject = "SCS: New Join Application";

// $message is the user's message they typed in
// on our contact us page. We set this variable at
// the top of this page with:
// $message = $_REQUEST['message'] ;
$mail->Body    = 
"Name: $firstName $lastName<br>
Phone: $phone<br>
Email: $email<br>
Resume: $resume<br>
Location: $location<br>
Expertise: $expertise<br>
Part Time: $partTime<br>
Full Time: $fullTime<br>
Total Weekly: $totalWeekly<br>
Additional Info: $additionalInfo
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