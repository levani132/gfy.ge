<?php 
	error_reporting(0);
	$servername = "eu-cdbr-west-01.cleardb.com";
	$username = "b5c03625a28a33";
	$password = "bb060872";
	$dbname = "heroku_c75925a870861fd";
	$encode = "UTF8";
	//-----------------------------------
	//mysql dakavshireba
	$db = mysqli_connect($servername,$username,$password);
	mysqli_select_db($db,$dbname) or die (mysqli_error($db));
	mysqli_query($db,"SET NAMES '".$encode."'");
	$sql = mysqli_query($db, "SELECT * FROM heroku_c75925a870861fd.slider_images ORDER BY sort ASC");
	$row = mysqli_fetch_array($sql);
	$link = "img/slideshow/".$row["image"];
	echo "<p><?=$link; ?></p>";

	$uri   = rtrim($_SERVER['SERVER_NAME'], '/\\');
	$base_url = 'http://'.$uri.'/';

	global $db;
	global $base_url;
?>