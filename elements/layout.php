<?php
        
    function headWeb() 
    {
        echo
            '
            <!-- Header -->
            <div class="header">
                    <h1>Meet and Hire a Dog Walker From Your Own Neighborhood!</h1>
                    <h2>We Offer Professional Dog Walking Service</h2>
                    <h3>Quick & Easy</h3>
            </div>
            ';
    }

    function navBar($category)
    {
        switch($category)
        {
            case "home":
                    echo 
                    '
                    <!-- Nav bar -->
                    <div class="navbar">
                            <a class="active" href="index.php">Home</a>
							
							<a href="elements/loginButton.html">Use Google Maps to find a dog walker near you</a>
                            <!-- <a href="gmapsFinder.php">Use Google Maps to find a dog walker near you</a> -->
                            <a href="nameFinder.php">Find a dog walker by name tag</a>
                            <a href="about.php">About us</a>
                    </div>
                    ';
                    break;
            case "map":
                    echo 
                    '
                    <!-- Nav bar -->
                    <div class="navbar">
                            <a href="index.php">Home</a>
                            <a class="active" href="gmapsFinder.php">Use Google Maps to find a dog walker near you</a>
                            <a href="nameFinder.php">Find a dog walker by name tag</a>
                            <a href="about.php">About us</a>
                    </div>
                    ';
                    break;
            case "walker":
                    echo 
                    '
                    <!-- Nav bar -->
                    <div class="navbar">
                            <a href="index.php">Home</a>
                            <a href="gmapsFinder.php">Use Google Maps to find a dog walker near you</a>
                            <a class="active" href="nameFinder.php">Find a dog walker by name tag</a>
                            <a href="about.php">About us</a>
                    </div>
                    ';
                    break;
            case "about":
                    echo 
                    '
                    <!-- Nav bar -->
                    <div class="navbar">
                            <a href="index.php">Home</a>
                            <a href="gmapsFinder.php">Use Google Maps to find a dog walker near you</a>
                            <a href="nameFinder.php">Find a dog walker by name tag</a>
                            <a class="active" href="about.php">About us</a>
                    </div>
                    ';
                    break;
            default:
        }
    }

    function footer()
    {
        echo 
            '
            <!-- Footer -->
            <div class="footer">
                    <h2>
                            <a href="mailto:rlukata@cityuniversity.edu;
                            coolhand812@cityuniversity.edu;
                            mencina@cityuniversity.edu">Contact us!</a>
                    </h2>
            </div>
            ';
    }
    
    /****************************************************************************
	* TBD: This function needs to be validated and sanitized.
	* We need to add validation so that for e-mail we can only accept e-mail formatted input
	* Same for all input.
	*/
	
	/*
	function signinButton() 
    {
        echo
        '
        <button onclick="document.getElementById(\'id01\').style.display=\'block\'" style="width:auto;">Sign Up</button>
        <div id="id01" class="modal">
            <span onclick="document.getElementById(\'id01\').style.display=\'none\'" class="closeSignin" title="Close Modal">&times;</span>
            <form class="modal-content" action="Register_Customer.php" method="post">
                <div class="container">
                    <h1>Sign Up</h1>
                    <p>Please fill in this form to create an account.</p>
                    <hr>
					<label for="FirstName"><b>First Name</b></label>
                    <input class="signin" type="text" placeholder="Enter your First Name" name="FName" maxlength="20" required>
					
					<label for="LastName"><b>Last Name</b></label>
                    <input class="signin" type="text" placeholder="Enter your Last Name" name="LName" maxlength="20" required>
					
					<label for="ZipCode"><b>Zip Code</b></label>
                    <input class="signin" type="text" placeholder="Enter your 5 digits Zip Code" name="ZipCode" pattern="(\d{5})" title="Enter a valid zip code: 90405" maxlength="5" required>
					
					<label for="PhoneNumber"><b>Phone Number</b></label>
                    <input class="signin" type="text" placeholder="Enter your Phone Number" name="PhoneNumber" maxlength="14" pattern="(?:(?:(\s*\(?([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9])\s*)|([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9]))\)?\s*(?:[.-]\s*)?)([2-9]1[02-9]|[2-9][02-9]1|[2-9][02-9]{2})\s*(?:[.-]\s*)?([0-9]{4})" title="Please enter a valid phone number: (425)555-1212" required>
					
                    <label for="email"><b>Email</b></label>
                    <input class="signin" type="text" placeholder="Enter Email" name="email" pattern="/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD" title="Enter a valid e-mail address: JohnDoe@gmail.com" required>

                    <label for="psw"><b>Password</b></label>
                    <input class="signin" type="password" placeholder="Enter Password" name="psw" required>

                    <label for="psw-repeat"><b>Repeat Password</b></label>
                    <input class="signin" type="password" placeholder="Repeat Password" name="psw-repeat" required>
                    
                    <label>
                        <input class="signin" type="checkbox" checked="checked" name="remember" style="margin-bottom:15px">Remember me
                    </label>

                    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                    
                    <div class="clearfix">
                        <button type="button" onclick="document.getElementById(\'id01\').style.display=\'none\'" class="cancelbtnSigin">Cancel</button>
                        <button type="submit" class="signupbtn">Sign Up</button>
                    </div>
                </div>
            </form>
        </div>

        <script>
        // Get the modal
        var modal = document.getElementById(\'id01\');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        </script>';
     }
     
     function loginButton() 
    {
        echo
        '<button onclick="document.getElementById(\'id02\').style.display=\'block\'" style="width:auto;">Login</button>
        <div id="id02" class="modal">
            <form class="modal-content animate" action="/action_page.php">
                <div class="imgcontainer">
                    <span onclick="document.getElementById(\'id02\').style.display=\'none\'" class="closeLogin" title="Close Modal">&times;</span>
                    <img src="https://www.w3schools.com/howto/img_avatar2.png" alt="Avatar" class="avatar">
                </div>
                <div class="container">
					<label for="uname"><b>Username</b></label>
                    <input class="login" type="text" placeholder="Enter Username" name="uname" required>
                    
                    <label for="psw"><b>Password</b></label>
                    <input class="login" type="password" placeholder="Enter Password" name="psw" required>
                    
                    <button type="submit">Login</button>
                    <label><input class="login" type="checkbox" checked="checked" name="remember">Remember me</label>
                </div>
                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById(\'id02\').style.display=\'none\'" class="cancelbtnLogin">Cancel</button>
                    <span class="psw">Forgot <a href="#">password?</a></span>
                </div>
            </form>
        </div>

        <script>
        // Get the modal
        var modal = document.getElementById(\'id02\');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        </script>';
     }
	 */
?>

