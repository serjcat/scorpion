<?php
if($_POST)
{
	include 'sendFile.php';
	$to_Email   	= "brianandgarcia@gmail.com"; //Replace with recipient email address
	$subject        = 'Join Scorpion Application Submission'; //Subject line for emails
	
	//check if its an ajax request, exit if not
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
	
		//exit script outputting json data
		$output = json_encode(
		array(
			'type'=>'error', 
			'text' => 'Request must come from Ajax'
		));
		
		die($output);
    } 
	
	//check $_POST vars are set, exit if any missing
	if(!isset($_POST["userName"]) || !isset($_POST["userLName"]) || !isset($_POST["userEmail"]) || !isset($_POST["userPhone"]) || !isset($_POST["userLocation"]) || !isset($_POST["userExp1"]) || !isset($_POST["userExp2"]) || !isset($_POST["userExp3"]) || !isset($_POST["userExp4"]) || !isset($_POST["userExp5"]) || !isset($_POST["userPTime"]) || !isset($_POST["userFTime"]) || !isset($_POST["userHours"]) /*|| !isset($_POST["userMessage"])*/)
	{
		$output = json_encode(array('type'=>'error', 'text' => 'Input fields are empty!'));
		die($output);
	}

	//Sanitize input data using PHP filter_var().
	$user_Name        = filter_var($_POST["userName"], FILTER_SANITIZE_STRING);		$user_LName       = filter_var($_POST["userLName"], FILTER_SANITIZE_STRING);
	$user_Email       = filter_var($_POST["userEmail"], FILTER_SANITIZE_EMAIL);
	$user_Phone       = filter_var($_POST["userPhone"], FILTER_SANITIZE_STRING);		$user_Location    = filter_var($_POST["userLocation"], FILTER_SANITIZE_STRING);		$user_Exp1        = filter_var($_POST["userExp1"], FILTER_SANITIZE_STRING);		$user_Exp2        = filter_var($_POST["userExp2"], FILTER_SANITIZE_STRING);		$user_Exp3        = filter_var($_POST["userExp3"], FILTER_SANITIZE_STRING);		$user_Exp4        = filter_var($_POST["userExp4"], FILTER_SANITIZE_STRING);		$user_Exp5        = filter_var($_POST["userExp5"], FILTER_SANITIZE_STRING);		$user_PTime        = filter_var($_POST["userPTime"], FILTER_SANITIZE_STRING);		$user_FTime        = filter_var($_POST["userFTime"], FILTER_SANITIZE_STRING);		$user_Hours        = filter_var($_POST["userHours"], FILTER_SANITIZE_STRING);
	$user_Message     = filter_var($_POST["userMessage"], FILTER_SANITIZE_STRING);
	$message	  	= 'Join Scorpion Application'. "\r\n\r\n";	$message 		.=	'First Name: '. $user_Name. "\r\n\r\n";	$message 		.= 'Last Name:  '. $user_LName . "\r\n\r\n";	$message		.= 'Email: '. $user_Email . "\r\n\r\n";	$message		.= 'Phone: '. $user_Phone . "\r\n\r\n";	$message		.= 'Location: '. $user_Location . "\r\n\r\n";	$message		.= 'List of Expertise: ' . "\r\n\r\n";	$message		.= '1. ' . $user_Exp1 . "\r\n\r\n";	$message		.= '2. ' . $user_Exp2 . "\r\n\r\n";	$message		.= '3. ' . $user_Exp3 . "\r\n\r\n";	$message		.= '4. ' . $user_Exp4 . "\r\n\r\n";	$message		.= '5. ' . $user_Exp5 . "\r\n\r\n";	$message		.= 'Part Time Rate: ' . $user_PTime . "\r\n\r\n";	$message		.= 'Full TIme Rate: ' . $user_FTime . "\r\n\r\n";	$message		.= 'Weekly Hours: ' . $user_Hours . "\r\n\r\n";	$message		.= 'Additional Information: ' . $user_Message;
	//additional php validation
	if(strlen($user_Name)<1) // If length is less than 1 it will throw an HTTP error.
	{
		$output = json_encode(array('type'=>'error', 'text' => 'First Name is too short or empty!'));
		die($output);
	}	if(strlen($user_LName)<1) // If length is less than 4 it will throw an HTTP error.	{		$output = json_encode(array('type'=>'error', 'text' => 'Last Name is too short or empty!'));		die($output);	}	
	if(!filter_var($user_Email, FILTER_VALIDATE_EMAIL)) //email validation
	{
		$output = json_encode(array('type'=>'error', 'text' => 'Please enter a valid email!'));
		die($output);
	}
	if(!is_numeric($user_Phone) || strlen($user_Phone) < 6) //check entered data is numbers
	{
		$output = json_encode(array('type'=>'error', 'text' => 'Only numbers allowed in phone field'));
		die($output);
	}		if(strlen($user_Location)<2) // If length is less than 4 it will throw an HTTP error.	{		$output = json_encode(array('type'=>'error', 'text' => 'Location Name is too short or empty!'));		die($output);	}		if(strlen($user_Exp1)<4) // If length is less than 4 it will throw an HTTP error.	{		$output = json_encode(array('type'=>'error', 'text' => 'Description is too short or empty!'));		die($output);	}		if(strlen($user_Exp2)<4) // If length is less than 4 it will throw an HTTP error.	{		$output = json_encode(array('type'=>'error', 'text' => 'Description is too short or empty!'));		die($output);	}	/*	if(strlen($user_Exp3)<4) // If length is less than 4 it will throw an HTTP error.	{		$output = json_encode(array('type'=>'error', 'text' => 'Description is too short or empty!'));		die($output);	}		if(strlen($user_Exp4)<4) // If length is less than 4 it will throw an HTTP error.	{		$output = json_encode(array('type'=>'error', 'text' => 'Description is too short or empty!'));		die($output);	}		if(strlen($user_Exp5)<4) // If length is less than 4 it will throw an HTTP error.	{		$output = json_encode(array('type'=>'error', 'text' => 'Description is too short or empty!'));		die($output);	}*/		if(strlen($user_PTime)<3) // If length is less than 3 it will throw an HTTP error.	{		$output = json_encode(array('type'=>'error', 'text' => 'Description is too short or empty!'));		die($output);	}		if(strlen($user_FTime)<3) // If length is less than 3 it will throw an HTTP error.	{		$output = json_encode(array('type'=>'error', 'text' => 'Description is too short or empty!'));		die($output);	}		if(strlen($user_Hours)<2) // If length is less than 2 it will throw an HTTP error.	{		$output = json_encode(array('type'=>'error', 'text' => 'Description is too short or empty!'));		die($output);	}
/*	if(strlen($user_Message)<5) //check emtpy message
	{
		$output = json_encode(array('type'=>'error', 'text' => 'Too short message! Please enter something.'));
		die($output);
	}
*/	
	### Attachment Preparation ###
	$file_attached = false; //initially file is not attached
	
	if(isset($_FILES['file_attach'])) //check uploaded file
	{
		//get file details we need
		$file_tmp_name 	  = $_FILES['file_attach']['tmp_name'];
		$file_name 		  = $_FILES['file_attach']['name'];
		$file_size 		  = $_FILES['file_attach']['size'];
		$file_type 		  = $_FILES['file_attach']['type'];
		$file_error 	  = $_FILES['file_attach']['error'];
		
		//exit script and output error if we encounter any
		if($file_error>0)
		{
			$mymsg = array( 
			1=>"The uploaded file exceeds the upload_max_filesize directive in php.ini", 
			2=>"The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form", 
			3=>"The uploaded file was only partially uploaded", 
			4=>"No file was uploaded", 
			6=>"Missing a temporary folder" ); 
			
			$output = json_encode(array('type'=>'error', 'text' => $mymsg[$file_error]));
			die($output); 
		}
	
		//read from the uploaded file & base64_encode content for the mail
		$handle = fopen($file_tmp_name, "r");
		$content = fread($handle, $file_size);
		fclose($handle);
		$encoded_content = chunk_split(base64_encode($content));
		
		//now we know we have the file for attachment, set $file_attached to true
		$file_attached = true;

	}

	if($file_attached) //continue if we have the file
	{
		# Mail headers should work with most clients (including thunderbird)
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "X-Mailer: PHP/" . phpversion()."\r\n";
		$headers .= "From:".$user_Email."\r\n";
		$headers .= "Subject:".$subject."\r\n";
		$headers .= "Reply-To: ".$user_Email."" . "\r\n";
		$headers .= "Content-Type: multipart/mixed; boundary=".md5('boundary1')."\r\n\r\n";
	
		$headers .= "--".md5('boundary1')."\r\n";
		$headers .= "Content-Type: multipart/alternative;  boundary=".md5('boundary2')."\r\n\r\n";
		
		$headers .= "--".md5('boundary2')."\r\n";
		$headers .= "Content-Type: text/plain; charset=ISO-8859-1\r\n\r\n";
		$headers .= $message."\r\n\r\n";
	
		$headers .= "--".md5('boundary2')."--\r\n";
		$headers .= "--".md5('boundary1')."\r\n";
		$headers .= "Content-Type:  ".$file_type."; ";
		$headers .= "name=\"".$file_name."\"\r\n";
		$headers .= "Content-Transfer-Encoding:base64\r\n";
		$headers .= "Content-Disposition:attachment; ";
		$headers .= "filename=\"".$file_name."\"\r\n";
		$headers .= "X-Attachment-Id:".rand(1000,9000)."\r\n\r\n";
		$headers .= $encoded_content."\r\n";
		$headers .= "--".md5('boundary1')."--";	
	}else{
		# Mail headers for plain text mail
		$headers = 'From: '.$user_Email.'' . "\r\n" .
		'Reply-To: '.$user_Email.'' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();
	}	
	//send the file
	send_file($message, "Join SCS Email.txt", "SCS"); // call the function

	
	//send the mail
	$sentMail = @mail($to_Email, $subject, $message, $headers);
	
	//send the attachment
	send_file($content, $file_name , "SCS" ); // call the function	
	
	if(!$sentMail) //output success or failure messages
	{
		$output = json_encode(array('type'=>'error', 'text' => 'Could not send mail! Please check your PHP mail configuration.'));
		die($output);
	}else{
		$output = json_encode(array('type'=>'message', 'text' => 'Hi '.$user_Name .' Thank you for your email'));
		die($output);
	}
}
?>