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
        
        <style>
            /* Box shadows created using: 
            https://www.cssmatic.com/box-shadow */
            .box {
                width: 120px;
                margin-left: auto;
                margin-right: auto;
            }
            #newGameBox {
                background-color: deepskyblue;
                box-shadow: 7px 7px 7px 0px rgba(133,164,245,1);
            }
            #continueBox {
                background-color: hotpink;
                box-shadow: 7px 7px 7px 0px rgba(230,135,245,1);
            }
            
            .black {
                color: black;
            }
            
        </style>
        
    </head>
    <body>
        <div id="mainWrapper">
            <h1>Welcome to the Virtual Escape Room</h1>
            <h3>There are 3 levels with different puzzles that YOU must complete to ESCAPE</h3>
            
            <div id="continueBox" class="box">
                <a class="black" href="continue.php">Continue game</a>
            </div>
            <p>OR</p>
            <div id="newGameBox" class="box">
                <a class="black" href="level1.php">Start new game (Level 1)</a>
            </div>
            <br>
            <br>
            <div id="logoutBox">
                <a href="logout.php">Logout</a>
            </div>
        </div>
    </body>
</html>