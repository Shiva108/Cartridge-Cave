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
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/skeleton.css"> <!-- Using skeleton CSS -->
    <link rel="icon" type="image/icon" href="../images/favicon.ico"> <!-- Favicon -->
 </head>
 <body>
 <div class="container">
    <div class="row">
      <div class="one-half column" style="margin-top: 15%">
        <form action="uploadhandler.php" method="post" enctype="multipart/form-data">
            <p>Select Nintendo file to upload. 
            <br></br>Supported file types: .smc, .nds, .nes, .n64, .gba, .gbc</p>
            <label for="fileToUpload"></label><input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload file" name="submit">
        </form>
      </div>
    </div>
</div>
         <footer class="container" style="margin-top: 10%;text-align: center;">
            <strong><i>Made by GROUP 1, M3T Inc. KEA 2016</i></strong>
        </footer>
    </body>
</html>