<?php
	$user = 'root';
	$pass = '';
	$dbname = 'phpimage';
	$hostname = '127.0.0.1';	
	$db = new mysqli($hostname, $user, $pass, $dbname) or die(mysql_error());	
?>