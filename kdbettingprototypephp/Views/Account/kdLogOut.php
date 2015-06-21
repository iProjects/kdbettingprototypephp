<?php

// remove session variables 
unset($_SESSION["logincookie"]);
unset($_SESSION["loggedinuser"]);

// destroy the session
session_destroy(); 

// Clears the $_SESSION variable
$_SESSION = array(); 

//expire the cookie
setcookie("username", "", time()+(3600 * -1));

unset($_COOKIE["username"]);

//redirect to login page
header("Location: kdLogin.php");

?>
