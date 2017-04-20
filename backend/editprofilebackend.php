<?php
	session_start();
	
	include_once 'connect.php';
	
	$sql = "UPDATE
				users
			SET
				email = '".$_POST["email"]."',
				password = '".md5($_POST["password"])."'
			WHERE
				id = '".$_SESSION["user_id"]."'";
				
	mysqli_query($conn, $sql) or die(mysqli_error($conn));
	
	header("Location: ../profile.php");
	exit;
		
?>