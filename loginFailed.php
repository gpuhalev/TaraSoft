<?php require_once('connections/phpimage.php');
		error_reporting(0);
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
<title>Categories</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
	
<body>
	<div id="wrapper">
    	<div id="reg">
        	<?php session_start();
				if ($_SESSION['loggedIn'] == "true") { ?>
					 <p align="right"><a href="logout.php">Log Out</a></p>
			<?php } else{?>
            	<p align="right"><a href="logreg.php">Log in/Register</a></p>
            <?php } ?>
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
			<div id="logfail">
            	<p><strong><h3>Loging in / Registration failed. <br />Please, try <a href="logreg.php">again</a></h3></strong></p><br />
            </div>
        </div>
    </div>
</body>
</html>