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
            <?php $thisPage = 'deposite'; ?>
            <?php include_once"inc/nav.php"; ?>
            
            <div class="dashboard-content">
              <h3 class="title1">Your deposits</h3>
               <a class="btn btn-default" href="#" data-toggle="modal" data-target="#donateFormModal" style="margin-bottom: 20px;"><i class="fa fa-plus"></i> 
            New deposit</a>
                <div class="table-reponsive box">
                    <table id="example" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Sr</th>
                                <th>Portfolio#</th>
                                <th>Payment Type</th>
                                <th>Amount</th>
                                <th>Rate</th>
                                <th>Deposit Fee</th>
                                <th>Total Deposit</th>
                                <th>Status</th>
                                <th>Status Date</th>
                                <th>Created Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>7/10/2020</td>
                                <td>Admin</td>
                                <td>WhatsApp status saver</td>
                                <td>App story</td>
                                <td>52</td>
                                <td></td>
                                <td>Active</td>
                                <td></td>
                                <td></td>
                                <td></td>

                            </tr>

                        </tbody>
                    </table>
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
        <a class="btn btn-default" href="payment.html">Continue</a>
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