<html>
<head>
<title>forget password</title>
</head>
<form action="" method="POST">
Enter Your Email <br />
<input type="email" name="email" size="55" /><br />
<input type="submit" name="submit" value="submit" />
</form>
<?php
$email = trim($_POST['email']);
$submit = trim($_POST['submit']);

//connect db

$connect = mysql_connect("localhost", "root", "");
mysql_select_db("login_logout", $connect);

if($submit) {

	//check email exist

	$email_check = mysql_query("SELECT * FROM users WHERE email='".$email."'");
	echo $email_check;
	$count = mysql_num_rows($email_check);

	if( $count != 0 ){

		//Generate new password

		$random = rand(985674215687, 885676219687);
		$new_password = $random;


		//create a copy of the password

		$email_password = $new_password;

		//ecrypt password

		$new_password = md5($new_password);

		//update the db

		mysql_query("update users set password = '".$new_password."' WHERE email='".$email."'");

		//send to the email

		//$subject = "LOG IN INFO ";
		$message = "Your password has been changed, the new password is below.";
		$password_new_1 = "$email_password";
		$from = "From: sumon.animator@gmail.com";

		mail("sumon.animator@gmail.com", $email,  $message, $password_new_1, $from);
		echo "Please check your email for new password.";



	}else{

		echo "The account does not exist";

	}
  
  }


?>
</html>