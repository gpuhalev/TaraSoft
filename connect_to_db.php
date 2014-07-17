<?php
	$user = 'root';
	$pass = '';
	$dbname = 'photos';
	$hostname = '127.0.0.1';
	
	$db = new mysqli($hostname, $user, $pass, $dbname) or die(mysql_error());
	
	if($result = mysqli_query($db, "SELECT DISTINCT photos.category_id, categories.preview, categories.description
FROM photos, categories WHERE photos.category_id = categories.PRIMARY_KEY AND photos.filename LIKE '%.jpg'")){
		printf("Select returned %d rows.\n", mysqli_num_rows($result));
	}
	
?>