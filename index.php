<?php include "includes/db.php"; ?>
<!--getting the home title-->
<?php
    $query="SELECT * FROM `home`";
    $q_res=mysqli_query($con,$query);
    if(!$q_res){
        die("query failed ".mysqli_error($con));
    }
    $row=mysqli_fetch_assoc($q_res);
    $title=$row['title'];
    $tagLine=$row['tag_line'];
    $heroImg=$row['hero_img'];
    $c1t=$row['card1_title'];
    $c1c=$row['card1_content'];
    $c2t=$row['card2_title'];
    $c2c=$row['card2_content'];
    $c3t=$row['card3_title'];
    $c3c=$row['card3_content'];
    $c4t=$row['card4_title'];
    $c4c=$row['card4_content'];
    $s1line1=$row['s1_line1'];
    $s1line2=$row['s1_line2'];
    $s1content=$row['s1_content'];
    $s2line1=$row['s2_line1'];
    $s2line2=$row['s2_line2'];
    $s3line1=$row['s3_line1'];
    $s3line2=$row['s3_line2'];
    $T1L=$row['t1_link'];
    $T1C=$row['t1_content'];
    $T1N=$row['t1_name'];
    $T2L=$row['t2_link'];
    $T2C=$row['t2_content'];
    $T2N=$row['t2_name'];
    $T3L=$row['t3_link'];
    $T3C=$row['t3_content'];
    $T3N=$row['t3_name'];
?>
<!--===========================-->
<?php include "includes/header.php"; ?>
<body>
    <section class="text-left" id="hero" style="display: block;background-image: linear-gradient(to bottom, rgb(29 36 127 / 50%) 0%, rgba(20,18,19,0.6) 90%, #141213 100% ), url(<?php echo "assets/img/$heroImg"; ?>);filter: blur(0px) brightness(100%);width: 100%;height: 900px; background-size:cover;">
<!--including top nav-->
        <?php $currentPage="home"; ?>
        <?php include "includes/topNav.php"; ?>
<!--========================-->
   <div class="my-5">   
    <?php echo $title; ?>
    <?php echo $tagLine; ?>
   </div>
<!--
        <h3 class="text-center small" data-aos="fade" data-aos-delay="50"><?php echo $title; ?></h3>
        <h1 class="text-center big" data-aos="fade" data-aos-delay="200"  style="color: rgb(255,255,255);font-family: Montserrat, sans-serif;font-size: 60px;line-height: 50px;"><br><strong><?php echo $tagLine; ?></strong><br><br></h1>
-->
        
        <div class="container">
            <form>
                <div class="form-row" data-aos="fade" data-aos-delay="300">
                    <div class="col-4 col-sm-12 col-md-4">
                        <div class="form-control2"><input class="form-control" placeholder="FULL NAME" type="text"></div>
                        <div class="form-control2"><input class="form-control" type="tel" placeholder="PHONE NUMBER"></div>
                        <div class="form-control2"><input class="form-control" type="text" placeholder="CITY"></div>
                    </div>
                    <div class="col-4 col-sm-12 col-md-4">
                        <div class="form-control2"><input class="form-control" type="date" placeholder="BIRTH DATE"></div>
                        <div class="form-control2"><input class="form-control" type="email" placeholder="EMAIL"></div>
                        <div class="form-control2"><input class="form-control" type="text" placeholder="ADDRESS"></div>
                    </div>
                    <div class="col-4 col-sm-12 col-md-4">
                        <div class="form-control2"><input class="form-control" type="number" placeholder="SSN"></div>
                        <div class="form-control2">
                            <select name="" id="" aria-placeholder="STATE" >
                                <option value="">STATE1</option>
                                <option value="">STATE2</option>
                                <option value="">STATE3</option>
                            </select>
                        </div>
                        <div class="form-control2"><input class="form-control" type="tel" placeholder="ZIP CODE"></div>
                    </div>
                </div>
                <div class="form-row text-center" style="margin-top: 49px;">
                    <div class="col"><button class="btn " data-aos="fade" data-aos-delay="400" type="button" style="background-color: #3aadaa;padding: 17px 55px;font-family: Montserrat, sans-serif;font-size: 12px;">SUBMIT</button></div>
                </div>
            </form>
        </div>
    </section>
    <div class="container" data-aos="fade" style="padding-bottom: 150px;">
        <div class="row row-fitur" style="margin-top: -5rem;">
            <div class="col-12 col-sm-12 col-md-3">
                <div class="row">
                    <div class="col-10 col-sm-12 col-md-11 waves-effect kolom-a" data-aos="fade" data-aos-delay="100" style="background-color: #3aadaa;">
                        <div class="fitur-a"><i class="far fa-gem icon"></i></div>
                        <div class="separator-fitur"></div>
                        <div>
                            <?php echo $c1t; ?>
                            <?php echo $c1c; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3">
                <div class="row">
                    <div class="col-11 col-sm-12 col-md-11 waves-effect kolom-a" data-aos="fade" data-aos-delay="200" style="background-color: #98b446;">
                        <div class="fitur-a"><i class="fas fa-tachometer-alt icon" ></i></div>
                        <div class="separator-fitur"></div>
                        <div>
                            <?php echo $c2t; ?>
                            <?php echo $c2c; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3">
                <div class="row">
                    <div class="col-11 col-sm-12 col-md-11 waves-effect kolom-a" data-aos="fade" data-aos-delay="300" style="background-color: #F1B22F;">
                        <div class="fitur-a"><i class="far fa-money-bill-alt icon" ></i></div>
                        <div class="separator-fitur" ></div>
                        <div>
                            <?php echo $c3t; ?>
                            <?php echo $c3c; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3">
                <div class="row">
                    <div class="col-11 col-sm-12 col-md-11 waves-effect kolom-a" data-aos="fade" data-aos-delay="400" style="background-color: #FD6420;height: auto;">
                        <div class="fitur-a"><i class="far fa-clock icon" ></i></div>
                        <div class="separator-fitur" ></div>
                        <div>
                            <?php echo $c4t; ?>
                            <?php echo $c4c; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 200px;">
            <div class="col">
<!--                <h1 class="text-center small-dark" data-aos="fade" ><br>GETTING CASH IS<br><br></h1>-->
                <span class="text-center small-dark" data-aos="fade" ><?php echo $s1line1; ?></span>
            </div>
        </div>
        <div class="row">
            <div class="col">
<!--                <h1 class="text-center big-dark" data-aos="fade" data-aos-delay="100" ><strong>EASY WITH CASHGO</strong><br></h1>-->
                <span class="text-center big-dark" data-aos="fade" data-aos-delay="100" ><?php echo $s1line2; ?></span>
            </div>
        </div>
        <div class="row">
            <div class="col">
<!--                <p class="text-center small-text" data-aos="fade" data-aos-delay="200" ><br>It may look like CashGo is just in the business of loans on car titles. But for us, it’s much deeper than that. Our goal is to help you get the cash you need right when you need it most.<br><br></p>-->
                <span class="text-center small-text" data-aos="fade" data-aos-delay="200"><?php echo $s1content; ?></span>
            </div>
        </div>
        <div class="row text-center" style="margin-top: 49px;">
            <div class="col"><button class="btn" data-aos="fade" data-aos-delay="300" type="button" >ABOUT US</button></div>
        </div>
    </div>
    <section data-aos="fade" id="feature" style="background-image: linear-gradient(to bottom, rgb(29 36 127 / 50%) 0%,
    rgba(20,18,19,0.6) 90%, #141213 100% ),
    url(&quot;assets/img/features.jpg&quot;);
     ">
        <div class="container">
            <div class="row">
                <div class="col"></div>
                <div class="col-5 col-sm-12 col-md-6 pt-5">
<!--                    <p class="small text-left" data-aos="fade" data-aos-delay="100">STUNNING REPAYMENT FLEXIBILITY</p>-->
                    <span class="small text-left" data-aos="fade" data-aos-delay="100"><?php echo $s2line1; ?></span>
<!--                    <br>-->
<!--                    <h1 class="big" data-aos="fade" data-aos-delay="200"><strong>FOR YOUR LOAN</strong><br></h1>-->
                   <span class="big" data-aos="fade" data-aos-delay="200"><?php echo $s2line2; ?></span>
                    <div class="row pl-3">
                        <div class="col" style="padding-top: 30px;">
                            <ul class="list-unstyled fa-ul" data-aos="fade" data-aos-delay="300">
                                <li class="lite-list" ><i class="fas fa-calendar-alt fa-li" style="background-color: #3aadaa;color: rgb(255,255,255);padding-top: 5px;padding-bottom: 5px;"></i>Choose your preferred monthly payment</li>
                            </ul>
                            <ul class="list-unstyled fa-ul" data-aos="fade" data-aos-delay="400">
                                <li class="lite-list" ><i class="far fa-arrow-alt-circle-up fa-li" style="background-color: #98B446;color: rgb(255,255,255);padding-top: 5px;padding-bottom: 5px;"></i>Increase your payment amount anytime<br></li>
                            </ul>
                            <ul class="list-unstyled fa-ul" data-aos="fade" data-aos-delay="500">
                                <li class="lite-list" ><i class="fas fa-star fa-li" style="background-color: #F1B22F;color: rgb(255,255,255);padding-top: 5px;padding-bottom: 5px;"></i>Make extra or early payments without fees<br></li>
                            </ul>
                            <ul class="list-unstyled fa-ul" data-aos="fade" data-aos-delay="600">
                                <li class="lite-list" ><i class="fas fa-plane fa-li" style="background-color: #E96F34;color: rgb(255,255,255);font-size: 20px;padding-top: 5px;padding-bottom: 5px;"></i>No fees, hidden or otherwise<br></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section data-aos="fade" id="pricing">
        <div class="container" style="padding-top: 100px;padding-bottom: 100px;">
            <div class="row">
                <div class="col">
<!--                    <p class="text-center small-dark" data-aos="fade" data-aos-delay="100" style="font-weight: normal;">PERSONAL<br></p>-->
                    <span class="text-center small-dark" data-aos="fade" data-aos-delay="100" style="font-weight: normal; margin-bottom: 30px;"><?php echo $s3line1; ?></span>
                </div>
            </div>
            <div class="row">
                <div class="col">
<!--                    <h1 class="text-center big-dark" data-aos="fade" data-aos-delay="200" style="margin-bottom: 30px;"><strong>LOAN COMPARISON</strong><br></h1>-->
                    <span class="text-center big-dark" data-aos="fade" data-aos-delay="200" style="margin-bottom: 30px;"><?php echo $s3line2; ?></span>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-3 l-card" data-aos="fade-right">
                    <div class="color-div" style="background-color: #3aadaa;">
                        <h1 class="text-center card-title" >CashGo&nbsp;</h1>
                    </div>
                    <div class="text-center border1" style="padding: 20px 15px;">
                        <p style="color: rgb(102,102,102);font-family: Montserrat, sans-serif;font-size: 14px;"><br>APR range:<br></p>
                        <h4 style="font-size: 22px;color: #3aadaa;font-family: Montserrat, sans-serif;font-weight: 500;line-height: 0;"><br>5.95% – 6.99%<br><br></h4>
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
                        <h4 style="font-size: 22px;color: #98b446;font-family: Montserrat, sans-serif;font-weight: 500;line-height: 0;">7.50% – 12.99%</h4>
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
                        <h4 style="font-size: 22px;color: #f1b22f;font-family: Montserrat, sans-serif;font-weight: 500;line-height: 0;"><br><br>8.00% – 15.49%<br><br></h4>
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
                        <h4 style="font-size: 22px;color: #fd6420;;font-family: Montserrat, sans-serif;font-weight: 500;line-height: 0;"><br><br>9.00% – 14.49%<br><br></h4>
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
    <section data-aos="fade" id="testimonials" style="width: 100%;height: 550px;background-image: linear-gradient(to bottom, rgb(29 36 127 / 50%) 0%, rgba(20,18,19,0.6) 90%, #141213 100% ), url(&quot;assets/img/testimonials.jpg&quot;);background-position: center;background-size: cover;background-repeat: no-repeat;">
        <div class="row" style="padding-top: 50px;padding-bottom: 50px;"><!-- Paradise Slider -->
	<div id="testimonial_095" class="carousel slide testimonial_095_indicators testimonial_095_control_button thumb_scroll_x swipe_x ps_easeOutSine" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">

		<!-- Header of Slider -->
		<div class="testimonial_095_header">
			<h5>what people say</h5>
		</div>
		<!-- /Header of Slider -->

		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#testimonial_095" data-slide-to="0" class="active"></li>
			<li data-target="#testimonial_095" data-slide-to="1"></li>
			<li data-target="#testimonial_095" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper For Slides -->
		<div class="carousel-inner" role="listbox">

			<!-- First Slide -->
			<div class="carousel-item active">
				<!-- Text Layer -->
				<div class="testimonial_095_slide">
					<a href="<?php echo $T1L; ?>" target="_blank"><span class="fa fa-twitter"></span></a>
					    <?php echo $T1C; ?>
					<h5><a href="<?php echo $T1L; ?>" target="_blank"><?php echo $T1N; ?></a></h5>
				</div> <!-- /Text Layer -->
			</div> <!-- /item -->
			<!-- End of First Slide -->

			<!-- Second Slide -->
			<div class="carousel-item">
				<!-- Text Layer -->
				<div class="testimonial_095_slide">
					<a href="<?php echo $T2L; ?>" target="_blank"><span class="fa fa-twitter"></span></a>
					<?php echo $T2C; ?>
					<h5><a href="<?php echo $T2L; ?>" target="_blank"><?php echo $T2N; ?></a></h5>
				</div> <!-- /Text Layer -->
			</div> <!-- /item -->
			<!-- End of Second Slide -->
			
			<!-- Third Slide -->
			<div class="carousel-item">
				<!-- Text Layer -->
				<div class="testimonial_095_slide">
					<a href="<?php echo $T3L; ?>" target="_blank"><span class="fa fa-twitter"></span></a>
					<?php echo $T3C; ?>
					<h5><a href="<?php echo $T3L; ?>" target="_blank"><?php echo $T3N; ?></a></h5>
				</div> <!-- /Text Layer -->
			</div> <!-- /item -->
			<!-- End of Third Slide -->

		</div> <!-- End of Wrapper For Slides -->

		<!-- Left Control -->
		<a class="carousel-control-prev" href="#testimonial_095" data-slide="prev">
			<span class="fa fa-chevron-left"></span>
		</a>

		<!-- Right Control -->
		<a class="carousel-control-next" href="#testimonial_095" data-slide="next">
			<span class="fa fa-chevron-right"></span>
		</a>

	</div> <!-- End Paradise Slider -->

	

 <!-- End --></div>
    </section>
    <section id="news">
        <div class="container">
            <div class="row">
                <div class="col n-card" data-aos="fade">
                    <div class="row">
                        <div class="col">
                            <div class="text-left">
                                <p class="small-dark text-left" data-aos="fade" data-aos-delay="100" style="margin-bottom: 0px;">LATEST<br></p>
                                <h1 class="big-dark" data-aos="fade" data-aos-delay="200" ><strong>NEWS</strong><br></h1>
                                <p class="text-left small-text" data-aos="fade" data-aos-delay="300" style="font-size: 14px;">At vero eos et accusam et justo duo dolores et ea rebum. Stclita gubergren no sea takimata sanctus eipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing<br></p><button class="btn btn-primary" data-aos="fade"
                                    data-aos-delay="400" type="button" style="padding: 12px 50px;background-color: #3aadaa;margin: 20px 0;">Blog</button></div>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-sm-12 col-md-3 n-card" data-aos="fade" data-aos-delay="600">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div><img src="assets/img/gallery1.jpg" style="width: 100%;height: auto;"></div>
                            <div style="background-color: #98b446;">
                                <div class="row">
                                    <div class="col">
                                        <p style="color: rgb(255,255,255);font-size: 20px;margin-bottom: 0px;">&nbsp; &nbsp; <span style="color: rgb(254,255,255);font-size: 32px;">17</span>&nbsp;Jul</p>
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col-2"></div>
                                            <div class="col-10" style="padding-right: 0px;padding-left: 0px;padding-top: 15px;padding-bottom: 15px;">
                                                <a class="text-center" href="#" style="margin: 10px;margin-right: 5px;margin-left: 5px;">
                                                    <i class="far fa-eye" style="color: rgb(255,255,255);font-size: 14px;"></i>
                                                </a>
                                                <a href="#" style="margin: 10px;margin-right: 5px;margin-left: 5px;">
                                                    <i class="fas fa-star" style="color: rgb(251,251,251);font-size: 14px;">
                                                    </i>
                                                </a>
                                                <a href="#" style="margin: 10px;margin-right: 0;margin-left: 5px;"><i class="fas fa-share" style="color: rgb(255,255,255);font-size: 14px;"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center border2" style="padding: 20px 15px;">
                                <h4 style="font-size: 18px;color: #002632;font-family: Montserrat, sans-serif;font-weight: 700;line-height: 1;margin-bottom: 0px;margin-top: -30px;"><br><br>Top 8 Easy Ways&nbsp; To Get Rapid Cash</h4>
                                <div>
                                    <p style="color: #666666;margin: 10px 0;font-size: 14px;">There may be any number of reasons why you need some cash in hand quickly.</p>
                                </div>
                                <div style="background-color: rgba(111,108,108,0.42);height: 1px;margin: 30px 0;"></div><a href="#" style="color: #98b446;">Read More</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-sm-12 col-md-3 n-card" data-aos="fade" data-aos-delay="700">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div><img src="assets/img/gallery2.jpg" style="width: 100%;height: auto;"></div>
                            <div style="background-color: #f1b22f;">
                                <div class="row">
                                    <div class="col">
                                        <p style="color: rgb(255,255,255);font-size: 20px;margin-bottom: 0px;">&nbsp; &nbsp; <span style="color: rgb(254,255,255);font-size: 32px;">17</span>&nbsp;Jul</p>
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col-2"></div>
                                            <div class="col-10" style="padding-right: 0px;padding-left: 0px;padding-top: 15px;padding-bottom: 15px;"><a class="text-center" href="#" style="margin: 10px;margin-right: 5px;margin-left: 5px;"><i class="far fa-eye" style="color: rgb(255,255,255);font-size: 14px;"></i></a><a href="#" style="margin: 10px;margin-right: 5px;margin-left: 5px;"><i class="fas fa-star" style="color: rgb(251,251,251);font-size: 14px;"></i></a>
                                                <a
                                                    href="#" style="margin: 10px;margin-right: 0;margin-left: 5px;"><i class="fas fa-share" style="color: rgb(255,255,255);font-size: 14px;"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center border3" style="padding: 20px 15px;">
                                <h4 style="font-size: 18px;color: #002632;font-family: Montserrat, sans-serif;font-weight: 700;line-height: 1;margin-bottom: 0px;margin-top: -30px;"><br><br>Top 8 Easy Ways&nbsp; To Get Rapid Cash</h4>
                                <div>
                                    <p style="color: #666666;margin: 10px 0;font-size: 14px;">There may be any number of reasons why you need some cash in hand quickly.</p>
                                </div>
                                <div style="background-color: rgba(111,108,108,0.42);height: 1px;margin: 30px 0;"></div><a href="#" style="color: #F1B22F;">Read More</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-sm-12 col-md-3 n-card" data-aos="fade" data-aos-delay="800">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div><img src="assets/img/gallery3.jpg" style="width: 100%;height: auto;"></div>
                            <div style="background-color: #FD6420;">
                                <div class="row">
                                    <div class="col">
                                        <p style="color: rgb(255,255,255);font-size: 20px;margin-bottom: 0px;">&nbsp; &nbsp; <span style="color: rgb(254,255,255);font-size: 32px;">17</span>&nbsp;Jul</p>
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col-2"></div>
                                            <div class="col-10" style="padding-right: 0px;padding-left: 0px;padding-top: 15px;padding-bottom: 15px;"><a class="text-center" href="#" style="margin: 10px;margin-right: 5px;margin-left: 5px;"><i class="far fa-eye" style="color: rgb(255,255,255);font-size: 14px;"></i></a><a href="#" style="margin: 10px;margin-right: 5px;margin-left: 5px;"><i class="fas fa-star" style="color: rgb(251,251,251);font-size: 14px;"></i></a>
                                                <a
                                                    href="#" style="margin: 10px;margin-right: 0;margin-left: 5px;"><i class="fas fa-share" style="color: rgb(255,255,255);font-size: 14px;"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center border4" style="padding: 20px 15px;">
                                <h4 style="font-size: 18px;color: #002632;font-family: Montserrat, sans-serif;font-weight: 700;line-height: 1;margin-bottom: 0px;margin-top: -30px;"><br><br>Top 8 Easy Ways&nbsp; To Get Rapid Cash</h4>
                                <div>
                                    <p style="color: #666666;margin: 10px 0;font-size: 14px;">There may be any number of reasons why you need some cash in hand quickly.</p>
                                </div>
                                <div style="background-color: rgba(111,108,108,0.42);height: 1px;margin: 30px 0;"></div><a href="#" style="color: #FD6420;">Read More</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="footer-basic" style="background-color: #002632;">
        <footer>
            <div class="social">
                <a href="#">
                    <i class="icon ion-social-instagram" style="color: rgb(255,255,255);"></i>
                </a>
                <a href="#">
                    <i class="icon ion-social-google" style="color: rgb(255,255,255);"></i>
                </a>
                <a href="#">
                    <i class="icon ion-social-twitter" style="color: rgb(255,255,255);"></i>
                </a>
                <a href="#">
                    <i class="icon ion-social-facebook" style="color: rgb(255,255,255);"></i>
                </a>
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