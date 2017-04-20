<?php
include_once 'connect.php';
if(!empty($_POST['delete_id'])) // error handling
	{
	  $delete_id = mysqli_real_escape_string($conn,$_POST['delete_id']);
	  // echo $delete_id; // for debugging
	  mysqli_query($conn, "DELETE FROM users WHERE `id`=".$delete_id); // deletes from users what i s chosen
	}

header('Location: ../adminpage.php'); // sent user back to admin page