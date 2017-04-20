<?php
	session_start();
	include_once 'connect.php';
	
	$title = str_replace("'", "\'", $_POST["title"]);
	$text = str_replace("'", "\'", $_POST["text"]);
	
	$sql = "INSERT INTO
				messages (
					sender,
					receiver,
					title,
					text,
					feeling
				)
			VALUES
				(
					'".$_SESSION["user_id"]."',
					'".$_POST["r_id"]."',
					'".$title."',
					'".$text."',
					'".$_POST["feeling"]."'
				)";
	
	
	mysqli_query($conn, $sql) or die(mysqli_error($conn));
	
	header("Location: ../profile.php");
	exit;
?>