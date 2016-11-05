<?php
	include "mysqlConnect.php";
	if(!defined('SESSION_TIMEOUT')) define('SESSION_TIMEOUT', 1800);
	if(isset($_GET["err"])) include "errors.php";

	if(!isset($_SESSION)) session_start();

	if(array_key_exists('logout', $_GET) || (array_key_exists('time', $_SESSION) && time() - $_SESSION['time'] > SESSION_TIMEOUT)) session_unset();
	if(array_key_exists('started', $_SESSION)){
		$_SESSION['time'] == time();
		include "newArticle.php";
	}
	else{
		if(array_key_exists("subm", $_GET) && !array_key_exists('err', $GLOBALS)) include "login.php";
		else include "pages/loginPage.php";
	}
?>