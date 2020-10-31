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
        $title=$_POST['title'];
        $content=$_POST['content'];
//      handling image
        $img_name=$_FILES["img"]["name"]; 

        //Get the content of the image and then add slashes to it 
        $imagetmp=$_FILES['img']['tmp_name'];
        
        move_uploaded_file($imagetmp, "../assets/img/$img_name");
//      ==========================================================
        $date=date('Y/m/d');
        $category=$_POST['category'];
        $author= "admin";
        if($title && $content && $img_name && $imagetmp && $category && $author){    
            $query="UPDATE `posts` SET `img_name`='$img_name',`title`='$title',`content`='$content',`category`='$category' WHERE `id`='$edit_id'";
            $q_res=mysqli_query($con,$query);
            if(!$q_res){
                die("query failed ".mysqli_error($con));
            }else{
            header("Location: posts.php");
            }
        }elseif ($title && $content && $category && $author){
            $query="UPDATE `posts` SET `title`='$title',`content`='$content',`category`='$category' WHERE `id`='$edit_id'";
            $q_res=mysqli_query($con,$query);
            if(!$q_res){
                die("query failed ".mysqli_error($con));
            }else{
            header("Location: posts.php");
            }
        }else{
            echo "some field is missing";
        }
    }
?>


<?php include "includes/header.php"; ?>
<!--
||------------------------||
||--READING THE OLD POST--||
||------------------------||
-->
<?php
    if(isset($_GET['edit'])){
    $edit_id=$_GET['edit'];
    $query="SELECT * FROM `posts` WHERE `id`='$edit_id'";
    $q_res=mysqli_query($con,$query);
    if(!$q_res){
        die("query failed ".mysqli_error($con));
    }
    $row=mysqli_fetch_assoc($q_res);
    $title=$row['title'];
    $content=$row['content'];
    $img_name=$row['img_name'];
    $date=$row['date'];
    $category=$row['category'];
?>
<div class="container">
    <div class="row py-5">
        <div class="col col-6 offset-3">
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control form-control-sm" name="title" id="title" value="<?php echo $title; ?>" required>
                </div>
                <div class="form-group">
                    <label for="content">Content:</label>
                    <input type="text" class="form-control form-control-sm" name="content" id="content" value="<?php echo $content; ?>" required>
                </div>
                <div class="form-group">
                    <label for="img"><img style="width:200px;" src="../assets/img/<?php echo $img_name; ?>" alt="current image">
                    <?php 
                        if(isset($img_name)){
                            echo "<p>$img_name</p>";
                        }
                    ?>
                    </label>
                    
                    <input type="file" name="img" id="img" style="display:none;" class="form-control form-control-sm" value="<?php echo $date; ?>">
                </div>
                <div class="form-group">
                    <label for="category">Catergory:</label>
                    <select name="category" id="category" class="form-control form-control-sm" required>
                        <!--
                        ||BRINGING ALL THE POSTS IN TABLE||
                        -->
                        <?php
                            //    showing current values
                            $query="SELECT * FROM `post_category`";
                            $q_res=mysqli_query($con,$query);
                            if(!$q_res){
                                die("query failed ".mysqli_error($con));
                            }
                            while($row=mysqli_fetch_assoc($q_res)){
                            $category=$row['category'];
                                echo "<option value='$category'>$category</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <a href="posts.php" class="btn" style="background-color:#6c757d;"><i class="fa fa-chevron-left mr-2"></i>Back</a>
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