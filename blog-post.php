<?php
ob_start();
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<?php include "includes/db.php"; ?>
<?php $currentPage="blog"; ?>
<?php include "includes/header.php"; ?>


<body>
    <section class="text-left" style="display: block;background-image:linear-gradient(to bottom, rgb(29 36 127 / 50%) 0%, rgba(20,18,19,0.6) 90%, #141213 100% ), url(&quot;assets/img/top.jpg&quot;);filter: blur(0px) brightness(100%);width: 100%;height: 500px;">
        <?php include "includes/topNav.php"; ?>
        
<!--        flash message -->
        <?php
            if(isset($_SESSION['msg'])){
                echo "<div class='alert alert-success' role='alert'>
                        <strong>Your message has submitted successfully and will appear here after approval from the admin!</strong>
                    </div>";
        ?>
                <script>
                    setTimeout(function() {
                        let alert = document.querySelector(".alert");
                            alert.remove();
                    }, 5000);
                </script>
        <?php
                unset($_SESSION['msg']);
            }
        ?>
<!--        ==================-->
        
        
        <h1 class="text-center" data-aos="fade" data-aos-delay="50" id="small" style="font-weight: 600;color: rgb(255,255,255);font-size: 32px;font-family: Montserrat, sans-serif;height: 1px;margin-top: 110px;">BLOG</h1>
        <div class="container text-center" style="margin-top: 6rem;"><button class="btn " type="button" style="margin: 10px;background-color: #3aadaa;border: none;">HOME</button><button class="btn" type="button" style="margin: 10px;background-color: #98b446;border: none;">PAGES</button>
            <button
                class="btn" type="button" style="margin: 10px;background-color: #fd6420;border: none;">TIMETABLE</button>
        </div>
    </section>
    
<!--
||--------------------||
||--READING THE POST--||
||--------------------||
-->
<?php
    if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query="SELECT * FROM `posts` WHERE `id`='$id'";
    $q_res=mysqli_query($con,$query);
    if(!$q_res){
        die("query failed ".mysqli_error($con));
    }
    $row=mysqli_fetch_assoc($q_res);
    $title=$row['title'];
    $author=$row['author'];
    $content=$row['content'];
    $img_name=$row['img_name'];
    $date=$row['date'];
    $category=$row['category'];
    
?>
   
    
    <section id="news" style="width: 100%;height: auto;padding-top: 50px;padding-bottom: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12" data-aos="fade" data-aos-delay="600" style="margin-top: 1rem;margin-bottom: 1rem;">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div><img src="assets/img/<?php echo $img_name; ?>" style="width: 100%;height: auto;">
                            </div>
                            <div style="background-color: #98b446; display:flex; align-items:center; justify-content:space-between; padding: 15px 20px;">
                                <div style="font-family: Montserrat, sans-serif;">
                                    <p class="text-left" style="color: #fff; font-size: 32px; margin-bottom:0px;"><?php echo $title; ?></p>
                                </div>
                                <div ><a class="text-center" href="#" style="margin: 10px;margin-right: 5px;margin-left: 5px;"><i class="far fa-eye" style="color: rgb(255,255,255);font-size: 14px;"></i></a><a href="#" style="margin: 10px;margin-right: 5px;margin-left: 5px;"><i class="fas fa-star" style="color: rgb(251,251,251);font-size: 14px;"></i></a>
                                    <a
                                        href="#" style="margin: 10px;margin-right: 0;margin-left: 5px;"><i class="fas fa-share" style="color: rgb(255,255,255);font-size: 14px;"></i></a>
                                </div>
                            </div>
                            <div class="text-center border2" style="padding: 20px 15px;">
                                <div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="text-left" style="color: #98b446;font-size: 14px;font-family: Montserrat, sans-serif;font-weight: 500;"><?php echo $category; ?></p>
                                        </div>
                                        <div class="col">
                                            <p class="text-right" style="color: #98b446;font-size: 14px;font-family: Montserrat, sans-serif;font-weight: 500;"><?php echo $author.' | '.$date; ?></p>
                                        </div>
                                    </div>
                                    <p style="text-align:left; font-weight:normal;">
                                    <?php echo $content; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    }
    ?>
    <!--
                ||BRINGING LATEST POSTS||
                -->
                <?php
                    //    showing current values
//                    $query="SELECT * FROM `posts`";
                    $query="SELECT * FROM (SELECT * FROM `posts` ORDER BY id DESC LIMIT 3) as r ORDER BY id DESC";
                    $q_res=mysqli_query($con,$query);
                    if(!$q_res){
                        die("query failed ".mysqli_error($con));
                    }
                    while($row=mysqli_fetch_assoc($q_res)){
                    $id=$row['id'];
                    $title=$row['title'];
                    $content=$row['content'];
                    $content=substr($content,0,300)."...";
                    $img_name=$row['img_name'];
                    $date=$row['date'];
                    $category=$row['category'];
                    $author=$row['author'];
                ?>

    <div id="empresa" style="padding:20px;margin:1px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-5 col-lg-5"><img src="assets/img/<?php echo $img_name; ?>"></div>
                <div class="col-sm-6 col-md-7 col-lg-7">
                    <h1 style="color: #002632;font-family: Montserrat, sans-serif;font-weight: 500;font-size: 24px;">
                        <strong><?php echo $title; ?></strong>
                        <br></h1>
                        <span style="color: #ff0000;font-size: 12px;font-weight: 300;"><?php echo $author; ?><br>
                        </span>
                    <p class="text-left" style="font-size: 14px;color: #666666;font-weight: 300;font-family: Montserrat, sans-serif;"><br><?php echo $content; ?><br></p>
                    <a href="blog-post.php?id=<?php echo $id; ?>" style="color: blue;">Read more</a>
                </div>
            </div>
        </div>
    </div>
    
<?php
} if(isset($_GET['id'])){
?>
<!-------------------------->
<!--COMMENT SECTION STARTS-->
<!-------------------------->
    <hr>
    
    <div class="container">
    <h4 style="font-weight:bolder;">Comments:</h4>
	
	<div class="card">
	    <div class="card-body">
                <!--
                ||BRINGING COMMENTS||
                -->
                <?php
                    $id=$_GET['id'];
//                    $query="SELECT * FROM `posts`";
                    $query="SELECT * FROM `post_comments` WHERE `post_id`='$id' AND `status`='1'";
                    $q_res=mysqli_query($con,$query);
                    if(!$q_res){
                        die("query failed ".mysqli_error($con));
                    }
                    
                    if(mysqli_num_rows($q_res) == 0){
                        echo "This post has no approved comment";
                    }else{
                    while($row=mysqli_fetch_assoc($q_res)){
                    $id=$row['id'];
                    $comment=$row['comment'];
                    $cmnt_author=$row['cmnt_author'];
                    $time_stamp=$row['time_stamp'];
                    
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
                    ?>
                <div class="media border p-3">
                  <img src="https://image.ibb.co/jw55Ex/def_face.jpg" alt="<?php echo $cmnt_author; ?>" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                  <div class="media-body">
                    <h4><span style="font-weight:bolder;"><?php echo $cmnt_author; ?></span> <small><i><?php echo $strTimeAgo; ?></i></small></h4>
                    <p style="text-align:left; font-weight:normal;"><?php echo $comment; ?></p>
                  </div>
                </div>

                <?php
                    }//while
                    }//while cover
                ?>

	    </div>
	</div>
	
	<div class="card">
	    <div class="card-body">
<?php
        if(isset($_SESSION['logged_in'])){
?>
<!--	FORM TO ADD COMMENTS-->
   <?php $post_id=$_GET['id']; ?>
	<form action="blog-post.php?id=<?php echo $post_id; ?>" id="commentBox" method="post">
        <h5 style="font-weight:bolder;">Add new comment:</h5>
	    <div class="form-group">
	        <textarea name="comment" id="comment" class="form-control" placeholder="comment" rows="5" required></textarea>
	    </div>
	    <div class="form-group">
	        <input type="submit" name="add_comment" style="width:auto;" class="btn btn-primary" value="Comment">
	    </div>
	</form>     
  
<?php         
        }else{
            echo "You can only comment when logged in";
        }
?>
       </div>
    </div>
</div>
  

<?php
//    comments rendring end if
}
?>
<?php
    if(isset($_POST['add_comment'])){
        $post_id=$_GET['id'];
        $comment=$_POST['comment'];
        $cmnt_author=$_SESSION['username'];
        $comment_add_query="INSERT INTO `post_comments`(`post_id`, `comment`, `cmnt_author`) VALUES ('$post_id','$comment','$cmnt_author')";
        $comment_add_res=mysqli_query($con,$comment_add_query);
        if(!$comment_add_res){
            die("query failed ".mysqli_error($con));
        }else{
            $_SESSION['msg']='render the content';
        }
    } 
?>
   
<!------------------------>
<!--COMMENT SECTION ENDS-->
<!------------------------>
    <div class="footer-basic" style="background-color: #002632;">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram" style="color: rgb(255,255,255);"></i></a><a href="#"><i class="icon ion-social-google" style="color: rgb(255,255,255);"></i></a><a href="#"><i class="icon ion-social-twitter" style="color: rgb(255,255,255);"></i></a>
                <a
                    href="#"><i class="icon ion-social-facebook" style="color: rgb(255,255,255);"></i></a>
            </div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#" style="color: rgb(255,255,255);">Home</a></li>
                <li class="list-inline-item"><a href="#" style="color: rgb(255,255,255);">Services</a></li>
                <li class="list-inline-item"><a href="#" style="color: rgb(255,255,255);">About</a></li>
                <li class="list-inline-item"><a href="#" style="color: rgb(255,255,255);">Terms</a></li>
                <li class="list-inline-item"><a href="#" style="color: rgb(255,255,255);">Privacy Policy</a></li>
            </ul>
            <p class="copyright">CashGo © 2020</p>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="assets/js/--mp--Animated-progress-bar-in-viewport-1.js"></script>
    <script src="assets/js/--mp--Animated-progress-bar-in-viewport.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/Contact-FormModal-Contact-Form-with-Google-Map.js"></script>
    <script src="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.js"></script>
    <script src="assets/js/NENIT_Toggle.js"></script>
    <script src="assets/js/Testimonial-Slider-9.js"></script>
    <script src="assets/js/testimonialSlider.js"></script>
    <script src="assets/js/Timer-darkknight145.js"></script>
    

</body>

</html>