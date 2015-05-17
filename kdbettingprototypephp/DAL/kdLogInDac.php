<?php

session_start();

include("../DAL/SqlServerConnection.php");

// DB connection info
$host = "sapserver\sqlexpress";
$user = "sa";
$pwd = "sa";
$db = "kdbettingdb";

try {
//establish connection
    $conn = new PDO("sqlsrv:Server= $host ; Database = $db ", $user, $pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, PDO::ATTR_CASE, PDO::CASE_NATURAL);

//retrieve post values
    $username = trim(stripslashes($_POST['username']));
    $pwd = trim(stripslashes($_POST['pwd']));

//validate
    $error_message = "";
    if (empty($username)) {
        $error_message .= 'Please enter UserName.<br />';
    }
    if (empty($pwd)) {
        $error_message .= 'Please enter Password.<br />';
    }

    if (strlen($error_message) > 0) {
        die($error_message);
    }

//authenticate
//performs a SELECT query by substituting a name and a value for the positional ? placeholders.
    $sql_select = "SELECT * FROM kdUsers WHERE UserName = ? and PassWord = ?";
    $stmt = $conn->prepare($sql_select);
    $stmt->bindParam(1, $username);
    $stmt->bindParam(2, $pwd);
    $stmt->execute();
    $founduser = $stmt->fetchAll();

// If result matched $username and $password, table must have 1 row
    if ($founduser) {
// Authentication successful 
// Set session variables
        $_SESSION['logincookie'] = "true";
        $_SESSION['loggedinuser'] = $username;
// cookie expires in 2 hours
        setcookie("username", $username, time() + (3600 * 2));
// close the session
        session_write_close();
    } else {
// Authentication failed
// remove session variables 
        unset($_SESSION["logincookie"]);
        unset($_SESSION["loggedinuser"]);

// destroy the session
        session_destroy();

// Clears the $_SESSION variable
        $_SESSION = array();

//expire the cookie
        setcookie("username", "", time() + (3600 * -1));

//redirect to login page
//header("Location: kdLogin.php");
//inform authentication was unsuccessful
        die("UserName and Password could not Authenticate.<br /> Please Try Again.");
    }

    $stmt->closeCursor();
} catch (Exception $e) {
    die($e);
}


if ((isset($_SESSION['redirect']))) {
    header("Location: " . $_SESSION['redirect']);
    unset($_SESSION['redirect']);
} else {
//redirect to home page
    header("Location: kdHome.php");
}
?>
