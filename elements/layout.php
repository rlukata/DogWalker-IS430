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
                            <a href="gmapsFinder.php">Use Google Maps to find a dog walker near you</a>
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

    function sideContent()
    {
        echo
            '
            <!-- Side content -->
            <div class="side">
                    <p>This is a side that will contain information about dog walkers</p>
            </div>
            ';
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
?>