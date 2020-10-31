<?php include "../includes/db.php"; ?>
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
<!--
||---------------------||
||--UPDATING THE POST--||
||---------------------||
-->
<?php
    $delete_id=$_GET['delete'];
    if(isset($_POST['delete'])){  
        $query="DELETE FROM `post_category` WHERE `id`='$delete_id'";
        $q_res=mysqli_query($con,$query);
        if(!$q_res){
            die("query failed ".mysqli_error($con));
        }else{
        header("Location: post-categories.php");
        }
    }
?>


<?php include "includes/header.php"; ?>
<!--
||---------------------------------||
||--READING THE OLD POST CATEGORY--||
||---------------------------------||
-->
<?php
    if(isset($_GET['delete'])){
    $delete_id=$_GET['delete'];
    $query="SELECT * FROM `post_category` WHERE `id`='$delete_id'";
    $q_res=mysqli_query($con,$query);
    if(!$q_res){
        die("query failed ".mysqli_error($con));
    }
    $row=mysqli_fetch_assoc($q_res);
    $category=$row['category'];
?>
<div class="container">
    <div class="row py-5">
        <div class="col col-6 offset-3">
           <h3><?php echo $category; ?></h3>
            <h4>Do really want to delete this post category?</h4>
            <form action="#" method="post">
                <div class="input-group">
                    <a href="post-categories.php" class="btn" style="background-color:#6c757d;"><i class="fa fa-chevron-left mr-2"></i>Back</a>
                    <input type="submit" class="btn ml-3" name="delete" style="background-color:red; font-weight:bolder;" value="Delete">
                </div>
            </form>
        </div>
    </div>
</div>

<?php 
    }
?>


<?php include "includes/footer.php"; ?>