<?php
	include_once '/backend/logincheck.php';
	include_once '/backend/connect.php';

	$user_id = $_SESSION["user_id"]; // Puts session id into variable just for the ease of it
	// echo $user_id; // Used for debugging
	
	$sql3 = "SELECT messages.*, users.email, users.email FROM messages INNER JOIN users ON messages.sender = users.id WHERE receiver = $user_id";
	$resultjoin = mysqli_query($conn, $sql3) or die(mysqli_error($conn));

		
	while($row = mysqli_fetch_assoc($resultjoin)){
		createMessage($row);
	}
	
	function createMessage($row){
		echo "<div>";
			echo "<div>";
				echo "<p>Title: ".$row["title"]."</p>";
			echo "</div>";
			echo "<div>";
				echo "<p>Sender: ".$row["email"]."</p>";
			echo "</div>";
			echo "<div>";
				echo "<p>Feeling: ".$row["feeling"]."</p>";
			echo "</div>";
			echo "<div>";
				echo "<p>".$row["text"]."</p>";
			echo "</div>";			
		echo "</div>";
		echo "<br><br>";
	}
?>












