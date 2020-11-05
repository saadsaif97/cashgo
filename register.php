
<?php
ob_start();
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<?php include "includes/db.php"; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>cash go</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Advent+Pro">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alef:400,700&amp;subset=hebrew">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Side-By-Side-Section.css">
    <link rel="stylesheet" href="assets/css/--mp--Animated-progress-bar-in-viewport.css">
    <link rel="stylesheet" href="assets/css/Animated-Header--Easy-Editable--1.css">
    <link rel="stylesheet" href="assets/css/Animated-Header--Easy-Editable-.css">
    <link rel="stylesheet" href="assets/css/Comment.css">
    <link rel="stylesheet" href="assets/css/Contact-FormModal-Contact-Form-with-Google-Map.css">
    <link rel="stylesheet" href="assets/css/Data-Table-1.css">
    <link rel="stylesheet" href="assets/css/Data-Table.css">
    <link rel="stylesheet" href="assets/css/dd-testimonials.css">
    <link rel="stylesheet" href="assets/css/dh-row-text-image-right-responsive.css">
    <link rel="stylesheet" href="assets/css/dh-row-titile-text-image-right-1.css">
    <link rel="stylesheet" href="assets/css/Effective-Pricing-Cards.css">
    <link rel="stylesheet" href="assets/css/Feature-Section-MD-1.css">
    <link rel="stylesheet" href="assets/css/Feature-Section-MD.css">
    <link rel="stylesheet" href="assets/css/Featured-Section.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">
    <link rel="stylesheet" href="assets/css/Latest-Blog.css">
    <link rel="stylesheet" href="assets/css/Map-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/NENIT_Toggle.css">
    <link rel="stylesheet" href="assets/css/Newsletter-Subscription-Form.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/Projects-Horizontal.css">
    <link rel="stylesheet" href="assets/css/Q-Timer.css">
    <link rel="stylesheet" href="assets/css/Social-Icon--hover-effect.css">
    <link rel="stylesheet" href="assets/css/Team-Grid.css">
    <link rel="stylesheet" href="assets/css/Testimonial-Slider-9-1.css">
    <link rel="stylesheet" href="assets/css/Testimonial-Slider-9.css">
    <link rel="stylesheet" href="assets/css/Testimonials.css">
    <link rel="stylesheet" href="assets/css/testimonialSlider-1.css">
    <link rel="stylesheet" href="assets/css/testimonialSlider.css">
    <link rel="stylesheet" href="assets/css/Timer-darkknight145.css">
    

    <link rel="stylesheet" href="assets/css/custom-styling.css">
    
    <link rel="stylesheet" href="assets/css/calender.css">

</head>

<!--including top nav-->
        <?php $currentPage="register"; ?>
        <?php include "includes/topNav.php"; ?>
<!--========================-->
<?php
    if(isset($_POST['register'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpass = $_POST['cpass'];
        if($username && $email && $password){
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              echo "<div class='alert alert-warning' role='alert'>
                  <strong>Please enter the valid email!</strong>
                </div>";
            }else{
                $query = "SELECT * from `users` WHERE `email`='$email'";
                $q_res = mysqli_query($con, $query);
                if(!$q_res){
                    die("query failed ".mysqli_error($con));
                }else{

                    if(mysqli_num_rows($q_res) == 1){
                        echo "<div class='alert alert-warning' role='alert'>
                              <strong>User already exists with this email!</strong> You cannot register with this email.
                            </div>";
                    }else{
                        if($password==$cpass){
                            $password = mysqli_real_escape_string($con,sha1($password));
                            $query = "INSERT INTO `users`(`username`, `email`, `password`) VALUES ('$username','$email','$password')";
                            $q_res = mysqli_query($con, $query);
                            if(!$q_res){
                                die("query failed ".mysqli_error($con));
                            }else{
                                echo "<div class='alert alert-success' role='alert'>
                                      <strong>User registered successfully!</strong> Now please confirm your email to login.
                                    </div>";
                            }
                        }else{
                            echo "<div class='alert alert-warning' role='alert'>
                                      <strong>Password does not matches!</strong>
                                </div>";
                        }
                    }
                }
            }
        }else{
            echo "<div class='alert alert-warning' role='alert'>
                  <strong>All fields are required!</strong>
                </div>";
        }
    }
?>


<body>

    <div class="container">
       <div class="row py-5">
        <div class="col col-4 offset-4">
            <h3 class="font-weight-bolder">Register:</h3>
            <form action="register.php" method="post" class="my-5">
               <div class="form-group">
                    <input type="text" id="text" name="username" placeholder="username" class="form-control" required>
                  </div>
                <div class="form-group">
                    <input type="email" id="email" name="email" placeholder="email" class="form-control" required>
                  </div>
                 <div class="form-group">
                    <input type="password" id="password" name="password" placeholder="password" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <input type="password" id="cpass" name="cpass" placeholder="confirm password" class="form-control" required>
                  </div>
                  <input type="submit" name="register" class="btn btn-primary" value="Register">
            </form>
        </div>
       </div>
    </div>
    
    <script>
    
    setTimeout(function() {
        let alert = document.querySelector(".alert");
            alert.remove();
    }, 3000);
    
    </script>

</body>
</html>