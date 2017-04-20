<?php
	include_once 'logincheck.php'; // checks if user is logged in
	include_once '../layout/header.php'; // loads header
	include_once 'connect.php';
	session_start();
	
	$userid = $_SESSION["user_id"];
	$_SESSION["error"] = [];
	
	if(empty($_POST["userid"])){
		array_push($_SESSION["error"], "userid");
	}
	if(empty($_POST["game"])){
		array_push($_SESSION["error"], "game");
	}
	if(empty($_POST["highscore"])){
		array_push($_SESSION["error"], "highscore");
	}

	if($_SESSION["error"] != []){
		header("Location: ../highscore.php");
		exit;
		}
	else{
		$sql = "INSERT INTO  scoreboard (userid, game, highscore) VALUES ('".$_POST["userid"]."', '".$_POST["game"]."','".$_POST["highscore"]."')";
		mysqli_query($conn, $sql) or die(mysqli_error($conn));
		
		header("Location: ../profile.php");
		exit;
		}
?>

<?php
	include_once '../layout/footer.php'; // loads footer
?>