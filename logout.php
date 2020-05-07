<?php
//**Code structure is from User Authentication lecture
    session_start();

    // Set the cookie to expire
	setcookie('username', '', 1);

    setcookie('levels', '', 1);

//Code from User Authentication - session
    /*
		Destroying all session data
		http://php.net/manual/en/function.session-destroy.php
	*/
	// Unset all session variables
	$_SESSION = array();
	
	// If the session was propagated using a cookie, remove that cookie
	if (ini_get("session.use_cookies")) {
		$params = session_get_cookie_params();
		setcookie(session_name(), '', 1,
			$params["path"], $params["domain"],
			$params["secure"], $params["httponly"]
		);
	}
	
	// Destroy the session
	session_destroy();
        
    // And redirect the user to the login
	header("Location: login.php");
	exit;
?>