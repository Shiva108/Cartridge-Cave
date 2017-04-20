<?php
    include_once('layout/header.php');
    session_start();
    $userid = $_SESSION["user_id"];
    // echo "$userid";
?>
<body>
 <div class="container">
    <div class="row">
      <div class="one-half column" style="margin-top: 15%">
        <form action="backend/highscorehandler.php" method="post" enctype="multipart/form-data">
            <br></br>Upload highscores from the next games:</p>
            <input type="hidden" name="userid" value="<?php echo "$userid" ?>">
            <select name="game" value="Game">
                <option value="donkeykong">Donkey Kong</option>
                <option value="castlevania">Castlevania</option>
            </select>
            <input type="text" name="highscore">
            <input type="submit" value="Submit highscore">
        </form>
      </div>
    </div>
</div>
<?php
    include_once('layout/footer.php');
?>
