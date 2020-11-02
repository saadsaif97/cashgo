<?php include "includes/db.php"; ?>
<?php $currentPage="blog"; ?>
<?php include "includes/header.php"; ?>


<body>
    <section class="text-left" style="display: block;background-image:linear-gradient(to bottom, rgb(29 36 127 / 50%) 0%, rgba(20,18,19,0.6) 90%, #141213 100% ), url(&quot;assets/img/top.jpg&quot;);filter: blur(0px) brightness(100%);width: 100%;height: 500px;">
        <?php include "includes/topNav.php"; ?>
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
                            <div><img src="assets/img/<?php echo $img_name; ?>" style="width: 100%;height: auto;"></div>
                            <div style="background-color: #98b446;">
                                <div class="row" style="padding-right: 2rem;padding-left: 2rem;">
                                    <div class="col text-left" style="font-family: Montserrat, sans-serif;">
                                        <p class="text-left" style="color: rgb(255,255,255);font-size: 20px;margin-bottom: 0px;">&nbsp; &nbsp; <span style="color: rgb(254,255,255);font-size: 32px;"><?php echo $title; ?></span></p>
                                    </div>
                                    <div class="col text-right" style="padding-right: 15px;padding-left: 15px;padding-top: 15px;"><a class="text-center" href="#" style="margin: 10px;margin-right: 5px;margin-left: 5px;"><i class="far fa-eye" style="color: rgb(255,255,255);font-size: 14px;"></i></a><a href="#" style="margin: 10px;margin-right: 5px;margin-left: 5px;"><i class="fas fa-star" style="color: rgb(251,251,251);font-size: 14px;"></i></a>
                                        <a
                                            href="#" style="margin: 10px;margin-right: 0;margin-left: 5px;"><i class="fas fa-share" style="color: rgb(255,255,255);font-size: 14px;"></i></a>
                                    </div>
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
                                    <?php echo $content; ?>
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
    

    <div id="empresa" style="padding:20px;margin:1px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-5 col-lg-5"><img src="assets/img/law-document.jpeg"></div>
                <div class="col-sm-6 col-md-7 col-lg-7">
                    <p style="color: #666666;font-size: 14px;font-family: Montserrat, sans-serif;font-weight: 300;margin-bottom: 0px;"><br>Beef ribs sirloin jowl kielbasa tri-tip andouille, capicola ham frankfurter cupim pig turducken pork. Jowl spare ribs kielbasa pork pancetta pork belly corned beef ham hock cow chicken cupim drumstick sirloin venison. Prosciutto
                        t-bone cow shank capicola andouille.<br><br></p>
                    <p style="color: #666666;font-size: 14px;font-family: Montserrat, sans-serif;font-weight: 300;"><br>Shoulder turducken andouille hamburger chicken. Short loin chuck fatback rump short ribs pancetta brisket ball tip capicola strip steak t-bone bresaola landjaeger ribeye. Bresaola pork belly ball tip spare ribs flank kielbasa drumstick
                        porchetta turkey pork loin doner sausage.<br></p>
                </div>
            </div>
        </div>
    </div>
    <div id="empresa" style="padding:20px;margin:1px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-5 col-lg-5"><img src="assets/img/law-document.jpeg"></div>
                <div class="col-sm-6 col-md-7 col-lg-7">
                    <h1 style="color: #002632;font-family: Montserrat, sans-serif;font-weight: 500;font-size: 24px;">
                        <strong>Lusie Benching</strong>
                        <br></h1>
                        <span style="color: #ff0000;font-size: 12px;font-weight: 300;">CLIENT<br>
                        </span>
                    <p class="text-left" style="font-size: 14px;color: #666666;font-weight: 300;font-family: Montserrat, sans-serif;"><br>Tail burgdoggen pork loin strip steak rump pastrami ground round tongue kielbasa chicken. Pancetta filet mignon t-bone brisket ham, corned beef pork chop cow picanha biltong.<br></p>
                    <div class="d-flex"><a class="social-link" href="#" style="margin: 0px 5px;"><i class="fa fa-facebook social-link-icon"></i><div class="social-link-effect"></div></a><a class="social-link" href="#" style="margin: 0px 5px;"><i class="fa fa-twitter social-link-icon"></i><div class="social-link-effect"></div></a>
                        <a
                            class="social-link" href="#" style="margin: 0px 5px;"><i class="fa fa-instagram social-link-icon"></i>
                            <div class="social-link-effect"></div>
                            </a><a class="social-link" href="#" style="margin: 0px 5px;"><i class="fa fa-github social-link-icon"></i><div class="social-link-effect"></div></a></div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
	
	<div class="card">
	    <div class="card-body">
	        <div class="row">
        	    <div class="col-md-2">
        	        <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"/>
        	        <p class="small-text text-center">15 Minutes Ago</p>
        	    </div>
        	    <div class="col-md-10">
        	        <p>
        	            <a class="chat-name" href="#">Maniruzzaman Akash</a>
        	            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
        	            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
        	            <span class="float-right"><i class="text-warning fa fa-star"></i></span>

        	       </p>
        	       <div class="clearfix"></div>
        	        <p class="small-text">Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        	        <p>
                        <br>
        	            <a class="float-right btn btn-outline-primary ml-2"> <i class="fa fa-reply"></i> Reply</a>
        	            <a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>
                   </p>
                   <br>
                </div>
                
	        </div>
	        	<div class="card card-inner">
            	    <div class="card-body">
            	        <div class="row">
                    	    <div class="col-md-2">
                    	        <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"/>
                    	        <p class="small-text">15 Minutes Ago</p>
                    	    </div>
                    	    <div class="col-md-10">
                    	        <p><a class="chat-name" href="https://maniruzzaman-akash.blogspot.com/p/contact.html">Maniruzzaman Akash</a></p>
                    	        <p class="small-text">Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    	        <p>
                                    <br>
                    	            <a class="float-right btn btn-outline-primary ml-2">  <i class="fa fa-reply"></i> Reply</a>
                    	            <a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>
                    	       </p>
                    	    </div>
            	        </div>
            	    </div>
	            </div>
	    </div>
	</div>
</div>
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