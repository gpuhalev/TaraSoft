<?php require_once('connections/phpimage.php');
		 error_reporting(0);
		 mysqli_select_db($db,$dbname);
		 $id = $_GET['cid'];
		 if($id == 0){
		 	$qur = "SELECT * FROM image";
		 }else{
		 	$qur = "SELECT * FROM image WHERE cid = '$id'";
		 }
		 $res = mysqli_query($db, $qur);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Index</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
	
<body>
	<div id="wrapper">
    	<div id="reg">
        	<p align="right"><a href="login.php">Login/Register</a></p>
        </div>
        
    	<div id="header">
        	<a href="index.php">
                <div class="button">
                    CATEGORIES
                </div>
            </a>
            
            <a href="upload.php">
                <div class="button">
                    UPLOAD
                </div>
            </a>
            
            <a href="image.php">
                <div class="button">
                    ALL IMAGES
                </div>
            </a>
            
        </div>
        
        <div id="main">	
		<?php while($row = mysqli_fetch_array($res)){ ?>
			<div class="picture"><a href="<?php echo $row['path']?>" target="_blank"><img src="<?php echo $row['path']?>" /></a></div>
		<?php } ?>
        </div>
    </div>
</body>
</html>