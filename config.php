<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "root";
$db_name = "ggf";

try {
    //create PDO connection
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    //show error
    die("Bad Connection: " . $e->getMessage());
}
