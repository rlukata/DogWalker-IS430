<?php 
    include 'included.php'; 
    if(isset($_SESSION['login_user'])){
        header("location: gmapsFinder.php");
    };
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
                    require 'elements/signupButton.html';                    
                    require 'elements/signupWalker.html';
                    require 'elements/loginButton.html';
                ?>
            </div>

            <!-- Main content -->
            <div class="main">
                <p>My dog walker understands that my dogs are my world. She was in constant contact sending me updates 
                throughout the day. She took care of my dogs are as if they were her own!</p>
                <p><i>M. Silverstone. Seattle, WA</i></p></br>
                <p>John S. is an amazing dogwalker. He takes my labradoodle (Diesel) for runs and my dog loves it!</p>
                <p><i>P. Gomez. Portland, OR</i></p>
            </div>
        </div>

        <?php require 'elements/footer.html'; ?>

    </body>
</html>
