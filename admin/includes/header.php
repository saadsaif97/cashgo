<!DOCTYPE html>
<html lang="en">

<head>
    <title>cashgo editor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
<!--
    ||----------------------||
    ||LINKING DATA TABLE CSS||
    ||----------------------||
-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="
https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">
<!--||======================||-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/hbwlqpsh0tlgvyqu625rt4e09vcbkde71ygqnccn217c97ks/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<!--    INSERTING VUE JS-->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>

    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/menu_bar.css">
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
           <hr>
           <li><a href="posts.php" class="<?php if($currentPage== "posts"){echo 'current';} ?>">Posts</a></li>
           <li><a href="post-categories.php" class="<?php if($currentPage== "post-categories"){echo 'current';} ?>">Post categories</a></li>
           <hr>
           <li><a href="plan-cards.php" class="<?php if($currentPage== "planCards"){echo 'current';} ?>">Plan cards</a></li>
           <hr>
           <li><a href="plan-card-rows.php" class="<?php if($currentPage== "planCardRow"){echo 'current';} ?>">Plan card rows</a></li>
           <hr>
           <li><a href="comments.php" class="<?php if($currentPage== "comments"){echo 'current';} ?>">Comments</a></li>
       </ul>
   </div>