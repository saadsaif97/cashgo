<?php include "includes/db.php"; ?>
<!--getting the home title-->
<?php
    $query="SELECT * FROM `home`";
    $q_res=mysqli_query($con,$query);
    if(!$q_res){
        die("query failed ".mysqli_error($con));
    }
    $row=mysqli_fetch_assoc($q_res);
    $logo=$row['logo'];
?>
<nav class="navbar navbar-light navbar-expand-lg sticky-top pulse animated navigation-clean">
    <div class="container d-flex align-items-center">
        <a class="navbar-brand" href="#" style="background-image: url(assets/img/<?php echo $logo; ?>);width: 132px;background-position: center;background-size: cover;">&nbsp;</a>
        <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            
            
            <ul class="nav navbar-nav ml-auto" id="navbar-hover">
                <li class="nav-item" role="presentation"><a class="nav-link active" href="index.php">HOME</a></li>
                <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">PAGES</a>
                    <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">SHORTCODES &amp;WIDGETS</a><a class="dropdown-item" role="presentation" href="loan-comperison.php">LOAN COMPARISION</a><a class="dropdown-item" role="presentation" href="how-it-works.php">HOW IT WORKS</a>
                        <a class="dropdown-item" role="presentation" href="timetable.php">TIMETABLE</a><a class="dropdown-item" role="presentation" href="events.php">EVENTS</a><a class="dropdown-item" role="presentation" href="team.php">TEAM</a><a class="dropdown-item" role="presentation" href="coming-soon.php">COMING SOON</a><a class="dropdown-item" role="presentation" href="#">FAQS</a><a class="dropdown-item" role="presentation" href="404.php">404</a>
                    </div>
                </li>
                <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="services.php">SERVICES</a>
                    <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="services.php">SERVICES</a><a class="dropdown-item" role="presentation" href="#">SINGLE SERVICES</a></div>
                </li>
                <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">BLOG</a>
                    <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="blog-grid.php">GRID BLOG</a><a class="dropdown-item" role="presentation" href="blog-post.php">POST</a></div>
                </li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="contact.php">CONTACT</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#">REGISTER</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#">LOGIN</a></li>
            </ul>
            
    
            
        </div>
    </div>
</nav>
