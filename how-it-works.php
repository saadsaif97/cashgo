<?php
ob_start();
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<?php $currentPage="howItWorks"; ?>
<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>
<?php
    //    showing current values
    $query="SELECT * FROM `howitworks`";
    $q_res=mysqli_query($con,$query);
    if(!$q_res){
        die("query failed ".mysqli_error($con));
    }
    $row=mysqli_fetch_assoc($q_res);
    $currentTitle=$row['title'];
    $currentTagLine=$row['tag_line'];
    $currentHeroImg=$row['hero_img'];
    $currentS1Title=$row['s1_title'];
    $currentS1Content=$row['s1_content'];
    $currentS2Title=$row['s2_title'];
    $currentS2Content=$row['s2_content'];
    $currentS3Title=$row['s3_title'];
    $currentS3Content=$row['s3_content'];
?>


<body>
    <section class="text-left" style="display: block;background-image:linear-gradient(to bottom, rgb(29 36 127 / 50%) 0%, rgba(20,18,19,0.6) 90%, #141213 100% ), url(assets/img/<?php echo $currentHeroImg; ?>);filter: blur(0px) brightness(100%);width: 100%;height: 500px; padding-bottom:5rem;">
        <?php include "includes/topNav.php"; ?>
        <h1 class="text-center" data-aos="fade" data-aos-delay="50" id="small" style="font-weight: 600;color: rgb(255,255,255);font-size: 32px;font-family: Montserrat, sans-serif;height: 1px;margin-top: 110px;"><?php echo $currentTitle; ?></h1>
        <div class="container text-center" style="margin-top: 6rem;"><button class="btn btn-primary" type="button" style="margin: 10px;background-color: #3aadaa;border: none;">HOME</button><button class="btn btn-primary" type="button" style="margin: 10px;background-color: #98b446;border: none;">PAGES</button>
            <button
                class="btn btn-primary" type="button" style="margin: 10px;background-color: #fd6420;border: none;">HOW IT WORKS</button>
        </div>
    </section>
    <section class="index-howto-alt py-3">
        <div class="container">
            <h2 class="text-center my-3 font-weight-bolder"><?php echo $currentTagLine; ?></h2>
            <div class="psd-line pos-rel" style="position:relative;">
                <div class="row align-items-center">
                    <div class="col-12 col-sm-6 d-flex flex-row justify-content-center align-items-center intro-card-1 p-5"><img class="howto-img" src="assets/img/bulb-icon.png">
                    </div>
                    <div class="col-12 col-sm-6 d-flex flex-column justify-content-center p-5 psd-left1">
                        <h1 style="color: #002632;font-size: 24px;font-family: Montserrat, sans-serif;font-weight: 500;"><strong><?php echo $currentS1Title; ?></strong><br></h1>
                        <p class="m-0 text-center text-sm-left" style="color: #666666;font-size: 14px;line-height: 24px;font-family: Montserrat, sans-serif;"><?php echo $currentS1Content; ?><br></p>
                        
                    </div>
                </div>
                <div class="row flex-column-reverse align-items-center flex-sm-row">
                    <div class="col-12 col-sm-6 d-flex flex-column justify-content-center p-5 psd-right1">
                        <h1 style="color: #002632;font-size: 24px;font-family: Montserrat, sans-serif;font-weight: 500;"><strong><?php echo $currentS2Title; ?></strong><br></h1>
                        <p class="m-0 text-center text-sm-left" style="color: #666666;font-size: 14px;line-height: 24px;font-family: Montserrat, sans-serif;"><?php echo $currentS2Content; ?><br></p>
                        
                    </div>
                    <div class="col-12 col-sm-6 d-flex flex-row justify-content-center align-items-center intro-card-2 p-5"><img class="howto-img" src="assets/img/phone-icon.png">
                        <h2 class="grey-text d-none">Neye İhtiyacınız Varsa Belirtin</h2>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-12 col-sm-6 d-flex flex-row justify-content-center align-items-center intro-card-3 p-5"><img class="howto-img" src="assets/img/clock-icon.png">
                        <h2 class="grey-text d-none">Size Uygun Teklifi Seçin</h2>
                    </div>
                    <div class="col-12 col-sm-6 d-flex flex-column justify-content-center p-5 psd-left2">
                        <h1 style="color: #002632;font-size: 24px;font-family: Montserrat, sans-serif;font-weight: 500;"><strong><?php echo $currentS3Title; ?></strong><br></h1>
                        <p class="m-0 text-center text-sm-left" style="color: #666666;font-size: 14px;line-height: 24px;font-family: Montserrat, sans-serif;"><?php echo $currentS3Content; ?><br></p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
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