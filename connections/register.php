<?php
session_start();
require_once('phpimage.php');

// Get the data passed from the form
$email = $_POST['email'];
$username = $_POST['user'];
$password = $_POST['pass'];
$reppassword = $_POST['rep_pass'];

if(strcmp($password, $reppassword)){
	header("Location: loginFailed.php");	
}

// Do some basic sanitizing
$email = stripslashes($email);
$username = stripslashes($username);
$password = stripslashes($password);

mysqli_select_db($db,"users");

$qur = "select * from users where username = '$username'";
$result = mysqli_query($db, $qur) or die ( mysql_error() );

$count = 0;

$count = mysqli_num_rows($result);


if ($count == 0) {
	$qur = "select * from users where email = '$email'";
	$result = mysqli_query($db, $qur) or die ( mysql_error() );
	$count = 0;
	$count = mysqli_num_rows($result);
	if($count == 0){
		$qur = "INSERT INTO `users`(`uid`, `email`, `username`, `password`) VALUES ('','$email','$username','$password')";
		mysqli_query($db, $qur);
		header("Location: ../logreg.php");
	}else{
		header("Location: ../loginFailed.php");
	}
	
} else {
	 header("Location: ../loginFailed.php");
}

?>