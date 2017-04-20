<?php
include_once '../backend/logincheck.php'; // checks if user is logged in
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>CARTRIDGE CAVE</title>
    <meta name="description" content="A fantastic retro Nintendo site">
    <meta name="author" content="Group1">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Mobile Specific Metas  -->
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
    <!-- <link href="//fonts.googleapis.com/css?family=VT323:400" rel="stylesheet" type="text/css"> <!-- FONT -->
    <link href="//fonts.googleapis.com/css?family=Press+Start+2P:400" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css"> <!-- Using skeleton CSS -->
    <link rel="icon" type="image/icon" href="images/favicon.ico"> <!-- Favicon -->
 </head>

<body>
 <div class="container">
    <div class="row">
    	 <div class="one-half column" style="margin-top: 15%">

<?PHP
$target_dir = "uploadedfiles/"; // Where to store files
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); // Concatenates save dir with filename
$uploadOk = 1; // Sets upload flag
$RomFileType = pathinfo($target_file,PATHINFO_EXTENSION); // Gets file type so we can test it later

define('KB', 1024);	// Sets constants
define('MB', 1048576);

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 64*MB) {
    echo "<br></br>";
    echo "Sorry, your file is too large. Maximum file size is 64 megabyte.";
    $uploadOk = 0;
}
// Allow certain file formats
if($RomFileType != "smc" && $RomFileType != "nds" && $RomFileType != "nes"
&& $RomFileType != "n64"&& $RomFileType != "gba" && $RomFileType != "gbc" ) {
    echo "<br></br>";
    echo "Sorry, only .smc, .nds, .nes, .n64, .gba, .gbc files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<br></br>";
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    }   else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
			<p><a href="../profile.php">Return to your profile</a></p>
    	</div>
	</div>
</div>

         <footer class="container" style="margin-top: 10%;text-align: center;">
            <strong><i>Made by GROUP 1, M3T Inc. KEA 2016</i></strong>
        </footer>
    </body>
</html>