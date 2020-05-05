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
        
        <script src="jquery.js"></script>
        <script src="jquery-ui.min.js"></script>
        
        <link rel="stylesheet" href="jquery-ui.min.css">
        
        <link rel="stylesheet" type="text/css" href="pages.css">
        
        <link rel="stylesheet" type="text/css" href="level1.css">
        
        <!-- Draggable and droppable code from User Interface Design lecture -->
        <script>
            var redB = false;
            var oraB = false;
            var yelB = false;
            var greB = false;
            var bluB = false;
            var vioB = false;
            
            function dropFunction(colorDrop, block) {
                console.log(block);
                
                if (block == colorDrop) {
                    $("#message").html("Correct");
                    
                    return true;
                }
                else {
                    $("#message").html("Wrong");
                    return false;
                }
            }
            
            function checkColors() {
                if (redB && oraB && yelB && greB && bluB && vioB) {
                    $("#message").html("All are correct");
                    $("#nextLevel").show();
                }
            }
            
            $(function() {
                $(".color").draggable();
                
                $("#redR").droppable({
                    drop: function(event, ui) {
                        //ui tells what was dropped
                        console.dir(ui);
                        
                        //reference to dropped item and get id
                        var block = ui.draggable.prop("id");
                        
                        redB = dropFunction("redC", block);
                        console.log(redB);
                        checkColors();
                    }
                });
                $("#orangeR").droppable({
                    drop: function(event, ui) {
                        var block = ui.draggable.prop("id");
                        
                        oraB = dropFunction("orangeC", block);
                        console.log(oraB);
                        checkColors();
                    }
                });
                $("#yellowR").droppable({
                    drop: function(event, ui) {
                        var block = ui.draggable.prop("id");
                        
                        yelB = dropFunction("yellowC", block);
                        console.log(yelB);
                        checkColors();
                    }
                });
                $("#greenR").droppable({
                    drop: function(event, ui) {
                        var block = ui.draggable.prop("id");
                        
                        greB = dropFunction("greenC", block);
                        console.log(greB);
                        checkColors();
                    }
                });
                $("#blueR").droppable({
                    drop: function(event, ui) {
                        var block = ui.draggable.prop("id");
                        
                        bluB = dropFunction("blueC", block);
                        console.log(bluB);
                        checkColors();
                    }
                });
                $("#violetR").droppable({
                    drop: function(event, ui) {
                        var block = ui.draggable.prop("id");
                        
                        vioB = dropFunction("violetC", block);
                        console.log(vioB);
                        checkColors();
                    }
                });
            });
            
        </script>
        
    </head>
    <body>
        <div id="mainWrapper">
            <h1>Level 1</h1>
            
            <p>Fill in the rainbow: From red to violet</p>
            
            <hr>
            
            <div id="gameBox" class="game">
                <div id="colorBox" class="sideBySide">
                    <div id="redC" class="color"></div>
                    <div id="orangeC" class="color"></div>
                    <div id="yellowC" class="color"></div>
                    <div id="greenC" class="color"></div>
                    <div id="blueC" class="color"></div>
                    <div id="violetC" class="color"></div>
                </div>
                <div id="rainbowBox" class="sideBySide">
                    <div id="redR" class="rainbow">Red</div>
                    <div id="orangeR" class="rainbow"></div>
                    <div id="yellowR" class="rainbow"></div>
                    <div id="greenR" class="rainbow"></div>
                    <div id="blueR" class="rainbow"></div>
                    <div id="violetR" class="rainbow">Violet</div>
                </div>
            </div>
            
            <p id="message"></p>
            
<!--            <button id="nextBtn" hidden>Next Level (2)</button>-->
            
            <div hidden id="nextLevel">
                <a href="level2.php">Next Level (2)</a>
            </div>
            
            <br>
            <div id="logoutBox">
                <a href="home.php">Home</a>
                <br>
                <a href="logout.php">Logout</a>
            </div>
        </div>
    </body>
</html>