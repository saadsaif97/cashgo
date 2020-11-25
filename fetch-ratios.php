<?php
ob_start();
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include "includes/db.php";


$query = "SELECT `title`,`start` from `profit_ratio`";
$q_res = mysqli_query($con, $query);
if (!$q_res) {
    die("query failed " . mysqli_error($con));
}
?>
<script>
    let myEvents = [];
</script>
<?php
while ($row = mysqli_fetch_assoc($q_res)) {
?>
    <script>
        myEvents.push({
            title: '<?php echo $row["title"] ?>',
            start: '<?php echo $row["start"] ?>'
        })
    </script>
<?php
}
?>