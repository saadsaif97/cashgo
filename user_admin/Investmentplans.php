<!--incuding the header-->
<?php include_once 'inc/header.php';
include_once 'inc/user_profile_db.php';
include_once 'inc/plan_db.php';
?>
<?php
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
} else {
}

?>
</head>

<body>
    <!--PRELOADER-->
    <div id="preloader">
        <div id="status"></div>
    </div>

    <!-- start Container Wrapper -->
    <div id="container-wrapper">
        <!-- Dashboard -->
        <div id="dashboard">

            <!-- navigations -->
            <?php $thisPage = 'investmentplans'; ?>
            <?php include_once 'inc/nav.php'; ?>

            <div class="dashboard-content">

                <h3>Investment plans:</h3>

                <div class="row">

                    <div class="my_grid" style="display:grid; grid-template-columns: repeat(auto-fit,minmax(300px,1fr)); grid-gap:20px; padding: 20px 0;">

                        <?php
                        foreach ($all_plans as $key => $plan) {
                            $card_image = $plan['img_name'];
                            $title = $plan['title'];
                            $content = $plan['content'];
                            $my_rows = $plan['my_rows'];
                        ?>

                            <div class="plan_card" data-aos="fade" data-aos-delay="600">
                                <div>
                                    <img src="../assets/img/cards_img/<?php echo $card_image; ?>" style="width: 100%;height: auto;" alt="<?php echo $title; ?>">
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

                    </div>

                </div>
            </div>

            <!-- Content / End -->

            <!-- Copyrights -->
            <?php include_once 'inc/copyrights.php'; ?>

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
    <script src="js/plugin.js"></script>
    <script src="js/preloader.html"></script>
    <script src="js/main.js"></script>
    <script src="js/dashboard-custom.js"></script>
    <script src="js/jpanelmenu.min.js"></script>
    <script src="js/counterup.min.js"></script>
</body>

</html>