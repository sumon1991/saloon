

<?php

//Design and develop by sumon sen


if(isset($_POST['submit'])) 
{

$message=
'Full Name:	'.$_POST['fullname'].'<br />
Subject:	'.$_POST['subject'].'<br />
Phone:	'.$_POST['phone'].'<br />
Email:	'.$_POST['emailid'].'<br />
Comments:	'.$_POST['comments'].'
';
    require "phpmailer/class.phpmailer.php"; //include phpmailer class
      
    // Instantiate Class  
    $mail = new PHPMailer();  
      
    // Set up SMTP  
    $mail->IsSMTP();                // Sets up a SMTP connection  
    $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization    
    $mail->SMTPSecure = "ssl";      // Connect using a TLS connection  
    $mail->Host = "smtp.gmail.com";  //Gmail SMTP server address
    $mail->Port = 465;  //Gmail SMTP port
    $mail->Encoding = '7bit';
    
    // Authentication  
    $mail->Username   = "sumon.animator@gmail.com"; // Your full Gmail address
    $mail->Password   = "xbqmqmyzpetxvwql"; // Your Gmail password
      
    // Compose
    $mail->SetFrom($_POST['emailid'], $_POST['fullname']);
    $mail->AddReplyTo($_POST['emailid'], $_POST['fullname']);
    $mail->Subject = "New Contact Form Enquiry";      // Subject (which isn't required)  
    $mail->MsgHTML($message);
 
    // Send To  
    $mail->AddAddress("sumon2015.job@gmail.com", "Recipient Name"); // Where to send it - Recipient
    $result = $mail->Send();		// Send!  
	$message = $result ? 'Successfully Sent!' : 'Sending Failed!';      
	unset($mail);

}
?>
<html>
<head>
  <title>Contact Form</title>
  <link rel="stylesheet" href="style.css">
  
</head>
<body>
					
		<div style="margin: 100px auto 0;width: 300px;">
			<h3>Contact Form</h3>
			<form name="form1" id="form1" action="" method="post">
					<fieldset>
					  <input type="text" name="fullname" placeholder="Full Name" />
					  <br />
					  <input type="text" name="subject" placeholder="Subject" />
					  <br />
					  <input type="text" name="phone" placeholder="Phone" />
					  <br />
					  <input type="text" name="emailid" placeholder="Email" />
					  <br />
					  <textarea rows="4" cols="20" name="comments" placeholder="Comments"></textarea>
					  <br />
					  <button style="background-color:green; padding:2%;">
					  <input type="submit" name="submit" value="Send" /></button>
					</fieldset>
			</form>
			
			
			
			
			
			
			
			<p><?php if(!empty($message)) echo $message; ?></p>
		</div>
					
</body>
</html>