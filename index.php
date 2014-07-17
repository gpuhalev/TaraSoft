<?php require_once('connections/phpimage.php');
		 mysqli_select_db($db,$dbname);
		 $qur = "SELECT * FROM cat";
		 $res = mysqli_query($db, $qur);
?>

<?php require_once('connections/phpimage.php');
	error_reporting(0);
	if($_POST['submit']){
		mysqli_select_db($db,$dbname);
		$cat = $_POST['cat'];
		$quer = "INSERT INTO `cat`(`id`, `name`) VALUES ('','$cat')";
		$result = mysqli_query($db, $quer);
	}
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
            <div class="category"><h2><a href="image.php?cid=<?php echo $row['id']?>"><?php echo $row['name']?></a></h2> </div>
            <?php } ?>
            <br /><br /><br /><br />
			<p>
            <form action="index.php" method="post" enctype="multipart/form-data">
    	       <h3>Type in name for a new category: <input type="text" name="cat" /> </h3>
	           <input type="submit" name="submit" value="Add" /><br />
           </form>
           </p>
        </div>
    </div>
</body>
</html>