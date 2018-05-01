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
		
		<?php navBar("home"); ?>
			
		<!-- The content -->
		<div class="row">
			
			<?php sideContent(); ?>
			
			<!-- Main content -->
			<div class="main">
				<p>This is where we will explain what is our mission, and show off 
				<i>realistic</i> positive comments from <i>real</i> clients.</p>
			</div>
		</div>
		
		<?php footer(); ?>
		
	</body>
</html>