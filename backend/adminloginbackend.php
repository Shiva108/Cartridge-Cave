<?php 
	$_SESSION["error"] = []; // Sets error to empty
	
	if(empty($_POST["email"]) OR empty($_POST["password"])) {
		array_push($_SESSION["error"], "<strong>Both mail and password field have to be filled out!</strong> </br>");
		} // Checks and handles if either one is empty

	// if($_SESSION["error"] != []) {
	// 	header("Location: ../adminlogin.php?error=2"); 
	// 	exit; // In case of error, sends u back to frontpage
	// 	}
	else{
		include_once '../backend/connect.php'; // Calls database connector file
		// setting up vars
		$hashedPassword = md5($_POST["password"]); // hashes the password
		$sql = "SELECT * FROM users WHERE email = '".$_POST["email"]."' AND password = '".$hashedPassword."'"; //sql query
		$result = mysqli_query($conn, $sql) or die(mysqli_error($conn)); // Putting result of query into variable
	
		while($row = mysqli_fetch_assoc($result)){
			session_start(); // start a session
			$_SESSION["user_id"] = $row["id"];
			$email = $row["email"];
			header("Location: ../adminpage.php");
			exit;
			}
		}
		header("Location: ../adminlogin.php?error=1"); // returns with error
		// cleaning
		$conn->close();
		exit;
?>