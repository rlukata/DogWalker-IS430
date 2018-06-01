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

        <?php navBar("about"); ?>

        <!-- The content -->
        <div class="row">

            <!-- Side content -->
            <div class="side">
				<br><br>
					<img src="images/Walkingdogs_001.jpg" alt="HTML5 Icon" style="width:390px;height:300px;" >
				<br>
            </div>

            <!-- Main content -->
            <div class="main">
                    <p><b>We are the 3Musqueteers!</b></p>
                    <p>...and, we are passionate about our canine friends.</p>
					<p> It is no secret that our canine companions enrich our lives. </p>
					<p> And, in order to prolong our best friend's lives we need to keep them healty. </p>
					<hr>
					
                    <p><b>What are some of the benefits of waking your dog?</b></p>
					<ol>
						<li>Keeps their heart and lungs in top shape</li>
						<li>It keeps their joints healthy</li>
						<li>It helps their digestive and circulatory system</li>
						<li>It stops their destructive behavior and hyperactivity</li>
					</ol>
					<hr>
                    
                    <p><b>How does it work?</b></p>
                    <p>Simple: we pair our highly trained dog walkers with people who
                       have the need for their dog(s) to be walked.</p>
                    
            </div>
        </div>

        <?php require 'elements/footer.html'; ?>

    </body>
</html>
