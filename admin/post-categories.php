<?php include "../includes/db.php"; ?>
<?php $currentPage="post-categories"; ?>
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
||-------------------------||
||--CREATING THE NEW POST--||
||-------------------------||
-->
<?php
    if(isset($_POST['create'])){
        $category=$_POST['category'];
        if($category){    
            $query="INSERT INTO `post_category`(`category`) VALUES ('$category')";
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

<div class="container">
    <div class="row py-5">
        <div class="col col-6 offset-3">
            <form action="post-categories.php" method="post">
                <div class="form-group">
                    <label for="category">Add new category:</label>
                    <input type="text" class="form-control form-control-sm" name="category" id="category" required>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" name="create" value="Create category">
                </div>
            </form>
        </div>
    </div>
    
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Categories</th>
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
                $query="SELECT * FROM `post_category`";
                $q_res=mysqli_query($con,$query);
                if(!$q_res){
                    die("query failed ".mysqli_error($con));
                }
                while($row=mysqli_fetch_assoc($q_res)){
                $id=$row['id'];
                $category=$row['category'];
                    echo "<tr>";
                    echo "<td>$category</td>";
                    echo "<td><a href='edit-post-category.php?edit=$id'><i style='color:skyblue;' class='fa fa-edit mr-2'></i></a></td>";
                    echo "<td><a href='delete-post-category.php?delete=$id'><i style='color:red;' class='fa fa-times mr-2'></i></a></td>";
                    echo "</tr>";

                }
            ?>
        </tbody>
    </table>
</div>


<?php include "includes/footer.php"; ?>