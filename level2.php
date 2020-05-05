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
        <title>Level 2</title>
        <meta charset="utf-8">
        
        <link rel="stylesheet" type="text/css" href="pages.css">
        
        <script src="jquery.js"></script>
        
        <script>
            $(function() {
                document.getElementById("riddleForm").onsubmit = function () {
                    console.log("on submit");
                    
                    var rid1 = document.getElementById("riddle1");
                    console.log(rid1);
                    var rid2 = document.getElementById("riddle2");
                    console.log(rid2);
                
                    var check = document.getElementById("errorText");
                
                    if (rid1.value == '' || rid2.value == '') {
                        check.innerHTML = "Please enter your answers";
                        return false;
                    }
                    else {
                        return true;
                    }
                }
            });
        </script>
        
    </head>
    <body>
        <div id="mainWrapper">
            <h1>Level 2</h1>
            
            <p>Solve following riddles by typing the answers in the boxes</p>
            
            <hr>
            
            <p> <?php 
                if ($riddleError) {
                    echo "Incorrect answers, try again!";
                }
                ?> 
            </p>
            <p id="errorText"></p>
            
            <form id="riddleForm" action="riddleCheck.php" method="get">
                
                <p>What runs around the whole yard without moving?</p>
                
                <div>
                    <label>Answer:</label>
                    <input id="riddle1" name="riddle1" type="text">
                </div>
                
                <p>What can you catch but never throw?</p>
                
                <div>
                    <label>Answer:</label>
                    <input id="riddle2" name="riddle2" type="text">
                </div>
                
                <button id="subBtn" type="submit">Submit</button>
            </form>
            
            <button id="nextBtn" hidden>Next Level (3)</button>
            
            <br>
            <div id="logoutBox">
                <a href="home.php">Home</a>
                <br>
                <a href="logout.php">Logout</a>
            </div>
        </div>
            
    </body>
</html>