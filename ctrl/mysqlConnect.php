<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test1";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	    die("Mysql connection failed: " . $conn->connect_error);
	}

?>