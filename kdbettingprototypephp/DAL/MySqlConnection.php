
<?php

session_start();
//if you are not logged in redirect to login page.
//if (!(isset($_SESSION['logincookie'])) || $_SESSION['logincookie'] != "true")
//{ 
//$_SESSION['logincookie'] = "false";
//header('Location: kdLogin.php');
//}
// DB connection info
$host = "localhost:3306";
$port = "3306";
$user = "root";
$pwd = "Pass12345";
$db = "kdbettingdb";
//
//try 
//{
//$conn = new PDO( "mysql:host=$host; Database = $db ", $user, $pwd);
//if (!$conn) {
//    die(var_dump('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error())); 
//}else{
//    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION,PDO::ATTR_CASE, PDO::CASE_NATURAL );
//   //echo('Connection established host= [' . $host . '] ' . $pwd);   
//   $sql_select = "SELECT * FROM kdbets ORDER BY Id ASC"; 
//   echo($sql_select);
//$search_result = mysql_query($sql_select, $conn);
//echo($search_result);
//}
//
//}
//catch(Exception $e) 
//{
//die(var_dump($e));
//}


try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM kdbets ORDER BY Id ASC");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach (new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
        echo $v->Description;
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>
 