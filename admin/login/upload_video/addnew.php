<?php

	error_reporting( ~E_NOTICE ); // avoid notice
	
	require_once 'dbconfig.php';
	
	if(isset($_POST['btnsave']))
	{
		$imagename = $_POST['user_name'];// user name
		$price = $_POST['user_job'];// user email
		
		$imgFile = $_FILES['user_image']['name'];
		$tmp_dir = $_FILES['user_image']['tmp_name'];
		$imgSize = $_FILES['user_image']['size'];
		
		
		if(empty($imagename)){
			$errMSG = "Please Enter VIDEO Name.";
		}
		else if(empty($price)){
			$errMSG = "Please Enter Your Price.";
		}
		else if(empty($imgFile)){
			$errMSG = "Please Select VIDEO File.";
		}
		else
		{
			$upload_dir = 'user_video/'; // upload directory
	
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
		
			// valid image extensions
			$valid_extensions = array('mpeg', 'mp4', 'mkv', 'avi'); // valid extensions
		
			// rename uploading image
			$pic = rand(1000,1073741824000000).".".$imgExt;
				
			// allow valid image file formats
			if(in_array($imgExt, $valid_extensions)){			
				// Check file size '1024MB'
				if($imgSize < 1073741824000000)				{
					move_uploaded_file($tmp_dir,$upload_dir.$pic);
				}
				else{
					$errMSG = "Sorry, your file is too large.";
				}
			}
			else{
				$errMSG = "Sorry, only MPEG, MP4, MKV & AVI files are allowed.";		
			}
		}
		
		
		// if no error occured, continue ....
		if(!isset($errMSG))
		{
			$stmt = $DB_con->prepare('INSERT INTO tbl_users_video(videoName,videoPrice,videoPic) VALUES(:uname, :ujob, :upic)');
			$stmt->bindParam(':uname',$imagename);
			$stmt->bindParam(':ujob',$price);
			$stmt->bindParam(':upic',$pic);
			
			if($stmt->execute())
			{
				$successMSG = "new record succesfully inserted ...";
				header("refresh:5;index.php"); // redirects image view page after 5 seconds.
			}
			else
			{
				$errMSG = "error while inserting....";
			}
		}
	}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload, Insert, Update, Delete an Image using PHP MySQL - Coding Cage</title>

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

</head>
<body>

<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
 
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php" title='Programming Blog'>ADMIN</a>
            <a class="navbar-brand" href="#">Upload Image</a>
            <a class="navbar-brand" href="#">Upload Video</a>
            <a class="navbar-brand" href="#">Splash Images</a>
        </div>
 
    </div>
</div>

<div class="container">


	<div class="page-header">
    	<h1 class="h2">add new user. <a class="btn btn-default" href="index.php"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; view all </a></h1>
    </div>
    

	<?php
	if(isset($errMSG)){
			?>
            <div class="alert alert-danger">
            	<span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
            </div>
            <?php
	}
	else if(isset($successMSG)){
		?>
        <div class="alert alert-success">
              <strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $successMSG; ?></strong>
        </div>
        <?php
	}
	?>   

<form method="post" enctype="multipart/form-data" class="form-horizontal">
	    
	<table class="table table-bordered table-responsive">
	
    <tr>
    	<td><label class="control-label">Video Name</label></td>
        <td><input class="form-control" type="text" name="user_name" placeholder="Enter Video Name" value="<?php echo $imagename; ?>" /></td>
    </tr>
    
    <tr>
    	<td><label class="control-label">Price</label></td>
        <td><input class="form-control" type="text" name="user_job" placeholder="Your Price" value="<?php echo $price; ?>" /></td>
    </tr>
    
    <tr>
    	<td><label class="control-label">Video</label></td>
        <td><input class="input-group" type="file" name="user_image" accept="video/*" /></td>
    </tr>
    
    <tr>
        <td colspan="2"><button type="submit" name="btnsave" class="btn btn-default">
        <span class="glyphicon glyphicon-save"></span> &nbsp; save
        </button>
        </td>
    </tr>
    
    </table>
    
</form>



<div class="alert alert-info">
    <strong>Copyright 2016</strong> <a href="https://saloon-sumonsen.c9users.io/saloon/gallery.php">Saloon</a>!
</div>

    

</div>



	


<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>


</body>
</html>