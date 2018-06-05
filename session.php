<?php
    // Starting Session
    session_start();
    if (isset($_SESSION['login_user'])) {
        // Storing Session
        $user_check=$_SESSION['login_user'];
        // Establishing Connection with Server by passing server_name, user_id and password as a parameter
        $db = new mysqli("localhost", "root", "", "customers");

        // SQL query to fetch information of registerd users and finds user match.
        $stmt = $db->prepare("SELECT email FROM users WHERE email=?");
        $stmt->bind_param('s', $user_check); 
        $stmt->execute();
        $stmt->store_result();    
        $stmt->bind_result($user_check);
        $login_session = $user_check;
        $stmt->close(); // Closing Connection
    }
    //else {
        //$stmt->close(); // Closing Connection
        //header('Location: index.php'); // Redirecting To Home Page
    //}
?>