<!DOCTYPE html>
<?php 
    include 'included.php';
    include 'session.php';
?>
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

        <?php require 'elements/header.html' ?>

        <?php navBar("map"); ?>

        <!-- The content -->
        <div class="row">

            <!-- Side content -->
            <div class="side">
                <?php
                    if(isset($_SESSION['login_user'])){
                        echo '<form><input class="button" type="button" value="Logout" onclick="window.location.href=\'logout.php\'" /></form>';
                    }
                ?>
                <br><br>
                <img src="images/Dog008.jpg" alt="HTML5 Icon" style="width:350px;height:265px;">
            </div>

            <!-- Main content -->
            <div class="main">
                <?php 
                    if(!isset($_SESSION['login_user'])){
                         echo '<form><input class="button" type="button" value="Please login to access this section." onclick="window.location.href=\'index.php\'" /></form>';
                    }
                    else {
                        RetrieveUserNameFromDB($login_session);
                        echo
                        '<b>Dog Walkers available near you: (Map may take a minute to load)</b><br>
                        <iframe
                          width="600"
                          height="450"
                          frameborder="0" style="border:0"
                          src="elements/gMaps.html" allowfullscreen>
                        </iframe>';
                    }
                ?>
            </div>
        </div>

        <?php require 'elements/footer.html'; ?>
        
        <?php
            function RetrieveUserNameFromDB($userEmail)
            {
                // Create connection
                $conn = new mysqli('localhost', 'root', '', 'customers');
                // Check connection
                if ($conn->connect_error)
                {
                    die("Connection failed: " . $conn->connect_error);
                } 
                // Useful for troubleshooting
                // echo "<b>Connection to MySQL DB established!</b> <br>";
                $sql = "SELECT FName,LName FROM Dog_Owners WHERE email='$userEmail'";
                // Useful for troubleshooting
                // echo "SQL Statemet: $sql <br>";

                    $result = $conn->query($sql);
                    if ($result->num_rows > 0)
                    {
                        $row = $result->fetch_assoc();
                        echo "<h2>Welcome: " .$row['FName'] ." " .$row['LName'] ."</h2><br>";
                    }
                    else
                    {
                        die("Connection failed: " . $conn->connect_error);
                    }
                $conn->close();	
            }
        ?>
    </body>
</html>