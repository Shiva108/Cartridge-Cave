<?php
	include_once 'backend/logincheck.php'; // checks if user is logged in
	include_once 'layout/header.php'; // loads header
	include_once 'backend/connect.php'; // connects to database
	// echo $_SESSION["user_id"]; // < used for debugging
	$sql = "SELECT * FROM users WHERE id = ".$_SESSION["user_id"]; // selects user that has active session (logged in user)
	$result = mysqli_query($conn, $sql) or die(mysqli_error($conn)); // will need twice later so running it early
?>
<body>  
  <div class="container">
    <div class="row">
      <div class="three columns" style="margin-top: 5%"> <!-- Left sidebar -->
 		<h6>CARTRIGDE CAVE</h6>
 		<p><a href="upload/upload.php">Upload ROM</a></p>
 		<p><a href="editprofile.php">Edit Profile</a></p>
 		<p><a href="highscore.php">Enter Game Highscores</a></p>
 		<p><a href="scoreboard.php">See Scoreboard</a></p>
 		<p><a href="backend/logoutbackend.php">Logout</a></p>
	  </div>
	  <div class="five columns" style="margin-top: 5%">
 		 <h6>Welcome <?php while($row = mysqli_fetch_assoc($result)){ echo $row["email"]; } ?></h6>
 		 <form method="post" action="backend/createmessagebackend.php">
			<select name="r_id" value="Reciever">
			<?php 
				$sql2 = "SELECT * FROM users"; // selects all users
				$result2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn)); // queries the db
				while($row = mysqli_fetch_assoc($result2)) // creates an option under select for each user in db
					{ 
						echo '<option value="'.$row["id"].'">'.$row["email"].'</option>';
					}
			 ?>
			</select><br>
			<input type="text" name="title" value="title">
			<select name="feeling" value="feeling">
				<option value="ginger">Ginger</option>
				<option value="horny">Horny</option>
				<option value="High as fuck">High</option>
				<option value="Religious">Holy</option>
			</select>
			<textarea name="text" value="Message">Whats on your mind?</textarea><br>
			<input type="submit" value="Create">
		</form>
	 </div>
	 <div class="four columns" style="margin-top: 5%">
		 <h6>YOUR MESSAGES</h6>
		 <?php
			include_once 'showprofilemassage.php';
		 ?>
	 </div>
    </div>
  </div>
<?php
	include_once 'layout/footer.php'; // loads footer
?>