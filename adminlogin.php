<?php
	include_once('layout/header.php'); // includes header
?>

<body>  
  <div class="container">
    <div class="row">
      <div class="one-half column" style="margin-top: 15%">
        	<?php // Handles error flag if set on session
				if(isset($_GET["error"])){
					while(!empty($_SESSION["error"])){
						$field = array_pop($_SESSION["error"]);
						echo "Please fill in BOTH valid email & password!"; 
					}
				}
			?>
		<h4>ADMIN CAVE</h4>
			<form action="backend/adminloginbackend.php" method="post" accept-charset="utf-8">
				<label for="email">Your E-mail: </label><input id="email" type="email" name="email">
				<label for="password">Your Password: </label><input id="password" type="password" name="password">
				<input type="submit" value="Login">
			</form>
			
		</div>
		<div class="one-half column .u-pull-right" style="margin-top: 12%">
			<img src="images/bowser.png" >
		</div>
    </div>
  </div>
 <?php
	include_once('layout/footer.php'); // includes footer
?>