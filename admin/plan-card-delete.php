<?php ob_start(); ?>
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
   
<!--           FETCHING THE PLAN CARD TO BE DELETED-->
            <?php
                    $delete_id=$_GET['delete'];
                    $query="SELECT * FROM `plan_card` WHERE `id`='$delete_id'";
                    $q_res=mysqli_query($con,$query);
                    if(!$q_res){
                        die("query failed ".mysqli_error($con));
                    }
                    $row=mysqli_fetch_assoc($q_res);
                    $title=$row['title'];
                    $content=$row['content'];
                    $my_rows=$row['my_rows'];
                ?>
                
                <div class="plan_card" data-aos="fade" data-aos-delay="600">
                    <div>
                        <img src="assets/img/gallery2.jpg" style="width: 100%;height: auto;">
                    </div>
                    <div class="plan_card_body" style="padding: 20px 15px;">
                        <h4 style="font-weight:bolder;"><?php echo $title; ?></h4>
                        <p style="color: #666666;margin: 10px 0;font-size: 14px; text-align:left; font-weight:normal;"><?php echo $content; ?></p>
                        <h5 style="font-weight:bolder;">Referal Bonuses:</h5>
                        <table class="plan_table">
                            <tr>
                                <th>Investment Bonus</th>
                                <th>Profit Bonus</th>
                            </tr>
                            <?php echo $my_rows; ?>
                        </table>
                    </div>
                </div>
<!--           FETCHING THE PLAN CARD TO BE DELETED-->
   
   <hr>
   <h3>Do you really want to delete the plan card row above?</h3>
   <hr>
        <form action="#" method="post" style="width:100%;">
            
            <div class="form-group">
                <a href="plan-cards.php" class="btn" style="background-color:gray;">Back</a>
                <input type="submit" class="btn" style="background-color:orangered;" name="delete" value="delete the card row">
            </div>
            
        </form>
    </div>
  </div>
</div>

<?php 
    if(isset($_POST['delete'])){
        $delete_id=$_GET['delete'];
        
        $query="DELETE FROM `plan_card ` WHERE `id`='$delete_id'";
        $q_res=mysqli_query($con,$query);
        if(!$q_res){
            die("query failed ".mysqli_error($con));
        }else{
            header("Location: plan-cards.php");
        }
        
    }
?>


<?php include "includes/footer.php"; ?>