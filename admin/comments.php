<?php include "../includes/db.php"; ?>
<?php ob_start(); ?>
<?php $currentPage="comments"; ?>
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
                <th>post_id</th>
                <th>Comment</th>
                <th>Status</th>
                <th>Time</th>
                <th>Author</th>
                <th>Edit Status</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
           <!--
            ||BRINGING ALL THE POSTS IN TABLE||
            -->
            <?php
                //    showing current values
                $query="SELECT * FROM `post_comments`";
                $q_res=mysqli_query($con,$query);
                if(!$q_res){
                    die("query failed ".mysqli_error($con));
                }
                while($row=mysqli_fetch_assoc($q_res)){
                $id=$row['id'];
                $post_id=$row['post_id'];
                $comment=$row['comment'];
                $status=$row['status'];
                    $status= ($status==0)?'Disapproved':'Approved';
                    $status_color= ($status=='Disapproved')?'red':'green';
                $time_stamp=$row['time_stamp'];
                $author=$row['cmnt_author'];
                    
//                  making the time stamp legible
                    if(!function_exists('timeago')){
                        function timeago($date) {
                           $timestamp = strtotime($date);	

                           $strTime = array("second", "minute", "hour", "day", "month", "year");
                           $length = array("60","60","24","30","12","10");

                           $currentTime = time();
                           if($currentTime >= $timestamp) {
                                $diff     = time()- $timestamp;
                                for($i = 0; $diff >= $length[$i] && $i < count($length)-1; $i++) {
                                $diff = $diff / $length[$i];
                                }

                                $diff = round($diff);
                                return $diff . " " . $strTime[$i] . "(s) ago ";
                           }
                        }
                    }
                    
                    $strTimeAgo=timeago($time_stamp);
//                  ==============================
//                  GETTING POST STATUS
                    $post_query="SELECT * FROM `posts` WHERE `id`='$post_id'";
                    $post_q_res=mysqli_query($con,$post_query);
                    if(!$post_q_res){
                        die("query failed ".mysqli_error($con));
                    }
                    $post=mysqli_fetch_assoc($post_q_res);
                    $post_title=$post['title'];
//                  ====================
                
                    echo "<tr>";
                        echo "<td>$post_title</td>";
                        echo "<td>$comment</td>";
                        echo "<td style='color:$status_color;'>$status</td>";
                        echo "<td>$strTimeAgo</td>";
                        echo "<td>$author</td>";
                        echo "<td><a href='comments.php?approve=$id'>Approve</a> | <a href='comments.php?disapprove=$id'>Disapprove</a></td>";
                        echo "<td><a href='comments.php?delete=$id'><i style='color:red;' class='fa fa-times mr-2'></i></a></td>";
                    echo "</tr>";
                    
                }
            ?>
        </tbody>
    </table>
    
</div>

<?php
//    APPROVING THE COMMENT
    if(isset($_GET['approve'])){
        $approve_id=$_GET['approve'];
        $comment_approve_query="UPDATE `post_comments` SET `status`='1' WHERE `id`='$approve_id'";
        $approve_q_res=mysqli_query($con,$comment_approve_query);
        if(!$approve_q_res){
            die("query failed ".mysqli_error($con));
        }
        header("Location: comments.php");
    }
?>


<?php
//    DISAPPROVING THE COMMENT
    if(isset($_GET['disapprove'])){
        $disapprove_id=$_GET['disapprove'];
        $comment_disapprove_query="UPDATE `post_comments` SET `status`='0' WHERE `id`='$disapprove_id'";
        $disapprove_q_res=mysqli_query($con,$comment_disapprove_query);
        if(!$disapprove_q_res){
            die("query failed ".mysqli_error($con));
        }
        header("Location: comments.php");
    }
?>

<?php
//    DELETING THE COMMENT
    if(isset($_GET['delete'])){
        $delete_id=$_GET['delete'];
        $comment_delete_query="DELETE FROM `post_comments` WHERE `id`='$delete_id'";
        $delete_q_res=mysqli_query($con,$comment_delete_query);
        if(!$delete_q_res){
            die("query failed ".mysqli_error($con));
        }
        header("Location: comments.php");
    }
?>










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