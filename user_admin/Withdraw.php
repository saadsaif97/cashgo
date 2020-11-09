<!--incuding the header-->
<?php include_once"inc/header.php"; ?>

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
            <?php $thisPage = 'withdraw'; ?>
            <?php include_once"inc/nav.php"; ?>
            
            <div class="dashboard-content">
               <h3 class="title1" style="margin-bottom: 35px;">Your Withdraw Funds List</h3>
               <a class="btn btn-default" href="#" data-toggle="modal" data-target="#donateFormModal" style="margin-bottom: 28px;"><i class="fa fa-plus"></i> Request withdrawal</a>
               <div style="text-align: right; margin-bottom: 31px;">
                <p>Your Donation : $0.00</p>
                    </div>
                <div class="dashboard-form">
                    <div class="row">
                        <!-- Profile -->
                        <div class="table-reponsive box">
                            <table id="example" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sr.#</th>
                                        <th>Portfolio#</th>
                                        <th>Amount</th>
                                        <th>Currency</th>
                                        <th>Transfer Fee</th>
                                        <th>Donation</th>
                                        <th>Withdrawal Mode</th>
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
<!--    modal-->
    <div class="modal fade" id="donateFormModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="margin-top: 93px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Payment will be sent to B4U Global account.</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Select Withdrawal Mode * :</label>
            <select>
                <option value=""> --select-- </option>
                <option value=""> Bouns </option>
                <option value=""> Profit </option>
                <option value=""> Sold </option>
            </select>
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Select Withdrawal Currency*:</label>
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
            <label for="message-text" class="control-label">Fund Type :</label>
            <select>
                <option> --select-- </option>
                <option> Cach Withdrawal </option>
                <option> Fund Transfer to Account </option>
            </select>
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Amount* :</label>
            <input type="text" placeholder="Enter amount here">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Donation for B$U Foundation <a href="#">(What is this?):</a></label>
            <input type="number" placeholder="Enter donations amount here">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Donate in B4U Coronavirus Relief Fund</label>
            <input type="number" placeholder="Enter Covid-19 Relief Fund donations here">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Submit</button>
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
