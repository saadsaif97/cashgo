<!--incuding the header-->
<?php include_once 'inc/header.php';
include_once 'inc/user_profile_db.php'; ?>
<?php
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
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
            <?php $thisPage = 'referusers'; ?>
            <?php include_once 'inc/nav.php'; ?>

            <div class="dashboard-content">
                <h3 class="title1">Refer users to B4U Global</h3>
                <div class="main-page signup-page" style="background-color: white;">
                    <div class="sign-up-row">
                        <form class="form-horizontal" style="padding-top: 29px;padding-bottom: 29px;">
                            <input type="hidden" name="_token" value="">
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Full Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="">

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="">

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password">

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                </div>
                            </div>
                            <!-- Input Field Starts -->
                            <div class="form-group">
                                <label for="phone_no" class="col-md-4 control-label">Phone</label>

                                <div class="col-md-6">
                                    <div class="intl-tel-input allow-dropdown">
                                        <div class="flag-container">
                                            <div class="selected-flag" role="combobox" aria-owns="country-listbox" tabindex="0" title="United States: +1">
                                                <div class="iti-flag us"></div>
                                                <div class="iti-arrow"></div>
                                            </div>
                                        </div><input type="tel" class="form-control" id="phone_no" placeholder="+1 201-555-0123" name="phone_no" value="" required="" autocomplete="off" data-intl-tel-input-id="0">
                                    </div>


                                </div>
                            </div>
                            <!-- Input Field Ends -->
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-user"></i> Register
                                    </button>
                                </div>
                            </div>
                        </form>
                        <strong style="position: relative; left: 12px; top: -35px; position: relative;">You can also do this by sharing your referral link:
                            <p id="ref_link">
                                http://localhost/cashgo/user_admin/register.php?ref_id=<?php echo $user_id ?>
                            </p>
                            <button class="btn btn-primary" onclick="copyLink()" style="float: right; position: relative; left: -28px;">copy</button><br>
                            <div class="col-md-8 col-sm-6" id="div1">
                            </div>
                            <div class="col-md-2 col-sm-6">

                            </div>
                        </strong>

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
    <script>
        function copyLink() {
            /* Get the text field */
            var text = document.getElementById("ref_link").innerText;
            var elem = document.createElement("textarea");
            document.body.appendChild(elem);
            elem.value = text;
            elem.select();
            document.execCommand("copy");
            document.body.removeChild(elem);

            /* Alert the copied text */
            alert("Copied:\n" + text);
        }
    </script>
</body>

</html>