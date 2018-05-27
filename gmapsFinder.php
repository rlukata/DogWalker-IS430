<!DOCTYPE html>
<?php 
    include 'included.php';
    include 'session.php';
?>
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
                <b id="logout"><a href="logout.php">Log Out</a></b>
            </div>

            <!-- Main content -->
            <div class="main">
                <b>Welcome: <i><?php echo '<h2>'.$login_session.'</h2>'; ?></i></b><br><br>
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
