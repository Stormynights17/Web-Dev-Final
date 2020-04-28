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
        <title>Home Page</title>
        <meta charset="utf-8">
        
        <link rel="stylesheet" type="text/css" href="pages.css">
        
    </head>
    <body>
        <div id="mainWrapper">
            <h1>Homepage</h1>
            
            <a href="">Continue game</a>
            <br>
            <a href="level1.php">Start new game (Level 1)</a>
            <br>
            <br>
            <div id="logoutBox">
                <a href="logout.php">Logout</a>
            </div>
        </div>
    </body>
</html>