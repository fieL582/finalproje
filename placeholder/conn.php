<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "finaldb";

	$conn = mysqli_connect($servername, $username, $password, $dbname);
	mysqli_set_charset($conn,"utf8");
	
	if (!$conn)
	{
	  die("Bağlantıda problem oluştu: " . mysqli_connect_error());
	}
?>