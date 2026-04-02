<?php
$host = 'localhost';
$port = 3306;
$username = 'root';
$password = "";
$database = "koureiodb";

try{
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("Error: " . $e->getMessage());
}

?>