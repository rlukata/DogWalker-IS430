<?php
    session_start(); // Starting Session
    $error=''; // Variable To Store Error Message
    if (isset($_POST['submit'])) {
        if (empty($_POST['username']) || empty($_POST['pswd'])) {
            $error = "Username or Password is invalid";
        }
        else {
            // Define $username and $password
            $username=$_POST['username'];
            $password=$_POST['pswd'];
            
            // Establishing Connection with Server by passing server_name, user_id and password as a parameter
            $db = new mysqli("localhost", "rlukata", "ramito1991", "SchoolDatabase");
            
            // SQL query to fetch information of registerd users and finds user match.
            $stmt = $db->prepare("SELECT username, pswd FROM logins WHERE username=? AND pswd=MD5(?)");
            $stmt->bind_param('ss', $username, $password); 
            $stmt->execute();
            $stmt->store_result();
            
            if ($stmt->num_rows == 0) {
                $error = "Username or Password is invalid";
                
            } else {
                $_SESSION['login_user']=$username; // Initializing Session
                header ("location:gmapsFinder.php");
            }
            mysqli_close($db); // Closing Connection
        }
    }
    else {
        echo 'post submit error';
    }
?>