<?php
	include_once('layout/header.php'); // includes header
?>

<body>
	<div class="container">
		<div class="row">
    		<div class="one-half column .u-pull-left" style="margin-top: 15%">
	        	<?php // Handles error flag if set on session
					if(isset($_GET["error"])){
						while(!empty($_SESSION["error"])){
							$field = array_pop($_SESSION["error"]);
							echo "Please fill in BOTH valid email & password!"; 
						}
					}
				?>
				<h4>Welcome to CARTRIDGE CAVE</h4>
				<form action="backend/loginbackend.php" method="post" accept-charset="utf-8">
					<label for="email">Your E-mail: </label><input id="email" type="email" name="email">
					<label for="password">Your Password: </label><input id="password" type="password" name="password">
					<input type="submit" value="Login">
				</form>
				<p><a href="register.php">Or register</a></p>
			</div>
			<div class="one-half column .u-pull-right" style="margin-top: 13%">
			<img src="images/mario.png" >
			</div>
		</div>
	</div>
 <?php
	include_once('layout/footer.php'); // includes footer
?>
