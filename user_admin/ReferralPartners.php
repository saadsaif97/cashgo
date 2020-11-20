<!--incuding the header-->
<?php include_once 'inc/header.php';
include_once 'inc/user_profile_db.php'; ?>
<?php
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
}

?>

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '.text'
    });
</script>


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
            <?php $thisPage = 'referralpartners'; ?>
            <?php include_once 'inc/nav.php'; ?>


            <div class="dashboard-content">
                <div class="container" style="width: 100%; background-color: white;">
                    <table id="myTable" class="table table-hover">
                        <thead>
                            <tr>
                                <th>First Level Total</th>
                                <th>Second Level Total</th>
                                <th>Third Level Total</th>
                                <th>Final Total</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <th scope="row">$0.00</th>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td><strong>$0.00</strong></td>
                            </tr>
                            <tr>
                            </tr>
                        </tbody>
                    </table>
                    <?php
                    $user_id = $_SESSION['user_id'];

                    $first_level = [];
                    $second_level = [];
                    $third_level = [];
                    $depth = 0;
                    $all_childs = $pdo->query("SELECT `user_id` FROM `user_referrals` WHERE `ref_id`='{$user_id}' ")->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($all_childs as $key => $child) {
                        array_push($first_level, $child['user_id']);
                    }
                    foreach ($first_level as $key => $child) {
                        $all_childs_second = $pdo->query("SELECT `user_id` FROM `user_referrals` WHERE `ref_id`='{$child}' ")->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($all_childs_second as $key => $child) {
                            array_push($second_level, $child['user_id']);
                        }
                    }
                    foreach ($second_level as $key => $child) {
                        $all_childs_third = $pdo->query("SELECT `user_id` FROM `user_referrals` WHERE `ref_id`='{$child}' ")->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($all_childs_third as $key => $child) {
                            array_push($third_level, $child['user_id']);
                        }
                    }
                    if (count($first_level) > 0) {
                        $depth = 1;
                    }
                    if (count($second_level) > 0) {
                        $depth = 2;
                    }
                    if (count($third_level) > 0) {
                        $depth = 3;
                    }
                    echo $depth;
                    ?>

                    <section class="py-5">
                        <div>
                            <h1>First Level:</h1>
                            <h3 class="text-muted">Total first level referrals: <?php echo count($first_level); ?></h3>
                            <div style="display: grid; grid-gap: 10px; grid-template-columns:repeat(auto-fit,minmax(300px,1fr));">
                                <?php foreach ($first_level as $key => $child) { ?>
                                    <?php $person = $pdo->query("SELECT * FROM `user_profile` WHERE `user_id`='{$child}' ")->fetch(PDO::FETCH_ASSOC); ?>
                                    <?php $user_img = $person['user_img']; ?>
                                    <div class="card p-3">
                                        <?php ($user_img === ("https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?d=mp&f=y")) ? ($img_variable = "$user_img") : ($img_variable = "images/user_img/$user_img"); ?>
                                        <img style="width:90px; height:auto; margin:0 auto; border-radius:50%;" src=<?php echo $img_variable; ?> alt="user photo">
                                        <h5 style="margin: 10px 0;">Name: <?php echo $person['username']; ?> </h5>
                                        <h5 style="margin: 10px 0;">User Id: <?php echo $person['user_id']; ?> </h5>
                                        <h5 style="margin-bottom:5px;">Country: <?php echo $person['country']; ?> </h5>
                                        <br>
                                        <h5 style="margin-bottom:5px;">Deposits:</h5>
                                        <?php $deposits_by_user = $pdo->query("SELECT * FROM `user_deposits` WHERE `user_id`='{$child}' ")->fetchAll(PDO::FETCH_ASSOC); ?>
                                        <?php if (count($deposits_by_user) > 0) { ?>
                                            <table>
                                                <tr style="background-color: #e9e9e9; font-weight:bolder;">
                                                    <td>Plan</td>
                                                    <td>Amount</td>
                                                    <td>Date</td>
                                                </tr>
                                                <?php
                                                foreach ($deposits_by_user as $key => $deposit) {
                                                    $dep_plan = $deposit['plan'];
                                                    $dep_amount = $deposit['amount'] . " " . $deposit['currency'];
                                                    $dep_date = $deposit['create_date'];
                                                    echo "<tr> <td>$dep_plan</td> <td>$dep_amount</td> <td>$dep_date</td> </tr>";
                                                }
                                                ?>
                                            </table>
                                        <?php } else {
                                            echo "No deposits yet";
                                            echo "<br>";
                                        }
                                        ?>
                                        <br>
                                        <br>
                                        <h5 style="margin-bottom:5px;">Withdrawls:</h5>
                                        <?php $withdrawls_by_user = $pdo->query("SELECT * FROM `user_withdrawls` WHERE `user_id`='{$child}' AND `status`='Approved' ")->fetchAll(PDO::FETCH_ASSOC); ?>
                                        <?php if (count($withdrawls_by_user) > 0) { ?>
                                            <table>
                                                <tr style="background-color: #e9e9e9; font-weight:bolder;">
                                                    <td>Plan</td>
                                                    <td>Amount</td>
                                                    <td>Date</td>
                                                </tr>
                                                <?php
                                                foreach ($withdrawls_by_user as $key => $withdrawl) {
                                                    $wd_type = $withdrawl['fund_type'];
                                                    $wd_amount = $withdrawl['amount'] . " " . $withdrawl['currency'];
                                                    $wd_date = $withdrawl['create_date'];
                                                    echo "<tr> <td>$wd_type</td> <td>$wd_amount</td> <td>$wd_date</td> </tr>";
                                                }
                                                ?>
                                            </table>
                                        <?php } else {
                                            echo "No approved withdrawls yet";
                                            echo "<br>";
                                        }
                                        ?>
                                        <br>
                                        <small>
                                            <p class="text-muted">Referred from: You</p>
                                        </small>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                        <div>
                            <h1>Second Level:</h1>
                            <h3 class="text-muted">Total second level referrals: <?php echo count($second_level); ?></h3>
                            <div style="display: grid; grid-gap: 10px; grid-template-columns:repeat(auto-fit,minmax(300px,1fr));">
                                <?php foreach ($second_level as $key => $child) { ?>
                                    <?php $person = $pdo->query("SELECT * FROM `user_profile` WHERE `user_id`='{$child}' ")->fetch(PDO::FETCH_ASSOC); ?>
                                    <?php $user_img = $person['user_img']; ?>
                                    <div class="card p-3">
                                        <?php ($user_img === ("https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?d=mp&f=y")) ? ($img_variable = "$user_img") : ($img_variable = "images/user_img/$user_img"); ?>
                                        <img style="width:90px; height:auto; margin:0 auto; border-radius:50%;" src=<?php echo $img_variable; ?> alt="user photo">
                                        <h5 style="margin: 10px 0;">Name: <?php echo $person['username']; ?> </h5>
                                        <h5 style="margin: 10px 0;">User Id: <?php echo $person['user_id']; ?> </h5>
                                        <h5 style="margin-bottom:5px;">Country: <?php echo $person['country']; ?> </h5>
                                        <br>
                                        <h5 style="margin-bottom:5px;">Deposits:</h5>
                                        <?php $deposits_by_user = $pdo->query("SELECT * FROM `user_deposits` WHERE `user_id`='{$child}' ")->fetchAll(PDO::FETCH_ASSOC); ?>
                                        <?php if (count($deposits_by_user) > 0) { ?>
                                            <table>
                                                <tr style="background-color: #e9e9e9; font-weight:bolder;">
                                                    <td>Plan</td>
                                                    <td>Amount</td>
                                                    <td>Date</td>
                                                </tr>
                                                <?php
                                                foreach ($deposits_by_user as $key => $deposit) {
                                                    $dep_plan = $deposit['plan'];
                                                    $dep_amount = $deposit['amount'] . " " . $deposit['currency'];
                                                    $dep_date = $deposit['create_date'];
                                                    echo "<tr> <td>$dep_plan</td> <td>$dep_amount</td> <td>$dep_date</td> </tr>";
                                                }
                                                ?>
                                            </table>
                                        <?php } else {
                                            echo "No deposits yet";
                                            echo "<br>";
                                        }
                                        ?>
                                        <br>
                                        <br>
                                        <h5 style="margin-bottom:5px;">Withdrawls:</h5>
                                        <?php $withdrawls_by_user = $pdo->query("SELECT * FROM `user_withdrawls` WHERE `user_id`='{$child}' AND `status`='Approved' ")->fetchAll(PDO::FETCH_ASSOC); ?>
                                        <?php if (count($withdrawls_by_user) > 0) { ?>
                                            <table>
                                                <tr style="background-color: #e9e9e9; font-weight:bolder;">
                                                    <td>Plan</td>
                                                    <td>Amount</td>
                                                    <td>Date</td>
                                                </tr>
                                                <?php
                                                foreach ($withdrawls_by_user as $key => $withdrawl) {
                                                    $wd_type = $withdrawl['fund_type'];
                                                    $wd_amount = $withdrawl['amount'] . " " . $withdrawl['currency'];
                                                    $wd_date = $withdrawl['create_date'];
                                                    echo "<tr> <td>$wd_type</td> <td>$wd_amount</td> <td>$wd_date</td> </tr>";
                                                }
                                                ?>
                                            </table>
                                        <?php } else {
                                            echo "No approved withdrawls yet";
                                            echo "<br>";
                                        }
                                        ?>
                                        <br>
                                        <small>
                                            <p class="text-muted">Referred from: <?php echo $person['parent_id']; ?></p>
                                        </small>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                        <div>
                            <h1>Third Level:</h1>
                            <h3 class="text-muted">Total third level referrals: <?php echo count($third_level); ?></h3>
                            <div style="display: grid; grid-gap: 10px; grid-template-columns:repeat(auto-fit,minmax(300px,1fr));">
                                <?php foreach ($third_level as $key => $child) { ?>
                                    <?php $person = $pdo->query("SELECT * FROM `user_profile` WHERE `user_id`='{$child}' ")->fetch(PDO::FETCH_ASSOC); ?>
                                    <?php $user_img = $person['user_img']; ?>
                                    <div class="card p-3">
                                        <?php ($user_img === ("https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?d=mp&f=y")) ? ($img_variable = "$user_img") : ($img_variable = "images/user_img/$user_img"); ?>
                                        <img style="width:90px; height:auto; margin:0 auto; border-radius:50%;" src=<?php echo $img_variable; ?> alt="user photo">
                                        <h5 style="margin: 10px 0;">Name: <?php echo $person['username']; ?> </h5>
                                        <h5 style="margin: 10px 0;">User Id: <?php echo $person['user_id']; ?> </h5>
                                        <h5 style="margin-bottom:5px;">Country: <?php echo $person['country']; ?> </h5>
                                        <br>
                                        <h5 style="margin-bottom:5px;">Deposits:</h5>
                                        <?php $deposits_by_user = $pdo->query("SELECT * FROM `user_deposits` WHERE `user_id`='{$child}' ")->fetchAll(PDO::FETCH_ASSOC); ?>
                                        <?php if (count($deposits_by_user) > 0) { ?>
                                            <table>
                                                <tr style="background-color: #e9e9e9; font-weight:bolder;">
                                                    <td>Plan</td>
                                                    <td>Amount</td>
                                                    <td>Date</td>
                                                </tr>
                                                <?php
                                                foreach ($deposits_by_user as $key => $deposit) {
                                                    $dep_plan = $deposit['plan'];
                                                    $dep_amount = $deposit['amount'] . " " . $deposit['currency'];
                                                    $dep_date = $deposit['create_date'];
                                                    echo "<tr> <td>$dep_plan</td> <td>$dep_amount</td> <td>$dep_date</td> </tr>";
                                                }
                                                ?>
                                            </table>
                                        <?php } else {
                                            echo "No deposits yet";
                                            echo "<br>";
                                        }
                                        ?>
                                        <br>
                                        <br>
                                        <h5 style="margin-bottom:5px;">Withdrawls:</h5>
                                        <?php $withdrawls_by_user = $pdo->query("SELECT * FROM `user_withdrawls` WHERE `user_id`='{$child}' AND `status`='Approved' ")->fetchAll(PDO::FETCH_ASSOC); ?>
                                        <?php if (count($withdrawls_by_user) > 0) { ?>
                                            <table>
                                                <tr style="background-color: #e9e9e9; font-weight:bolder;">
                                                    <td>Plan</td>
                                                    <td>Amount</td>
                                                    <td>Date</td>
                                                </tr>
                                                <?php
                                                foreach ($withdrawls_by_user as $key => $withdrawl) {
                                                    $wd_type = $withdrawl['fund_type'];
                                                    $wd_amount = $withdrawl['amount'] . " " . $withdrawl['currency'];
                                                    $wd_date = $withdrawl['create_date'];
                                                    echo "<tr> <td>$wd_type</td> <td>$wd_amount</td> <td>$wd_date</td> </tr>";
                                                }
                                                ?>
                                            </table>
                                        <?php } else {
                                            echo "No approved withdrawls yet";
                                            echo "<br>";
                                        }
                                        ?>
                                        <br>
                                        <small>
                                            <p class="text-muted">Referred from: <?php echo $person['parent_id']; ?></p>
                                        </small>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                    </section>

                    <section class="info-box">
                        <ul>
                            <li><a href="#" class="active">1st Level Referrals(0)</a></li>
                            <li><a href="#">2st Level Referrals(0)</a></li>
                            <li><a href="#">3st Level Referrals(0)</a></li>
                        </ul>

                        <div class="panels">
                            <article class="active-panel">
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
                            </article>
                            <article>
                                <div class="table-reponsive box">
                                    <table id="example1" class="table table-striped table-bordered">
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
                            </article>
                            <article>
                                <div class="table-reponsive box">
                                    <table id="example2" class="table table-striped table-bordered">
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
                            </article>
                        </div>
                    </section>
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
    <script>
        $(document).ready(function() {
            $('#example1').DataTable();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#example2').DataTable();
        });
    </script>
    <script>
        var tabs = document.querySelectorAll('.info-box li a');
        var panels = document.querySelectorAll('.info-box article');

        for (i = 0; i < tabs.length; i++) {
            var tab = tabs[i];
            setTabHandler(tab, i);
        }

        function setTabHandler(tab, tabPos) {
            tab.onclick = function() {
                for (i = 0; i < tabs.length; i++) {
                    tabs[i].className = '';
                }

                tab.className = 'active';

                for (i = 0; i < panels.length; i++) {
                    panels[i].className = '';
                }

                panels[tabPos].className = 'active-panel';
            }
        }
    </script>
</body>

</html>