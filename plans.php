<?php
ob_start();
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<?php $currentPage="plans"; ?>
<?php include "includes/header.php"; ?>


<body>
    <section class="text-left" style="display: block;background-image:linear-gradient(to bottom, rgb(29 36 127 / 50%) 0%, rgba(20,18,19,0.6) 90%, #141213 100% ), url(&quot;assets/img/top.jpg&quot;);filter: blur(0px) brightness(100%);width: 100%;height: 500px;">
        <?php include "includes/topNav.php"; ?>
        <h1 class="text-center" data-aos="fade" data-aos-delay="50" id="small" style="font-weight: 600;color: rgb(255,255,255);font-size: 32px;font-family: Montserrat, sans-serif;height: 1px;margin-top: 110px;">PLANS</h1>
        <div class="container text-center" style="margin-top: 6rem;"><button class="btn btn-primary" type="button" style="margin: 10px;background-color: #3aadaa;border: none;">HOME</button><button class="btn btn-primary" type="button" style="margin: 10px;background-color: #98b446;border: none;">PAGES</button>
            <button
                class="btn btn-primary" type="button" style="margin: 10px;background-color: #fd6420;border: none;">TIMETABLE</button>
        </div>
    </section>
    
    <section>
        <div class="container" style="padding: 20px 0;">
           
           <h2 style="font-weight:bolder; text-align:center;">Investment Plans</h2>
           
            <div class="my_grid" style="display:grid; grid-template-columns: repeat(auto-fit,minmax(300px,1fr)); grid-gap:20px; padding: 20px 0;">
                
                <?php
                    $query="SELECT * FROM `plan_card`";
                    $q_res=mysqli_query($con,$query);
                    if(!$q_res){
                        die("query failed ".mysqli_error($con));
                    }
                    while($row=mysqli_fetch_assoc($q_res)){
                    $title=$row['title'];
                    $content=$row['content'];
                    $my_rows=$row['my_rows'];
                ?>
                
                <div class="plan_card" data-aos="fade" data-aos-delay="600">
                    <div>
                        <img src="assets/img/gallery1.jpg" style="width: 100%;height: auto;">
                    </div>
                    <div class="plan_card_body" style="padding: 20px 15px;">
                        <h4 style="font-weight:bolder;"><?php echo $title; ?></h4>
                        <p style="color: #666666;margin: 10px 0;font-size: 14px; text-align:left; font-weight:normal;"><?php echo $content; ?></p>
                        <h5 style="font-weight:bolder;">Referal Bonuses:</h5>
                        <table class="plan_table">
                            <tr>
                                <th>Investment Bonus</th>
                                <th>Profit Bonus</th>
                            </tr>
                            <?php echo $my_rows; ?>
                        </table>
                    </div>
                </div>
                
                <?php
                    }
                ?>
                
                <div class="plan_card" data-aos="fade" data-aos-delay="600">
                    <div>
                        <img src="assets/img/gallery1.jpg" style="width: 100%;height: auto;">
                    </div>
                    <div class="plan_card_body" style="padding: 20px 15px;">
                        <h4 style="font-weight:bolder;">Top 8 Easy Ways To Get Rapid Cash</h4>
                        <p style="color: #666666;margin: 10px 0;font-size: 14px; text-align:left; font-weight:normal;">There may be any number of reasons why you need some cash in hand quickly.</p>
                        <h5 style="font-weight:bolder;">Referal Bonuses:</h5>
                        <table class="plan_table">
                            <tr>
                                <th>Investment Bonus</th>
                                <th>Profit Bonus</th>
                            </tr>
                            <tr>
                                <td>First Line <span>0.3%</span></td>
                                <td>Second Line <span>0.3%</span></td>
                            </tr>
                            <tr>
                                <td>First Line <span>0.3%</span></td>
                                <td>Second Line <span>0.3%</span></td>
                            </tr>
                            <tr>
                                <td>First Line <span>0.3%</span></td>
                                <td>Second Line <span>0.3%</span></td>
                            </tr>
                        </table>
                    </div>
                </div>
                
                <div class="plan_card" data-aos="fade" data-aos-delay="600">
                    <div>
                        <img src="assets/img/gallery1.jpg" style="width: 100%;height: auto;">
                    </div>
                    <div class="plan_card_body" style="padding: 20px 15px;">
                        <h4 style="font-weight:bolder;">Top 8 Easy Ways To Get Rapid Cash</h4>
                        <p style="color: #666666;margin: 10px 0;font-size: 14px; text-align:left; font-weight:normal;">There may be any number of reasons why you need some cash in hand quickly.</p>
                        <h5 style="font-weight:bolder;">Referal Bonuses:</h5>
                        <table class="plan_table">
                            <tr>
                                <th>Investment Bonus</th>
                                <th>Profit Bonus</th>
                            </tr>
                            <tr>
                                <td>First Line <span>0.3%</span></td>
                                <td>Second Line <span>0.3%</span></td>
                            </tr>
                            <tr>
                                <td>First Line <span>0.3%</span></td>
                                <td>Second Line <span>0.3%</span></td>
                            </tr>
                            <tr>
                                <td>First Line <span>0.3%</span></td>
                                <td>Second Line <span>0.3%</span></td>
                            </tr>
                        </table>
                    </div>
                </div>
                
                
                <div class="plan_card" data-aos="fade" data-aos-delay="600">
                    <div>
                        <img src="assets/img/gallery1.jpg" style="width: 100%;height: auto;">
                    </div>
                    <div class="plan_card_body" style="padding: 20px 15px;">
                        <h4 style="font-weight:bolder;">Top 8 Easy Ways To Get Rapid Cash</h4>
                        <p style="color: #666666;margin: 10px 0;font-size: 14px; text-align:left; font-weight:normal;">There may be any number of reasons why you need some cash in hand quickly.</p>
                        <h5 style="font-weight:bolder;">Referal Bonuses:</h5>
                        <table class="plan_table">
                            <tr>
                                <th>Investment Bonus</th>
                                <th>Profit Bonus</th>
                            </tr>
                            <tr>
                                <td>First Line <span>0.3%</span></td>
                                <td>Second Line <span>0.3%</span></td>
                            </tr>
                            <tr>
                                <td>First Line <span>0.3%</span></td>
                                <td>Second Line <span>0.3%</span></td>
                            </tr>
                            <tr>
                                <td>First Line <span>0.3%</span></td>
                                <td>Second Line <span>0.3%</span></td>
                            </tr>
                        </table>
                    </div>
                </div>
                
                <div class="plan_card" data-aos="fade" data-aos-delay="600">
                    <div>
                        <img src="assets/img/gallery1.jpg" style="width: 100%;height: auto;">
                    </div>
                    <div class="plan_card_body" style="padding: 20px 15px;">
                        <h4 style="font-weight:bolder;">Top 8 Easy Ways To Get Rapid Cash</h4>
                        <p style="color: #666666;margin: 10px 0;font-size: 14px; text-align:left; font-weight:normal;">There may be any number of reasons why you need some cash in hand quickly.</p>
                        <h5 style="font-weight:bolder;">Referal Bonuses:</h5>
                        <table class="plan_table">
                            <tr>
                                <th>Investment Bonus</th>
                                <th>Profit Bonus</th>
                            </tr>
                            <tr>
                                <td>First Line <span>0.3%</span></td>
                                <td>Second Line <span>0.3%</span></td>
                            </tr>
                            <tr>
                                <td>First Line <span>0.3%</span></td>
                                <td>Second Line <span>0.3%</span></td>
                            </tr>
                            <tr>
                                <td>First Line <span>0.3%</span></td>
                                <td>Second Line <span>0.3%</span></td>
                            </tr>
                        </table>
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