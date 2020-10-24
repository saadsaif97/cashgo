<?php include "../includes/db.php"; ?>

<?php
/*///////////////////////
*   TITLE & TAGLINE HERE
*////////////////////////
//    updating the title
    if(isset($_POST['updateTitle'])){
        $title=$_POST['title'];
        $query="UPDATE `home` SET `title`='$title'";
        $q_res=mysqli_query($con,$query);
        if(!$q_res){
            die("query failed ".mysqli_error($con));
        }else{
            header("Refreash:1");
        }
    }
//============================

//    updating the tagline
    if(isset($_POST['updateTagLine'])){
        $tagLine=$_POST['tagLine'];
        $query="UPDATE `home` SET `tagLine`='$tagLine'";
        $q_res=mysqli_query($con,$query);
        if(!$q_res){
            die("query failed ".mysqli_error($con));
        }else{
            header("Refreash:1");
        }
    }
//============================

//    showing current title
    $query="SELECT * FROM `home`";
    $q_res=mysqli_query($con,$query);
    if(!$q_res){
        die("query failed ".mysqli_error($con));
    }
    $row=mysqli_fetch_assoc($q_res);   
    $currentTitle=$row['title'];
    $currentTagLine=$row['tagLine'];
    $currentC1Title=$row['hc1t'];
    $currentC1Content=$row['hc1c'];
    $currentC2Title=$row['hc2t'];
    $currentC2Content=$row['hc2c'];
    $currentC3Title=$row['hc3t'];
    $currentC3Content=$row['hc3c'];
    $currentC4Title=$row['hc4t'];
    $currentC4Content=$row['hc4c'];
//============================

/*/////////////////////////////
*   CARDS TITLE & DESCRIPTION
*   
*   hc1t --means--> home card one title
*   hc1c --means--> home card one content
*   
*//////////////////////////////
//      CARD ONE
//    card one title
    if(isset($_POST['updateC1Title'])){
        $title=$_POST['hc1t'];
        $query="UPDATE `home` SET `hc1t`='$title'";
        $q_res=mysqli_query($con,$query);
        if(!$q_res){
            die("query failed ".mysqli_error($con));
        }else{
            header("Refreash:1");
        }
    }
//    card one content
    if(isset($_POST['updateC1Conent'])){
        $title=$_POST['hc1c'];
        $query="UPDATE `home` SET `hc1c`='$title'";
        $q_res=mysqli_query($con,$query);
        if(!$q_res){
            die("query failed ".mysqli_error($con));
        }else{
            header("Refreash:1");
        }
    }
//============================
//      CARD TWO
//    card two title
    if(isset($_POST['updateC2Title'])){
        $title=$_POST['hc2t'];
        $query="UPDATE `home` SET `hc2t`='$title'";
        $q_res=mysqli_query($con,$query);
        if(!$q_res){
            die("query failed ".mysqli_error($con));
        }else{
            header("Refreash:1");
        }
    }
//    card two content
    if(isset($_POST['updateC2Conent'])){
        $title=$_POST['hc2c'];
        $query="UPDATE `home` SET `hc2c`='$title'";
        $q_res=mysqli_query($con,$query);
        if(!$q_res){
            die("query failed ".mysqli_error($con));
        }else{
            header("Refreash:1");
        }
    }
//============================
//      CARD THREE
//    card three title
    if(isset($_POST['updateC3Title'])){
        $title=$_POST['hc3t'];
        $query="UPDATE `home` SET `hc3t`='$title'";
        $q_res=mysqli_query($con,$query);
        if(!$q_res){
            die("query failed ".mysqli_error($con));
        }else{
            header("Refreash:1");
        }
    }
//    card three content
    if(isset($_POST['updateC3Conent'])){
        $title=$_POST['hc3c'];
        $query="UPDATE `home` SET `hc3c`='$title'";
        $q_res=mysqli_query($con,$query);
        if(!$q_res){
            die("query failed ".mysqli_error($con));
        }else{
            header("Refreash:1");
        }
    }
//============================
//      CARD FOUR
//    card four title
    if(isset($_POST['updateC4Title'])){
        $title=$_POST['hc4t'];
        $query="UPDATE `home` SET `hc4t`='$title'";
        $q_res=mysqli_query($con,$query);
        if(!$q_res){
            die("query failed ".mysqli_error($con));
        }else{
            header("Refreash:1");
        }
    }
//    card four content
    if(isset($_POST['updateC4Conent'])){
        $title=$_POST['hc4c'];
        $query="UPDATE `home` SET `hc4c`='$title'";
        $q_res=mysqli_query($con,$query);
        if(!$q_res){
            die("query failed ".mysqli_error($con));
        }else{
            header("Refreash:1");
        }
    }
//============================

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid h-100">
    <div class="row h-100">
        <aside class="col-12 col-md-2 p-0 bg-dark">
            <nav class="navbar navbar-expand navbar-dark bg-dark flex-md-column flex-row align-items-start">
                <div class="collapse navbar-collapse">
                    <ul class="flex-md-column flex-row navbar-nav w-100 justify-content-between">
                        <li class="nav-item">
                            <a class="nav-link pl-0" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-0" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-0" href="#">Services</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </aside>
        <main class="col">
<!--           000000000000000000-->
<!--            title and tagline-->
<!--           000000000000000000-->
            <div class="container p-3 mt-5" style="box-shadow: 0 2px 2px rgba(0,0,0,0.3); border-radius:10px;">
               <h3>Hero Area</h3>
                <h6>title:</h6>
                <h4 class="text-muted d-inline"><?php echo $currentTitle; ?></h4>
                <form action="#" method="post" class="mt-3">
                        <input type="text" name="title" id="title" placeholder="new title">
                        <input type="submit" class="btn btn-info btn-sm" name="updateTitle" value="Update Title">
                </form>
                <h6 class="mt-3">tagline:</h6>
                <h4 class="text-muted d-inline"><?php echo $currentTagLine; ?></h4>
                <form action="#" method="post" class="mt-3">
                    <input type="text" name="tagLine" id="tagLine" placeholder="new tagline">
                    <input type="submit" class="btn btn-info btn-sm" name="updateTagLine" value="Update Tagline">
                </form>
            </div>
<!--           00000000000000-->
<!--            cards control-->
<!--           00000000000000-->
            <div class="container p-3 mt-5" style="box-shadow: 0 2px 2px rgba(0,0,0,0.3); border-radius:10px; display:grid; grid-template-columns: repeat( auto-fit, minmax(280px, 1fr)); grid-gap:20px;">
<!--               CARD ONE-->
              <div>   
                   <h3>Card one</h3>
                    <h6>title:</h6>
                    <h4 class="text-muted d-inline"><?php echo $currentC1Title; ?></h4>
                    <form action="#" method="post" class="mt-3">
                            <input type="text" name="hc1t" id="hc1t" placeholder="card one title">
                            <input type="submit" class="btn btn-info btn-sm" name="updateC1Title" value="Update Title">
                    </form>
                    <h6 class="mt-3">content:</h6>
                    <p class="text-muted d-inline"><?php echo $currentC1Content; ?></p>
                    <form action="#" method="post" class="mt-3">
                            <input type="text" name="hc1c" id="hc1c" placeholder="card one conent">
                            <input type="submit" class="btn btn-info btn-sm" name="updateC1Conent" value="Update Title">
                    </form>
              </div>
                
<!--               CARD TWO-->
              <div>   
                   <h3>Card two</h3>
                    <h6>title:</h6>
                    <h4 class="text-muted d-inline"><?php echo $currentC2Title; ?></h4>
                    <form action="#" method="post" class="mt-3">
                            <input type="text" name="hc2t" id="hc2t" placeholder="card one title">
                            <input type="submit" class="btn btn-info btn-sm" name="updateC2Title" value="Update Title">
                    </form>
                    <h6 class="mt-3">content:</h6>
                    <p class="text-muted d-inline"><?php echo $currentC2Content; ?></p>
                    <form action="#" method="post" class="mt-3">
                    <input type="text" name="hc2c" id="hc2c" placeholder="card one conent">
                    <input type="submit" class="btn btn-info btn-sm" name="updateC2Conent" value="Update Title">
                    </form>
              </div>
               
<!--               CARD THREE-->
              <div>   
                   <h3>Card three</h3>
                    <h6>title:</h6>
                    <h4 class="text-muted d-inline"><?php echo $currentC3Title; ?></h4>
                    <form action="#" method="post" class="mt-3">
                            <input type="text" name="hc3t" id="hc3t" placeholder="card one title">
                            <input type="submit" class="btn btn-info btn-sm" name="updateC3Title" value="Update Title">
                    </form>
                    <h6 class="mt-3">content:</h6>
                    <p class="text-muted d-inline"><?php echo $currentC3Content; ?></p>
                    <form action="#" method="post" class="mt-3">
                    <input type="text" name="hc3c" id="hc3c" placeholder="card one conent">
                    <input type="submit" class="btn btn-info btn-sm" name="updateC3Conent" value="Update Title">
                    </form>
              </div>
               
<!--               CARD FOUR-->
              <div>   
                   <h3>Card four</h3>
                    <h6>title:</h6>
                    <h4 class="text-muted d-inline"><?php echo $currentC4Title; ?></h4>
                    <form action="#" method="post" class="mt-3">
                            <input type="text" name="hc4t" id="hc4t" placeholder="card one title">
                            <input type="submit" class="btn btn-info btn-sm" name="updateC4Title" value="Update Title">
                    </form>
                    <h6 class="mt-3">content:</h6>
                    <p class="text-muted d-inline"><?php echo $currentC4Content; ?></p>
                    <form action="#" method="post" class="mt-3">
                    <input type="text" name="hc4c" id="hc4c" placeholder="card one conent">
                    <input type="submit" class="btn btn-info btn-sm" name="updateC4Conent" value="Update Title">
                    </form>
              </div>
                
            </div>
            

        </main>
    </div>
</div>


</body>
</html>
