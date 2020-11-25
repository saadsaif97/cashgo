<?php
ob_start();
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include "../includes/db.php";

$del_id = $_GET['id'];

$query = "DELETE FROM `profit_ratio` WHERE `id`='$del_id'";
$q_res = mysqli_query($con, $query);
if (!$q_res) {
    die("query failed " . mysqli_error($con));
}
$_SESSION['success_message'] = 'Deleted successfully.';
header("location: profit-ratio.php");
