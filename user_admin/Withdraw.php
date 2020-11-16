<!--incuding the header-->
<?php include_once 'inc/header.php';
include_once 'inc/user_profile_db.php'; ?>
<?php
    if (!isset($_SESSION['username'])) {
        header('Location: login.php');
    }

?>

<?php 
  if(isset($_POST['withdraw'])){

    $user_id = $_SESSION['user_id'];// getting user id from the seesion set after login
    $sr_no = $pdo->query("SELECT `sr_no` FROM `user_withdrawls` WHERE `user_id`='$user_id' ORDER BY `sr_no` DESC LIMIT 1")->fetchColumn() +1;
    $amount = $_POST['amount'];
    $rate = "1";
    $currency = $_POST['currency'];
    $transfer_fee = doubleval($amount)*0.02; 
    $donation = $_POST['cashgo_donation'];
    $withdraw_mode = $_POST['withdraw_mode'];
    $fund_type = $_POST['fund_type'];

    /*
     * CHECKING IF THE AMMOUNT IS CORRECT
     *    if donation is set
     *        validate the value and set data array with donation and pass the query
     *    if donation is not set
     *        set the data array without donation and pass the query
    */

    if($withdraw_mode && $currency   && $fund_type && $amount ){
      if(!preg_match("/^((0?\.((0[1-9])|\d{2}))|([1-9]\d*(\.\d{2})?))$/",$amount)){
        $_SESSION['warning_message'] = 'Please fill in the correct amount!';
      }elseif(!empty($donation)){
        if(!preg_match("/^((0?\.((0[1-9])|\d{2}))|([1-9]\d*(\.\d{2})?))$/",$donation)){
          $_SESSION['warning_message'] = 'Please fill in the correct donation amount!';
        }else{
          $data = [
            'sr_no'=> $sr_no,
            'user_id'=> $user_id,
            'amount'=> $amount,
            'rate'=> $rate,
            'currency'=> $currency,
            'transfer_fee'=> $transfer_fee,
            'donation'=> $donation,
            'withdraw_mode'=> $withdraw_mode,
            'fund_type'=> $fund_type,
          ];
          $user_withdraw_query = $pdo->prepare("INSERT INTO `user_withdrawls`(`sr_no`, `user_id`, `amount`, `rate`, `currency`, `transfer_fee`, `donation`, `withdraw_mode`, `fund_type`) VALUES (:sr_no, :user_id, :amount,:rate,:currency,:transfer_fee,:donation, :withdraw_mode, :fund_type)")->execute($data);
          $user_withdraw_query = null;
          $_SESSION['success_message'] = 'withdrawl request sent';
          header("Refresh:0");
          exit();
        }
      }elseif(empty($donation)){
        $data = [
            'sr_no'=> $sr_no,
            'user_id'=> $user_id,
            'amount'=> $amount,
            'rate'=> $rate,
            'currency'=> $currency,
            'transfer_fee'=> $transfer_fee,
            'withdraw_mode'=> $withdraw_mode,
            'fund_type'=> $fund_type,
        ];
        $user_withdraw_query = $pdo->prepare("INSERT INTO `user_withdrawls`(`sr_no`, `user_id`, `amount`, `rate`, `currency`, `transfer_fee`,  `withdraw_mode`, `fund_type`) VALUES (:sr_no, :user_id, :amount,:rate,:currency,:transfer_fee, :withdraw_mode, :fund_type)")->execute($data);
          $user_withdraw_query = null;
        $_SESSION['success_message'] = 'withdrawl request sent';
        header("Refresh:0");
        exit();
      }
    }else{
      exit("Fill all the fields");
    }

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
            <?php $thisPage = 'withdraw'; ?>
            <?php include_once 'inc/nav.php'; ?>
            
            <div class="dashboard-content">

              <!--success FLASH MESSAGE-->
              <?php if (isset($_SESSION['success_message'])) { ?>
                      <div class="alert alert-success" >
                      <i class="fas fa-exclamation-circle"></i>
                      <?php echo $_SESSION['success_message']; ?>
                      </div>
              <?php } ?>
              <?php unset($_SESSION['success_message']); ?>
              <!--success FLASH MESSAGE-->



              <!--warning FLASH MESSAGE-->
              <?php if (isset($_SESSION['warning_message'])) { ?>
                      <div class="alert alert-warning" >
                      <i class="fas fa-exclamation-circle"></i>
                      <?php echo $_SESSION['warning_message']; ?>
                      </div>
              <?php } ?>
              <?php unset($_SESSION['warning_message']); ?>
              <!--warning FLASH MESSAGE-->


               <h3 class="title1" style="margin-bottom: 35px;">Your Withdraw Funds List</h3>
               <a class="btn btn-default" href="#" data-toggle="modal" data-target="#donateFormModal" style="margin-bottom: 28px;"><i class="fa fa-plus"></i> Request withdrawal</a>
               <div style="text-align: left; margin-bottom: 31px;">
                <?php
                  $user_id = $_SESSION['user_id'];
                  $sum = $pdo->query("SELECT SUM(amount) FROM `user_withdrawls` WHERE `user_id`='$user_id' AND `status`='Approved'")->fetchColumn();
                ?>
                  <p>Your withdrawls : $ <?php echo $sum? $sum : "0.00" ; ?></p>
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
                                        <th>Fund type</th>
                                        <th>Status</th>
                                        <th>Date created</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php 
                                    $all_withdrawls = $pdo->query("SELECT * FROM `user_withdrawls`")->fetchAll(PDO::FETCH_ASSOC);
                                  ?>
                                  
                                  <?php 
                                      for ($i=0; $i < count($all_withdrawls); $i++) {
                                  ?>
                                      <tr>
                                        <td><?php echo $all_withdrawls[$i]['sr_no']; ?></td>
                                        <td><?php echo $all_withdrawls[$i]['portfolio_no'] ? $all_withdrawls[$i]['portfolio_no'] : "null" ; ?></td>
                                        <td><?php echo $all_withdrawls[$i]['amount']; ?></td>
                                        <td><?php echo $all_withdrawls[$i]['currency']; ?></td>
                                        <td><?php echo $all_withdrawls[$i]['transfer_fee']; ?></td>
                                        <td><?php echo $all_withdrawls[$i]['donation'] ? $all_withdrawls[$i]['donation'] : "__" ; ?>
                                        <td><?php echo $all_withdrawls[$i]['withdraw_mode']; ?></td>
                                        <td><?php echo $all_withdrawls[$i]['fund_type']; ?></td>
                                        <?php 
                                          if($all_withdrawls[$i]['status'] == "Pending"){ $st_color='orangered'; }else{ $st_color='green'; }
                                        ?>
                                        <td style="color:<?php echo $st_color; ?>"><?php echo $all_withdrawls[$i]['status']; ?></td>
                                        <td><?php echo $all_withdrawls[$i]['create_date']; ?></td>
                                    </tr>
                                  <?php
                                    }
                                  ?>

                                </tbody>
                            </table>
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
<!--    modal-->
    <div class="modal fade" id="donateFormModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="margin-top: 93px;">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Payment will be send to B4U Global account.</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form action="Withdraw.php" method="post" id="form">
          <div class="form-group">
          <label for="fund_type" class="control-label">Fund Type :</label>
            <select name="fund_type" id="fund_type" required>
                <option value=""> --select-- </option>
                <option value="Bonus"> Bouns </option>
                <option value="Profit"> Profit </option>
                <option value="Sold"> Sold </option>
            </select>
          </div>
          <div class="form-group">
            <label for="currency" class="control-label">Select Withdrawal Currency*:</label>
            <select required id="currency" name="currency" required>
                <option value=""> --select-- </option>
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
            <label for="withdraw_mode" class="control-label">Select Withdrawal Mode * :</label>
            <select name="withdraw_mode" id="withdraw_mode" required>
                <option value=""> --select-- </option>
                <option value="cash_withdraw"> Cach Withdrawal </option>
                <option value="acount_transfer"> Fund Transfer to Account </option>
            </select>
          </div>
          <div class="form-group">
            <label for="amount" class="control-label">Amount* :</label>
            <input type="text" name="amount" id="amount" placeholder="Enter amount here" required>
            <small>
              <p class="text-danger" id="message" style="display:block; text-align:right; transition: all 0.3s ease-in-out 0.3s;"></p>
            </small>
          </div>
          <div class="form-group">
            <label for="cashgo_donation" class="control-label">Donation for CashGO Foundation <a href="#">(What is this?):</a></label>
            <input type="text" placeholder="Enter donations amount here (optional)" name="cashgo_donation" id="donation_amount">
            <small>
              <p class="text-danger" id="message_donation_amount" style="display:block; text-align:right; transition: all 0.3s ease-in-out 0.3s;"></p>
            </small>
          </div>
          <div class="form-group">
            <input type="submit" name="withdraw" value="Send Request">
          </div>
        </form>
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
    <!-- <script src="js/plugin.js"></script> -->
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
    <script>
      let message = document.getElementById("message");
      let amount = document.getElementById("amount");
      let donation_amount = document.getElementById("donation_amount");
      let message_donation_amount = document.getElementById("message_donation_amount");

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


      donation_amount.addEventListener("keyup",(e)=>{
        let input = e.target.value;
        input = input.trimStart();
        let valid_value = input.match(/^((0?\.((0[1-9])|\d{2}))|([1-9]\d*(\.\d{2})?))$/gm);
        message_donation_amount.style.display = "none";
        if(!valid_value && donation_amount.value.length){
          message_donation_amount.style.display = "block";
          message_donation_amount.innerHTML = "Not valid amount <span style='color:gray;'>| valid format is: 999.99</span>";
        }else{
          message_donation_amount.innerHTML = "";
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
