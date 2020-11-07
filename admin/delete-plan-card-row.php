<?php include "../includes/db.php"; ?>
<?php $currentPage="posts"; ?>
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
 
  <div class="row" style="align-items-center">   
   <div class="col col-8 offset-2">
   
           <!--
            ||BRINGING THE ROW TO BE EDITED||
            -->
            <?php
                $delete_id=$_GET['delete'];
                //    showing current values
                $query="SELECT * FROM `plan_card_rows` WHERE `id`='$delete_id'";
                $q_res=mysqli_query($con,$query);
                if(!$q_res){
                    die("query failed ".mysqli_error($con));
                }
                $row=mysqli_fetch_assoc($q_res);
                $currentContent=$row['content'];
                $currentContent=htmlspecialchars_decode($currentContent);
            ?>
   <div class="text-center">
       <table class="plan_table">
            <tr>
                <th>Investment Bonus</th>
                <th>Profit Bonus</th>
            </tr>
            <?php echo $currentContent; ?>
        </table>
   </div>
   <hr>
   <h3>Do you really want to delete the plan card row above?</h3>
   <hr>
        <form action="#" method="post" style="width:100%;">
            
            <div class="form-group">
                <a href="plan-card-rows.php" class="btn" style="background-color:gray;">Back</a>
                <input type="submit" class="btn" style="background-color:orangered;" name="delete" value="delete the card row">
            </div>
            
        </form>
    </div>
  </div>
</div>

<?php 
    if(isset($_POST['delete'])){
        $delete_id=$_GET['delete'];
        
        $query="DELETE FROM `plan_card` WHERE `id`='$delete_id'";
        $q_res=mysqli_query($con,$query);
        if(!$q_res){
            die("query failed ".mysqli_error($con));
        }else{
            header("Location: plan-card-rows.php");
        }
        
    }
?>


<?php include "includes/footer.php"; ?>