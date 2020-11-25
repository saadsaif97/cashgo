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
        <div class="container text-center" style="margin-top: 6rem;"><button class="btn btn-primary" type="button" style="margin: 10px;background-color: #3aadaa;border: none;">HOME</button><button class="btn btn-primary" type="button" style="margin: 10px;background-color: #98b446;border: none;">PAGES</button>
            <button class="btn btn-primary" type="button" style="margin: 10px;background-color: #fd6420;border: none;">BLOG</button>
        </div>
    </section>

    <section id="news" style="width: 100%;height: auto;padding-top: 50px;padding-bottom: 50px;">
        <div class="container">
            <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(300px, 1fr)); grid-gap:15px;">
                <!--               ROW 1 STARTS-->
                <!--
                    ||BRINGING ALL THE POSTS||
                    -->
                <?php
                //    showing current values
                $query = "SELECT * FROM `posts`";
                $q_res = mysqli_query($con, $query);
                if (!$q_res) {
                    die("query failed " . mysqli_error($con));
                }
                while ($row = mysqli_fetch_assoc($q_res)) {
                    $id = $row['id'];
                    $title = $row['title'];
                    $content = $row['content'];
                    $content = substr($content, 0, 200) . "...";
                    $img_name = $row['img_name'];
                    $date = $row['date'];
                    $category = $row['category'];
                    $author = $row['author'];
                ?>


                    <div class="blog_card" data-aos="fade" data-aos-delay="600" style="display:grid; height:100%; align-content:start; grid-template-columns:1fr;">
                        <div style="width:100%; height:220px; overflow:hidden;">
                            <img src="assets/img/<?php echo $img_name ?>" style="width:100%;height: auto;">
                        </div>
                        <div class="card_head" style="padding:15px; display:grid; grid-template-columns: 1fr 1fr; align-items:center;">
                            <p style="color: rgb(255,255,255);font-size: 16px; justify-self:left; margin-bottom:0;"><?php echo $date ?></p>
                            <div style="justify-self:right;">
                                <a class="text-center" href="#" style="margin: 10px;margin-right: 5px;margin-left: 5px;"><i class="far fa-eye" style="color: rgb(255,255,255);font-size: 14px;"></i></a>
                                <a href="#" style="margin: 10px;margin-right: 5px;margin-left: 5px;"><i class="fas fa-star" style="color: rgb(251,251,251);font-size: 14px;"></i></a>
                                <a href="#" style="margin: 10px;margin-right: 0;margin-left: 5px;"><i class="fas fa-share" style="color: rgb(255,255,255);font-size: 14px;"></i></a>
                            </div>
                        </div>
                        <div class="card_body" style="padding: 15px;">
                            <h4 style=" font-weight:bolder;"><?php echo $title ?></h4>
                            <p style="margin: 10px 0;font-size: 14px; text-align:left;"><?php echo $content ?></p>
                            <div style="background-color: rgba(16, 57, 22, 0.42);height: 1px;margin: 10px 0;"></div>
                            <a href="blog-post.php?id=<?php echo $id; ?>">Read More</a>
                        </div>
                    </div>

                <?php
                }
                ?>

            </div>
    </section>
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
</body>

</html>