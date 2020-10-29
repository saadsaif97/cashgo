<!DOCTYPE html>
<html lang="en">

<head>
    <title>cashgo editor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/hbwlqpsh0tlgvyqu625rt4e09vcbkde71ygqnccn217c97ks/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/menu_bar.css">
    <link rel="stylesheet" href="assets/css/modal.css">
</head>

<body>

   <div class="nav_bar">
      <a href="#">
      <i class="fa fa-bars"></i>
      </a>
       <img style="width:132px;" src="../assets/img/<?php echo $currentLogo; ?>" alt="backgound image">
   </div>
   <div class="side_bar" id="side_bar">
       <ul>
           <li><a href="index.php" class="<?php if($currentPage== "home"){echo 'current';} ?>">Home</a></li>
           <li><a href="how-it-works.php" class="<?php if($currentPage== "howItWorks"){echo 'current';} ?>">How it works</a></li>
           <li><a href="#" class="<?php if($currentPage== "post"){echo 'current';} ?>">Post</a></li>
           <li><a href="#" class="<?php if($currentPage== "other"){echo 'current';} ?>">Other</a></li>
       </ul>
   </div>