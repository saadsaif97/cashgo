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

//    showing current title
    $query="SELECT * FROM `home`";
    $q_res=mysqli_query($con,$query);
    if(!$q_res){
        die("query failed ".mysqli_error($con));
    }
    $row=mysqli_fetch_assoc($q_res);
    $currentTitle=$row['title'];
//============================

//    adding hreo bg image
//    if (isset($_POST['updateImg'])) {
//        // Get image name
//        $image = $_FILES['image']['name'];
//        // Get text
//        $image_text = mysqli_real_escape_string($db, $_POST['image_text']);
//
//        // image file directory
//        $target = "images/".basename($image);
//
//        $sql = "INSERT INTO images (image, image_text) VALUES ('$image', '$image_text')";
//        // execute query
//        mysqli_query($db, $sql);
//
//        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
//            $msg = "Image uploaded successfully";
//        }else{
//            $msg = "Failed to upload image";
//        }
//    }
//    $result = mysqli_query($db, "SELECT * FROM images");
//================================
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
            <div class="container pt-4">
               <h3>Current title:</h3>
                <h2 class="text-muted"><?php echo $currentTitle; ?></h2>
                <hr>
                <h3>Update the title:</h3>
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" name="title" id="title">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="updateTitle" value="Update">
                    </div>
                </form>
            </div>
<!--
            <div class="container pt-4">
                <h3>Update the hero img:</h3>
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" name="title" id="title">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="updateImg" value="Update">
                    </div>
                </form>
            </div>
-->
        </main>
    </div>
</div>


</body>
</html>
