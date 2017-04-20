<?php
	include_once 'backend/loginCheck.php';
	include_once 'layout/header.php';
	include_once 'backend/connect.php';

	$sql = "SELECT * FROM users WHERE id = ".$_SESSION["user_id"];
	$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
?>
<body>  
  <div class="container">
    <div class="row">
      <div class="one-half column" style="margin-top: 15%">
      <h5>Edit your profile</h5>
		<?php	
			while($row = mysqli_fetch_assoc($result)){
				echo "<form method='post' action='backend/editprofilebackend.php'>";
					echo "<p>Email</p>";
					echo "<input name='email' type='text' value='".$row["email"]."'>";
					echo "<p>Password</p>";
					echo "<input name='password' type='text'>"; 
					echo "<input type='submit' value='Edit'>";
				echo "</form>";
			}
		?>
     </div>
     <div class="one-half column .u-pull-right" style="margin-top: 12%">
		<img src="images/mario.png" >
	</div>
   </div>
 </div>
<?php
	include_once 'layout/footer.php';
?>