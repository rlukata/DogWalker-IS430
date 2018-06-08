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
        <?php navBar("walker"); ?>
        <!-- The content -->
        <div class="row">
            <!-- Side content -->
            <div class="side">
                <?php 
                    if(isset($_SESSION['login_walker']) || isset($_SESSION['login_owner'])){
                        echo '<form><input class="button" type="button" value="Logout" onclick="window.location.href=\'logout.php\'" /></form>';
                    }
                ?>
                <br><br>
                <img src="images/Dog002.jpg" alt="HTML5 Icon" style="width:350px;height:265px;">
            </div>
            <!-- Main content -->
            <div class="main">
                <?php 
                    if(!isset($_SESSION['login_owner'])){
                        echo '<form><input class="button" type="button" value="Please login as a dog owner to access this section." onclick="window.location.href=\'index.php\'" /></form>';
                    }
                    else {
                        require 'elements/searchWalkerByName.html';
                    }
                ?>
            </div>
        </div>
        <?php require 'elements/footer.html'; ?>
    </body>
</html>