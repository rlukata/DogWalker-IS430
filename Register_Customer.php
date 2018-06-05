<?php include 'included.php'; ?>
<!DOCTYPE html>
<html>
    <!-- Head -->
    <head>
        <title>3Musqueteers</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style><?php include 'css/main.css';?></style>
    </head>
    <body>
        <?php require 'elements/header.html' ?>
		
        <?php navBar("home"); ?>
    
        <!-- The content -->
        <div class="row">	
            <!-- Side content -->
            <!-- Main content -->
            <div class="main">
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST")
                    {
                        if(isset($_POST["FName"])){
                            $firstName = $_POST["FName"];
                            // echo "first name BEFORE sanitizing: $firstName<br>";
                            // Sanitize first name
                            $firstName = SanitizeUserInput($firstName);
                            // echo "first name AFTER sanitizing: $firstName<br>";
                        }
                        if(isset($_POST["LName"])){
                            $lastName = $_POST["LName"];
                            // echo "last name BEFORE sanitizing: $lastName<br>";
                            // Sanitize last name
                            $lastName = SanitizeUserInput($lastName);
                            // echo "last name AFTER sanitizing: $lastName<br>";
                        }
                        if(isset($_POST["ZipCode"])){
                            $zipCode = $_POST["ZipCode"];
                        }
                        if(isset($_POST["email"])){
                            $userEmail = $_POST["email"];
                            // echo "email BEFORE sanitizing: $$userEmail<br>";
                            $userEmail = filter_var($userEmail, FILTER_SANITIZE_EMAIL);
                            // echo "email AFTER sanitizing: $$userEmail<br>";
                        }
                        if(isset($_POST["PhoneNumber"])){
                            $phoneNumber = $_POST["PhoneNumber"];
                        }
                        if(isset($_POST["psw"])){
                            $userPassword = $_POST["psw"];
                        }
                        if(isset($_POST["psw-repeat"])){
                            $user2Password = $_POST["psw-repeat"];
                        }
                    }
				
				
                /* Good for troubleshooting ****************
                echo "First Name: $firstName<br>";
                echo "Last Name: $lastName<br>";
                echo "Zip Code: $zipCode<br>";
                echo "E-mail: $userEmail<br>";
                echo "Phone Number: $phoneNumber<br>";
                echo "Your Password: $userPassword<br>";
                echo "Your 2nd Password: $user2Password<br>";
                ********************************************/
                ValidateUserPassword($userPassword, $user2Password);
                CreateMySQLUser($firstName, $lastName, $zipCode, $userEmail, $phoneNumber, $userPassword);
                echo "</br></br>";
                
				
                /* Functions go here */
                // Validate that both passwords match
                function ValidateUserPassword($userPassword, $user2Password)
                {
                    if ($userPassword !== $user2Password)
                    {
                        echo "<h1>Ooops, passwords do not match! Please try again! </h1><br>";
                        echo '<a href="index.php">Go back to the main page</a>';
                        exit;
                    }
                }	
				
                /*****************************************************
                * This function will sanitize user input
                * Specifically fields like first and last name
                * Even though these fields are restriced in size
                * users can still enter dangerous text.
                *****************************************************/
                function SanitizeUserInput($input)
                {
                    // Dangerous words not allowed
                    $wordsNotAllowed = array("/delete/i", "/update/i","/union/i","/insert/i","/drop/i","/evil/i","/--/i");
                    // Remove dangerous words from first name
                    $input = preg_replace($wordsNotAllowed , "", $input);
                    $input = escapeshellarg($input);
                    // strip tags
                    $input = strip_tags($input);
                    // strip slashes
                    $input = stripslashes($input);
                    return $input;
                }
				
                function CreateMySQLUser($firstName, $lastName, $zipCode, $userEmail, $phoneNumber, $userPassword)
                {
                    // Useful for troubleshooting
                    // echo "<b>Creating User: <i>$firstName $lastName</i></b><br>";
                    // Create connection
                    $conn = new mysqli('localhost', 'root', '', 'customers');
                    // Check connection
                    if ($conn->connect_error)
                    {
                        die("Connection failed: " . $conn->connect_error);
                    } 
                    // Useful for troubleshooting
                    // echo "<b>Connection to MySQL DB established!</b> <br>";
                    $stmt = $conn->prepare("INSERT INTO dog_owners (FName, LName, ZipCode, Email, PhoneNumber, Password) VALUES (?, ?, ?, ?, ?, MD5(?))");
                    $stmt->bind_param('ssisis', $firstName, $lastName, $zipCode, $userEmail, $phoneNumber, $userPassword);
                    $stmt->execute();
                    $stmt->store_result();
                    // Useful for troubleshooting
                    // echo "SQL Statemet: $sql <br>";
                    if ($stmt->num_rows == 0)
                    {
                        echo "<h1>Welcome $firstName $lastName!!!</h1><br>";
                        echo "<b>Thank you for registering with our service. You are now able to hire a dog walker in your area.</b><br>";
                    }
                    else
                    {
                        // Good for troubleshooting, but not a good idea to show this information to user
                        // echo "Error: " . $sql . "<br>" . $conn->error;
                        // User could be entering SQL cmdlets with quotes
                        // Display a generic error message instead
                        echo "<b>Error: Unable to register user: $firstName, $lastName. Please verify your information and try again!</b><br>";
                        echo "<b>If you are unable to register, please contact us!</b>";				
                    }
                    $conn->close();	
                }
                ?>
            </div>
        </div>
        
        <?php require 'elements/footer.html'; ?>
        
    </body>
</html> 