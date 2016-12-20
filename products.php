
<?php //include( "./inc/db_config.php" ); ?>
<?php include( "./inc/connect.php" ); ?>
<?php


//Set useful variables for paypal form
$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
$paypal_id = 'info@maxloydtechno.com'; //Business Email

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Products - CodexWorld</title>
</head>
<body>
	<?php
	     //$db = 'login_logout';
		//fetch products from the database
		$results1 = "SELECT * FROM `tbl_users`";
		//echo $results1;
		$results=mysql_query($results1) or die(mysql_error());
		
		while($row = mysql_fetch_assoc($results)){ 
		//echo $row['image'];
	
	?>
    <img src="admin/login/user_images/<?php echo $row['sellPic']; ?>"/>
    <br/>Name: <?php echo $row['imageName']; ?>
    <br/>Price: <?php echo $row['imagePrice']; ?>
    <form action="<?php echo $paypal_url; ?>" method="post">

        <!-- Identify your business so that you can collect the payments. -->
        <input type="hidden" name="business" value="<?php echo $paypal_id; ?>">
        
        <!-- Specify a Buy Now button. -->
        <input type="hidden" name="cmd" value="_xclick">
        
        <!-- Specify details about the item that buyers will purchase. -->
        <input type="hidden" name="item_name" value="<?php echo $row['imageName']; ?>">
        <input type="hidden" name="item_number" value="<?php echo $row['id']; ?>">
        <input type="hidden" name="amount" value="<?php echo $row['imagePrice']; ?>">
        <input type="hidden" name="currency_code" value="USD">
        
        <!-- Specify URLs -->
        <input type='hidden' name='cancel_return' value='cancel.php'>
		<input type='hidden' name='return' value='success.php'>

        
        <!-- Display the payment button. -->
        <input type="image" name="submit" border="0"
        src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="PayPal - The safer, easier way to pay online">
        <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
    
    </form>
		<?php } ?>
</body>
</html>
