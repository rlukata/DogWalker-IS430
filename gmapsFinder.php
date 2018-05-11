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
		
		<?php headWeb() ?>
		
		<?php navBar("map"); ?>
			
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
                            <!-- DO NOT BY NO REASON DELETE OR MODIFY THE KEY BELOW -->
                            <iframe
                              width="600"
                              height="450"
                              frameborder="0" style="border:0"
                              src="elements/gMaps.html" allowfullscreen>
                            </iframe>
                                
                            <button onclick="getLocation()">Try It</button>
                            <p id="demo"></p>
                            <script>
                                var x = document.getElementById("demo");

                                function getLocation() {
                                    if (navigator.geolocation) {
                                        navigator.geolocation.getCurrentPosition(showPosition);
                                    } else { 
                                        x.innerHTML = "Geolocation is not supported by this browser.";
                                    }
                                }

                                function showPosition(position) {
                                    x.innerHTML = "Latitude: " + position.coords.latitude + 
                                    "<br>Longitude: " + position.coords.longitude;
                                }
                            </script>
			</div>
		</div>
		
		<?php footer(); ?>
		
	</body>
</html>
