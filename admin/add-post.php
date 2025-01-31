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
<!--
||-------------------------||
||--CREATING THE NEW POST--||
||-------------------------||
-->
<?php
    if(isset($_POST['create'])){
        $title=$_POST['title'];
        $title=preg_replace('/<[h123456p*\/]*>/','',$title);
        $title=mysqli_real_escape_string($con,$title);
        $content=$_POST['content'];
        $content=preg_replace('/<[h123456p*\/]*>/','',$content);
        $content=mysqli_real_escape_string($con,$content);
//      handling image
        $img_name=$_FILES["img"]["name"]; 
        $img_name=mysqli_real_escape_string($con,$img_name);

        //Get the content of the image and then add slashes to it 
        $imagetmp=$_FILES['img']['tmp_name'];

        move_uploaded_file($imagetmp, "../assets/img/$img_name");
//      ==========================================================
        $date=date('Y/m/d');
        $category=$_POST['category'];
        $author= "admin";
        if($title && $content && $img_name && $imagetmp && $date && $category && $author){    
            $query="INSERT INTO `posts`(`img_name`, `title`, `content`, `date`, `category`, `author`) VALUES ('$img_name','$title','$content','$date','$category','$author')";
            $q_res=mysqli_query($con,$query);
            if(!$q_res){
                die("query failed ".mysqli_error($con));
            }else{
                header("Location: posts.php");
            }
        }else{
            echo "<div class='alert alert-warning' role='alert'>
                  <strong>Please fill all the fields!</strong>
                </div>";
        }
    }
?>
<div class="container">
    <div class="row py-5">
        <div class="col col-6 offset-3">
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <textarea name="title" id="title" style="width:100%;" rows="10"><?php if(isset($title)){echo $title;};?></textarea>
                </div>
                <div class="form-group">
                    <label for="content">Content:</label>
                    <textarea name="content" id="content" style="width:100%;" rows="10"><?php if(isset($content)){echo $content;};?></textarea>
                </div>
                <div class="form-group">
                    <label for="img">Image:</label>
                    <input type="file" name="img" id="img" class="form-control form-control-sm" required>
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
                                echo "<option value='$category' >$category</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <a href="posts.php" class="btn" style="background-color:#6c757d;"><i class="fa fa-chevron-left mr-2"></i>Back</a>
                    <input type="submit" class="btn btn-primary" name="create" value="Create post">
                </div>
            </form>
        </div>
    </div>
</div>


<?php include "includes/footer.php"; ?>