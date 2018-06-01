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
                <br>
				<img src="images/Dog002.jpg" alt="HTML5 Icon" style="width:375px;height:285px;">
				<br>
            </div>

            <!-- Main content -->
            <div class="main">
				<?php 
                    require 'elements/searchWalkerByName.html';                    
                ?>
            </div>
        </div>

        <?php require 'elements/footer.html'; ?>

    </body>
</html>
