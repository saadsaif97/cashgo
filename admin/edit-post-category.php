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
    $edit_id=$_GET['edit'];
    if(isset($_POST['update'])){
        $category=$_POST['category'];
        if($category){    
            $query="UPDATE `post_category` SET `category`='$category' WHERE `id`='$edit_id'";
            $q_res=mysqli_query($con,$query);
            if(!$q_res){
                die("query failed ".mysqli_error($con));
            }else{
            header("Location: post-categories.php");
            }
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
    if(isset($_GET['edit'])){
    $edit_id=$_GET['edit'];
    $query="SELECT * FROM `post_category` WHERE `id`='$edit_id'";
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
            <form action="#" method="post">
                <div class="form-group">
                    <label for="category">Category:</label>
                    <input type="text" class="form-control form-control-sm" name="category" id="category" value="<?php echo $category; ?>" required>
                </div>
                <div class="form-group">
                    <a href="post-categories.php" class="btn" style="background-color:#6c757d;"><i class="fa fa-chevron-left mr-2"></i>Back</a>
                    <input type="submit" class="btn btn-info" name="update" value="Update">
                </div>
            </form>
        </div>
    </div>
</div>

<?php 
    }
?>


<?php include "includes/footer.php"; ?>