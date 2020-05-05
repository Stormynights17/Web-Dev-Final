<!-- Created by Olivia LaVal for CS2830 final project -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login Page</title>
        <meta charset="utf-8">
        
        <link rel="stylesheet" type="text/css" href="pages.css">
        
    </head>
    <body>
        <div id="mainWrapper">
            <h1>Please Login</h1>
            
            <!-- Code from User Authentication lecture -->
            <?php
            if ($error) {
                print "<div class=\"ui-state-error\">$error</div>\n";
            }
            ?>
            
            <form action="loginCheck.php" method="post">
                <!-- from User Authentication lecture -->
                <input type="hidden" name="action" value="do_login">
                <div>
                    <label>Username:</label>
                    <input type="text" name="username" id="username">
                </div>
                <div>
                    <label>Password:</label>
                    <input type="password" name="pass" id="pass">
                </div>
                <button type="submit" id="subBtn">Login</button>
            </form>
        </div>
    </body>
</html>