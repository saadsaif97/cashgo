
<?php
ob_start();
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "cashgo_admin";

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$con) {
  die("database not connected " . mysqli_error($con));
}

?>