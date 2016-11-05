<?php 
	$error = false;
	if(!isset($_POST['username']) || !isset($_POST['password'])){
		$error = true;
	}

	$user = mysqli_real_escape_string($conn, $_POST["username"]);

	
	$password = mysqli_query($conn, "SELECT `Password` FROM `admins` WHERE `Username` = '".$_POST['username']."'");	
	$result = mysqli_fetch_assoc($password);

	$uri   = rtrim($_SERVER['PHP_SELF'], '/\\');

	if(mysqli_num_rows($password) && $result["Password"] == md5($_POST['password'])){
		$_SESSION['started'] = 1;
		$_SESSION['time'] = time();
		header('Location: http://'.$uri.'/ctrl/');
	}
	else{
		$err = "Please type correct username/password.";
		header('Location: http://'.$uri.'/ctrl/?err=1');
	}
?>