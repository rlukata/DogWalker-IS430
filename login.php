<?php
    session_start(); // Starting Session
    $error=''; // Variable To Store Error Message
    if (isset($_POST['submit'])) {
        if (empty($_POST['email']) || empty($_POST['psw'])) {
            $error = "Email or Password is invalid";
        }
        else {
            // Define $username and $password
            $email=$_POST['email'];
			// Sanitize the e-mail address
			$email = filter_var($email, FILTER_SANITIZE_EMAIL);
            $password=$_POST['psw'];
            
            // Establishing Connection with Server by passing server_name, user_id and password as a parameter
            $db = new mysqli("localhost", "root", "", "customers");
            
            // SQL query to fetch information of registerd users and finds user match.
            // add MD5 to pswd
            $stmt = $db->prepare("SELECT email, password FROM dog_owners WHERE email=? AND password=(?)");
            $stmt->bind_param('ss', $email, $password); 
            $stmt->execute();
            $stmt->store_result();
            
            if ($stmt->num_rows == 0) {
                $error = "Email or Password is invalid";
                
            } else {
                $_SESSION['login_user']=$email; // Initializing Session
                header ("location:gmapsFinder.php");
            }
            mysqli_close($db); // Closing Connection
        }
    }
    else {
        echo 'post submit error';
    }
?>