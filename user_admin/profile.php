<!--incuding the header-->
<?php include_once 'inc/header.php';
include_once 'inc/user_profile_db.php'; ?>
<?php
    if (!isset($_SESSION['username'])) {
        header('Location: login.php');
    } else {
        $username = $_SESSION['username'];
        $user_data = $pdo->query("SELECT * FROM `user_profile` WHERE `username`='{$username}'")->fetch(PDO::FETCH_ASSOC);
        $id = $user_data['id'];
        $user_id = $user_data['user_id'];
        $user_parent_id = $user_data['parent_id'];
        $user_email = $user_data['email'];
        $user_contact = $user_data['contact'];
        $user_country = $user_data['country'];
    }

?>

<?php
    //   image upload
    if (isset($_POST['uImage']) && (!empty($_FILES['user_image']['type']))) {
        $errors = [];
        $maxsize = 2097152;
        $acceptable = [
            'image/jpeg',
            'image/jpg',
            'image/png'
        ];

        if (($_FILES['user_image']['size'] >= $maxsize) || ($_FILES['user_image']['size'] == 0)) {
            $errors[] = 'File too large. File must be less than 2 megabytes.';
        }

        if ((!in_array($_FILES['user_image']['type'], $acceptable)) && (!empty($_FILES['user_image']['type']))) {
            $errors[] = 'Invalid file type. Only JPG and PNG types are accepted.';
        }

        if (count($errors) === 0) {
            $extension = substr($_FILES['user_image']['name'], strpos($_FILES['user_image']['name'], '.'));
            $image_name = $user_id . $extension;
            move_uploaded_file($_FILES['user_image']['tmp_name'], 'images/user_img/' . $image_name);

            $user_img_update = $pdo->prepare("UPDATE `user_profile` SET `user_img`='$image_name' WHERE id='$id' ")->execute();

            $_SESSION['success_message'] = 'Image updated successfully';
            header("Refresh:0");
            exit();
        } else {
            foreach ($errors as $error) {
                $_SESSION['warning_message'] = $error . '<br/>';
            }
            header("Refresh:0");
            exit();
        }
    }
?>

</head>

<body>
    <!-- Preloader -->
    <!-- <div id="preloader">
        <div id="status"></div>
    </div> -->
    <!-- Preloader Ends -->

    <!-- start Container Wrapper -->

    <div id="container-wrapper">

   

        <!-- Dashboard -->
        <div id="dashboard">



            <!-- navigations -->
            <?php $thisPage = 'profile'; ?>
            <?php include_once 'inc/nav.php'; ?>

            <div class="dashboard-content">
                

                <h3 class="title1">Profile</h3>

                <!--success FLASH MESSAGE-->
                <?php if (isset($_SESSION['success_message'])) { ?>
                            <div class="alert alert-success">
                            <i class="fas fa-exclamation-circle"></i>
                            <?php echo $_SESSION['success_message']; ?>
                            </div>
                    <?php } ?>
                    <?php unset($_SESSION['success_message']); ?>
                    <!--success FLASH MESSAGE-->



                    <!--warning FLASH MESSAGE-->
                    <?php if (isset($_SESSION['warning_message'])) { ?>
                            <div class="alert alert-warning">
                            <i class="fas fa-exclamation-circle"></i>
                            <?php echo $_SESSION['warning_message']; ?>
                            </div>
                    <?php } ?>
                    <?php unset($_SESSION['warning_message']); ?>
                    <!--warning FLASH MESSAGE-->


                <div class="container" style="width: 100%;">
                    <div class="row">
                        <div class="sign-up  widget-shadow col-md-8 " style="padding: 20px">
                            <div style="text-align: center;">
                                <h4><label>Edit Wallet Account Information</label></h4>
                            </div>
                            <hr>
                            <div class="card-body">
                                <form method="post" action="/dashboard/updateacct" enctype="multipart/form-data">


                                    <div class="form-group">
                                        <label>BTC Address</label>
                                        <input class="form-control" type="text" name="btc_address" value="">
                                    </div>
                                    <div class="form-group">
                                        <label>Eth Address</label>

                                        <input class="form-control" type="text" name="eth_address" value="">
                                    </div>

                                    <div class="form-group">
                                        <label>BCH Address</label>
                                        <input class="form-control" type="text" name="bch_address" value="">
                                    </div>

                                    <div class="form-group">
                                        <label>LTC Address</label>
                                        <input class="form-control" type="text" name="ltc_address" value="">
                                    </div>

                                    <div class="form-group">
                                        <label>XRP Address | XRP-Tag</label><br>
                                        <input class="form-control" style="width: 70%; display: inline-block;" type="text" name="xrp_address1" value=""><input style="width: 30%; display: inline-block;" class="form-control" type="text" name="xrp_address2" value="" placeholder="XRP-TAG">
                                    </div>

                                    <div class="form-group">
                                        <label>DASH Address</label>
                                        <input class="form-control" type="text" name="dash_address" value="">
                                    </div>

                                    <div class="form-group">
                                        <label>ZEC Address</label>
                                        <input class="form-control" type="text" name="zec_address" value="">
                                    </div>
                                    <input type="hidden" name="" value="">
                                    <input type="hidden" name="_key" value="">

                                    <input type="hidden" name="_token" value="">
                                    <button type="submit" class="btn btn-sm btn-primary float-right" style="float: right;">Update Information</button>
                                </form>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="sign-up  widget-shadow col-md-10">
                                <div class="card-body">
                                    <!-- <img src="images/btc.png">
                                    <div class="text-center">
                                        <div class="avatar avatar-md">

                                        </div>
                                    </div>
                                    <hr> -->

                                    <div class="mb-3">

                                        <div class="small text-muted text-uppercase">
                                            <span class="badge badge-primary">Customer</span>
                                        </div><br>
                                        <div class="small text-muted text-uppercase"><strong>User Id: </strong><span><?php echo $user_id; ?></span></div>


                                    </div>

                                    <div class="mb-3">
                                        <div class="small text-muted text-uppercase"><strong>Parent Id: </strong><span><?php if ($user_parent_id) {
    echo $user_parent_id;
} else {
    echo 'null';
} ?></span></div>

                                    </div>



                                    <div class="mb-3">
                                        <div class="small text-muted text-uppercase"><strong>Name: </strong><span><?php echo $username; ?></span></div>

                                    </div>

                                    <div class="mb-3">
                                        <div class="small text-muted text-uppercase"><strong>Email:</strong><span style="font-size: 12px;"><?php echo $user_email; ?></span></div>

                                    </div>

                                    <div class="mb-3">
                                        <div class="small text-muted text-uppercase"><strong>Contact:</strong><span><?php echo $user_contact; ?></span></div>

                                    </div>

                                    <div class="mb-3">
                                        <div class="small text-muted text-uppercase"><strong>Account Details:</strong></div>
                                        <span>Bank: </span><br>
                                        <span>Account Title: </span><br>
                                        <span>Account Number: </span>
                                    </div>


                                    <div class="mb-3">
                                        <div class="small text-muted text-uppercase"><strong>Status</strong>

                                            <span>
                                                <span class="text-success">●</span>
                                                <span>Active</span>
                                            </span>

                                        </div>

                                    </div>

                                    <div class="mb-3">
                                        <div class="small text-muted text-uppercase">Country<strong> <span><?php echo $user_country; ?></span></strong></div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row" style=" margin-top: 20px; ">
                        <div class="sign-up  widget-shadow col-md-8" style="padding: 20px; ">
                            <div style="text-align: center;">
                                <h4><label>Edit Account Information</label></h4>
                            </div>
                            <hr>
                            <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label style="text-align:left;" class="control-label col-sm-3">Name:</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="name" required value="<?php echo $username; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label style="text-align:left;" class="control-label col-sm-3">Phone No :</label>
                                    <div class="col-sm-9">
                                       <input type="text" id="contact" value="<?php if ($user_contact) {
    echo $user_contact;
} ?>" placeholder="Your contact number">
                                    </div>
                                <p id="invalid_contact" style="color:red; text-align:right;"></p>
                                </div>
                                <div class="form-group">
                                    <label style="text-align:left;" class="control-label col-sm-3">Country :</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="Country" id="countryid" onchange="searchBanks();" style="width: 45%;">
                                            <option value="">Select Country</option>
                                            <option value="Afghanistan">Afghanistan </option>
                                            <option value="Albania">Albania </option>
                                            <option value="Algeria">Algeria </option>
                                            <option value="American Samoa">American Samoa </option>
                                            <option value="Andorra">Andorra </option>
                                            <option value="Angola">Angola </option>
                                            <option value="Anguilla">Anguilla </option>
                                            <option value="Antarctica">Antarctica </option>
                                            <option value="Antigua and Barbuda">Antigua and Barbuda </option>
                                            <option value="Argentina">Argentina </option>
                                            <option value="Armenia">Armenia </option>
                                            <option value="Aruba">Aruba </option>
                                            <option value="Australia">Australia </option>
                                            <option value="Austria">Austria </option>
                                            <option value="Azerbaijan">Azerbaijan </option>
                                            <option value="Bahamas">Bahamas </option>
                                            <option value="Bahrain">Bahrain </option>
                                            <option value="Bangladesh">Bangladesh </option>
                                            <option value="Barbados">Barbados </option>
                                            <option value="Belarus">Belarus </option>
                                            <option value="Belgium">Belgium </option>
                                            <option value="Belize">Belize </option>
                                            <option value="Benin">Benin </option>
                                            <option value="Bermuda">Bermuda </option>
                                            <option value="Bhutan">Bhutan </option>
                                            <option value="Bolivia">Bolivia </option>
                                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina </option>
                                            <option value="Botswana">Botswana </option>
                                            <option value="Bouvet Island">Bouvet Island </option>
                                            <option value="Brazil">Brazil </option>
                                            <option value="British Indian Ocean Territory">British Indian Ocean Territory </option>
                                            <option value="Brunei Darussalam">Brunei Darussalam </option>
                                            <option value="Bulgaria">Bulgaria </option>
                                            <option value="Burkina Faso">Burkina Faso </option>
                                            <option value="Burundi">Burundi </option>
                                            <option value="Cambodia">Cambodia </option>
                                            <option value="Cameroon">Cameroon </option>
                                            <option value="Canada">Canada </option>
                                            <option value="Cape Verde">Cape Verde </option>
                                            <option value="Cayman Islands">Cayman Islands </option>
                                            <option value="Central African Republic">Central African Republic </option>
                                            <option value="Chad">Chad </option>
                                            <option value="Chile">Chile </option>
                                            <option value="China">China </option>
                                            <option value="Christmas Island">Christmas Island </option>
                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands </option>
                                            <option value="Colombia">Colombia </option>
                                            <option value="Comoros">Comoros </option>
                                            <option value="Congo">Congo </option>
                                            <option value="Cook Islands">Cook Islands </option>
                                            <option value="Costa Rica">Costa Rica </option>
                                            <option value="Croatia (Hrvatska)">Croatia (Hrvatska) </option>
                                            <option value="Cuba">Cuba </option>
                                            <option value="Cyprus">Cyprus </option>
                                            <option value="Czech Republic">Czech Republic </option>
                                            <option value="Denmark">Denmark </option>
                                            <option value="Djibouti">Djibouti </option>
                                            <option value="Dominica">Dominica </option>
                                            <option value="Dominican Republic">Dominican Republic </option>
                                            <option value="East Timor">East Timor </option>
                                            <option value="Ecuador">Ecuador </option>
                                            <option value="Egypt">Egypt </option>
                                            <option value="El Salvador">El Salvador </option>
                                            <option value="Equatorial Guinea">Equatorial Guinea </option>
                                            <option value="Eritrea">Eritrea </option>
                                            <option value="Estonia">Estonia </option>
                                            <option value="Ethiopia">Ethiopia </option>
                                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas) </option>
                                            <option value="Faroe Islands">Faroe Islands </option>
                                            <option value="Fiji">Fiji </option>
                                            <option value="Finland">Finland </option>
                                            <option value="France">France </option>
                                            <option value="France, Metropolitan">France, Metropolitan </option>
                                            <option value="French Guiana">French Guiana </option>
                                            <option value="French Polynesia">French Polynesia </option>
                                            <option value="French Southern Territories">French Southern Territories </option>
                                            <option value="Gabon">Gabon </option>
                                            <option value="Gambia">Gambia </option>
                                            <option value="Georgia">Georgia </option>
                                            <option value="Germany">Germany </option>
                                            <option value="Ghana">Ghana </option>
                                            <option value="Gibraltar">Gibraltar </option>
                                            <option value="Guernsey">Guernsey </option>
                                            <option value="Greece">Greece </option>
                                            <option value="Greenland">Greenland </option>
                                            <option value="Grenada">Grenada </option>
                                            <option value="Guadeloupe">Guadeloupe </option>
                                            <option value="Guam">Guam </option>
                                            <option value="Guatemala">Guatemala </option>
                                            <option value="Guinea">Guinea </option>
                                            <option value="Guinea-Bissau">Guinea-Bissau </option>
                                            <option value="Guyana">Guyana </option>
                                            <option value="Haiti">Haiti </option>
                                            <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands </option>
                                            <option value="Honduras">Honduras </option>
                                            <option value="Hong Kong">Hong Kong </option>
                                            <option value="Hungary">Hungary </option>
                                            <option value="Iceland">Iceland </option>
                                            <option value="India">India </option>
                                            <option value="Isle of Man">Isle of Man </option>
                                            <option value="Indonesia">Indonesia </option>
                                            <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of) </option>
                                            <option value="Iraq">Iraq </option>
                                            <option value="Ireland">Ireland </option>
                                            <option value="Israel">Israel </option>
                                            <option value="Italy">Italy </option>
                                            <option value="Ivory Coast">Ivory Coast </option>
                                            <option value="Jersey">Jersey </option>
                                            <option value="Jamaica">Jamaica </option>
                                            <option value="Japan">Japan </option>
                                            <option value="Jordan">Jordan </option>
                                            <option value="Kazakhstan">Kazakhstan </option>
                                            <option value="Kenya">Kenya </option>
                                            <option value="Kiribati">Kiribati </option>
                                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of </option>
                                            <option value="Korea, Republic of">Korea, Republic of </option>
                                            <option value="Kosovo">Kosovo </option>
                                            <option value="Kuwait">Kuwait </option>
                                            <option value="Kyrgyzstan">Kyrgyzstan </option>
                                            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic </option>
                                            <option value="Latvia">Latvia </option>
                                            <option value="Lebanon">Lebanon </option>
                                            <option value="Lesotho">Lesotho </option>
                                            <option value="Liberia">Liberia </option>
                                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya </option>
                                            <option value="Liechtenstein">Liechtenstein </option>
                                            <option value="Lithuania">Lithuania </option>
                                            <option value="Luxembourg">Luxembourg </option>
                                            <option value="Macau">Macau </option>
                                            <option value="Macedonia">Macedonia </option>
                                            <option value="Madagascar">Madagascar </option>
                                            <option value="Malawi">Malawi </option>
                                            <option value="Malaysia">Malaysia </option>
                                            <option value="Maldives">Maldives </option>
                                            <option value="Mali">Mali </option>
                                            <option value="Malta">Malta </option>
                                            <option value="Marshall Islands">Marshall Islands </option>
                                            <option value="Martinique">Martinique </option>
                                            <option value="Mauritania">Mauritania </option>
                                            <option value="Mauritius">Mauritius </option>
                                            <option value="Mayotte">Mayotte </option>
                                            <option value="Mexico">Mexico </option>
                                            <option value="Micronesia, Federated States of">Micronesia, Federated States of </option>
                                            <option value="Moldova, Republic of">Moldova, Republic of </option>
                                            <option value="Monaco">Monaco </option>
                                            <option value="Mongolia">Mongolia </option>
                                            <option value="Montenegro">Montenegro </option>
                                            <option value="Montserrat">Montserrat </option>
                                            <option value="Morocco">Morocco </option>
                                            <option value="Mozambique">Mozambique </option>
                                            <option value="Myanmar">Myanmar </option>
                                            <option value="Namibia">Namibia </option>
                                            <option value="Nauru">Nauru </option>
                                            <option value="Nepal">Nepal </option>
                                            <option value="Netherlands">Netherlands </option>
                                            <option value="Netherlands Antilles">Netherlands Antilles </option>
                                            <option value="New Caledonia">New Caledonia </option>
                                            <option value="New Zealand">New Zealand </option>
                                            <option value="Nicaragua">Nicaragua </option>
                                            <option value="Niger">Niger </option>
                                            <option value="Nigeria">Nigeria </option>
                                            <option value="Niue">Niue </option>
                                            <option value="Norfolk Island">Norfolk Island </option>
                                            <option value="Northern Mariana Islands">Northern Mariana Islands </option>
                                            <option value="Norway">Norway </option>
                                            <option value="Oman">Oman </option>
                                            <option value="Pakistan" selected="">Pakistan </option>
                                            <option value="Palau">Palau </option>
                                            <option value="Palestine">Palestine </option>
                                            <option value="Panama">Panama </option>
                                            <option value="Papua New Guinea">Papua New Guinea </option>
                                            <option value="Paraguay">Paraguay </option>
                                            <option value="Peru">Peru </option>
                                            <option value="Philippines">Philippines </option>
                                            <option value="Pitcairn">Pitcairn </option>
                                            <option value="Poland">Poland </option>
                                            <option value="Portugal">Portugal </option>
                                            <option value="Puerto Rico">Puerto Rico </option>
                                            <option value="Qatar">Qatar </option>
                                            <option value="Reunion">Reunion </option>
                                            <option value="Romania">Romania </option>
                                            <option value="Russian Federation">Russian Federation </option>
                                            <option value="Rwanda">Rwanda </option>
                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis </option>
                                            <option value="Saint Lucia">Saint Lucia </option>
                                            <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines </option>
                                            <option value="Samoa">Samoa </option>
                                            <option value="San Marino">San Marino </option>
                                            <option value="Sao Tome and Principe">Sao Tome and Principe </option>
                                            <option value="Saudi Arabia">Saudi Arabia </option>
                                            <option value="Senegal">Senegal </option>
                                            <option value="Serbia">Serbia </option>
                                            <option value="Seychelles">Seychelles </option>
                                            <option value="Sierra Leone">Sierra Leone </option>
                                            <option value="Singapore">Singapore </option>
                                            <option value="Slovakia">Slovakia </option>
                                            <option value="Slovenia">Slovenia </option>
                                            <option value="Solomon Islands">Solomon Islands </option>
                                            <option value="Somalia">Somalia </option>
                                            <option value="South Africa">South Africa </option>
                                            <option value="South Georgia South Sandwich Islands">South Georgia South Sandwich Islands </option>
                                            <option value="South Sudan">South Sudan </option>
                                            <option value="Spain">Spain </option>
                                            <option value="Sri Lanka">Sri Lanka </option>
                                            <option value="St. Helena">St. Helena </option>
                                            <option value="St. Pierre and Miquelon">St. Pierre and Miquelon </option>
                                            <option value="Sudan">Sudan </option>
                                            <option value="Suriname">Suriname </option>
                                            <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands </option>
                                            <option value="Swaziland">Swaziland </option>
                                            <option value="Sweden">Sweden </option>
                                            <option value="Switzerland">Switzerland </option>
                                            <option value="Syrian Arab Republic">Syrian Arab Republic </option>
                                            <option value="Taiwan">Taiwan </option>
                                            <option value="Tajikistan">Tajikistan </option>
                                            <option value="Tanzania, United Republic of">Tanzania, United Republic of </option>
                                            <option value="Thailand">Thailand </option>
                                            <option value="Togo">Togo </option>
                                            <option value="Tokelau">Tokelau </option>
                                            <option value="Tonga">Tonga </option>
                                            <option value="Trinidad and Tobago">Trinidad and Tobago </option>
                                            <option value="Tunisia">Tunisia </option>
                                            <option value="Turkey">Turkey </option>
                                            <option value="Turkmenistan">Turkmenistan </option>
                                            <option value="Turks and Caicos Islands">Turks and Caicos Islands </option>
                                            <option value="Tuvalu">Tuvalu </option>
                                            <option value="Uganda">Uganda </option>
                                            <option value="Ukraine">Ukraine </option>
                                            <option value="United Arab Emirates">United Arab Emirates </option>
                                            <option value="United Kingdom">United Kingdom </option>
                                            <option value="United States">United States </option>
                                            <option value="United States minor outlying islands">United States minor outlying islands </option>
                                            <option value="Uruguay">Uruguay </option>
                                            <option value="Uzbekistan">Uzbekistan </option>
                                            <option value="Vanuatu">Vanuatu </option>
                                            <option value="Vatican City State">Vatican City State </option>
                                            <option value="Venezuela">Venezuela </option>
                                            <option value="Vietnam">Vietnam </option>
                                            <option value="Virgin Islands (British)">Virgin Islands (British) </option>
                                            <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.) </option>
                                            <option value="Wallis and Futuna Islands">Wallis and Futuna Islands </option>
                                            <option value="Western Sahara">Western Sahara </option>
                                            <option value="Yemen">Yemen </option>
                                            <option value="Zaire">Zaire </option>
                                            <option value="Zambia">Zambia </option>
                                            <option value="Zimbabwe">Zimbabwe </option>
                                            <option value="Europe">Europe </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label style="text-align:left;" class="control-label col-sm-3">Bank Name:</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="bank_name" id="bank_nameId" onchange="selectBank();" style="width: 45%;">
                                            <option value="Al Baraka BANK"> Al Baraka BANK</option>
                                            <option value="ALLIED BANK"> ALLIED BANK</option>
                                            <option value="Askari Bank"> Askari Bank</option>
                                            <option value="Bank Alfalah"> Bank Alfalah</option>
                                            <option value="Bank AlHabib"> Bank AlHabib</option>
                                            <option value="Bank Islami"> Bank Islami</option>
                                            <option value="Dubai Islamic Bank"> Dubai Islamic Bank</option>
                                            <option value="Faysal Bank"> Faysal Bank</option>
                                            <option value="First Women Bank"> First Women Bank</option>
                                            <option value="Finca Microfinace Bank"> Finca Microfinace Bank</option>
                                            <option value="Habib Bank"> Habib Bank</option>
                                            <option value="Habib Metropolitan Bank"> Habib Metropolitan Bank</option>
                                            <option value="JS Bank"> JS Bank</option>
                                            <option value="MCB Bank"> MCB Bank</option>
                                            <option value="MCB Islamic Bank"> MCB Islamic Bank</option>
                                            <option value="Meezan Bank"> Meezan Bank</option>
                                            <option value="National Bank of Pakistan"> National Bank of Pakistan</option>
                                            <option value="S.M.E. Bank"> S.M.E. Bank</option>
                                            <option value="Samba Bank"> Samba Bank</option>
                                            <option value="Silk Bank Limited"> Silk Bank Limited</option>
                                            <option value="Sindh Bank"> Sindh Bank</option>
                                            <option value="Soneri Bank"> Soneri Bank</option>
                                            <option value="Standard Chartered Bank"> Standard Chartered Bank</option>
                                            <option value="Summit Bank"> Summit Bank</option>
                                            <option value="The Bank of Khyber"> The Bank of Khyber</option>
                                            <option value="The Bank of Punjab"> The Bank of Punjab</option>
                                            <option value="United Bank Limited"> United Bank Limited</option>
                                            <option value="HSBC Bank"> HSBC Bank</option>
                                            <option value="Zarai Taraqiati Bank"> Zarai Taraqiati Bank</option>
                                            <option value="First Microfinance Bank"> First Microfinance Bank</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label style="text-align:left;" class="control-label col-sm-3">Account Title:</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="account_name" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label style="text-align:left;" class="control-label col-sm-3"> IBAN
                                        : <small><a href="#" onclick="Ibanimg();">(What is this?)</a></small> </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="account_no" value="" placeholder="Example: PK12ABCD1234567891234567" style="text-transform:uppercase;">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label style="text-align:left;" class="control-label col-sm-3">Acc. Holder Ph#:</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="acc_hold_No" placeholder="Example: 03331234567" value="">
                                    </div>
                                </div>


                                <div class="form-group">

                                    <label style="text-align:left;" class="control-label col-sm-3">Next of kin <a href="" >(?)</a>
                                        :</label>
                                    <div class="col-sm-9">

                                        <textarea class="form-control" name="kin_bank_info" rows="5"></textarea>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-9">
                                        <button type="submit" class="btn btn-sm btn-primary">Update Information</button>
                                        <a href="index.html" class="btn btn-sm btn-info">Update KYC</a>
                                    </div>
                                </div>
                            </form>




                        </div>

                        <div class="sign-up col-md-4">
                        
                       

                        

                            <div class="sign-up widget-shadow col-md-10" style="padding: 20px;">
                                <label>Change Avatar</label>
                                <hr>
                                <div class="card-body">
                                    <form method="post" action="#" enctype="multipart/form-data" style="text-align:center;">
                                        <small>.jpg, .jpeg or .png only</small>
                                        <input type="file" name="user_image" id="user_image" accept=".jpg,.png,.jpeg|image/*">
                                        <input type="submit" name="uImage" class="mt-3 btn btn-sm btn-primary" value="Update image">
                                    </form>
                                </div>
                            </div>


                            <?php 
                                if(isset($_POST['update_password'])){
                                    $curr_pass = $_POST['curr_pass'];
                                    $pass = $_POST['pass'];
                                    $cpass = $_POST['cpass'];
                                    if($curr_pass && $pass && $cpass){
                                        $user_q = $pdo->query("SELECT * FROM `user_profile` WHERE `user_id`='{$user_id}'");
                                        $row = $user_q->fetch(PDO::FETCH_ASSOC);
                                        $user_q = null;
                                        $user_curr_pass = $row['password'];
                                        if(password_verify($curr_pass, $user_curr_pass)){
                                            if($pass===$cpass){
                                                //The hash of the password that can be stored in the database
                                                $hash = password_hash($password, PASSWORD_DEFAULT);
                                                
                                                $user_pass_update = $pdo->prepare("UPDATE `user_profile` SET `password`='$hash' WHERE user_id='$user_id' ")->execute();

                                                $_SESSION['success_message'] = 'Password updated successfully';
                                                header("Refresh:0");
                                            }else{
                                                $_SESSION['warning_message'] = 'please validate your new password';
                                                header("Refresh:0");
                                            }
                                        }else{
                                            $_SESSION['warning_message'] = 'current password mismatched';
                                            header("Refresh:0");
                                        }
                                    }else{
                                        $_SESSION['warning_message'] = 'all fields required';
                                        header("Refresh:0");
                                    }
                                }
                            
                            ?>


                            <div class="sign-up  widget-shadow col-md-10" style="padding: 10px;   margin-top: 10px;  ">
                                <label>Change Password</label>
                                <hr>
                                <div class="card-body">
                                    <form method="post" action="#">
                                        <div class="form-group">
                                            <input class="form-control" type="password" name="curr_pass" placeholder="Current Password" required>
                                            
                                            <input class="form-control" type="password" name="pass" placeholder="New Password*" required>
                                            
                                            <input class="form-control" type="password" name="cpass" placeholder="Confirm Password*" required>
                                        </div>
                                        <input type="submit" name="update_password" class="mt-3 btn btn-sm btn-primary" value="Update password">
                                    </form>
                                </div>

                            </div>
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
    <!--Validating the phone number-->
<script>
    let contact = document.getElementById('contact');
    contact.addEventListener('keyup', function(e) {
		let validNum = e.target.value.match(/^[+]*[(]{0,1}[0-9]{1,3}[)]{0,1}[-\s\./0-9]*$/g);
        let len = e.target.value.length;
        if(!validNum && (len > 0)){
            document.getElementById('invalid_contact').innerHTML = "Please input the valid phone number!";
        }else{
            document.getElementById('invalid_contact').innerHTML = "";
        }
	});
</script>
<script>    
    setTimeout(function() {
        let alert = document.querySelector(".alert");
            alert.remove();
    }, 3000);
</script>
</body>

</html>
