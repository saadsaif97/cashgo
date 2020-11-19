<!--incuding the header-->
<?php include_once 'inc/header.php';
include_once 'inc/user_profile_db.php'; ?>
<!-- including the coin api -->
<?php include_once "inc/coins_api.php";  ?>
<?php
    if (!isset($_SESSION['username'])) {
        header('Location: login.php');
    } else {
    }
?>
<?php 
  if(isset($_POST['donate'])){

    $user_id = $_SESSION['user_id'];// getting user id from the seesion set after login
    $sr_no = $pdo->query("SELECT `sr_no` FROM `user_donations` WHERE `user_id`='$user_id' ORDER BY `sr_no` DESC LIMIT 1")->fetchColumn() +1;
    $fund_type = $_POST['fund_type'];
    $currency = $_POST['currency'];
    $donation_type = $_POST['donation_type'];
    $amount = $_POST['amount'];
    foreach($coins as $coin){
      if($coin['id']==$currency){
        $rate=$coin['current_price']." $";
      }
    }

    if($user_id && $fund_type && $currency && $amount && $rate){

      if(preg_match("/^((0?\.((0[1-9])|\d{2}))|([1-9]\d*(\.\d{2})?))$/",$amount)){

          $data = [
            'sr_no'=> $sr_no,
            'user_id'=> $user_id,
            'fund_type'=> $fund_type,
            'currency'=> $currency,
            'donation_type'=> $donation_type,
            'amount'=> $amount,
            'rate'=> $rate,
          ];
          $donation_request = $pdo->prepare("INSERT INTO `user_donations`(`sr_no`, `user_id`, `fund_type`, `currency`, `donation_type`, `amount`, `rate`) VALUES (:sr_no, :user_id, :fund_type,:currency,:donation_type,:amount, :rate)")->execute($data);
          $donation_request = null;
          $_SESSION['success_message'] = 'Donation request sent.';
          header("Refresh:0");
          exit();
        }else{
            $_SESSION['warning_message'] = 'Please fill in the correct amount!';
        }
      
    }else{
        exit("Fill all the fields.");
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
            <?php $thisPage = 'donations'; ?>
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


               <h3 class="title1" style="margin-bottom: 35px;">Your Donations List</h3>
               <a class="btn btn-default" href="#" data-toggle="modal" data-target="#donateFormModal" style="margin-bottom: 28px;"><i class="fa fa-plus"></i> Donate</a>
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
                                        <th>sr#</th>
                                        <th>Fund type</th>
                                        <th>Currency</th>
                                        <th>Donation type</th>
                                        <th>Amount</th>
                                        <th>Rate</th>
                                        <th>Create date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $all_donations = $pdo->query("SELECT * FROM `user_donations`")->fetchAll(PDO::FETCH_ASSOC); ?>
                                  
                                    <?php for ($i=0; $i < count($all_donations); $i++) { ?>
                                        <tr>
                                          <td><?php echo $all_donations[$i]['sr_no']; ?></td>
                                          <td><?php echo $all_donations[$i]['fund_type']; ?></td>
                                          <td><?php echo $all_donations[$i]['currency']; ?></td>
                                          <td><?php echo $all_donations[$i]['donation_type']; ?></td>
                                          <td><?php echo $all_donations[$i]['amount']; ?></td>
                                          <td><?php echo $all_donations[$i]['rate'] ?></td>
                                          <td><?php echo $all_donations[$i]['create_date']; ?></td>
                                          <?php if($all_donations[$i]['status'] == "Pending"){ $st_color='orangered'; }else{ $st_color='green'; } ?>
                                          <td style="color:<?php echo $st_color; ?>"><?php echo $all_donations[$i]['status']; ?></td>
                                      </tr>
                                    <?php } ?>

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
<div class="modal fade" id="donateFormModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="position:absolute; z-index:1000000;">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="margin-top: 93px;">
      <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">Payment will be sent to B4U Global account.</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>

      <div class="modal-body">
        <form action="Donations.php" method="post">
          <div class="form-group">
            <label for="fund_type" class="control-label">Select Fund Type * :</label>
            <select name="fund_type" id="fund_type" required>
                <option value=""> --select-- </option>
                <option value="bonus"> Bouns </option>
                <option value="profit"> Profit </option>
                <option value="sold"> Sold </option>
            </select>
          </div>
          <div class="form-group">
          <p id="unitPrice" style="color: orangered;"></p>
          <label for="currency" class="control-label">Select Donation Currency*:</label>
            <select required id="currency" name="currency" onchange="showValue()"  required>
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
            <label for="donation_type" class="control-label">Donation Type :</label>
            <select name="donation_type" required>
                <option value=""> --select-- </option>
                <option value="covid"> Covid-19 Relief Fund </option>
                <option value="orphan_home"> Orphan Home </option>
                <option value="masjid"> Masjid </option>
                <option value="eid_qurban"> Eid Qurban </option>
                <option value="naaby_people"> Naaby People </option>
            </select>
          </div>
          <div class="form-group">
          <p id="totalPrice" style="color: orangered;"></p>
          <label for="amount" class="control-label">Amount* :</label>
            <input type="text" name="amount" id="amount" placeholder="Enter amount here" required>
            <small>
              <p class="text-danger" id="message" style="display:block; text-align:right; transition: all 0.3s ease-in-out 0.3s;"></p>
            </small>
          </div>
          <div class="form-group">
            <input type="submit" name="donate" value="Donate">
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
    setTimeout(function() {
        let alert = document.querySelector(".alert");
            alert.remove();
    }, 3000);
    </script>
    <script>
      function showValue() {
        let currency = document.getElementById("currency");
        let unitPrice = document.getElementById("unitPrice");
        let totalPrice = document.getElementById("totalPrice");
        let amount = document.getElementById("amount");
        $.ajax({
          url: "https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=100&page=1&sparkline=false",
          method: "GET",
          dataType: "json"
        }).done(function(data) {

          data.forEach((coin,i)=>{
            if(coin.id==currency.value && currency.value){
              unitPrice.innerHTML = "Current price of "+currency.value+" is "+coin.current_price+" $";
            }
          })

          amount.addEventListener("keyup",function(e) {
              data.forEach((coin,i)=>{
                if(coin.id==currency.value && amount.value.length>0 && amount.value.match(/^((0?\.((0[1-9])|\d{2}))|([1-9]\d*(\.\d{2})?))$/gm)){
                  totalPrice.innerHTML = amount.value+" "+currency.value+" equals "+(amount.value*coin.current_price)+" $";
                }else if(amount.value.length=0 || !amount.value.match(/^((0?\.((0[1-9])|\d{2}))|([1-9]\d*(\.\d{2})?))$/gm)){
                  totalPrice.innerHTML = "";
                }
              });
              
          })

        });
      }
    </script>
    <script>
      let message = document.getElementById("message");
      let amount = document.getElementById("amount");

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
</body>

</html>
