<!--incuding the database -->
<?php include_once"inc/user_profile_db.php"; ?>

<!--incuding the header-->
<?php include_once"inc/header.php"; ?>
<?php

    if(isset($_POST['register'])){
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
        
        $username=$_POST['username'];
        $password=$_POST['password'];
        $email=$_POST['email'];
        $contact=$_POST['contact'];
        $country=$_POST['country'];

        // We need to check if the account with that username exists.
        if ($stmt = $pdo->prepare('SELECT * FROM `user_profile` WHERE email=?')) {
            $stmt->execute([$email]);
            echo $stmt->rowCount();
            // Store the result so we can check if the account exists in the database.
                if ($stmt->rowCount() > 0) {
                // Username already exists
                    $_SESSION['warning_message']="User with this email address exists. Please register with other email address";
                } else {
                    $_SESSION['success_message']="User registered successfully";
                    
                    $sql = "INSERT INTO `user_profile` (username, password, email, country) VALUES (?,?,?,?)";
                    $stmt= $pdo->prepare($sql);
                    $stmt->execute([$username, $email, $password, $country]);
                    
                }
            $stmt=null;
        } else {
            // Something is wrong with the sql statement, check to make sure user_profile table exists with all 3 fields.
            $_SESSION['warning_message']="could not prepare the statement";
        }
        $stmt=null;
    }
?>
</head>

<body>
    
    <div class="conteiner" style="display:grid; align-items:center; min-height:100vh;">
       <div class="row">
           
       <div class="col col-10 offset-1 col-md-6 offset-md-3 col-lg-4 offset-lg-4">
           
        <!--SUCCESS FLASH MESSAGE-->
        <?php if(isset($_SESSION['success_message'])): ?>
                 <div class="alert alert-success">
                 <i class="fas fa-check-circle"></i>
                 <?php echo $_SESSION['success_message']; ?>
                 </div>
        <?php endif; ?>
        <?php unset($_SESSION['success_message']); ?>
        <!--SUCCESS FLASH MESSAGE-->
         
        <!--warning FLASH MESSAGE-->
        <?php if(isset($_SESSION['warning_message'])): ?>
                 <div class="alert alert-warning">
                 <i class="fas exclamation-circle"></i>
                 <?php echo $_SESSION['warning_message']; ?>
                 </div>
        <?php endif; ?>
        <?php unset($_SESSION['warning_message']); ?>
        <!--SUCCESS FLASH MESSAGE-->

         <h2>Register form</h2>
         
          <form action="#" method="post">
              <div class="input-group mb-3">
                  <input type="text" class="form-control" name="username" placeholder="Username" id="username" required>
                  <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"><i class="fas fa-user"></i></span>
                  </div>
              </div>
              <div class="input-group mb-3">
                  <input type="password" class="form-control" name="password" placeholder="Password" id="password" required>
                  <div class="input-group-append">
                      <span class="input-group-text" id="basic-addon2"><i class="fas fa-lock"></i></span>
                  </div>
              </div>
              <div class="input-group mb-3">
                  <input type="email" class="form-control" name="email" placeholder="Email" id="email" required>
                  <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"><i class="fas fa-envelope"></i></span>
                  </div>
              </div>
                  <p id="email_response"></p>
              <div class="input-group mb-3">
                  <input type="text" class="form-control" name="contact" placeholder="Phone number" id="contect" required>
                  <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"><i class="fas fa-phone"></i></span>
                  </div>
              </div>
              <div class="input-group mb-3">
                  <select class="form-control" name="country" placeholder="Country" id="country" required>
                      <?php
                        $url = 'https://api.first.org/data/v1/countries';
                        $countries = json_decode(file_get_contents($url), true);
                        $countries=$countries['data'];
                        foreach($countries as $countryObj){
                            echo "<option value='".$countryObj['country']."'>".$countryObj['country']."</option>";
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
       </div>   
       </div>
    </div>
    
    
    
<script>    
    setTimeout(function() {
        let alert = document.querySelector(".alert");
            alert.remove();
    }, 3000);
</script>

</body>



</html>
