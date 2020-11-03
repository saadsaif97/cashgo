<?php
ob_start();
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<?php include "includes/header.php"; ?>


<body>
    <section class="text-left" style="display: block;background-image:linear-gradient(to bottom, rgb(29 36 127 / 50%) 0%, rgba(20,18,19,0.6) 90%, #141213 100% ), url(&quot;assets/img/top.jpg&quot;);filter: blur(0px) brightness(100%);width: 100%;height: 500px;">
        <?php include "includes/topNav.php"; ?>
        <h1 class="text-center" data-aos="fade" data-aos-delay="50" id="small" style="font-weight: 600;color: rgb(255,255,255);font-size: 32px;font-family: Montserrat, sans-serif;height: 1px;margin-top: 110px;">LOAN COMPERISION<br><br></h1>
        <div class="container text-center" style="margin-top: 6rem;"><button class="btn btn-primary" type="button" style="margin: 10px;background-color: #3aadaa;border: none;">HOME</button><button class="btn btn-primary" type="button" style="margin: 10px;background-color: #98b446;border: none;">PAGES</button>
            <button
                class="btn btn-primary" type="button" style="margin: 10px;background-color: #fd6420;border: none;">LOAN COMPERISION</button>
        </div>
    </section>
    <section data-aos="fade" id="pricing">
        <div class="container" style="padding-top: 100px;padding-bottom: 100px;">
            <div class="row">
                <div class="col">
                    <p class="text-center" data-aos="fade" data-aos-delay="100" style="color: rgb(0,38,50);font-size: 25px;font-weight: normal;line-height: 2px;">PERSONAL<br></p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h1 class="text-center" data-aos="fade" data-aos-delay="200" style="font-size: 70px;color: rgb(0,38,50);font-weight: 500;font-family: Montserrat, sans-serif;margin-bottom: 30px;"><strong>LOAN COMPARISON</strong><br></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-3 l-card" data-aos="fade-right">
                    <div class="color-div" style="background-color: #3aadaa;">
                        <h1 class="text-center card-title" >CashGo&nbsp;</h1>
                    </div>
                    <div class="text-center border1" style="padding: 20px 15px;">
                        <p style="color: rgb(102,102,102);font-family: Montserrat, sans-serif;font-size: 14px;"><br>APR range:<br></p>
                        <h1 style="font-size: 22px;color: #3aadaa;font-family: Montserrat, sans-serif;font-weight: 500;line-height: 0;"><br>5.95% – 6.99%<br><br></h1>
                        <div style="background-color: rgba(111,108,108,0.42);height: 1px;margin: 30px 0;"></div>
                        <div>
                            <p class="card-b-t">Fees:</p>
                            <p class="card-s-t">No Fees</p>
                        </div>
                        <br>
                        <div>
                            <p class="card-b-t">Fees:<br></p>
                            <p class="card-s-t">3, 5, or 7 years<br></p>
                        </div>
                        <br>
                        <div>
                            <p class="card-b-t">Amount:<br></p>
                            <p class="card-s-t">$7,000 – $80,000<br></p>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 l-card" data-aos="fade-right" data-aos-delay="100">
                    <div class="color-div " style="background-color: #98b446;">
                        <h1 class="text-center card-title" >Lending Club<br></h1>
                    </div>
                    <div class="text-center border2" style="padding: 20px 15px;">
                        <p style="color: rgb(102,102,102);font-family: Montserrat, sans-serif;font-size: 14px;"><br>APR range:<br></p>
                        <h1 style="font-size: 22px;color: #98b446;font-family: Montserrat, sans-serif;font-weight: 500;line-height: 0;">7.50% – 12.99%</h1>
                        <div style="background-color: rgba(111,108,108,0.42);height: 1px;margin: 30px 0;"></div>
                        <div>
                            <p class="card-b-t">Fees:</p>
                            <p class="card-s-t">1 – 5% Origination Fee<br></p>
                        </div>
                        <br>
                        <div>
                            <p class="card-b-t">Fees:</p>
                            <p class="card-s-t">2, or 5 years<br></p>
                        </div>
                        <br>
                        <div>
                            <p class="card-b-t">Amount:</p>
                            <p class="card-s-t">$2,000 – $50,000</p>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 l-card" data-aos="fade-left" data-aos-delay="100">
                    <div class="color-div" style="background-color: #f1b22f;">
                        <h1 class="text-center card-title" >Discover Loan</h1>
                    </div>
                    <div class="text-center border3" style="padding: 20px 15px;">
                        <p style="color: rgb(102,102,102);font-family: Montserrat, sans-serif;font-size: 14px;"><br>APR range:<br></p>
                        <h1 style="font-size: 22px;color: #f1b22f;font-family: Montserrat, sans-serif;font-weight: 500;line-height: 0;"><br><br>8.00% – 15.49%<br><br></h1>
                        <div style="background-color: rgba(111,108,108,0.42);height: 1px;margin: 30px 0;"></div>
                        <div>
                            <p class="card-b-t">Fees:</p>
                            <p class="card-s-t">No Fees</p>
                        </div>
                        <br>
                        <div>
                            <p class="card-b-t">Fees:</p>
                            <p class="card-s-t">1, 2, 3, 5, or 8 years<br></p>
                        </div>
                        <br>
                        <div>
                            <p class="card-b-t">Amount:</p>
                            <p class="card-s-t">$5,500 – $40,000<br></p>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 l-card" data-aos="fade-left">
                    <div class="color-div" style="background-color: #fd6420;">
                        <h1 class="text-center card-title">Discover Loan</h1>
                    </div>
                    <div class="text-center border4" style="padding: 20px 15px;">
                        <p style="color: rgb(102,102,102);font-family: Montserrat, sans-serif;font-size: 14px;"><br>APR range:<br></p>
                        <h1 style="font-size: 22px;color: #fd6420;;font-family: Montserrat, sans-serif;font-weight: 500;line-height: 0;"><br><br>9.00% – 14.49%<br><br></h1>
                        <div style="background-color: rgba(111,108,108,0.42);height: 1px;margin: 30px 0;"></div>
                        <div>
                            <p class="card-b-t">Fees:</p>
                            <p class="card-s-t">3% Balance Transfer Fee<br></p>
                        </div><br>
                        <div>
                            <p class="card-b-t">Fees:</p>
                            <p class="card-s-t">Rolling<br></p>
                        </div>
                        <br>
                        <div>
                            <p class="card-b-t">Amount:</p>
                            <p class="card-s-t">Varies<br></p>
                        </div>
                        <br>
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