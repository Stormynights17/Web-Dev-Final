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
        <title>Level 3</title>
        <meta charset="utf-8">
        
        <script src="jquery.js"></script>
<!--
        <script src="jquery-ui.min.js"></script>
        
        <link rel="stylesheet" href="jquery-ui.min.css">
-->
        
        <link rel="stylesheet" type="text/css" href="pages.css">
        
        <link rel="stylesheet" type="text/css" href="level1.css">
        
    </head>
    <body>
        <div id="mainWrapper">
            <h1>Level 3</h1>
            
            <p>Instructions for level 3</p>
            
            <hr>
            
            <br>
            <div id="logoutBox">
                <a href="home.php">Home</a>
                <br>
                <a href="logout.php">Logout</a>
            </div>
        </div>
    </body>
</html>