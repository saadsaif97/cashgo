<?php

$db_servername = 'localhost';
$db_username = 'root';
$db_password = '';

try {
    $plan_db = new PDO("mysql:host={$db_servername};dbname=cashgo_admin", $db_username, $db_password);
    // set the PDO error mode to exception
    $plan_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $all_plans = $plan_db->query("SELECT * FROM `plan_card` ")->fetchAll(PDO::FETCH_ASSOC);
    $plan_db = null;
} catch (PDOException $e) {
    echo 'Connection failed: '.$e->getMessage();
}
