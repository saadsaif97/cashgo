<?php
    // if (!isset($_SESSION['username'])) {
    //     header('Location: login.php');
    // } else {
        $username = $_SESSION['username'];
        $user_data = $pdo->query("SELECT * FROM `user_profile` WHERE `username`='{$username}'")->fetch(PDO::FETCH_ASSOC);
        $user_img = $user_data['user_img'];
        $user_id = $user_data['user_id'];
    // }

?>
            <!-- Responsive Navigation Trigger -->
            <a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>

           <div class="dashboard-sticky-nav">
                <div class="content-left pull-left">
                    <a href="index.php"><img src="images/logo.png" alt="logo"></a>
                </div>
                <div class="content-right pull-right">
                    <div class="search-bar">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" id="search" placeholder="Search Now">
                                <a href="#"><span class="search_btn"><i class="fa fa-search" aria-hidden="true"></i></span></a>
                            </div>
                        </form>
                    </div>
                    <div class="dropdown">
                        <a href="profile.php">
                            <div class="profile-sec">
                                <div class="dash-image">
                                    <?php ($user_img === ("https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?d=mp&f=y")) ? ($img_variable="$user_img") : ($img_variable="images/user_img/$user_img"); ?>
                                    <img  src=<?php echo $img_variable; ?> alt="user photo">
                                </div>
                                <div class="dash-content">
                                    <h4><?php echo $username; ?></h4>
                                    <span>Customer</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <div class="dropdown-item">
                                <i class="sl sl-icon-bell"></i>
                                <span class="notify">3</span>
                            </div>
                        </a>
                        <div class="dropdown-menu notification-menu">
                            <h4> 599 Notifications</h4>
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="notification-item">
                                            <div class="notification-image">
                                                <img src="images/comment.jpg" alt="">
                                            </div>
                                            <div class="notification-content">
                                                <p>You have a notification.</p><span class="notification-time">2 hours ago</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="notification-item">
                                            <div class="notification-image">
                                                <img src="images/comment.jpg" alt="">
                                            </div>
                                            <div class="notification-content">
                                                <p>You have a notification.</p><span class="notification-time">2 hours ago</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="notification-item">
                                            <div class="notification-image">
                                                <img src="images/comment.jpg" alt="">
                                            </div>
                                            <div class="notification-content">
                                                <p>You have a notification.</p><span class="notification-time">2 hours ago</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <p class="all-noti"><a href="#">See all notifications</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dashboard-nav">
           
                <div class="dashboard-nav-inner">
                     <ul>
                        <li <?php echo 'index' == $thisPage ? "class='active'" : ''; ?> ><a href="index.php"><i class="sl sl-icon-settings"></i> Dashboard</a></li>

                        <li <?php echo 'deposit' == $thisPage ? "class='active'" : ''; ?> ><a href="deposit.php"><i class="sl sl-icon-plus"></i> Deposits</a></li>
                        
                        <li <?php echo 'donations' == $thisPage ? "class='active'" : ''; ?> ><a href="Donations.php"><i class="fas fa-donate"></i>Donations</a></li>
                        
                        <li <?php echo 'withdraw' == $thisPage ? "class='active'" : ''; ?> ><a href="Withdraw.php"><i class="far fa-folder-open"></i> Withdrawals</a></li>
                        
                        <li <?php echo 'sold' == $thisPage ? "class='active'" : ''; ?> ><a href="Sold.php"><i class="fas fa-coins"></i>Sold</a></li>
                        
                        <li <?php echo 'investmentplans' == $thisPage ? "class='active'" : ''; ?> ><a href="Investmentplans.php"><i class="fas fa-cog"></i> Investment plans</a></li>
                        
                        <li <?php echo 'profitcalculator' == $thisPage ? "class='active'" : ''; ?> ><a href="profitcalculator.php"><i class="fas fa-cog"></i>Profit Calculator</a></li>
                        
                        <li <?php echo 'referusers' == $thisPage ? "class='active'" : ''; ?> ><a href="Referusers.php"><i class="fas fa-users"></i> Refer Users</a></li>
                        
                        <li <?php echo 'referralpartners' == $thisPage ? "class='active'" : ''; ?> ><a href="ReferralPartners.php"><i class="fas fa-users"></i> Your Partners</a></li>
                        
                        <li <?php echo 'promotions' == $thisPage ? "class='active'" : ''; ?> >
                            <a><i class="sl sl-icon-layers"></i>Promotions</a>
                            <ul>
                                <li><a href="Promotions.php">SixMonth Promo Invesment</a></li>
                                <li><a href="Promotions.php">SixMonth Promo List</a></li>
                            </ul>
                        </li>
                        
                        <li><a href="logout.php"><i class="sl sl-icon-power"></i> Logout</a></li>
                        
                    </ul>
                </div>
            </div>