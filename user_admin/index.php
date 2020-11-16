<!--incuding the header-->
<?php include_once 'inc/header.php';
include_once 'inc/user_profile_db.php'; ?>
<?php
    if (!isset($_SESSION['username'])) {
        header('Location: login.php');
    } else {
        $username = $_SESSION['username'];
        $user_data = $pdo->query("SELECT * FROM `user_profile` WHERE `username`='{$username}'")->fetch(PDO::FETCH_ASSOC);
        $user_id = $user_data['user_id'];
    }

?>


<!--getting data from crypto api-->
<?php
$url = 'https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=100&page=1&sparkline=false';
$coins = json_decode(file_get_contents($url), true);
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
            <?php $thisPage = 'index'; ?>
            <?php include_once 'inc/nav.php'; ?>
            
            <div class="dashboard-content">
                <div class="container" style="width: 100%; background-color: white;">
                    
                    <!--LOGIN FLASH MESSAGE-->
                    <?php if (isset($_SESSION['login_message'])) { ?>
                             <div class="alert alert-success">
                             <i class="fas fa-check-circle"></i>
                             <?php echo $_SESSION['login_message']; ?>
                             </div>
                    <?php } ?>
                    <?php unset($_SESSION['login_message']); ?>
                    <!--LOGIN FLASH MESSAGE-->
                    
                    
                    <div style="display: grid; grid-template-columns: repeat(auto-fit,minmax(130px,1fr)); margin: 0 -15px;">
                       
                        <div  style="font-size:18px; border-right: 1px solid #655c5c1a; color:#fff; background-color:#666; ">
                            <h4 style="text-align:center; margin-top: 15px;">
                                <label style="font-weight: 800; 
                            font-size: 11px;
                            color:white;
                            margin: 0px;
                            ">Today's Exchange Rates</label>
                                <small style="color:white;"><?php echo date('j F Y'); ?></small>
                            </h4>
                        </div>
                        
                        <?php
                        foreach ($coins as $coin) {
                            if ('bitcoin' == $coin['id'] || 'bitcoin-cash' == $coin['id'] || 'ethereum' == $coin['id'] || 'litecoin' == $coin['id'] || 'ripple' == $coin['id'] || 'dash' == $coin['id'] || 'zcash' == $coin['id']) {
                                ?>
                            <div  style="border-right: 1px solid #655c5c1a;">
                                <h4 style="text-align:center; margin-top: 15px;">
                                    <label style="font-weight: 800; 
                                font-size: 12px;
                                color: #444141e0;
                                margin: 0px;">$ <?php echo $coin['current_price']; ?></label>
                                    <small><?php echo $coin['name']; ?></small>
                                </h4>
                            </div>
                        <?php
                            }
                        }
                        ?>
                        
                        
                    </div>
                </div>
                <div style="padding-top: 20px;">
                    <a class="btn btn-success" style="float: right;" href="Donations.html">Donate
                        in COVID-19 Relief Fund</a>
                </div>
                <br>
                <div style="padding-top: 43px; display:grid; grid-template-columns:repeat(4,1fr); width:100%; text-align:center;">
                    <div style="background-color: white; border-right: 1px solid #908b8b6b; ">
                        <span>Your ID
                        </span>
                        <h4>
                            <a href="#"><?php echo $user_id; ?></a>
                        </h4>
                    </div>
                    <div style="background-color: white; border-right: 1px solid #908b8b6b; ">
                        <span><a href=""> Investment Plan </a></span>
                        <h4><a href="">TIFFANY</a></h4>
                    </div>
                    <div style="background-color: white; border-right: 1px solid #908b8b6b; ">
                        <span style="color:black;">Parent ID </span>
                        <br>
                        <h4 style="color:black;">
                            <a href="">B4U0001</a>
                        </h4>
                    </div>
                    <div style="background-color: white; ">
                        <span style="color:black;"><a href=""> Your Partners </a></span>
                        <br>
                        <h4 style="color:green;">0</h4>
                    </div>
                </div>
                
                <div style="text-align: center; padding-top: 70px; display:grid; grid-template-columns:repeat(4,1fr); text-align:center;">
                    <!-- Deposit Icon -->
                    <div  style="background-color: white; border-right:  1px solid #908b8b6b;">
                        <div>
                            <h4>
                                <span class="fa-stack">
                                </span><br>
                                <strong>
                                    <a href=""> DEPOSITED </a>
                                </strong>
                            </h4>
                        </div>

                        <div>
                            <h3>
                                $0
                            </h3>
                        </div>
                    </div>

                    <!-- Profit Icon -->
                    <div  style="background-color: white; border-right: 1px solid #908b8b6b;">
                        <div>
                            <h4>
                                <span class="fa-stack"></span>
                                <br>
                                <strong><a href="#">PROFIT</a></strong>
                            </h4>
                        </div>
                        <div>
                            <h3>
                                $0.00
                            </h3>
                        </div>
                    </div>

                    <!-- Ref. Bonus Icon -->
                    <div  style="background-color: white; border-right: 1px solid #908b8b6b;">
                        <div>
                            <h4>
                                <span class="fa-stack"></span>
                                <br>
                                <strong><a href="#">PROFIT</a></strong>
                            </h4>
                        </div>
                        <div>
                            <h3>
                                $0.00
                            </h3>
                        </div>
                    </div>

                    <!-- Withdrawal Icon -->
                    <div  style="background-color: white; border-right: 1px solid #908b8b6b;">
                        <div>
                            <h4>
                                <span class="fa-stack"></span>
                                <br>
                                <strong><a href="#">WITHDRAWLS</a></strong>
                            </h4>
                        </div>
                        <div>
                            <h3>
                                $0.00
                            </h3>
                        </div>
                    </div>

                </div>

                <div style="padding-top: 70px; display:grid; grid-template-columns:repeat(4,1fr); text-align:center;">

                    <div style="background-color: white; border-right: 1px solid #00000033;">
                        <h4 style="margin-top: 13px;">
                            $0.00
                            <br><small>Attracted Funds</small>
                        </h4>
                    </div>
                    <div style="background-color: white; border-right: 1px solid #00000033;">
                        <h4 style="margin-top: 13px;">
                            $0.0000
                            <br><small>Last
                                Profit</small>
                        </h4>
                    </div>

                    <!--$last_bonus-->
                    <div style="background-color: white; border-right: 1px solid #00000033;">
                        <h4 style="margin-top: 13px;">$0.0000
                            <br>
                            <small> Last Bonus</small>
                        </h4>
                    </div>

                    <div style="background-color: white;">
                        <h4 style="margin-top: 13px;">
                            $ 0
                            <br>
                            <small> Sold Balance </small>
                        </h4>
                    </div>

                </div>

                <div class="row col-lg-12 widget-shadow" style="margin-top: 70px; margin-left: 0px;">
                    <div class="col-lg-6" style="float:left; margin-right:0px;  background-color:white;">
                        <div width="100%" style="text-align:center; ">
                            <div style="float:left; padding:5px; width:65%;">
                                <h4 class="title"><span style="text-align:left;">Latest Deposits</span></h4>
                            </div>
                            <div style="float:right; padding:10px; width:35%;">
                                <a class="btn btn btn-sm btn-default" href="deposite.php">View All Deposits</a>	
                            </div>
                            
                        </div>	
                        <table id="myTable" class="table table-hover"> 
                            <thead> 
                                <tr> 
                                    <th>ID</th>
                                    <th>Amount</th>
                                                            <!--<th>Trans No/Type</th>-->
                                    <th>Date</th>
                                </tr>
                            </thead> 
                            <tbody> 
                            </tbody> 
                        </table>
                    </div>

                    <div class="col-lg-6" style="float:right; margin-left=">
                        <div width="100%">
                            <div style="float:left; padding:5px; width:65%;">
                                <h4 class="title">Latest Withdrawals</h4>
                            </div>
                            <div style="float:right; padding:10px; width:35%;">
                                <a class="btn btn btn-sm btn-default" href="Withdraw.php">View All Withdrawals</a>	
                            </div>
                            
                        </div>
                        <table id="myTable" class="table table-hover" style="text-align:center;"> 
                            <thead> 
                                <tr> 
                                    <th>ID</th>
                                    <th>Amount</th>
                                    <th>Type</th>
                                    <th>Date</th>
                                </tr>
                            </thead> 
                            <tbody> 
                            </tbody> 
                        </table>
                    </div>
                </div>



                    <div class="col-lg-12 widget-shadow" style="margin-right:0px;margin-top:70px; margin-left: 0px;  background-color:white;"> 
                
                        <div width="100%" style="text-align:center;">
                            <div style="float:left; padding:10px; width:65%;">
                                <h4 class="title">Latest Login History</h4>
                            </div>
                            <div style="float:right; padding:10px; width:35%;">
                                <a class="btn btn btn-sm btn-default" href="login-history.php">View All History</a>	
                            </div>
                            
                        </div>	
                        <table id="myTable" class="table table-hover"> 
                            <thead> 
                                <tr> 
                                    <th>Sr.#</th>
                                    <th>Ip</th>
                                    <th>Location</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            
                            <tbody> 
                                                                        <tr>
                                    
                                    <th>1</th>
                                    <td>39.46.113.105</td>
                                    <td></td>
                                    <td>2020-10-17 15:43:34</td>
                                </tr>
                                                                        <tr>
                                    
                                    <th>2</th>
                                    <td>39.46.71.30</td>
                                    <td>Pakistan</td>
                                    <td>2020-10-16 18:53:30</td>
                                </tr>
                                                                        <tr>
                                    
                                    <th>3</th>
                                    <td>39.46.71.30</td>
                                    <td>Pakistan</td>
                                    <td>2020-10-16 13:43:12</td>
                                </tr>
                                                                        <tr>
                                    
                                    <th>4</th>
                                    <td>39.46.21.140</td>
                                    <td></td>
                                    <td>2020-10-14 15:29:09</td>
                                </tr>
                                                                        <tr>
                                    
                                    <th>5</th>
                                    <td>103.116.251.63</td>
                                    <td>Pakistan</td>
                                    <td>2020-10-14 02:16:25</td>
                                </tr>
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


    <!-- Back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>
    <!-- Back to top ends -->

    <!-- *Scripts* -->

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugin.js"></script>
    <script src="js/main.js"></script>
    <script src="js/chart.js"></script>
    <script src="js/dashboard-custom.js"></script>
    <script src="js/jpanelmenu.min.js"></script>
    <script src="js/counterup.min.js"></script>


    <script>
        window.onload = function() {

            var options = {
                animationEnabled: true,
                title: {
                    text: "Monthly vistar - 2020"
                },
                axisX: {
                    valueFormatString: "MMM"
                },
                axisY: {
                    title: "",
                    prefix: ""
                },
                data: [{
                    yValueFormatString: "#,###",
                    xValueFormatString: "",
                    type: "spline",
                    dataPoints: [{
                            x: new Date(2017, 0),
                            y: 25060
                        },
                        {
                            x: new Date(2017, 1),
                            y: 27980
                        },
                        {
                            x: new Date(2017, 2),
                            y: 33800
                        },
                        {
                            x: new Date(2017, 3),
                            y: 49400
                        },
                        {
                            x: new Date(2017, 4),
                            y: 40260
                        },
                        {
                            x: new Date(2017, 5),
                            y: 33900
                        },
                        {
                            x: new Date(2017, 6),
                            y: 48000
                        },
                        {
                            x: new Date(2017, 7),
                            y: 31500
                        },
                        {
                            x: new Date(2017, 8),
                            y: 32300
                        },
                        {
                            x: new Date(2017, 9),
                            y: 42000
                        },
                        {
                            x: new Date(2017, 10),
                            y: 52160
                        },
                        {
                            x: new Date(2017, 11),
                            y: 49400
                        }
                    ]
                }]
            };
            $("#chartContainer").CanvasJSChart(options);

        }

    </script>
    <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
    <script>    
    setTimeout(function() {
        let alert = document.querySelector(".alert");
            alert.remove();
    }, 3000);
    </script>
</body>

</html>