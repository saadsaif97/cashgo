<!--incuding the header-->
<?php include_once 'inc/header.php';
include_once 'inc/user_profile_db.php'; ?>
<?php
    if (!isset($_SESSION['username'])) {
        header('Location: login.php');
    }
?>

<!-- including the coin api -->
<?php include_once "inc/coins_api.php";  ?>

<?php 
    if(isset($_GET['myform'])){

        if(!preg_match("/^((0?\.((0[1-9])|\d{2}))|([1-9]\d*(\.\d{2})?))$/",$_GET['amount'])){
            $_SESSION['warning_message'] = 'Please fill in the correct amount!';
            header("Location: deposit.php");
            exit();
        }

        $_SESSION['deposit_mode'] = $_GET['deposit_mode'];
        $_SESSION['currency'] = $_GET['currency'];
        $_SESSION['amount'] = $_GET['amount'];
        $_SESSION['plan'] = $_GET['plan'];
    }

?>

<?php 
    if (isset($_POST['payment_submit']) && (!empty($_FILES['recipt_img']['type']))) {

        $errors = [];
        $maxsize = 2097152;
        $acceptable = [
            'image/jpeg',
            'image/jpg',
            'image/png'
        ];

        if (($_FILES['recipt_img']['size'] >= $maxsize) || ($_FILES['recipt_img']['size'] == 0)) {
            $errors[] = 'File too large. File must be less than 2 megabytes.';
        }

        if ((!in_array($_FILES['recipt_img']['type'], $acceptable)) && (!empty($_FILES['recipt_img']['type']))) {
            $errors[] = 'Invalid file type. Only JPG and PNG types are accepted.';
        }

        if (count($errors) === 0) {

            $transection_id = $_POST['trans_id'];
            $payment_type = $_SESSION['deposit_mode'];
            $currency = $_SESSION['currency'];
            $amount = $_SESSION['amount'];
            $plan = $_SESSION['plan'];
            $deposite_fee = floatval($amount);
            foreach($coins as $coin){
            if($coin['id']==$currency){
                $rate=$coin['current_price']." $";
            }
            }
            $user_id = $_SESSION['user_id'];// getting user id from the seesion set after login
            $previous_amount = $pdo->query("SELECT SUM(amount) FROM `user_deposits` WHERE `user_id`='$user_id' ")->fetchColumn();
            $sr_no = $pdo->query("SELECT `sr_no` FROM `user_deposits` WHERE `user_id`='$user_id' ORDER BY `sr_no` DESC LIMIT 1")->fetchColumn() +1;
            

            if($transection_id && (!empty($_FILES['recipt_img']['type']))){

                if(preg_match_all("/[a-zA-Z0-9]{12,18}/",$transection_id)){

                    $extension = substr($_FILES['recipt_img']['name'], strpos($_FILES['recipt_img']['name'], '.'));
                    $deposit_slip = $user_id .'_'.$sr_no . $extension;
                    move_uploaded_file($_FILES['recipt_img']['tmp_name'], 'images/trans_img/' . $deposit_slip);
                    
                    $data = [
                        'sr_no'=> $sr_no,
                        'user_id'=> $user_id,
                        'payment_type'=> $payment_type,
                        'currency'=> $currency,
                        'amount'=> $amount,
                        'rate'=> $rate,
                        'plan'=> $plan,
                        'deposit_fee'=> (doubleval($amount)*0.02)." $currency",
                        'total_deposit'=> $previous_amount+$amount,
                        'deposit_slip'=> $deposit_slip,
                        'transection_id'=> $transection_id,
                    ];

                    $user_deposit_query = $pdo->prepare("INSERT INTO `user_deposits`(`sr_no`, `user_id`, `payment_type`, `currency`, `amount`, `rate`, `plan`,`deposit_fee`, `total_deposit`, `deposit_slip`, `transection_id`) VALUES (:sr_no, :user_id, :payment_type,:currency,:amount,:rate,:plan,:deposit_fee,:total_deposit, :deposit_slip, :transection_id)")->execute($data);
                    $user_deposit_query = null;

                    $_SESSION['success_message'] = 'Deposited successfully';

                    unset($_SESSION['deposit_mode']);
                    unset($_SESSION['currency']);
                    unset($_SESSION['amount']);
                    unset($_SESSION['plan']);
                    header("Location:deposit.php");
                    exit();
                     
                }else{
                    $_SESSION['warning_message'] = 'please input the valid transection id!!!';
                }


            }else{
                exit("You can't skip transection id and recipt image :)");
            }

        } else {
            foreach ($errors as $error) {
                $_SESSION['warning_message'] = $error . '<br/>';
            }
            echo "error";
        }
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
            <?php $thisPage = 'payment'; ?>
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

            

                <div class="main-page signup-page">
                    <div class="sign-u" style="background-color:#fff; padding:20px;">
                        <div class="sign-up1">
                            <?php
                            foreach ($coins as $coin) {
                                if ( $coin['id'] == $_SESSION['currency']) {
                                    ?>

                                <h4 style="font-size: 14px; font-weight:normal;">You are to make new deposit of <strong> <?php echo $_SESSION['amount'].' '.$coin['symbol']; ?></strong> using your preferred mode of payment below.</h4>
                                

                                <div class="panel panel-default" style="border:0px solid #fff;">
                                    <h4>
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#btc">
                                            <strong><?php echo $coin['name']; ?> </strong>
                                            <img src="<?php echo $coin['image']; ?>" width="60px;" height="60px;">
                                        </a>
                                    </h4>
                                </div>
                            <?php
                                }
                            }
                            ?>


                            <div class="clearfix"></div>
                            <div class="alert-dismissable">
                                <h4 style="font-size: 14px;">Contact management at <strong>support@b4uglobal.com</strong> for other payment methods.
                                </h4>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                    </div>

                    

                    <form action="#" method="post"  style="background-color:#fff; padding:20px; margin-top:10px;" autocomplete="off" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label>Upload payment proof (Receipt) after payment:</label>
                                <span style="color: red;" class="error"></span>
                            </div>
                            <div class="col-md-6">
                                <input type="file" name="recipt_img" class="file-upload-aws" accept=".jpg,.png,.jpeg|image/*" required>
                            </div>
                            <div class="clearfix"></div>
                        </div>



                        <div class="form-group">

                            <div class="col-md-4">
                                <label for="currencyName" data-toggle="tooltip" title="Bank transaction# OR receipt#" class="control-label">Transaction ID:</label>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" type="text" id="trans_id" name="trans_id" required>
                                <small><p id="wrong_id" style="font-size: 12px;">Valid syntax of the transectoin ID is 12-18 digits and numbers</p></small>
                            </div>

                            <div class="col-md-2">
                            </div>
                            <div class="clearfix"></div>
                        </div>


                        <!-- this was the image of the extra bitcoin below  -->
                                <!-- <div class="col-md-4">
                                    <label for="select" class="control-label">Payment Mode:</label>
                                </div>

                                <div class="col-md-8">


                                <label class="radio">
                                    <input type="radio" class="radio" name="payment_mode" value="Bitcoin" checked="">
                                    <img src="images/btc.png" width="50px;">
                                </label>
                                <div class="clearfix"></div>
                                </div>  -->

                        <div class="form-group">

                            <div class="col-md-4">

                            </div>
                            <div class="col-md-8">

                                <div class="clearfix"></div>

                                <input type="hidden" name="amount" value="10">

                                <!--<input type="hidden" name="amountusd" value="">-->

                                <!-- <input type="hidden" name="plan_id" value="1">
                                <input type="hidden" name="deposit_mode" value="new">
                                <input type="hidden" name="currency" value="BTC">

                                <input type="hidden" name="_token" value=""><br> -->

                                <input type="submit" name="payment_submit" class="col-md-6 btn btn-default" value="Submit payment">

                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </form>
                </div>
            </div>

            <!-- Content / End -->
            
            <!-- Copyrights -->
            <?php include_once 'inc/copyrights.php'; ?>
                
        </div>
        <!-- Dashboard / End -->
    </div>
    <!-- end Container Wrapper -->

    <!-- why the modal is here  -->
    <!-- <div class="modal fade" id="donateFormModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
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
    </div> -->




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
        const transec_id =  document.getElementById('trans_id');
        const wrong_id =  document.getElementById('wrong_id');

        transec_id.addEventListener("keyup",function(e) {
            const tId = e.target.value;
            if(tId.match(/[a-zA-Z0-9]{12,18}/g) || tId.length==0){
                wrong_id.style.color = "gray";
            }else{
                wrong_id.style.color = "red";
            }
        })
    </script>
</body>

</html>
