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
<?php include "includes/header.php"; ?>

<!--
||-------------------------||
||--DELETING THE NEW POST--||
||-------------------------||
-->
<?php
    if(isset($_POST['delete'])){
        $delete_id=$_GET['delete'];
//        $query="DELETE * FROM `posts` WHERE `id`='$delete_id'";
        $query="DELETE FROM `posts` WHERE `id`='$delete_id'";
        $q_res=mysqli_query($con,$query);
        if(!$q_res){
            die("query failed ".mysqli_error($con));
        }else{
            header("Location: posts.php");
        }
    }
?>


<div class="container py-5">
<div class="d-flex justify-content-between mb-5">    
<h4>All posts in database↓</h4>
<a href="add-post.php" class="btn btn-primary d-flex align-items-center"><i class="fa fa-plus mr-2"></i>CREATE NEW POST</a>
</div>
    
<table class="table table-striped" style="width:100%;">
        <thead>
            <tr>
                <th>Title</th>
                <th>Image</th>
                <th>Data</th>
                <th>Category</th>
                <th>Author</th>
                <th>Conetent</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
           <!--
            ||BRINGING ALL THE POSTS IN TABLE||
            -->
            <?php
                $delete_id=$_GET['delete'];
                //    showing current values
                $query="SELECT * FROM `posts` WHERE `id`='$delete_id'";
                $q_res=mysqli_query($con,$query);
                if(!$q_res){
                    die("query failed ".mysqli_error($con));
                }
                $row=mysqli_fetch_assoc($q_res);
                $id=$row['id'];
                $title=$row['title'];
                $content=$row['content'];
                $content=substr($content,0,30)."...";
                $img_name=$row['img_name'];
                $date=$row['date'];
                $category=$row['category'];
                $author=$row['author'];
                    echo "<tr>";
                    echo "<td>$title</td>";
                    echo "<td><img style='width:150px;' src='../assets/img/$img_name' alt='post_image'></td>";
                    echo "<td>$date</td>";
                    echo "<td>$category</td>";
                    echo "<td>$author</td>";
                    echo "<td>$content</td>";
                    echo "<td><a href='edit-post.php?edit=$id'><i style='color:skyblue;' class='fa fa-edit mr-2'></i></a></td>";
                    echo "</tr>";

                
            ?>
        </tbody>
    </table>
    
    
    <h4>Do really want to delete this post?</h4>
    <form action="#" method="post">
        <div class="input-group">
            <a href="posts.php" class="btn" style="background-color:#6c757d;"><i class="fa fa-chevron-left mr-2"></i>Back</a>
            <input type="submit" class="btn ml-3" name="delete" style="background-color:red; font-weight:bolder;" value="Delete">
        </div>
    </form>
    
</div>





<?php include "includes/footer.php"; ?>