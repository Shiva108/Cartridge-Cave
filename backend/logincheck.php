<?php 
	session_start();
	if(!isset($_SESSION["user_id"])){
		header("Location: index.php"); // if session is NOT set return to frontpage
		exit;
	}
?>