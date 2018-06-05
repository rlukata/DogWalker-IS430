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
				<img src="images/Dog004.jpg" alt="HTML5 Icon" style="width:375px;height:285px;">
				<br>
            </div>

            <!-- Main content -->
            <div class="main">
				<h1>You are about to hire:</h1>
				<h2>
				<script>
				// Function to parse the URL and extrace first and last name of Walker
				function getParameter() {
								
					var val = document.URL;
					// Extract the first name
					var start = val.indexOf('=');
					var end = val.indexOf('&');
					var total = (end - start) - 1;
					
					// Save the end of the string so that we extract the last name
					var temp = val.substr(start + 1);
					// Get the actual first name			
					var f = val.substr(start + 1, total);
					// Get the actual last name				
					var l = temp.substr(temp.indexOf('=') + 1);
					
					// Good for troubleshooting
					// document.writeln(f," ",l); 
					
					// Return first name and last name
					return f+" "+l;
				}

				 var walkerName= getParameter();
				 document.writeln(walkerName);
				</script>
				</h2>

				<br>
				<form action="<?php $_SERVER["PHP_SELF"];?>" method="post">

				<b>Select a From Date: </b><br>
				<input type="date" name="fromDate" id="fromDate" min="2018-06-01" max="2018-09-30" required/><br><br>
						
				
				<b>Select a From Time: </b><br>
				<input type="Time" name="fromTime" id="fromTime" min="07:00" max="20:00" required/><br><br>



				<b>Select a To Date: </b><br>
				<input id="toDate" name="toDate" type="date" min="2018-06-01" max="2018-09-30" required/><br><br>
				<b>Select a To Time: </b><br>
				<input id="toTime" name="toTime" type="Time" min="08:00" max="21:00" required/><br><br>


				<input type="submit" value="Hire Walker">
				</form>
				<script>
					var myDate = new Date();
					var month = myDate.getMonth() + 1;
					// The leading zero is needed for single digit months
					if (month.toString().length!==2) { month="0"+month; }
					
					var day = myDate.getDate();
					// The leading zero is needed for single digit days
					if (day.toString().length!==2) {day="0"+day; }
					
					var year = myDate.getFullYear();
					var fullDate = year + "-" + month + "-" + day;
					// Useful for troubleshooting
					// document.write(fullDate);
					
					// Dynamically set the minimum date to the present day
					document.getElementById("fromDate").min = fullDate;
					document.getElementById("toDate").min = fullDate;
				</script>
				
				
				
				<?php
					// Declare all the needed variables
					$from_Date = $from_Time = $to_Date = $to_Time = "";
					
                    if ($_SERVER["REQUEST_METHOD"] == "POST")
					{
						// echo "<h1>HIRED!</h1>";
						
						if (isset($_POST['fromDate']))
						{
						   $from_Date = $_POST["fromDate"];
						}
						
					    if (isset($_POST['fromTime']))
						{
						    $from_Time = $_POST["fromTime"];
						}
						
						if (isset($_POST['toDate']))
						{
						   $to_Date = $_POST["toDate"];
						}
												
						if (isset($_POST['toTime']))
						{
						   $to_Time = $_POST["toTime"];
						}
						
						echo "<hr>";  
						// Call the function to verify date and time are set correctly
						VerifyDateAndTimes($from_Date, $from_Time, $to_Date, $to_Time); 
					
					} 
					
					// Function to verify dates
					function VerifyDateAndTimes($from_Date, $from_Time, $to_Date, $to_Time)
					{
						$err = false;
						if ($to_Date < $from_Date)
						{
							Echo "<b>Error: The end date of: $to_Date is less than the start date of: $from_Date. </b><br>";
							Echo "<b>Please verify the dates and try again!</b>";
							$err= true;
						}
						else if ($from_Date === $to_Date)
						{
							if ($to_Time < $from_Time)
							{
								Echo "<b>Error: The end time of: $to_Time is less than the start time of: $from_Time. </b><br>";
								Echo "<b>Please correct the time and try again!</b>";
								$err = true;
							}
						}
						
						if (!$err)
						{
							Echo "<b>Dog Walker hired!</b>" ."<br>";
							Echo "<b>From: " .$from_Date ." " .$from_Time ."</b><br>";
							Echo "<b>To: " .$to_Date ." " .$to_Time ."</b><br>";
							Echo "<b>An e-mail confirmation will be sent to shortly!</b><br>";
							Echo "<b>Thank you for your business!</b>";
						}
						
					}
					
                ?>
            </div>
        </div>

        <?php require 'elements/footer.html'; ?>

    </body>
</html>