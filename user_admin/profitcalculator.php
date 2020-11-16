<!--incuding the header-->
<?php include_once 'inc/header.php';
include_once 'inc/user_profile_db.php'; ?>
<?php
    if (!isset($_SESSION['username'])) {
        header('Location: login.php');
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
            <?php $thisPage = 'profitcalculator'; ?>
            <?php include_once 'inc/nav.php'; ?>
            
            <div class="dashboard-content">
                <div class="main-page signup-page">

                    <h3 class="title1">Profit Calculator</h3>
                    <div class="row">
                        <div class="sign-up-row widget-shadow col-lg-12">
                            <div class="col-lg-6" style="padding-top: 20px; padding-bottom: 20px;">
                                <form action="#">
                                    <input type="hidden" name="_token" value="">
                                    <div class="row">
                                        <label>Deposit Approved Date:</label>
                                        <div class="form-group">
                                            <input class="form-control" name="approvedAt" type="text" id="datepicker" required="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label>Deposit Sold/Current Date: </label>
                                        <div class="form-group">
                                            <input class="form-control hasDatepicker" name="soldAt" type="text" id="datepicker2" required="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label>Deposit Amount: </label>
                                        <div class="form-group">
                                            <input class="form-control" type="number" min="0" pattern="/^-?\d+\.?\d*$/" onkeypress="if(this.value.length==6) return false;" name="amount" required="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div style="float:left;">
                                            <a class="btn btn-default" onclick="viewProfitAmount();"> Calculate Profit </a>
                                        </div>
                                        <div style="float:right;">
                                            <button class="btn btn-danger" type="reset" value="Reset" id="reset">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-6" "padding-top: 20px;">
                                <div class="modal-content ucontent">

                                </div>
                            </div>
                        </div>
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
    <script src="js/preloader.html"></script>
    <script src="js/plugin.js"></script>
    <script src="js/main.js"></script>
    <script src="js/dashboard-custom.js"></script>
    <script src="js/jpanelmenu.min.js"></script>
    <script src="js/counterup.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });

    </script>
</body>

</html>
