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
		<script type="text/javascript" src="ajax-testimonials.js"></script>
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
                <h2><center>Customers Reviews</center></h2>
				<center><div id="ajax-testimonials"></div></center>
            </div>
        </div>

        <?php require 'elements/footer.html'; ?>

    </body>
</html>
