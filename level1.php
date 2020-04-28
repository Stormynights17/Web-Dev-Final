<!-- Created by Olivia LaVal for CS2830 final project -->

<?php
//**Code from User Authentication lecture
// Created by Professor Wergeles for CS2830 at the University of Missouri

	// A user has to have logged in order to have this 'username' cookie
	$username = empty($_COOKIE['username']) ? '' : $_COOKIE['username'];
	
	// If the cookie isn't there, send them back to the login
	if (!$username) {
		header("Location: login.html");
		exit;
	}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Level 1</title>
        <meta charset="utf-8">
        
        <link rel="stylesheet" type="text/css" href="pages.css">
        
    </head>
    <body>
        <div id="mainWrapper">
            <h1>Level 1</h1>
            
            <p>Fill in color wheel game</p>
            
            <div id="logoutBox">
                <a href="home.php">Home</a>
                <br>
                <a href="logout.php">Logout</a>
            </div>
        </div>
    </body>
</html>