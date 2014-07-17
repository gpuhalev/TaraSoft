<?php
session_start();
require_once('phpimage.php');

$username = $_POST['user'];
$password = $_POST['pass'];

$username = stripslashes($username);
$password = stripslashes($password);

mysqli_select_db($db,"users");

$qur = "select * from users where username = '$username' and password = '$password'";
$result = mysqli_query($db, $qur) or die ( mysql_error() );

$count = 0;

$count = mysqli_num_rows($result);

echo $count;

if ($count == 1) {
	 $_SESSION['loggedIn'] = "true";
	 header("Location: ../index.php?usr=1");
} else {
	 $_SESSION['loggedIn'] = "false";
	 header("Location: ../loginFailed.php");
}

?>