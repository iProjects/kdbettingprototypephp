<?php

// DB connection info
$host = "sapserver\sqlexpress";
$user = "sa";
$pwd = "sa";
$db = "kdbettingdb";


if(!empty($_POST)) 
{
try 
{

$conn = new PDO( "sqlsrv:Server= $host ; Database = $db ", $user, $pwd);
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION,PDO::ATTR_CASE, PDO::CASE_NATURAL );

$email = $_POST['email']; 
$fullnames = $_POST['fullnames']; 
$idno = $_POST['idno']; 
$phoneno= $_POST['phoneno'];
$pwd = $_POST['pwd']; 
$datecreated = $_POST['datecreated']; 
$username= $_POST['username'];

// Insert data
$sql_insert = "INSERT INTO kdUsers(Email, FullNames, IdNo, PhoneNo, PassWord, DateCreated, UserName) VALUES (?,?,?,?,?,getDate(),?)";
$stmt = $conn->prepare($sql_insert);
$stmt->bindValue(1, $email);
$stmt->bindValue(2, $fullnames);
$stmt->bindValue(3, $idno);
$stmt->bindValue(4, $phoneno);
$stmt->bindValue(5, $pwd);
$stmt->bindValue(6, $datecreated);
$stmt->bindValue(7, $username);
$stmt->execute();

}
catch(Exception $e) 
{
die(var_dump($e));
} 
}

?>
