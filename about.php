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
		
            <?php headWeb() ?>

            <?php navBar("about"); ?>

            <!-- The content -->
            <div class="row">

                <!-- Side content -->
				<!--
                <div class="side">
                    <?php signinButton() ?>
                    <?php loginButton() ?>
                </div>
				-->
                <!-- Main content -->
                <div class="main">
                        <p>We are the 3Musqueteers!</p>
                        <p>We are passionate about dogs and their health...</p>
                        <p>Some of the benefits for your pet are: </p>
                        <p>1. It helps with your pet's weight control.</p>
                        <p>2. helps your pet's digestive system.</p>
                        <p>3. It stops their destructive behavior and hyperactivity.</p>
                        <p>Here's what we do: </p> 
                        <p>We pair available dog walkers with people who</p>
                        <p>have the need for their dog(s) to be walked.</p>
                        <p>Here's why we do it: </p> 
                        <p>We do this for the love of healthy and happy dogs!</p>
                        <p>Here's who we are: </p>
                        <p>We are three men looking to assist our community</p>
                        <p>by providing a free and safe service for pet owners.</p>
                </div>
            </div>

            <?php footer(); ?>
		
	</body>
</html>
