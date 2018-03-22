<?php
//connect to the existing session
session_start();

if (empty($_SESSION['user_id'])) {
	//no identity, redirect to login
	header('location:login.php');
	exit();
}

?>