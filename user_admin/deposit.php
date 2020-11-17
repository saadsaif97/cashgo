<!--incuding the header-->
<?php include_once 'inc/header.php';
include_once 'inc/user_profile_db.php'; ?>
<?php
    if (!isset($_SESSION['username'])) {
        header('Location: login.php');
    }

?>
<?php 
  $all_deposits = $pdo->query("SELECT * FROM `user_deposits` ")->fetchAll(PDO::FETCH_ASSOC);
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


        <!--success FLASH MESSAGE-->
        <?php if (isset($_SESSION['success_message'])) { ?>
                <div class="alert alert-success" style="position:absolute; z-index:100000000; top:5%; left:50%; transform: translate(-50%,-50%); box-shadow: 0 0 5px 5px rgba(0,0,0,0.2);">
                <i class="fas fa-exclamation-circle"></i>
                <?php echo $_SESSION['success_message']; ?>
                </div>
        <?php } ?>
        <?php unset($_SESSION['success_message']); ?>
        <!--success FLASH MESSAGE-->



        <!--warning FLASH MESSAGE-->
        <?php if (isset($_SESSION['warning_message'])) { ?>
                <div class="alert alert-warning" style="position:absolute; z-index:100000000; top:5%; left:50%; transform: translate(-50%,-50%); box-shadow: 0 0 5px 5px rgba(0,0,0,0.2);">
                <i class="fas fa-exclamation-circle"></i>
                <?php echo $_SESSION['warning_message']; ?>
                </div>
        <?php } ?>
        <?php unset($_SESSION['warning_message']); ?>
        <!--warning FLASH MESSAGE-->

            <!-- navigations -->
            <?php $thisPage = 'deposit'; ?>
            <?php include_once 'inc/nav.php'; ?>
            
            <div class="dashboard-content">

              <h3 class="title1">Your deposits</h3>
               <a class="btn btn-default"  data-toggle="modal" data-target="#donateFormModal" style="margin-bottom: 20px;"><i class="fa fa-plus"></i> 
            New deposit</a>

                <div class="table-reponsive box">
                    <table id="example" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Sr</th>
                                <th>Portfolio#</th>
                                <th>Payment Type</th>
                                <th>Currency</th>
                                <th>Amount</th>
                                <th>Rate / Unit</th>
                                <th>Deposit Fee</th>
                                <th>Total Deposit</th>
                                <th>Status</th>
                                <th>Created Date</th>
                                <th>Transection ID</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            for ($i=0; $i < count($all_deposits); $i++) {
                        ?>
                              <tr>
                                <td><?php echo $all_deposits[$i]['sr_no']; ?></td>
                                <td><?php echo $all_deposits[$i]['portfolio_no'] ? $all_deposits[$i]['portfolio_no'] : "null" ; ?></td>
                                <td><?php echo $all_deposits[$i]['payment_type']; ?></td>
                                <td><?php echo $all_deposits[$i]['currency']; ?></td>
                                <td><?php echo $all_deposits[$i]['amount']; ?></td>
                                <td><?php echo $all_deposits[$i]['rate']; ?></td>
                                <td><?php echo $all_deposits[$i]['deposit_fee']; ?></td>
                                <td><?php echo $all_deposits[$i]['total_deposit']; ?></td>
                                <?php 
                                  if($all_deposits[$i]['status'] == "Pending"){ $st_color='orangered'; }else{ $st_color='green'; }
                                ?>
                                <td style="color:<?php echo $st_color; ?>"><?php echo $all_deposits[$i]['status']; ?></td>
                                <td><?php echo $all_deposits[$i]['create_date']; ?></td>
                                <td><?php echo $all_deposits[$i]['transection_id']; ?></td>
                            </tr>
                          <?php
                            }
                          ?>
                            

                        </tbody>
                    </table>
                    
                </div>
            </div>

            <!-- Content / End -->
            
            <!-- Copyrights -->
            <?php include_once 'inc/copyrights.php'; ?>
            
        </div>
        <!-- Dashboard / End -->
    </div>
    <!-- end Container Wrapper -->


 <div class="modal fade" id="donateFormModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="position:absolute; z-index:1000000;">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="margin-top: 93px;">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Make deposit</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form action="payment.php" method="get" id="form">
          <div class="form-group">
            <label for="recipient-name" class="control-label">Select Deposit Mode * :</label>
            <select required id="deposit_mode" name="deposit_mode">
                <option value="newInvest"> New-investment </option>
                <option value="reInvest"> Re-investment </option>
            </select>
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Select Deposit Currency*:</label>
            <select required id="currency" name="currency">
                <option value="bitcoin"> btc (BitCoin) </option>
                <option value="ethereum"> eth (Ethereum) </option>
                <option value="bitcoin-cash"> bch (Bitcash) </option>
                <option value="litecoin"> ltr (Litecoin) </option>
                <option value="ripple"> xpr (Ripple) </option>
                <option value="dash"> dash (Dash) </option>
                <option value="zcash"> zec (Zcash) </option>
            </select>
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Amount* :</label>
            <input type="text" placeholder="Enter amount here" id="amount" name="amount" required>
            <small>
              <p class="text-danger" id="message" style="display:block; text-align:right; transition: all 0.3s ease-in-out 0.3s;"></p>
            </small>
          </div>
          <input type="submit" name="myform" value="Continue">
        </div>
      </form>
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
    <!-- <script src="js/plugin.js"></script> -->
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
    <script>
      let message = document.getElementById("message");
      let amount = document.getElementById("amount");
      let val = amount.value.match(/^((0?\.((0[1-9])|\d{2}))|([1-9]\d*(\.\d{2})?))$/gm);

      amount.addEventListener("keyup",(e)=>{
        let input = e.target.value;
        input = input.trimStart();
        let valid_value = input.match(/^((0?\.((0[1-9])|\d{2}))|([1-9]\d*(\.\d{2})?))$/gm);
        message.style.display = "none";
        if(!valid_value && amount.value.length){
          message.style.display = "block";
          message.innerHTML = "Not valid amount <span style='color:gray;'>| valid format is: 999.99</span>";
        }else{
          message.innerHTML = "";
        }
      })


    </script>
    <script>    
    setTimeout(function() {
        let alert = document.querySelector(".alert");
            alert.remove();
    }, 3000);
    </script>
</body>

</html>