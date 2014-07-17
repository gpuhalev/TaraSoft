<?php require_once('connections/phpimage.php');
	error_reporting(0);
	if($_POST['submit']){
		$name = basename($_FILES['file_upload']['name']);
		$t_name = $_FILES['file_upload']['tmp_name'];
		$dir = 'upload';
		$cat = $_POST['cat'];
		if(move_uploaded_file($t_name,"$dir/$name")){
			mysqli_select_db($db,$dbname);
			$qur = "INSERT INTO image (mid, cid, name, path) VALUES ('', '$cat', '$name', '$dir/$name')";
		 	$res = mysqli_query($db, $qur);
			echo "file uploaded OK";
		}else{
			echo "failed to upload";
		}
	}

?>

<?php require_once('connections/phpimage.php');
		 mysqli_select_db($db,$dbname);
		 $quer = "SELECT * FROM cat";
		 $result = mysqli_query($db, $quer);
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
			<div class="to_upload">
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                        <h3>Category ID: <input type="text" name="cat" /> </h3>
                        <input type="file" name="file_upload" /><br />
                        <input type="submit" name="submit" value="upload"/><br />
                    </form>
			</div>
            <div class="show_cat">
                	<?php while($row = mysqli_fetch_array($result)){ ?>
    		       <div class="category_table"><h4><a href="image.php?cid=<?php echo $row['id']?>"target="_blank"><?php  echo $row['id']." ---> ".$row['name']?></a></h4> </div>
	        	   <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>