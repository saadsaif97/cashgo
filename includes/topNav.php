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
    <div class="container d-flex align-items-center" style="font-size:13px; font-weight:bolder;">
        <a class="navbar-brand" href="#" style="background-image: url(assets/img/<?php echo $logo; ?>);width: 132px;background-position: center;background-size: cover;">&nbsp;</a>
        <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            
            
            <ul class="nav navbar-nav ml-auto" id="navbar-hover">
                <li class="nav-item" role="presentation"><a class="nav-link active" href="index.php">HOME</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="how-it-works.php">HOW IT WORKS</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="profit.php">PROFIT</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="plans.php">PLANS</a></li>
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
