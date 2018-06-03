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
                // TODO: Sanitize FName and LName
                // TODO: Need to use isset to verify all fields are set as follows:

                if ($_SERVER["REQUEST_METHOD"] == "POST")
                {
                        if(isset($_POST["FName"])){
                                $firstName = $_POST["FName"];
                        }
                        if(isset($_POST["LName"])){
                                $lastName = $_POST["LName"];
                        }
                        if(isset($_POST["ZipCode"])){
                                $zipCode = $_POST["ZipCode"];
                        }       
                        if(isset($_POST["email"])){
                                $userEmail = $_POST["email"];
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
                function ValidateUserPassword($userPassword, $user2Password)
                {
                        if ($userPassword !== $user2Password)
                        {
                                echo "<h1>Ooops, passwords do not match! Please try again! </h1><br>";
                                echo '<a href="index.php">Go back to the main page</a>';
                                exit;
                        }
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

                        $sql = "INSERT INTO Dog_Walkers (FName, LName, ZipCode, Email, PhoneNumber, Password, id)
                        VALUES ('$firstName' , '$lastName', '$zipCode', '$userEmail', '$phoneNumber', '$userPassword', '1')";

                        // Useful for troubleshooting
                        // echo "SQL Statemet: $sql <br>";

                        if ($conn->query($sql) === TRUE)
                        {
                                echo "<h1>Welcome Dog Walker: $firstName $lastName!!!</h1><br>";
                                echo "<b>We are looking forward to a long and fruitful relationship!</b><br>";
                        }
                        else
                        {
                                echo "Error: " . $sql . "<br>" . $conn->error;
                        }

                        $conn->close();	
                }
                ?>
            </div>
        </div>

        <?php require 'elements/footer.html'; ?>
    
    </body>

</html> 