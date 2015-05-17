
<?php

session_start(); 

//if you are not logged in redirect to login page.
if (!(isset($_SESSION['logincookie'])) || $_SESSION['logincookie'] != "true")
{ 
$_SESSION['logincookie'] = "false";
header('Location: kdLogin.php');
}
  
// DB connection info
$host = "sbserver-pc\sqlexpress";
$user = "sa";
$pwd = "sa";
$db = "kdbettingdb";

try 
{
$conn = new PDO( "sqlsrv:Server= $host ; Database = $db ", $user, $pwd);
if (!$conn) {
    die(var_dump('Connect Error (' . mysqli_connect_errno() . ') '
           . mysqli_connect_error())); 
}
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION,PDO::ATTR_CASE, PDO::CASE_NATURAL );
}
catch(Exception $e) 
{
die(var_dump($e));
}

?>
 