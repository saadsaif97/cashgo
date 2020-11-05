<?php include "../includes/db.php"; ?>
<?php $currentPage="planCards"; ?>
<!--bringing the current logo-->
<?php
    //    showing current values
    $query="SELECT * FROM `home`";
    $q_res=mysqli_query($con,$query);
    if(!$q_res){
        die("query failed ".mysqli_error($con));
    }
    $row=mysqli_fetch_assoc($q_res);   
    $currentLogo=$row['logo'];
?>
<?php include "includes/header.php"; ?>





<div class="container py-5">
<div class="d-flex justify-content-between mb-5">    
<h4>All posts in database↓</h4>
<a href="add-post.php" class="btn btn-primary d-flex align-items-center"><i class="fa fa-plus mr-2"></i>CREATE NEW POST</a>
</div>
    
<table id="posts" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%;">
        <thead>
            <tr>
                <th>Plan Title</th>
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
                $query="SELECT * FROM `plan_card_rows`";
                $q_res=mysqli_query($con,$query);
                if(!$q_res){
                    die("query failed ".mysqli_error($con));
                }
                while($row=mysqli_fetch_assoc($q_res)){
                $plan_card_id=$row['plan_card_id'];
                $content=$row['content'];
                $content=htmlspecialchars_decode($content);
                    
                    $plan_card_query="SELECT * FROM `plan_card` WHERE `id`='$plan_card_id'";
                    $plan_card_q_res=mysqli_query($con,$plan_card_query);
                    if(!$plan_card_q_res){
                        die("query failed ".mysqli_error($con));
                    }
                    $plan_card=mysqli_fetch_assoc($plan_card_q_res);
                    $plan_card_title=$plan_card['title'];
                    
                    echo "<tr>";
                    echo "<td>$plan_card_title</td>";
                    echo "$content";
                    echo "<td><a href=''><i style='color:skyblue;' class='fa fa-edit mr-2'></i></a></td>";
                    echo "<td><a href=''><i style='color:red;' class='fa fa-times mr-2'></i></a></td>";
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
    <script>$(document).ready(function() {$('#posts').DataTable();});</script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>


<?php include "includes/footer.php"; ?>