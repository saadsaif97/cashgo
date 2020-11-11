<!--incuding the header-->
<?php include_once"inc/header.php"; ?>
<?php
    if(isset($_SESSION['username'])){
        header("Location: index.php");
    }else{
        
    }
?>
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- Preloader Ends -->

    <!-- start Container Wrapper -->
    <div id="container-wrapper">
        <!-- Dashboard -->
        <div id="dashboard">

            <!-- navigations -->
            <?php $thisPage = 'promotions'; ?>
            <?php include_once"inc/nav.php"; ?>

            <div class="dashboard-content">
               <h3 class="title1">TOP Promo Achievers</h3>
                <div class="row">
                    <div class="container-fluid" style="width: 100%;">
                       <iframe src="Datatable.php" style="height: 360px; width: 100%;">
                        </iframe>
                    </div>
                </div>
            </div>


            <!-- Content / End -->
            
            <!-- Copyrights -->
            <?php include_once"inc/copyrights.php"; ?>
            
        </div>
        <!-- Dashboard / End -->
    </div>
    <!-- end Container Wrapper -->


    <!-- Back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>
    <!-- Back to top ends -->

    <!-- *Scripts* -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.html"></script>
    <script src="js/preloader.html"></script>
    <script src="js/plugin.js"></script>
    <script src="js/main.js"></script>
    <script src="js/dashboard-custom.js"></script>
    <script src="js/jpanelmenu.min.js"></script>
    <script src="js/counterup.min.js"></script>
    
</body>

</html>
