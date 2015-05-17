<?php
 
// DB connection info
$host = "sapserver\sqlexpress";
$user = "sa";
$pwd = "sa";
$db = "kdbettingdb";

try 
{
//establish connection
$conn = new PDO( "sqlsrv:Server= $host ; Database = $db ", $user, $pwd);
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION,PDO::ATTR_CASE, PDO::CASE_NATURAL );

//retrieve post values
$email = trim(stripslashes($_POST['email'])); 
$fullnames = trim(stripslashes($_POST['fullnames']));
$username = trim(stripslashes($_POST['username']));
$pwd = trim(stripslashes($_POST['pwd'])); 
$idno = trim(stripslashes($_POST['idno'])); 
$phoneno = trim(stripslashes($_POST['phoneno']));
$status = "N"; 
$datecreated = date('d-m-Y H:i:s');  
 
//validate
$error_message = "";
if(empty($email)) 
{
$error_message .= 'Please enter Email.<br />'; 
}
if(empty($fullnames)) 
{
$error_message .= 'Please enter Full Names i.e First Name, Last Name and Surname.<br />'; 
}
if(empty($username)) 
{
$error_message .= 'Please enter UserName.<br />'; 
}
if(empty($pwd)) 
{
$error_message .= 'Please enter Password.<br />'; 
}
if(strlen($pwd) < 6) 
{
$error_message .= 'Password must be 6 or more characters.<br />';
}
if(empty($idno)) 
{
$error_message .= 'Please enter National Identity Number or Pasport Number.<br />'; 
}
if(empty($phoneno)) 
{
$error_message .= 'Please enter Phone Number.<br />'; 
}


if(strlen($error_message) > 0) 
{
die($error_message);
}
  
// validation succeded. Insert data
//performs an INSERT query by substituting a name and a value for the positional ? placeholders.
$sql_insert = "INSERT INTO kdUsers(Email, FullNames, UserName, PassWord, IdNo, PhoneNo, Status, DateCreated) VALUES (?,?,?,?,?,?,?,?)";
$stmt = $conn->prepare($sql_insert);
$stmt->bindValue(1, $email);
$stmt->bindValue(2, $fullnames);
$stmt->bindValue(3, $username);
$stmt->bindValue(4, $pwd);
$stmt->bindValue(5, $idno);
$stmt->bindValue(6, $phoneno);
$stmt->bindValue(7, $status);
$stmt->bindValue(8, $datecreated);
$stmt->execute(); 
     
$stmt->closeCursor();

}
catch(Exception $e) 
{
die($e);
} 

header("Location: kdLogin.php");

?>
