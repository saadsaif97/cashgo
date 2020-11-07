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
                $edit_id=$_GET['edit'];
                //    showing current values
                $query="SELECT * FROM `plan_card_rows` WHERE `id`='$edit_id'";
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
   <h3>Edit the plan card row:</h3>
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
               <a href="plan-card-rows.php" class="btn" style="background-color:gray;">Back</a>
               <input type="submit" class="btn btn-primary" name="update" value="Update the card row">
            </div>
            
        </form>
    </div>
  </div>
</div>

<?php 
    if(isset($_POST['update'])){
        $edit_id=$_GET['edit'];
        
        $i_bonus=$_POST['investment-bonus'];
        $i_percent=$_POST['investment-percent'];
        $p_bonus=$_POST['profit-bonus'];
        $p_percent=$_POST['profit-percent'];
        
        
        
        
        if($i_bonus && $i_percent && $p_bonus && $p_percent){   
            $content= '<td> '.$i_bonus." <span>$i_percent%</span> ".' </td>'.
             '<td> '.$p_bonus." <span>$p_percent%</span>".' </td>';
            $content=htmlspecialchars($content);
            $query="UPDATE `plan_card_rows` SET `content`='$content' WHERE `id`='$edit_id'";
            $q_res=mysqli_query($con,$query);
            if(!$q_res){
                die("query failed ".mysqli_error($con));
            }else{
                header("Location: plan-card-rows.php");
            }
        }else{
            echo "<div class='alert alert-warning' role='alert'>
                  <strong>Please fill all the fields!</strong>
                </div>";
        }
    }
?>


<?php include "includes/footer.php"; ?>