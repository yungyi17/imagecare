<?php
	// $conn = new mysqli("localhost", "root", "", "imagefiles") or die("Connect failed: %s\n". $conn -> error);
	$conn = mysqli_connect("localhost", "id7040695_root", "thisistest");
	if (!$conn) {
		die("Connect failed: %s\n". mysqli_error($conn));
	}
	$select_db = mysqli_select_db($conn, "id7040695_imagefiles");
	if (!$select_db) {
		die("Database selection failed" . mysqli_error($conn));
	}
?>