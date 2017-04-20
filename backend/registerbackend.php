<?php 
	session_start();
	$_SESSION["error"] = [];
	
	if(empty($_POST["email"])){
		array_push($_SESSION["error"], "email");
	}
	if(empty($_POST["password"])){
		array_push($_SESSION["error"], "password");
	}

	if($_SESSION["error"] != []){
		header("Location: register.php?error=1");
		exit;
		}
	else{
		include_once 'connect.php';
		$hashedPassword = md5($_POST["password"]);
		$sql = "INSERT INTO  users (email, password) VALUES ('".$_POST["email"]."', '".$hashedPassword."')";
		mysqli_query($conn, $sql) or die(mysqli_error($conn));
		
		header("Location: ../index.php");
		exit;
		}
?>

