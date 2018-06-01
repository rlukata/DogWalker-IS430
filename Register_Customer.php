<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>3 Musketeers' Dog Walking Service</title>

<link rel="stylesheet" href="CascadeStyle.css">

 <div class="container-fluid">
    <div class="container">
        <div class="row text-center">
            <img class="img-responsive center-block" style="float:right; width:300px; height:150px;">
        </div>
        
     </div>
 </div>
</head>

<body>

<div id="container">
	<div id="header">
		<h1> Welcome to our dog walking service </h1>
		<h3> (Happy Clients - Happy Dogs!) </h3>
	</div>
	<div id="body">
	
<?php
// TODO: We should use htmlspecialchars($_SERVER["PHP_SELF"]) so the user gets the error messages on the same page!!!
// TODO: Need to use isset to verify all fields *****
$firstName = $_POST["FName"];
$lastName = $_POST["LName"];
$zipCode = $_POST["ZipCode"];
$userEmail = $_POST["email"];
$phoneNumber = $_POST["PhoneNumber"];
$userPassword = $_POST["psw"];
$user2Password = $_POST["psw-repeat"];
isset($firstName, $lastName, $zipCode, $userEmail, $phoneNumber, $userPassword, $user2Password);

echo "First Name: $firstName<br>";
echo "Last Name: $lastName<br>";
echo "Zip Code: $zipCode<br>";
echo "E-mail: $userEmail<br>";
echo "Phone Number: $phoneNumber<br>";
echo "Your Password: $userPassword<br>";
echo "Your 2nd Password: $user2Password<br>";

ValidateUserPassword($userPassword, $user2Password);
CreateMySQLUser($firstName, $lastName, $zipCode, $userEmail, $phoneNumber, $userPassword);
echo "</br></br>";


/* Functions go here */
function ValidateUserPassword($userPassword, $user2Password)
{
	if ($userPassword !== $user2Password)
	{
		echo "Ooops, passwords do not match! Please try again! <br>";
		exit;
	}
}


function CreateMySQLUser($firstName, $lastName, $zipCode, $userEmail, $phoneNumber, $userPassword)
{
	echo "<b>Creating User: <i>$firstName $lastName</i></b><br>";
	// Create connection
	$conn = new mysqli('localhost', 'root', '', 'customers');
	// Check connection
	if ($conn->connect_error)
	{
		die("Connection failed: " . $conn->connect_error);
	} 
	echo "<b>Connection to MySQL DB established!</b> <br>";
	$sql = "INSERT INTO users (FName, LName, ZipCode, Email, PhoneNumber, Password)
	VALUES ('$firstName' , '$lastName', '$zipCode', '$userEmail', '$phoneNumber', '$userPassword')";

	echo "SQL Statemet: $sql <br>";
	if ($conn->query($sql) === TRUE)
	{
		echo "<b>New record created successfully</b><br>";
	}
	else
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();	
}


?>
</br></br>
<a href="index.php">Go back to the main page</a>
	</div>
	<div id="footer">
		<hr>
		<h2 class="left" id = "contact">Webpage Created by</h2>
		<small id = "name"><i>Mauricio A. Encina <br /><a href="mailto:mencina@cityu.edu">contact me</a><br />Copyright &copy; 2018</i></small>
	</div>
</div>

</body>

</html> 