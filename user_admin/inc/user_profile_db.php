<?php

// ob_start();
// session_start();

$db_servername = 'localhost';
$db_username = 'root';
$db_password = '';

try {
    $pdo = new PDO("mysql:host={$db_servername};dbname=cashgo_user", $db_username, $db_password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: '.$e->getMessage();
}
