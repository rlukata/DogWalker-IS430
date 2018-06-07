<?php 
    include 'included.php';
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

        <?php // navBar("home"); ?>

        <!-- The content -->
        <div class="row">

            <!-- Side content -->
            <div class="side">
                <?php 
                    echo "<h1>Tell us about you</h1>";
					echo "<h2>(Hint: Be professional. All bios will be reviewed by our team and those that contain inappropriate content will be removed!)</h2>";
                ?>
                <br>
				<!-- <img src="images/Dog007.jpg" alt="HTML5 Icon" style="width:350px;height:265px;"> -->
            </div>

            <!-- Main content -->
            <div class="main">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
					<div class="container">
						
						
						<p>Please fill in this short form to help your clients understand who you are:</p>
						<hr>
						<label for="FirstName"><b>First Name</b></label>
						<input class="signin" type="text" placeholder="Enter your First Name" name="FName" maxlength="20" required>

						<label for="LastName"><b>Last Name</b></label>
						<input class="signin" type="text" placeholder="Enter your Last Name" name="LName" maxlength="20" required>

						<label for="PictureMe"><b>Include your Picture</b></label><br>
						<input type="file" name="PictureMe" size="40" accept="image/x-png,image/gif,image/jpeg" required>
						<br><br>
						
						<label for="WalkerBio"><b>Short Bio - Experience</b></label><br>
						<textarea class="text" cols="60" rows="5" name="WalkerBio" title="Tell your prospective customers about yourself!">Talk about your experience with dogs... </textarea>
						<br><br>
					
						<div class="clearfix">
							<button type="submit">Create Your Bio Page</button>
						</div>
					</div>
				</form>
            </div>
        </div>

		
	<?php
// Declare all the needed variables
$firstName = $lastName = $picture = $bio = "";
//
// TODO: Add isset!!! *******
//
if ($_SERVER["REQUEST_METHOD"] == "POST")
{  
  $firstName = $_POST["FName"];
  $lastName = $_POST["LName"];
  $picture = $_POST["PictureMe"];
  $bio = $_POST["WalkerBio"];
  
  echo "<hr>";  
  // Call the function to create a file with the walker's bio
  createWalkerHMTLFile($firstName, $lastName, $picture, $bio);    
}

function createWalkerHMTLFile($firstName, $lastName, $picture, $bio)
{
	// Main folder where to store the walker bios
	if (!file_exists("WalkerBios"))
	{
		mkdir('WalkerBios', 0777, true);
	}
	
	$walkerfolder = $firstName ."_" .$lastName;
	$dirName = "WalkerBios/" .$walkerfolder;
	if (!file_exists($dirName))
	{
		// echo "Creating directory $dirName <br>";
		mkdir($dirName, 0777, true);
	}
	
	if (chdir ($dirName))
	{
		// echo "Directory changed to $dirName <br>";
	}
	else
	{
		// We do not want to create a directory in the wrong location
		die("Failure to create directory...contact support!");
	}
	// The image name comes complete with directory names
	// We need to copy the image locally or it will not load in the walkers page
	// Split the path to the picture
	$splitName = explode('\\', $picture);
	
	// Extract the last element - just the picture name
	$newPicName = array_values(array_slice($splitName, -1))[0];
	// Finally copy the picture to the walker's page
	copy($picture, $newPicName);
		
	// File name	
	$filename = $firstName ."_" .$lastName .".php";
	// echo "<b>Creating $filename...</b><br>"; 
	echo "<a href='$dirName/$filename'>Check out your bio</a><br>";
	echo "<a href='index.php'>Go Back to Main Menu</a>";
	
	// create HMTL file
	$myfile = fopen($filename, "w");
	$text = "<html>\n<head><title>3Musqueteers</title><meta charset='UTF-8'><meta name='viewport' content='width=device-width, initial-scale=1'><style>
	<?php include '../../css/main.css';?></style></head><body>";
	fwrite($myfile, $text);
	
	// Write the header
	$text = "<?php require '../../elements/header.html' ?>";
	fwrite($myfile, $text);
	
	// Write Name
	$text = "<b>My Name is: $firstName $lastName</b><br><br>";
	fwrite($myfile, $text);
	
	// Write Picture
	$text = "<img src='$newPicName' alt='Walker Picture' style='width:350px;height:265px;'>";
	fwrite($myfile, $text);
	
	// Write Bio
	$text = "<p>$bio</p><br><br><a href='index.php'>Go Back to Main Menu</a>";
	fwrite($myfile, $text);
	
	
	// Write footer
	$text = "<?php require '../../elements/footer.html'; ?>";
	fwrite($myfile, $text);
	
	$text = "</body></html>";
	fwrite($myfile, $text);
	fclose($myfile);	
}

?>	
		
        <?php require 'elements/footer.html'; ?>

    </body>
</html>










