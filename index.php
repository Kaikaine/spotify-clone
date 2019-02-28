<?php
include("includes/config.php");

//session_destroy(); LOGOUT

if(isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = $_SESSION['userLoggedIn'];
}
else {
	header("Location: register.php");
}

?>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome to Slotify</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css">
    <script src="main.js"></script>
</head>
<body>

   <div class="nowPlayingBarContainer">
        <div class="nowPlayingBar">
            <div class="nowPlayingLeft">

            </div>
            <div class="nowPlayingCenter">
                <div class="content playerControls">
                    <div class="buttons">
                        <button class='controlButton shuffle' title='Shuffle button'>
                            <img src="assets/images/icons/shuffle.png" alt="shuffle">
                        </button>

                        <button class='controlButton previous' title='previous button'>
                            <img src="assets/images/icons/previous.png" alt="shuffle">
                        </button>

                        <button class='controlButton play' title='play button'>
                            <img src="assets/images/icons/play.png" alt="shuffle">
                        </button>

                        <button style='display: none' class='controlButton pause' title='pause button'>
                            <img src="assets/images/icons/pause.png" alt="shuffle">
                        </button>

                        <button class='controlButton next' title='next button'>
                            <img src="assets/images/icons/next.png" alt="shuffle">
                        </button>

                        <button class='controlButton repeat' title='repeat button'>
                            <img src="assets/images/icons/repeat.png" alt="repeat">
                        </button>
                    </div>
                </div>
            </div>
            <div class="nowPlayingRight">

            </div>
        </div>
   </div>
</body>
</html>