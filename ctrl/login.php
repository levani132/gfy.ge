<?php 
	$users = [
		"levani" => 'levani',
		"vika" => 'vika'
	];
	if(!isset($_POST['username']) || !array_key_exists($_POST['username'], $users)){
		$err = "Please type correct username and/or password.";
		include "index.php";
	}
	else if($users[$_POST['username']] != $_POST['password']){
		$err = "Please type correct username and/or password.";
		include "index.php";
	}
	else{
		$_SESSION['started'] = 1;
		include "index.php";
	}
?>