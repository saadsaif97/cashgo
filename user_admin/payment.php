<!--incuding the header-->
<?php include_once"inc/header.php"; ?>

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
            <?php $thisPage = 'payment'; ?>
            <?php include_once"inc/nav.php"; ?>
            
            <div class="dashboard-content">
                <div class="main-page signup-page">
                    <div class="sign-u" style="background-color:#fff; padding:20px;">

                        <div class="sign-up1">
                            <h4 style="font-size: 14px; ">You are to make new deposit of <strong> 10 BTC</strong> using your preferred
                                mode of payment below.</h4><br>

                            <!---BTC ADDRESS--->
                            <div class="panel panel-default" style="border:0px solid #fff;">
                                <h4>
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#btc">
                                        <strong>Bitcoin </strong>
                                        <img src="images/btc.png" width="60px;" height="60px;">
                                    </a>
                                </h4>
                                <div id="btc" class="panel-collapse collapse">
                                    <div class="alert alert-success alert-dismissable">
                                        <h4>
                                            <strong>BTC Address :</strong> 
                                        </h4>
                                    </div>
                                </div>
                            </div>

                            <!---ETH ADDRESS--->

                            <!---LTC ADDRESS--->

                            <!---BCH ADDRESS--->

                            <!---DASH ADDRESS--->

                            <!---XRP ADDRESS--->

                            <!---ZCH ADDRESS--->


                            <div class="clearfix"></div>
                            <div class="alert-dismissable">
                                <h4 style="font-size: 14px;">Contact management at <strong>support@b4uglobal.com</strong> for other payment methods.
                                </h4>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                    </div>
                    <script>
                        //document.frmTransaction.submit();

                    </script>
                    <form method="post" role="form" id="formABC" action="" style="background-color:#fff; padding:20px; margin-top:10px;" autocomplete="off">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label>Upload payment proof (Receipt) after payment:</label>
                                <span style="color: red;" class="error"></span>
                            </div>
                            <div class="col-md-6">
                                <input type="file" required="" class="file-upload-aws" accept="image/*">
                                <input type="hidden" name="fileurl" value="">
                            </div>
                            <div class="clearfix"></div>
                        </div>



                        <div class="form-group">

                            <div class="col-md-4">
                                <label for="currencyName" data-toggle="tooltip" title="Bank transaction# OR receipt#" class="control-label">Transaction ID:</label>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" type="text" id="trans_id" name="trans_id" required="" value="" onkeypress="return isNumberKey(this, event);">
                            </div>
                            <div class="col-md-2">
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="form-group">

                            <div class="col-md-4">
                                <label for="select" class="control-label">Payment Mode:</label>
                            </div>

                            <div class="col-md-8">


                                <label class="radio">
                                    <input type="radio" class="radio" name="payment_mode" value="Bitcoin" checked="">
                                    <img src="images/btc.png" width="50px;">
                                </label>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">

                                <div class="col-md-4">

                                </div>
                                <div class="col-md-8">
                                    <input type="submit" id="btnSubmit" class="col-md-6 btn btn-default" value="Submit payment">

                                    <div class="clearfix"></div>

                                    <input type="hidden" name="amount" value="10">

                                    <!--<input type="hidden" name="amountusd" value="">-->

                                    <input type="hidden" name="plan_id" value="1">
                                    <input type="hidden" name="deposit_mode" value="new">
                                    <input type="hidden" name="currency" value="BTC">

                                    <input type="hidden" name="_token" value=""><br>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                    </form>
                </div>
            </div>

            <!-- Content / End -->
            
            <!-- Copyrights -->
            <?php include_once"inc/copyrights.php"; ?>
                
        </div>
        <!-- Dashboard / End -->
    </div>
    <!-- end Container Wrapper -->
    <div class="modal fade" id="donateFormModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="margin-top: 93px;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Make deposit</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Select Deposit Mode * :</label>
                            <select>
                                <option value=""> --select-- </option>
                                <option value=""> New-investment </option>
                                <option value=""> Re-investment </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="control-label">Select Donation Currency*:</label>
                            <select>
                                <option> --select-- </option>
                                <option> USD (Dollar) </option>
                                <option> BTC (DitCoin) </option>
                                <option> ETH (Etherum) </option>
                                <option> BCH (Bitcash) </option>
                                <option> LTC (Litecoin) </option>
                                <option> XRP (Ripple) </option>
                                <option> DASH (Dash) </option>
                                <option> ZEC (Zeecash) </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="control-label">Amount* :</label>
                            <input type="text" placeholder="Enter amount here">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Continue</button>
                </div>
            </div>
        </div>
    </div>



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
