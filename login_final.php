<?php include( "./inc/connect.php" ); ?>
<?php
session_start();
echo "Checking start";

//declaring variables to prevent errors for registration of a new user
$fulnm = ""; //Full Name
$em = ""; //Email
$pswd = ""; //Password
$pswd2 = ""; // Repeat password
$d = ""; // Sign up Date
$u_check = ""; // Check if username exists

//form : assigning values for registration of a new user
$fulnm = strip_tags(@$_POST['FullName']);
$em = strip_tags(@$_POST['Email']);
$pswd = strip_tags(@$_POST['Password']);
$pswd2 = strip_tags(@$_POST['RepeatPassword']);
$d = date("Y-m-d"); // Year - Month - Day

echo "Before entering";
if (isset($_POST["Next1"])) { 

echo "Checking Next1";
	// Check if user already exists
$u_check = mysql_query("SELECT name FROM users WHERE name='$fulnm'");
// Count the amount of rows where fullname = $fulnm
echo "Checking Next2";
$check = mysql_num_rows($u_check);
//Check whether Email already exists in the database
echo "Checking Next3";
$e_check = mysql_query("SELECT email FROM users WHERE email='$em'");
//Count the number of rows returned
echo "Checking Next4";
$email_check = mysql_num_rows($e_check);
if ($check == 0) {
  if ($email_check == 0) {
//check all of the fields have been filed in
echo "Checking Next5";
echo $fulnm;
echo $em;
echo $pswd;
echo $pswd2;
if ($fulnm&&$em&&$pswd&&$pswd2) {
	echo "Checking Next6";
// check that passwords match
if ($pswd==$pswd2) {
	if (strlen($pswd)>30||strlen($pswd)<5) {
echo "Your password must be between 5 and 30 characters long!";
}
else
{
echo "Test 1";	
//encrypt password and password 2 using md5 before sending to database
$pswd = md5($pswd);
$pswd2 = md5($pswd2);


//Php mail function

if(isset($_POST['Next1'])) 
{
  $sendmailid = $_POST['Email'];

$message=
'Full Name: '.$_POST['FullName'].'<br />
 Password:  '.$_POST['Password'].'<br />
 
 Email:  '.$_POST['Email'].'<br />

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
    $mail->SetFrom($_POST['Email'], $_POST['FullName']);
    $mail->AddReplyTo($_POST['Email'], $_POST['FullName']);
    $mail->Subject = "You have registered to Indian Long Haircuts";      // Subject (which isn't required)  
    $mail->MsgHTML($message);
 
    // Send To  
    $mail->AddAddress($sendmailid, "Recipient Name"); // Where to send it - Recipient
    $result = $mail->Send();    // Send!  
  $message = $result ? 'Successfully Sent!' : 'Sending Failed!';      
  unset($mail);

}

//php mail function end


$query = mysql_query("INSERT INTO users VALUES ('','$fulnm','$em','$pswd','$d','Y')");
}
}
else {
	echo "Your passwords don't match!";
}
}
else {
	echo "Please fill all details!!";
}
  }
else{
	echo "This email_id is already registered!!! Please give another..";
}
}
else{
	echo "This name has already been used by some other user..";
}
}
		echo "Before go";
		//Login Script

if (isset($_POST["Go"])) {
	echo "You are inside BUDDY";
	$user_login = $_POST['Email_login']; // filter everything but numbers and letters
    $password_login =$_POST['Password_login']; // filter everything but numbers and letters
	$md5password_login = md5($password_login);
	 echo "Login successful";
    $sql = mysql_query("SELECT * FROM users WHERE email='".$user_login."' AND password='".$md5password_login."' LIMIT 1"); // query the person
	//Check for their existance
	
	$userCount = mysql_num_rows($sql); //Count the number of rows returned	
	if ($userCount == 1) {
		
		while($row = mysql_fetch_assoc($sql)){ 
		
             //$id = $row["id"];
			 $dbemail=$row['email'];
			 $dbpassword=$row['password'];
			 
	}
	if($user_login == $dbemail && $password_login==$dbpassword){
		
		session_start();
		echo"Login Done";
	}
	
		 $_SESSION["Email_login"] = $user_login;
		 
		 //echo "<b>Login successful";
       echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php\">";	
		//exit();
		}
		else 
		{
		echo "That information is incorrect, try again";
		
		exit();
	}
}




?>
<html>
<head>
  <title>Log In | Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style/login.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  </head>
<!-- Jquery-->
<script>
   $(document).ready(function(){
   $('.toggle').on('click', function() {
   $('.container').stop().addClass('active');
   });

   $('.close').on('click', function() {
  $('.container').stop().removeClass('active');
  });

 });


$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});
</script>

<body>
<div class="container">
  <div class="row">
<div class="pen-title">
  <h1> Login </h1>
</div>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Login</h1>
    <form action="" method="POST">
      <div class="input-container">
        <input type="text" id="Email_login" name="Email_login" required="required"/>
        <label for="Email_login">Email</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="Password_login" name="Password_login" required="required"/>
        <label for="Password_login">Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
	  <!-- <input type="submit" name="Go" value="Go">  -->
	  <button name="Go" value="Go"><span>Go</span></button>
              </div>
 </form>
 <div class="footer">



      <div id="flip">Forgot your password?</div>
      <div id="panel">
      
      <div class="toggle"></div>
  
        <form action="" method="POST">

        <div class="input-container">
          <input type="text" id="Email_forget" required="required"/>
          <label for="Email">Email</label>
          <div class="bar"></div>
        </div>
      <div class="button-container" name="next_forget">
	  
        <button><span>Next</span></button>
      </div>
    </form>
  </div>
  </div>
  </div>
  <div class="card alt">
    <div class="toggle"></div>
    <h1 class="title">Register
      <div class="close"></div>
    </h1>
    <form action="" method="POST">
    <div class="input-container">
        <input type="text" id="FullName" name = "FullName" required="required"/>
        <label for="FullName">Full Name</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="text" id="Email" name = "Email" required="required"/>
        <label for="Email">Email</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="Password" name="Password" required="required"/>
        <label for="Password">Password</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="RepeatPassword" name="RepeatPassword" required="required"/>
        <label for="RepeatPassword">Repeat Password</label>
        <div class="bar">
		</div>
		</div>
		<div class = "button-container">
		<button name="Next1" value="Next1"><span>Next</span></button>
		<!-- <input type="submit"  name="Next1" value="Next1"> -->
		</div>
	  
     		

    </form>
  </div>
</div>
<!-- index--><a id="index" href="index.php" title="View my index!"><i class="fa fa-link"></i></a>
  </div>
</div>
</body>