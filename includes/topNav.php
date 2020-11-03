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
                <li class="nav-item" role="presentation"><a class="nav-link <?php if($currentPage== "home"){echo 'active';} ?>" href="index.php">HOME</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link <?php if($currentPage== "howItWorks"){echo 'active';} ?>" href="how-it-works.php">HOW IT WORKS</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link <?php if($currentPage== "profit"){echo 'active';} ?>" href="profit.php">PROFIT</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link <?php if($currentPage== "plans"){echo 'active';} ?>" href="plans.php">PLANS</a></li>
                 <li class="nav-item" role="presentation"><a class="nav-link <?php if($currentPage== "blog"){echo 'active';} ?>" href="blog-grid.php">BLOG</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link <?php if($currentPage== "contact"){echo 'active';} ?>" href="contact.php">CONTACT</a></li>
                <?php if(isset($_SESSION['logged_in'])): ?>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-user"></i>  <?php echo strtoupper($_SESSION['username']); ?></a>
                    <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="logout.php">Logout</a></div>
                    </li>
                <?php else: ?>
                   <li class="nav-item" role="presentation"><a class="nav-link <?php if($currentPage== "register"){echo 'active';} ?>" href="register.php">REGISTER</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link <?php if($currentPage== "login"){echo 'active';} ?>" href="login.php">LOGIN</a></li>
                <?php endif; ?>
            </ul>
            
        </div>
        
    </div>
</nav>
