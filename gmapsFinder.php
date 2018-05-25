<!DOCTYPE html>
<?php include 'included.php'; ?>
<html>
    <!-- Head -->
    <head>
            <title>3Musqueteers</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
            <style>
                <?php include 'css/main.css';?>
            </style>
    </head>

    <!-- Body -->
    <body>

        <?php require 'elements/header.html' ?>

        <?php navBar("map"); ?>

        <!-- The content -->
        <div class="row">

            <!-- Side content -->
            <div class="side">
                <?php require 'elements/signinButton.html'; ?>
                <?php require 'elements/loginButton.html'; ?>
            </div>

            <!-- Main content -->
            <div class="main">
               
                <iframe
                  width="600"
                  height="450"
                  frameborder="0" style="border:0"
                  src="elements/gMaps.html" allowfullscreen>
                </iframe>
            </div>
        </div>

        <?php require 'elements/footer.html'; ?>

    </body>
</html>
