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
    <!--PRELOADER-->
    <div id="preloader">
        <div id="status"></div>
    </div>

    <!-- start Container Wrapper -->
    <div id="container-wrapper">
        <!-- Dashboard -->
        <div id="dashboard">

            <!-- navigations -->
            <?php $thisPage = 'sold'; ?>
            <?php include_once"inc/nav.php"; ?>
            
            <div class="dashboard-content">
             <h3 class="title1" style="margin-bottom: 35px;">Manage All Sold Trades</h3>
            <div class="dashboard-form">
                <div class="row">
                      <div class="table-reponsive box">
                            <table id="example" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sr.#</th>
                                        <th>Portfolio#</th>
                                        <th>Currency</th>
                                        <th>Amount</th>
                                        <th>Amount Deduct</th>
                                        <th>Trad Amount</th>
                                        <th>Profit</th>
                                        <th>Payment Mode</th>
                                        <th>Status</th>
                                        <th>Date created</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>7/10/2020</td>
                                        <td>Admin</td>
                                        <td>WhatsApp status saver</td>
                                        <td></td>
                                        <td>App story</td>
                                        <td>52</td>
                                        <td></td>
                                        <td>Active</td>
                                        <td></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
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
    <script src="js/plugin.js"></script>
    <script src="js/preloader.html"></script>
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