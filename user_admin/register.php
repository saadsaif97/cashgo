<!--incuding the header-->
<?php include_once 'inc/header.php';
include_once 'inc/user_profile_db.php'; ?>
<?php

    if (isset($_POST['register'])) {
        // Check if the data was submitted, isset() function will check if the data exists.
        if (!isset($_POST['username'], $_POST['password'], $_POST['email'])) {
            // Could not get the data that should have been sent.
            exit('Please complete the registration form!');
        }
        // Make sure the submitted registration values are not empty.
        if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) {
            // One or more values are empty.
            exit('Please complete the registration form');
        }

        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpass = $_POST['cpass'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $country = $_POST['country'];

        //Email validation
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

            // We need to check if the account with that username exists.
            if ($stmt = $pdo->prepare('SELECT * FROM `user_profile` WHERE email=?')) {
                $stmt->execute([$email]);

                //Store the result so we can check if the account exists in the database.
                if ($stmt->fetch()) {
                    // Username already exists
                    $_SESSION['warning_message'] = 'User with this email address exists. Please register with other email address';
                } else {
                    if (preg_match_all("/^[+]*[(]{0,1}[0-9]{1,3}[)]{0,1}[-\s\.\/0-9]*$/", $contact)) {
                        if ($password != $cpass) {
                            $_SESSION['warning_message'] = 'Please confirm your password correctly!';
                        } else {

                            
                            if(isset($_GET['ref_id'])){//if used the referral id

                                $ref_id=$_GET['ref_id'];

                                // user from db
                                $user_in_db = $pdo->query("SELECT `user_id` FROM `user_profile` WHERE `user_id`='{$ref_id}' ")->fetchColumn();
                                if($user_in_db){// user exists 

                                    //The hash of the password that can be stored in the database
                                    $hash = password_hash($password, PASSWORD_DEFAULT);

                                    //$verify = password_verify($password, $hash);
                                    //echo $verify; first is the password from the user and other is the encrypted
                                    $last_user_q = $pdo->query('SELECT `id` FROM `user_profile` ORDER BY id DESC LIMIT 1');
                                    $recent_id = $last_user_q->fetchColumn();
                                    $last_user_q = null;
                                    $uid;
                                    $uid = time();
                                    $uid .= ++$recent_id;
                                    $uid = 'TW' . $uid;
                                    $parent_id = $user_in_db;
                                    
                                    // inserting the user in the user table
                                    $sql = 'INSERT INTO `user_profile` (username, password, email, country, contact, user_id, parent_id) VALUES (?,?,?,?,?,?,?)';
                                    $stmt = $pdo->prepare($sql);
                                    $stmt->execute([$username, $hash, $email, $country, $contact, $uid, $parent_id]);
                                    
                                    // inserting the user in the referral table
                                    $sql = 'INSERT INTO `user_referrals` (user_id,ref_id) VALUES (?,?)';
                                    $stmt = $pdo->prepare($sql);
                                    $stmt->execute([$uid, $user_in_db]);
        
                                    $_SESSION['success_message'] = 'User registered successfully';
                                    header('Refresh:0');
                                    exit();
                                    
                                }else{
                                    // Invalid referral id
                                    $_SESSION['warning_message'] = 'Invalid referral Id';
                                }

                            }else{//if not used the referral id

                                //The hash of the password that can be stored in the database
                                $hash = password_hash($password, PASSWORD_DEFAULT);

                                //$verify = password_verify($password, $hash);
                                //echo $verify; first is the password from the user and other is the encrypted
                                $last_user_q = $pdo->query('SELECT `id` FROM `user_profile` ORDER BY id DESC LIMIT 1');
                                $recent_id = $last_user_q->fetchColumn();
                                $last_user_q = null;
                                $uid;
                                $uid = time();
                                $uid .= ++$recent_id;
                                $uid = 'TW' . $uid;
    
                                // inserting the user in the user table
                                $sql = 'INSERT INTO `user_profile` (username, password, email, country, contact, user_id) VALUES (?,?,?,?,?,?)';
                                $stmt = $pdo->prepare($sql);
                                $stmt->execute([$username, $hash, $email, $country, $contact, $uid]);
    
                                $_SESSION['success_message'] = 'User registered successfully';
                                header('Refresh:0');
                                exit();
                            }

                        }
                        $stmt = null;
                    } else {
                        // Invalid phone number
                        $_SESSION['warning_message'] = 'Please fill provide the correct phone number';
                    }
                }
                $stmt = null;
            } else {
                // Something is wrong with the sql statement, check to make sure user_profile table exists with all 3 fields.
                $_SESSION['warning_message'] = 'could not prepare the statement';
            }
            $stmt = null;
        } else {
            // EMAIL not valid
            $_SESSION['email_invalid_message'] = 'Email is invalid please use a valid email!';
        }
    }
?>
</head>
<body>
    
    <div class="conteiner" style="display:grid; align-items:center; min-height:100vh;">
       <div class="row">
           
       <div class="col col-10 offset-1 col-md-6 offset-md-3 col-lg-4 offset-lg-4">
           
        <!--SUCCESS FLASH MESSAGE-->
        <?php if (isset($_SESSION['success_message'])): ?>
                 <div class="alert alert-success">
                 <i class="fas fa-check-circle"></i>
                 <?php echo $_SESSION['success_message']; ?>
                 </div>
        <?php endif; ?>
        <?php unset($_SESSION['success_message']); ?>
        <!--SUCCESS FLASH MESSAGE-->
         
        <!--warning FLASH MESSAGE-->
        <?php if (isset($_SESSION['warning_message'])): ?>
                 <div class="alert alert-warning">
                 <i class="fas fa-exclamation-circle"></i>
                 <?php echo $_SESSION['warning_message']; ?>
                 </div>
        <?php endif; ?>
        <?php unset($_SESSION['warning_message']); ?>
        <!--SUCCESS FLASH MESSAGE-->

        <h2>Registeration form</h2>
          <form action="#" method="post">
              <div class="input-group mb-3">
                  <input type="text" class="form-control" name="username" placeholder="Username" id="username" value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username'], ENT_QUOTES) : ''; ?>" required>
                  <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"><i class="fas fa-user"></i></span>
                  </div>
              </div>
              <div class="input-group mb-3">
                  <input type="email" class="form-control" name="email" placeholder="Email" id="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email'], ENT_QUOTES) : ''; ?>" required>
                  <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"><i class="fas fa-envelope"></i></span>
                  </div>
                    <!--INVALID EMAIL FLASH MESSAGE-->
                    <?php if (isset($_SESSION['email_invalid_message'])): ?>
                             <div class="alert alert-warning">
                             <i class="fas fa-check-circle"></i>
                             <?php echo $_SESSION['email_invalid_message']; ?>
                             </div
                    <?php endif; ?>
                    <?php unset($_SESSION['email_invalid_message']); ?>
                    <!-- EMAIL FLASH MESSAGE-->
              </div>
              <div class="input-group mb-3">
                  <input type="password" class="form-control" name="password" placeholder="Password" id="password" required>
                  <div class="input-group-append">
                      <span class="input-group-text" id="basic-addon2"><i class="fas fa-lock"></i></span>
                  </div>
              </div>
              <div class="input-group mb-3">
                  <input type="password" class="form-control" name="cpass" placeholder="Confirm password" id="cpass" required>
                  <div class="input-group-append">
                      <span class="input-group-text" id="basic-addon2"><i class="fas fa-lock"></i></span>
                  </div>
              </div>
              <label for="ref">Referral Id:</label>
              <div class="input-group mb-3">
                  <input type="text" class="form-control" name="ref" placeholder="Referral Id (if any)" id="ref" value="<?php echo isset($_GET['ref_id']) ? htmlspecialchars($_GET['ref_id'], ENT_QUOTES) : ''; ?>" required>
                  <div class="input-group-append">
                      <span class="input-group-text" id="basic-addon2"><i class="fas fa-user-friends"></i></span>
                  </div>
              </div>
              <div class="input-group mb-3">
                  <input type="text" class="form-control" name="contact" placeholder="Phone number" id="contact" value="<?php echo isset($_POST['contact']) ? htmlspecialchars($_POST['contact'], ENT_QUOTES) : ''; ?>"  required>
                  <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"><i class="fas fa-phone"></i></span>
                  </div>
              </div>
                 <small>
                  <p id="invalid_contact" style="float:right; color:orangered;"></p>
                 </small>
              <div class="input-group mb-3">
                  <select class="form-control" name="country" placeholder="Country" id="country" required>
                      <?php
                        $url = 'https://api.first.org/data/v1/countries';
                        $countries = json_decode(file_get_contents($url), true);
                        $countries = $countries['data'];
                        foreach ($countries as $countryObj) {
                            ?>    
                            <option value='<?php echo $countryObj['country']; ?>' <?php echo (isset($_POST['country']) && $_POST['country'] === $countryObj['country']) ? 'selected' : ''; ?> ><?php echo $countryObj['country']; ?></option>;
                        <?php
                        }
                        ?>
                        
                  </select>
                  <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"><i class="fas fa-flag"></i></span>
                  </div>
              </div>
              <div class="input-group">
                    <input type="submit" name="register" value="Register" class="btn btn-primary">
              </div>
          </form>
          <span style="float:right;">Already have account? | <a href="login.php" style="color:blue;">Login</a></span>
       </div>   
       </div>
    </div>
    
    
    
<script>    
    setTimeout(function() {
        let alert = document.querySelector(".alert");
            alert.remove();
    }, 3000);
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

</body>



</html>
