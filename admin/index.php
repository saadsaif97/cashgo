<?php include "../includes/db.php"; ?>

<?php


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
            <div class="container p-3 mt-5" style="box-shadow: 0 2px 2px rgba(0,0,0,0.3); border-radius:10px;">
               <h6>Current title:</h6>
                <h2 class="text-muted"><?php echo $currentTitle; ?></h2>
                <hr>
                <h6>Update the title:</h6>
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" name="title" id="title">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-info" name="updateTitle" value="Update Title">
                    </div>
                </form>
                <hr>
                <h6>Current tagline:</h6>
                <h2 class="text-muted"><?php echo $currentTagLine; ?></h2>
                <hr>
                <h6>Update the tagline:</h6>
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="tagLine">Tagline:</label>
                        <input type="text" name="tagLine" id="tagLine">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-info" name="updateTagLine" value="Update Tagline">
                    </div>
                </form>
            </div>
            
            
            

        </main>
    </div>
</div>


</body>
</html>
