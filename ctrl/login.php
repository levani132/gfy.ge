<?php 
	if(!isset($_POST['username']) || !isset($_POST['password'])){
		$err = "Please type both username and password.";
		include "index.php";
	}

	$user = mysqli_real_escape_string($conn, $_POST["username"]);

	
	$password = mysqli_query($conn, "SELECT `Password` FROM `admins` WHERE `Username` = '".$_POST['username']."'");	
	$result = mysqli_fetch_assoc($password);


	if(mysqli_num_rows($password) && $result["Password"] == md5($_POST['password'])){
		$_SESSION['started'] = 1;
		$_SESSION['time'] = time();
		header('Location: http://localhost:8080/ctrl/');
	}
	else{
		$err = "Please type correct username/password.";
		include "index.php";
	}
?>