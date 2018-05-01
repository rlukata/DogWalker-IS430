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
		
		<?php navBar("map"); ?>
			
		<!-- The content -->
		<div class="row">
			
			<?php sideContent(); ?>
			
			<!-- Main content -->
			<div class="main">
							<!-- DO NOT BY NO REASON DELETE OR MODIFY THE KEY BELOW -->
				<iframe
				  width="600"
				  height="450"
				  frameborder="0" style="border:0"
				  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAmYoMYV-UCboDV__KfjLx7MAOuomzuaLE
					&q=Space+Needle,Seattle+WA" allowfullscreen>
				</iframe>
			</div>
		</div>
		
		<?php footer(); ?>
		
	</body>
</html>