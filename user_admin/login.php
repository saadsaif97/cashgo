<!--incuding the database -->
<?php include_once 'inc/user_profile_db.php'; ?>
<?php
    if (isset($_SESSION['username'])) {
        header('Location: index.php');
    }

?>
<!--incuding the header-->
<?php include_once 'inc/header.php'; ?>
<?php

    if (isset($_POST['login'])) {
        // Check if the data was submitted, isset() function will check if the data exists.
        if (!$_POST['email'] || !$_POST['password']) {
            // Could not get the data that should have been sent.
            exit('Please complete the registration form!');
        }
        // Make sure the submitted registration values are not empty.
        if (empty($_POST['email']) || empty($_POST['password'])) {
            // One or more values are empty.
            exit('Please complete the login form');
        }

        $email = $_POST['email'];
        $password = $_POST['password'];

        // We need to check if the account with that username exists.
        if ($stmt = $pdo->prepare('SELECT * FROM `user_profile` WHERE email=?')) {
            $stmt->execute([$email]);

            //Store the result so we can check if the account exists in the database.
            if ($stmt->fetch()) {
                $user_q = $pdo->query("SELECT `password` FROM `user_profile` WHERE `email`='{$email}'");
                $db_pass = $user_q->fetchColumn();
                $user_q = null;

                if (password_verify($password, $db_pass)) {
                    $_SESSION['login_message'] = 'Logged in successfully';
                    $_SESSION['username'] = $username;
                    header('Location: index.php');
                } else {
                    // Either password or email is wrong
                    $_SESSION['warning_message'] = 'Either password or the email is worng.';
                }

                $stmt = null;
            } else {
                // Username already exists
                $_SESSION['warning_message'] = 'User with this email address does not exist.';
            }
        }
        $stmt = null;
    }

?>
</head>

<body>
    
    <div class="conteiner" style="display:grid; align-items:center; min-height:100vh;">
       <div class="row">
           
       <div class="col col-10 offset-1 col-md-6 offset-md-3 col-lg-4 offset-lg-4">
           
        <!--SUCCESS FLASH MESSAGE-->
        <?php if (isset($_SESSION['success_message'])) { ?>
                 <div class="alert alert-success">
                 <i class="fas fa-check-circle"></i>
                 <?php echo $_SESSION['success_message']; ?>
                 </div>
        <?php } ?>
        <?php unset($_SESSION['success_message']); ?>
        <!--SUCCESS FLASH MESSAGE-->
         
        <!--warning FLASH MESSAGE-->
        <?php if (isset($_SESSION['warning_message'])) { ?>
                 <div class="alert alert-warning">
                 <i class="fas fa-exclamation-circle"></i>
                 <?php echo $_SESSION['warning_message']; ?>
                 </div>
        <?php } ?>
        <?php unset($_SESSION['warning_message']); ?>
        <!--SUCCESS FLASH MESSAGE-->

         <h2>Login form</h2>
         
          <form action="#" method="post">
              <div class="input-group mb-3">
                  <input type="email" class="form-control" name="email" placeholder="Email" id="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email'], ENT_QUOTES) : ''; ?>" required>
                  <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"><i class="fas fa-envelope"></i></span>
                  </div>
              </div>
              <div class="input-group mb-3">
                  <input type="password" class="form-control" name="password" placeholder="Password" id="password" required>
                  <div class="input-group-append">
                      <span class="input-group-text" id="basic-addon2"><i class="fas fa-lock"></i></span>
                  </div>
              </div>
              <div class="input-group">
                  <input type="submit" name="login" value="Login" class="btn btn-primary">
              </div>
              <span style="float:right;">Do not have an account? | <a href="register.php" style="color:blue;">Register</a></span>
          </form>
       </div>   
       </div>
    </div>
    
    
    
<script>    
    setTimeout(function() {
        let alert = document.querySelector(".alert");
            alert.remove();
    }, 3000);
</script>
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
