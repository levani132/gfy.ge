<?php
	if(!isset($_SESSION)) session_start();
	if(array_key_exists('logout', $_GET)) session_unset();
	if(array_key_exists('started', $_SESSION)){
		include "newArticle.php";
	}
	else{
		if(array_key_exists("subm", $_GET) && !array_key_exists('err', $GLOBALS)) include "login.php";
		else include "pages/loginPage.php";
	}
?>