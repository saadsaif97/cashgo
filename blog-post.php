<?php
ob_start();
if (!isset($_SESSION)) {
    session_start();
}
?>
<?php include "includes/db.php"; ?>
<?php $currentPage = "blog"; ?>
<?php include "includes/header.php"; ?>


<body>
    <section class="text-left" style="display: block;background-image:linear-gradient(to bottom, rgb(29 36 127 / 50%) 0%, rgba(20,18,19,0.6) 90%, #141213 100% ), url(&quot;assets/img/top.jpg&quot;);filter: blur(0px) brightness(100%);width: 100%;height: 500px;">
        <?php include "includes/topNav.php"; ?>


        <h1 class="text-center" data-aos="fade" data-aos-delay="50" id="small" style="font-weight: 600;color: rgb(255,255,255);font-size: 32px;font-family: Montserrat, sans-serif;height: 1px;margin-top: 110px;">BLOG</h1>
        <div class="container text-center" style="margin-top: 6rem;"><button class="btn " type="button" style="margin: 10px;background-color: #3aadaa;border: none;">HOME</button><button class="btn" type="button" style="margin: 10px;background-color: #98b446;border: none;">PAGES</button>
            <button class="btn" type="button" style="margin: 10px;background-color: #fd6420;border: none;">TIMETABLE</button>
        </div>
    </section>

    <!--
||--------------------||
||--READING THE POST--||
||--------------------||
-->
    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM `posts` WHERE `id`='$id'";
        $q_res = mysqli_query($con, $query);
        if (!$q_res) {
            die("query failed " . mysqli_error($con));
        }
        $row = mysqli_fetch_assoc($q_res);
        $title = $row['title'];
        $author = $row['author'];
        $content = $row['content'];
        $img_name = $row['img_name'];
        $date = $row['date'];
        $category = $row['category'];

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
                                    <div><a class="text-center" href="#" style="margin: 10px;margin-right: 5px;margin-left: 5px;"><i class="far fa-eye" style="color: rgb(255,255,255);font-size: 14px;"></i></a><a href="#" style="margin: 10px;margin-right: 5px;margin-left: 5px;"><i class="fas fa-star" style="color: rgb(251,251,251);font-size: 14px;"></i></a>
                                        <a href="#" style="margin: 10px;margin-right: 0;margin-left: 5px;"><i class="fas fa-share" style="color: rgb(255,255,255);font-size: 14px;"></i></a>
                                    </div>
                                </div>
                                <div class="text-center border2" style="padding: 20px 15px;">
                                    <div>
                                        <div class="row">
                                            <div class="col">
                                                <p class="text-left" style="color: #98b446;font-size: 14px;font-family: Montserrat, sans-serif;font-weight: 500;"><?php echo $category; ?></p>
                                            </div>
                                            <div class="col">
                                                <p class="text-right" style="color: #98b446;font-size: 14px;font-family: Montserrat, sans-serif;font-weight: 500;"><?php echo $author . ' | ' . $date; ?></p>
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
    <!-- ||BRINGING LATEST POSTS|| -->
    <?php
    //    showing current values
    //    $query="SELECT * FROM `posts`";
    $query = "SELECT * FROM (SELECT * FROM `posts` ORDER BY id DESC LIMIT 3) as r ORDER BY id DESC";
    $q_res = mysqli_query($con, $query);
    if (!$q_res) {
        die("query failed " . mysqli_error($con));
    }
    while ($row = mysqli_fetch_assoc($q_res)) {
        $id = $row['id'];
        $title = $row['title'];
        $content = $row['content'];
        $content = substr($content, 0, 300) . "...";
        $img_name = $row['img_name'];
        $date = $row['date'];
        $category = $row['category'];
        $author = $row['author'];
    ?>

        <div id="empresa" style="padding:20px;margin:1px;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-5 col-lg-5"><img src="assets/img/<?php echo $img_name; ?>"></div>
                    <div class="col-sm-6 col-md-7 col-lg-7">
                        <h4 style="color: #002632;font-family: Montserrat, sans-serif;font-weight: 500;font-size: 24px;">
                            <strong><?php echo $title; ?></strong>
                            <br></h4>
                        <span style="color: #ff0000;font-size: 12px;font-weight: 300;"><?php echo $author; ?><br>
                        </span>
                        <p class="text-left" style="font-size: 14px;color: #666666;font-weight: 300;font-family: Montserrat, sans-serif;"><br><?php echo $content; ?><br></p>
                        <a href="blog-post.php?id=<?php echo $id; ?>" style="color: blue;">Read more</a>
                    </div>
                </div>
            </div>
        </div>

    <?php
    }
    if (isset($_GET['id'])) {
    ?>
        <!-------------------------->
        <!--COMMENT SECTION STARTS-->
        <!-------------------------->
        <hr>

        <div class="container">





            <div class="card">
                <div class="card-body">
                    <?php if (isset($_SESSION['logged_in'])) { ?>
                        <!--	FORM TO ADD COMMENTS-->
                        <?php $post_id = $_GET['id']; ?>
                        <form id="comment_form" method="post">
                            <input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
                            <h5 style="font-weight:bolder;">Add new comment:</h5>
                            <div class="form-group">
                                <textarea name="comment" id="comment" class="form-control" placeholder="comment" rows="5" required></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" style="width:auto;" class="btn btn-primary" value="Comment">
                            </div>
                        </form>

                    <?php } else {
                        echo "You can only comment when logged in";
                    } ?>
                </div>
            </div>

            <h4 style="font-weight:bolder;" class="mt-3">Comments:</h4>
            <div id="comment_box">

            </div>
        </div>



    <?php
    } // comments rendring end if 
    ?>
    <script type="text/javascript">
        <?php $post_id = $_GET['id']; ?>
        document.addEventListener("DOMContentLoaded", function() {



            $.get("fetch-comments.php?id=<?php echo $post_id; ?>", function(data) {
                $("#comment_box").html(data);
                let folds = document.querySelectorAll(".fold");
                console.log(folds);
                folds.forEach((fold) => {
                    fold.addEventListener("click", (e) => {
                        e.target.parentElement.getElementsByTagName("i")[0].classList.toggle("up");
                        let comment_box = e.target.parentElement.parentElement.querySelector("#reply_box");
                        comment_box.classList.toggle("open_reply_box");
                    })

                    fold.querySelector("#reply_form").addEventListener("submit", (e) => {
                        e.preventDefault();
                        var replyData = {
                            'comment_id': $('input[name=comment_id]').val(),
                            'reply': $('input[name=reply]').val()
                        };
                        console.log(replyData);
                    });
                })
            });

            let comment_form = document.getElementById("comment_form");
            comment_form.addEventListener("submit", function(e) {
                e.preventDefault();
                // get the form data
                // there are many ways to get this data using jQuery (you can use the class or id also)
                var formData = {
                    'post_id': $('input[name=post_id]').val(),
                    'comment': $('textarea[name=comment]').val()
                };

                // process the form
                $.ajax({
                        type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                        url: 'add-comment.php', // the url where we want to POST
                        data: formData, // our data object
                        dataType: 'json', // what type of data do we expect back from the server
                    })
                    // using the done promise callback
                    .done(function(data) {

                        // log data to the console so we can see
                        $('textarea[name=comment]').val("");
                        $.get("fetch-comments.php?id=<?php echo $post_id; ?>", function(data) {
                            $("#comment_box").html(data);
                        });

                    });


            })




        });
    </script>

    <!------------------------>
    <!--COMMENT SECTION ENDS-->
    <!------------------------>
    <div class="footer-basic" style="background-color: #002632;">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram" style="color: rgb(255,255,255);"></i></a><a href="#"><i class="icon ion-social-google" style="color: rgb(255,255,255);"></i></a><a href="#"><i class="icon ion-social-twitter" style="color: rgb(255,255,255);"></i></a>
                <a href="#"><i class="icon ion-social-facebook" style="color: rgb(255,255,255);"></i></a>
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
    <script>
        setTimeout(function() {
            let alert = document.querySelectorAll(".alert");
            alert.forEach(div => {
                div.remove();
            });
        }, 5000);
    </script>

</body>

</html>