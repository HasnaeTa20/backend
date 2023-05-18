<?php
	include '../connection.php'; 

	$media_name = $_FILES['image']['name'];
	$media_url = $_POST['name'];

	$imagePath = 'uploads/'.$media_name;
	$tmp_name = $_FILES['image']['tmp_name'];

	move_uploaded_file($tmp_name, $imagePath);

	$db->query("INSERT INTO media(media_url,media_name)VALUES('".$name."','".$media_name."')");


?>