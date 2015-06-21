<?php

$host = "sbserver-pc\sqlexpress";
$db = "kdbettingdb";
$user = "sa";
$pwd = "sa";
$msg = "";

try {

    $conn = new PDO("sqlsrv:Server=$host;Database =$db", $user, $pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($conn) {
        return $conn;
    } else {
        $msg = "connection failed...</br/>";
        $msg .= error_get_last();
        echo($msg);
        return $msg;
    }
} catch (Exception $e) {
    $errormsg .= $e->getMessage();
    if ($e->getTraceAsString() != NULL) {
        $errormsg .= "<br/>" . $e->getTraceAsString();
    }

    if (error_get_last() != NULL) {
        $errormsg .= "<br/>" . error_get_last();
    }

    $errormsg .= '<br/><input type="button" value="Back" onclick="window.history.go(-1); return false;" />';

    echo $errormsg;
}

function CloseConnection() {
    $conn = null;
}

?>
