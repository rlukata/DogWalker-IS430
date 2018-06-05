<?php 
    include 'included.php';
    include 'session.php';
?>
<html>
    <!-- Head -->
    <head>
        <title>3Musqueteers</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style><?php include 'css/main.css';?></style>
    </head>

    <!-- Body -->
    <body>

        <?php require 'elements/header.html' ?>

        <?php navBar("home"); ?>

        <!-- The content -->
        <div class="row">

            <!-- Side content -->
            <div class="side">
                <?php 
                    if(!isset($_SESSION['login_user'])){
                        require 'elements/signupButton.html';                    
                        require 'elements/signupWalker.html';
                        require 'elements/loginButtonOwner.html';
                        require 'elements/loginButtonWalker.html';
                    }
                    else {
                        echo '<form><input class="button" type="button" value="Logout" onclick="window.location.href=\'logout.php\'" /></form>';
                    }
                ?>
                <br><br>
                <img src="images/Dog007.jpg" alt="HTML5 Icon" style="width:350px;height:265px;">
            </div>

            <!-- Main content -->
            <div class="main">
                <p>My dog walker understands that my dogs are my world. She was in constant contact sending me updates 
                throughout the day. She took care of my dogs as if they were her own!</p>
                <p><i>M. Silverstone. Seattle, WA</i></p></br>
                <p>John S. is an amazing dogwalker. He takes my labradoodle (Diesel) for runs and my dog loves it!</p>
                <p><i>P. Gomez. Portland, OR</i></p></br>
                <p>My dog Luna loved Maria. She is the best dog walker ever!</p>
                <p><i>Lisa M. Santa Monica, CA</i></p>
            </div>
        </div>

        <?php require 'elements/footer.html'; ?>

    </body>
</html>
