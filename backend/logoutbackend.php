<?php
	session_start();
	// session_unset($_SESSION["user_id"]); // clears user_id session
	session_unset(); // unsets session
	session_destroy(); // & destroys it
    header("Location: ../index.php"); // sends user back to login page
	exit; 
?>