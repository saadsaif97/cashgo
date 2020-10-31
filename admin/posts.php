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
<div class="d-flex justify-content-between mb-5">    
<h4>All posts in database↓</h4>
<a href="add-post.php" class="btn btn-primary d-flex align-items-center"><i class="fa fa-plus mr-2"></i>CREATE NEW POST</a>
</div>
    
<table id="posts" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%;">
        <thead>
            <tr>
                <th>Title</th>
                <th>Image</th>
                <th>Data</th>
                <th>Category</th>
                <th>Author</th>
                <th>Conetent</th>
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
                $query="SELECT * FROM `posts`";
                $q_res=mysqli_query($con,$query);
                if(!$q_res){
                    die("query failed ".mysqli_error($con));
                }
                while($row=mysqli_fetch_assoc($q_res)){
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
                    echo "<td><a href='delete-post.php?delete=$id'><i style='color:red;' class='fa fa-times mr-2'></i></a></td>";
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