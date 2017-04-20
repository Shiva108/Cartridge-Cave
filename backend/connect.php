<?php
	$servername = "localhost";
	$username = "root";
	$password = ""; // < In production environment long secure password is important
	$dbname = "exam";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	// echo "Connected successfully";  < Enable for debbugging purposes
?> 