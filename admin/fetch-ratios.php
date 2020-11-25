<?php
ob_start();
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include "../includes/db.php";


$query = "SELECT * from `profit_ratio` ORDER BY `start` DESC";
$q_res = mysqli_query($con, $query);
if (!$q_res) {
    die("query failed " . mysqli_error($con));
}
echo "<table style='width: 300px;'> <tr> <th>Percentage</th> <th>Date</th> </tr>";
$myEvents = mysqli_fetch_all($q_res);
foreach ($myEvents as $key => $event) {
    echo "<tr> <td>$event[1]</td> <td>$event[2]</td> <td><i class='fa fa-times' onclick='myfun(event, $event[0] )' id='$event[1] on $event[2]' style='color: orangered; cursor:pointer;' data-toggle='modal' data-target='#deleteModal'></i></td> </tr>";
}
echo "</table>";

?>
<script>
    function myfun(e, b) {
        e = e || window.event;
        var target = e.target || e.srcElement;
        console.log(target.id);
        let d_ratio = document.querySelectorAll("#ratio");
        d_ratio[0].innerHTML = target.id;
        document.getElementById("del_form").action = `delete-ratio.php?id=${b}`;
    }
</script>