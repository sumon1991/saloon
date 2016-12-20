<?php

	require_once 'dbconfig.php';
	
	if(isset($_GET['delete_id']))
	{
		// select image from db to delete
		$stmt_select = $DB_con->prepare('SELECT sellPic FROM tbl_users WHERE id =:uid');
		$stmt_select->execute(array(':uid'=>$_GET['delete_id']));
		$imgRow=$stmt_select->fetch(PDO::FETCH_ASSOC);
		unlink("user_video/".$imgRow['videoPic']);
		
		// it will delete an actual record from db
		$stmt_delete = $DB_con->prepare('DELETE FROM tbl_users_video WHERE id =:uid');
		$stmt_delete->bindParam(':uid',$_GET['delete_id']);
		$stmt_delete->execute();
		
		header("Location: index.php");
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
<title>Upload, Insert, Update, Delete an Image using PHP MySQL - Coding Cage</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
</head>

<body>

<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
 
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php" title='Programming Blog'>ADMIN</a>
            <a class="navbar-brand" href="../image_up.php">Upload Image</a>
            <a class="navbar-brand" href="#">Upload Video</a>
            <a class="navbar-brand" href="">Splash Images</a>
        </div>
 

<!--right -->




    </div>
</div>

<div class="container">

	<div class="page-header">
    	<h1 class="h2">All Video  <a class="btn btn-default" href="addnew.php"> <span class="glyphicon glyphicon-plus"></span> &nbsp; add new </a></h1> 
    </div>
    
<br />

<div class="row">
<?php
	
	$stmt = $DB_con->prepare('SELECT id, videoName,videoPrice,videoPic FROM tbl_users_video ORDER BY id DESC');
	$stmt->execute();
	
	if($stmt->rowCount() > 0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			?>
			<div class="col-xs-3">
				<p class="page-header"><?php echo $videoName."&nbsp;/&nbsp;".$videoPrice; ?></p>
				<iframe class="embed-responsive-item" src="user_video/<?php echo $row['videoPic']; ?>" class="img-rounded" width="250px" height="250px"></iframe>
				
				<p class="page-header">
				<span>
				<a class="btn btn-info" href="editform.php?edit_id=<?php echo $row['id']; ?>" title="click for edit" onclick="return confirm('sure to edit ?')"><span class="glyphicon glyphicon-edit"></span> Edit</a> 
				<a class="btn btn-danger" href="?delete_id=<?php echo $row['id']; ?>" title="click for delete" onclick="return confirm('sure to delete ?')"><span class="glyphicon glyphicon-remove-circle"></span> Delete</a>
				</span>
				</p>
			</div>       
			<?php
		}
	}
	else
	{
		?>
        <div class="col-xs-12">
        	<div class="alert alert-warning">
            	<span class="glyphicon glyphicon-info-sign"></span> &nbsp; No Data Found ...
            </div>
        </div>
        <?php
	}
	
?>
</div>	



<div class="alert alert-info">
    <strong>Copyright 2016</strong> <a href="https://saloon-sumonsen.c9users.io/saloon/gallery.php">Saloon</a>!
</div>

</div>


<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>


</body>
</html>