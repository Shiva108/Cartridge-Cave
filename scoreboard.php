<?php
	include_once 'layout/header.php'; // includes header
	include_once 'backend/logincheck.php'; // checks if user is logged in
	include_once 'backend/connect.php';
?>

<body>
	<div class="container">
		<div class="row">
    		<div class="one-half column .u-pull-left" style="margin-top: 15%">
	   		<table>
		   		<?php 
		   			$sql = "SELECT * FROM scoreboard WHERE game = 'donkeykong'"; // selects all users
					$result = mysqli_query($conn, $sql) or die(mysqli_error($conn)); // queries the db
					while($row = mysqli_fetch_assoc($result)) 
						{ 
							echo $row["game"] ;
							echo ' ';
							echo '<br>';
							echo $row["highscore"];
						}
		   		 ?>
	   		 </table>
			<!-- <div class="one-half column .u-pull-right" style="margin-top: 13%">
			<img src="images/mario.png" > -->
			</div>
		</div>
	</div>
 <?php
	include_once('layout/footer.php'); // includes footer
?> 