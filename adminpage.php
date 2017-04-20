<?php
	include_once 'backend/logincheck.php'; // checks if user is logged in
	include_once 'layout/header.php'; // loads header
	include_once 'backend/connect.php'; // connects to database
	// echo $_SESSION["user_id"]; // used for debugging
	$result = mysqli_query($conn, "SELECT * FROM users"); // get all users
?>
<body>  
  <div class="container">
    <div class="row">
      <div class="three columns" style="margin-top: 5%">
 		<h6>ADMIN CAVE</h6>
 		<p><a href="editprofile.php">Edit Profile</a></p>
 		<p><a href="backend/logoutbackend.php">Logout</a></p>

	 </div>
	 <div class="three columns" style="margin-top: 5%">
 		 <h6>ADMIN PANEL</h6>
			<table>
			  <tr>
			    <td><strong>Delete user</strong></td>
			  </tr>
			  <?php while($row = mysqli_fetch_array($result)) : ?>
				  <tr>
				    <td><?php echo $row['email']; ?></td>
				    <!-- and so on -->
				    <td>
				      <form action="backend/delete.php" method="post">
				        <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>" />
				        <input type="submit" value="Delete" />
				      </form>
				    </td>
				  </tr>
			  <?php endwhile; ?>
			</table>
	  </div>
	 <div class="one column" style="margin-top: 5%"></div>
	 <div class="three columns" style="margin-top: 5%">
	 	<h6>UPLOADED ROMS</h6>
	 		<table>
			  <tr>
			    <td><strong>Files</strong></td>
			  </tr>
		 		<?php
					// open the current directory
					$dhandle = opendir('upload/uploadedfiles/');
					// define an array to hold the files
					$files = array();

					if ($dhandle) {
					   // loop through all of the files
					   while (false !== ($fname = readdir($dhandle))) {
					      // if the file is not this file, and does not start with a '.' or '..',
					      // then store it for later display
					   	  if (($fname != '.') && ($fname != '..') &&
					          ($fname != basename($_SERVER['PHP_SELF']))) {
					          // store the filename
					          $files[] = (is_dir( "./$fname" )) ? "(Dir) {$fname}" : $fname;
					      }
					   }
					   // close the directory
					   closedir($dhandle);
					}
				?>
			  <tr>
			  	<td>
			<?php
				// echo "<select name=\"file\">\n";
				// Now loop through the files, echoing out a new select option for each one
				foreach( $files as $fname )
				{
				   echo "<strong>{$fname}</strong>\n";
				}
				
			?>
				</td>
			  </tr>
			</table>
	 </div> 	
    </div>
  </div>
<?php
	include_once '/layout/footer.php'; // loads footer
?>