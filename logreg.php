<?php require_once('connections/phpimage.php');
		error_reporting(0);
		mysqli_select_db($db,$dbname);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login/Register</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript">
function toggleDiv(divId) {
        $('.boxes').each(function(index) {
          if ($(this).attr("id") == divId) {
               $(this).show(200);
          }
          else {
               $(this).hide(600);
          }
     });
}
</script>
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
        	
            <div id="logreg">
            	<a href="javascript:toggleDiv('Login')">LOG IN</a>
                <a href="javascript:toggleDiv('Register')">REGISTER</a>                
            </div>
            
            <div class="boxes" id="Login">
                <form action="connections/login.php" method="post">
                     <table>
                          <tr>
                               <td><label for="username">Username: </label></td>
                               <td><input type="text" name="user" id="username" placeholder="Username"></td>
                          </tr>
                          <tr>
                               <td><label for="password">Password: </label></td>
                               <td><input type="password" name="pass" id="password" placeholder="Password"></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td align="right"><button type="submit" id="login_buton">Login</button></td>
                          </tr>
                     </table>
                </form>
            </div>
            
            <div class="boxes" id="Register">
                <form action="connections/register.php" method="post">
                     <table>
                     	<tr>
                               <td><label for="email">E-mail: </label></td>
                               <td><input type="email" name="email" id="email" placeholder="E-mail"></td>
                          </tr>
                          <tr>
                               <td><label for="username2">Username: </label></td>
                               <td><input type="text" name="user" id="username2" placeholder="Username"></td>
                          </tr>
                          <tr>
                               <td><label for="password2">Password: </label></td>
                               <td><input type="password" name="pass" id="password2" placeholder="Password"></td>
                          </tr>
                          <tr>
                               <td><label for="rep_password">Repeat password: </label></td>
                               <td><input type="password" name="rep_pass" id="rep_password" placeholder="Repeat password"></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td align="right"><button type="submit" id="register_buton">Register</button></td>
                          </tr>
                     </table>
                </form>
            </div>


            
            
        </div>
    </div>
</body>
</html>