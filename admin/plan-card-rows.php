<?php include "../includes/db.php"; ?>
<?php $currentPage = "planCardRow"; ?>
<!--bringing the current logo-->
<?php
//    showing current values
$query = "SELECT * FROM `home`";
$q_res = mysqli_query($con, $query);
if (!$q_res) {
    die("query failed " . mysqli_error($con));
}
$row = mysqli_fetch_assoc($q_res);
$currentLogo = $row['logo'];
?>
<!------------------------------>
<!--CREATING THE NEW PLAN CARD-->
<!------------------------------>
<?php
if (isset($_POST['submit'])) {
    $i_bonus = $_POST['investment-bonus'];
    $i_percent = $_POST['investment-percent'];
    $p_bonus = $_POST['profit-bonus'];
    $p_percent = $_POST['profit-percent'];




    if ($i_bonus  && $p_bonus) {
        $content = '<td> ' . $i_bonus . " <span>$i_percent%</span> " . ' </td>' .
            '<td> ' . $p_bonus . " <span>$p_percent%</span>" . ' </td>';
        $content = htmlspecialchars($content);
        $query = "INSERT INTO `plan_card_rows`(`content`) VALUES ('$content')";
        $q_res = mysqli_query($con, $query);
        if (!$q_res) {
            die("query failed " . mysqli_error($con));
        } else {
            header("Location: plan-card-rows.php");
        }
    } else {
        echo "<div class='alert alert-warning' role='alert'>
                  <strong>Please fill all the fields!</strong>
                </div>";
    }
}
?>


<?php include "includes/header.php"; ?>


<div class="container py-5">
    <div class="row" style="align-items-center">
        <div class="col col-8 offset-2">
            <h4>Create card row:</h4>
            <hr>
            <form action="#" method="post" style="width:100%;">

                <div class="form-group">
                    <div class="input-group justify-content-between">
                        <div class="input-group-prepend">
                            <input class="input-group-text" name="investment-bonus" placeholder="investment bonus" required>
                            <input class="input-group-text" name="investment-percent" style="max-width:80px;" placeholder="percent" required>
                            <span class="input-group-text">%</span>
                        </div>
                        <div class="input-group-append">
                            <input class="input-group-text" name="profit-bonus" placeholder="profit bonus" required>
                            <input class="input-group-text" name="profit-percent" style="max-width:80px;" placeholder="percent" required>
                            <span class="input-group-text">%</span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" name="submit" value="Add a new row in list">
                </div>

            </form>
        </div>
    </div>
</div>




<!-------------------------->
<!--SHOWING THE PLAN CARDS-->
<!-------------------------->

<div class="container py-5">
    <div class="d-flex justify-content-between mb-5">
        <h4>All plan card rows↓</h4>
    </div>

    <table id="posts" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%;">
        <thead>
            <tr>
                <th>Investment</th>
                <th>Profit</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <!--
            ||BRINGING ALL THE POSTS IN TABLE||
            -->
            <?php
            //    showing current values
            $query = "SELECT * FROM `plan_card_rows`";
            $q_res = mysqli_query($con, $query);
            if (!$q_res) {
                die("query failed " . mysqli_error($con));
            }
            while ($row = mysqli_fetch_assoc($q_res)) {
                $id = $row['id'];
                $content = $row['content'];
                $content = htmlspecialchars_decode($content);
                echo "<tr>";
                echo "$content";
                echo "<td><a href='edit-plan-card-row.php?edit=$id'><i style='color:skyblue;' class='fa fa-edit mr-2'></i></a></td>";
                echo "<td><a href='delete-plan-card-row.php?delete=$id'><i style='color:red;' class='fa fa-times mr-2'></i></a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</div>














<!--
||---------------------||
||LINKING DATA TABLE JS||
||---------------------||
-->
<script>
    $(document).ready(function() {
        $('#posts').DataTable();
    });
</script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>


<?php include "includes/footer.php"; ?>