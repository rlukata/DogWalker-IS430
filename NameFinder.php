<?php include 'included.php'; ?>
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

        <?php navBar("walker"); ?>

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
                    <p>Coming soon...</p>
                    <p>This side will contain a form for finding dog walkers by name</b></p>
            </div>
        </div>

        <?php require 'elements/footer.html'; ?>

    </body>
</html>
