<?php
ob_start();
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include "../includes/db.php";

if (!empty($_POST["profit_ratio"]) && !empty($_POST['profit_ratio_date'])) {
    $ratio = $_POST['profit_ratio'];
    $date = $_POST['profit_ratio_date'];
    echo $ratio . " " . $date;
    $query = "INSERT INTO `profit_ratio`(`title`, `start`) VALUES ('$ratio','$date')";
    $q_res = mysqli_query($con, $query);
    if (!$q_res) {
        die("query failed " . mysqli_error($con));
    }
    $_SESSION['success_message'] = 'Data entered successfully.';
} elseif (empty($_POST["profit_ratio"]) || empty($_POST['profit_ratio_date'])) {
    echo "no";
    $_SESSION['warning_message'] = 'All fields are required, please fill all fields.';
}
