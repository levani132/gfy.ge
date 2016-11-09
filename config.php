<?php 
	$servername = "eu-cdbr-west-01.cleardb.com";
	$username = "b5c03625a28a33";
	$password = "bb060872";
	$dbname = "heroku_c75925a870861fd";

	// Create connection
	$db = new mysqli($servername, $username, $password, $dbname);
	if ($db->connect_error) {
	    die("Mysql connection failed: " . $db->connect_error);
	}


	$uri   = rtrim($_SERVER['SERVER_NAME'], '/\\');
	$base_url = 'http://'.$uri.'/';
?>