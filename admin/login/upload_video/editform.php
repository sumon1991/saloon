<?php

	error_reporting( ~E_NOTICE );
	
	require_once 'dbconfig.php';
	
	if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
	{
		$id = $_GET['edit_id'];
		$stmt_edit = $DB_con->prepare('SELECT videoName,videoPrice,videoPic FROM tbl_users_video WHERE id =:uid');
		$stmt_edit->execute(array(':uid'=>$id));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
	}
	else
	{
		header("Location: index.php");
	}
	
	
	
	if(isset($_POST['btn_save_updates']))
	{
		$username = $_POST['user_name'];// user name
		$userjob = $_POST['user_job'];// user email
			
		$imgFile = $_FILES['user_image']['name'];
		$tmp_dir = $_FILES['user_image']['tmp_name'];
		$imgSize = $_FILES['user_image']['size'];
					
		if($imgFile)
		{
			$upload_dir = 'user_video/'; // upload directory	
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
			$valid_extensions = array('mpeg', 'mp4', 'mkv', 'avi'); // valid extensions
			$userpic = rand(1000,1073741824).".".$imgExt;
			if(in_array($imgExt, $valid_extensions))
			{			
				if($imgSize < 1073741824)
				{
					unlink($upload_dir.$edit_row['videoPic']);
					move_uploaded_file($tmp_dir,$upload_dir.$userpic);
				}
				else
				{
					$errMSG = "Sorry, your file is too large it should be less then 5MB";
				}
			}
			else
			{
				$errMSG = "Sorry, only MPEG, MP4, MKV & AVI files are allowed.";		
			}	
		}
		else
		{
			// if no image selected the old image remain as it is.
			$userpic = $edit_row['videoPic']; // old image from database
		}	
						
		
		// if no error occured, continue ....
		if(!isset($errMSG))
		{
			$stmt = $DB_con->prepare('UPDATE tbl_users_video 
									     SET videoName=:uname, 
										     videoPrice=:ujob, 
										     videoPic=:upic 
								       WHERE id=:uid');
			$stmt->bindParam(':uname',$username);
			$stmt->bindParam(':ujob',$userjob);
			$stmt->bindParam(':upic',$userpic);
			$stmt->bindParam(':uid',$id);
				
			if($stmt->execute()){
				?>
                <script>
				alert('Successfully Updated ...');
				window.location.href='index.php';
				</script>
                <?php
			}
			else{
				$errMSG = "Sorry Data Could Not Updated !";
			}
		
		}
		
						
	}
	
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload, Insert, Update, Delete an Video</title>

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

<!-- custom stylesheet -->
<link rel="stylesheet" href="style.css">

<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>

<script src="jquery-1.11.3-jquery.min.js"></script>
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
</div>


<div class="container">


	<div class="page-header">
    	<h1 class="h2">update  <a class="btn btn-default" href="index.php">View All </a></h1>
    </div>

<div class="clearfix"></div>

<form method="post" enctype="multipart/form-data" class="form-horizontal">
	
    
    <?php
	if(isset($errMSG)){
		?>
        <div class="alert alert-danger">
          <span class="glyphicon glyphicon-info-sign"></span> &nbsp; <?php echo $errMSG; ?>
        </div>
        <?php
	}
	?>
   
    
	<table class="table table-bordered table-responsive">
	
    <tr>
    	<td><label class="control-label">Image Name</label></td>
        <td><input class="form-control" type="text" name="user_name" value="<?php echo $videoName; ?>" required /></td>
    </tr>
    
    <tr>
    	<td><label class="control-label">Price.</label></td>
        <td><input class="form-control" type="text" name="user_job" value="<?php echo $videoPrice; ?>" required /></td>
    </tr>
    
    <tr>
    	<td><label class="control-label">Upload Img.</label></td>
        <td>
		
        	<p><img src="user_images/<?php echo $videoPic; ?>" height="150" width="150" /></p>
        	<input class="input-group" type="file" name="user_image" accept="video/*" />
        </td>
    </tr>
    
    <tr>
        <td colspan="2"><button type="submit" name="btn_save_updates" class="btn btn-default">
        <span class="glyphicon glyphicon-save"></span> Update
        </button>
        
        <a class="btn btn-default" href="index.php"> <span class="glyphicon glyphicon-backward"></span> cancel </a>
        
        </td>
    </tr>
    
    </table>
    
</form>


<div class="alert alert-info">
    <strong>Copyright 2016</strong> <a href="https://saloon-sumonsen.c9users.io/saloon/gallery.php">Saloon</a>!
</div>

</div>
</body>
</html>