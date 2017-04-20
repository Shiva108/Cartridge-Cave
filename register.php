<?php
	include_once('layout/header.php');
?>
<body>  
  <div class="container">
    <div class="row">
      <div class="one-half column" style="margin-top: 15%">
  		<h4>Register</h4>
			<form action="backend/registerbackend.php" method="post" accept-charset="utf-8">
				<label for="email">Your E-mail: </label><input id="email" type="email" name="email">
				<label for="password">Your Password: </label><input id="password" type="password" name="password">
				<input type="submit" value="Register">
			</form>
		</div>
    	<div class="one-half column .u-pull-right" style="margin-top: 13%">
			<img src="images/daisy.png" >
		</div>
    </div>
  </div>
 <?php
	include_once('layout/footer.php'); // includes footer
?>