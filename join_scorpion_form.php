<?php
// When we unzipped PHPMailer, it unzipped to
// public_html/PHPMailer_5.2.0
require("lib/phpmailer/PHPMailerAutoload.php");

// $email and $message are the data that is being
// posted to this page from our html contact form
$email = $_REQUEST['email'] ;
$firstName = $_REQUEST['firstName'] ;
$lastName = $_REQUEST['lastName'] ;
$message = $_REQUEST['message'] ;
$phone = $_REQUEST['phone'] ;
$location = $_REQUEST['location'] ;
$expertise1 = $_REQUEST['expertise1'] ;
$expertise2 = $_REQUEST['expertise2'] ;
$expertise3 = $_REQUEST['expertise3'] ;
$expertise4 = $_REQUEST['expertise4'] ;
$expertise5 = $_REQUEST['expertise5'] ;
$partTime = $_REQUEST['partTime'] ;
$fullTime = $_REQUEST['fullTime'] ;
$totalWeekly = $_REQUEST['totalWeekly'] ;
$resume = $_REQUEST['resume'] ;

include 'includes/smtp.php'; 

// $email = $_REQUEST['email'] ;
$mail->From = $email;

// below we want to set the email address we will be sending our email to.
$mail->AddAddress("scsforms@myscorpiontest.com", "Scorpion Computer Services");
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
Join Scorpion Application<br><br>
<strong>First Name</strong> $firstName<br><br>
<strong>Last Name:</strong> $lastName<br><br>
<strong>Email:</strong> $email<br><br>
<strong>Phone:</strong> $phone<br><br>
<strong>Location:</strong> $location<br><br>
List of Expertise:<br><br>
1. $expertise1<br><br>
2. $expertise2<br><br>
3. $expertise3<br><br>
4. $expertise4<br><br>
5. $expertise5<br><br>
<strong>Part Time Rate:</strong> $partTime<br><br>
<strong>Full Time Rate:</strong> $fullTime<br><br>
<strong>Weekly Hours:</strong> $totalWeekly<br><br>
<strong>Additional Information:</strong> $message<br>
$resume
";
$mail->AltBody = $message;

if (isset($_FILES['resume']) &&
    $_FILES['resume']['error'] == UPLOAD_ERR_OK) {
    $mail->AddAttachment($_FILES['resume']['tmp_name'],
                         $_FILES['resume']['name']);
}

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