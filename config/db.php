<?php
$servername = "database";
$username = "root";
$password = "root";
$dbname = "future_academy";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
}
catch (PDOException $e) {
}
?>
