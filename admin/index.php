<?php include "../includes/db.php"; ?>

<?php
/*///////////////////////
*   TITLE & TAGLINE HERE
*////////////////////////
//    updating the logo
    if(isset($_POST['update_logo'])){
        
        $imagename=$_FILES["logo"]["name"]; 

        //Get the content of the image and then add slashes to it 
        $imagetmp=$_FILES['logo']['tmp_name'];

        //Insert the image name and image content in image_table
        $query="UPDATE `home` SET `logo`='$imagename'";

        mysqli_query($con,$query);
        
        move_uploaded_file($imagetmp, "../assets/img/$imagename");
        
    }
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
        $tagLine=$_POST['tag_line'];
        $query="UPDATE `home` SET `tag_line`='$tagLine'";
        $q_res=mysqli_query($con,$query);
        if(!$q_res){
            die("query failed ".mysqli_error($con));
        }else{
            header("Refreash:1");
        }
    }
//============================
    if(isset($_POST['submit_image'])){
        
        $imagename=$_FILES["myimage"]["name"]; 

        //Get the content of the image and then add slashes to it 
        $imagetmp=$_FILES['myimage']['tmp_name'];

        //Insert the image name and image content in image_table
        $query="UPDATE `home` SET `hero_img`='$imagename'";

        mysqli_query($con,$query);
        
        move_uploaded_file($imagetmp, "../assets/img/$imagename");
        
    }

//    showing current values
    $query="SELECT * FROM `home`";
    $q_res=mysqli_query($con,$query);
    if(!$q_res){
        die("query failed ".mysqli_error($con));
    }
    $row=mysqli_fetch_assoc($q_res);   
    $currentLogo=$row['logo'];
    $currentTitle=$row['title'];
    $currentTagLine=$row['tag_line'];
    $currentHreoImg=$row['hero_img'];
    $currentC1Title=$row['card1_title'];
    $currentC1Content=$row['card1_content'];
    $currentC2Title=$row['card2_title'];
    $currentC2Content=$row['card2_content'];
    $currentC3Title=$row['card3_title'];
    $currentC3Content=$row['card3_content'];
    $currentC4Title=$row['card4_title'];
    $currentC4Content=$row['card4_content'];
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
        $query="UPDATE `home` SET `card1_title`='$title'";
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
        $query="UPDATE `home` SET `card1_content`='$title'";
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
        $query="UPDATE `home` SET `card2_title`='$title'";
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
        $query="UPDATE `home` SET `card2_content`='$title'";
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
        $query="UPDATE `home` SET `card3_title`='$title'";
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
        $query="UPDATE `home` SET `card3_content`='$title'";
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
        $query="UPDATE `home` SET `card4_title`='$title'";
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
        $query="UPDATE `home` SET `card4_content`='$title'";
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/hbwlqpsh0tlgvyqu625rt4e09vcbkde71ygqnccn217c97ks/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
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
            <main class="col py-5">
              <!--           000000000000000000-->
                <!--           logo update-->
                <!--           000000000000000000-->
                <div class="container p-3" style="box-shadow: 0 0 2px 2px rgba(0,0,0,0.2); border-radius:10px;">
                    <h6 >logo:</h6>
                    <img style="width:132px;" class="mb-3" src="../assets/img/<?php echo $currentLogo; ?>" alt="backgound image">
                    <form action="#" method="post" enctype="multipart/form-data">
                        <input type="file" name="logo">
                        <input type="submit" name="update_logo" class="btn btn-info btn-sm my-3" value="Update logo">
                    </form>
                </div>
               
                <!--           000000000000000000-->
                <!--            title and tagline-->
                <!--           000000000000000000-->
                <div class="container p-3 mt-5" style="box-shadow: 0 0 2px 2px rgba(0,0,0,0.2); border-radius:10px; background-image:linear-gradient(to bottom, rgb(29 36 127 / 50%) 0%, rgba(20,18,19,0.6) 90%, #141213 100% ),url(../assets/img/<?php echo $currentHreoImg; ?>); background-size:cover; color:#fff;">
                    <h3 class="font-weight-bold">Hero Area</h3>
                    <hr>
                    <div>
                        <i class="fa fa-edit icon" style="color:#17a2b8;"></i>
                        <h6 style="display:inline;">title:</h6>
                        <?php echo $currentTitle; ?>
                        <form action="#" method="post" class="mt-3" style="display:none;">
                            <textarea name="title" id="title" style="width:100%;" rows="10"><?php echo $currentTitle; ?></textarea>
                            <input type="submit" class="btn btn-info btn-sm my-3" name="updateTitle" value="Update Title">
                        </form>
                    </div>
                    <div>
                        <i class="fa fa-edit icon" style="color:#17a2b8;"></i>
                        <h6 class="mt-3" style="display:inline;">tagline:</h6>
                        <?php echo $currentTagLine; ?>
                        <form action="#" method="post" class="mt-3" style="display:none;">
                            <textarea name="tag_line" id="tag_line" style="width:100%;" rows="10"><?php echo $currentTagLine; ?></textarea>
                            <input type="submit" class="btn btn-info btn-sm my-3" name="updateTagLine" value="Update Tagline">
                        </form>
                    </div>
                    <h6 class="mt-3">background image:</h6>
<!--                    <img style="width:200px;" class="mb-3" src="../assets/img/<?php echo $currentHreoImg; ?>" alt="backgound image">-->
                    <form action="#" method="post" enctype="multipart/form-data">
                        <input type="file" name="myimage">
                        <input type="submit" name="submit_image" class="btn btn-info btn-sm my-3" value="Update Image">
                    </form>
                </div>
                <!--           00000000000000-->
                <!--            cards control-->
                <!--           00000000000000-->
                <div class="container p-3 mt-5" style="box-shadow: 0 0 2px 2px rgba(0,0,0,0.2); border-radius:10px;">
                    <h3 class="font-weight-bold">Cards</h3>
                    <hr>
                    <div style="display:grid; grid-template-columns: repeat( auto-fit, minmax(410px, 1fr)); grid-gap:50px;">
                        <!--               CARD ONE-->
                        <div>
                            <h5>Card 1</h5>
                            <div>
                            <i class="fa fa-edit icon" style="color:#17a2b8;"></i>
                            <h6 style="display:inline;">title:</h6>
                            <?php echo $currentC1Title; ?>
                            <form action="#" method="post" class="mt-3" style="display:none;">
                                <textarea name="hc1t" id="hc1t" style="width:100%;" rows="10"><?php echo $currentC1Title; ?></textarea>
                                <input type="submit" class="btn btn-info btn-sm my-3" name="updateC1Title" value="Update Title">
                            </form>
                            </div>
                            <div>
                            <i class="fa fa-edit icon" style="color:#17a2b8;"></i>
                            <h6 class="mt-3" style="display:inline;">content:</h6>
                            <?php echo $currentC1Content; ?>
                            <form action="#" method="post" style="display:none;" class="mt-3">
                                <textarea name="hc1c" id="hc1c" style="width:100%;" rows="10"><?php echo $currentC1Content; ?></textarea>
                                <input type="submit" class="btn btn-info btn-sm my-3" name="updateC1Conent" value="Update Title">
                            </form>
                            </div>
                        </div>

                        <!--               CARD TWO-->
                        <div>
                            <h5>Card 2</h5>
                            <div>
                            <i class="fa fa-edit icon" style="color:#17a2b8;"></i>
                            <h6 style="display:inline;">title:</h6>
                            <?php echo $currentC2Title; ?>
                            <form action="#" method="post" class="mt-3" style="display:none;">
                                <textarea name="hc2t" id="hc2t" style="width:100%;" rows="10"><?php echo $currentC2Title; ?></textarea>
                                <input type="submit" class="btn btn-info btn-sm my-3" name="updateC2Title" value="Update Title">
                            </form>
                            </div>
                            <div>
                            <i class="fa fa-edit icon" style="color:#17a2b8;"></i>
                            <h6 class="mt-3" style="display:inline;">content:</h6>
                            <?php echo $currentC2Content; ?>
                            <form action="#" method="post" style="display:none;" class="mt-3">
                                <textarea name="hc2c" id="hc2c" style="width:100%;" rows="10"><?php echo $currentC2Content; ?></textarea>
                                <input type="submit" class="btn btn-info btn-sm my-3" name="updateC2Conent" value="Update Title">
                            </form>
                            </div>
                        </div>
                        <!--               CARD THREE-->
                        <div>
                            <h5>Card 3</h5>
                            <div>
                            <i class="fa fa-edit icon" style="color:#17a2b8;"></i>
                            <h6 style="display:inline;">title:</h6>
                            <?php echo $currentC3Title; ?>
                            <form action="#" method="post" class="mt-3" style="display:none;">
                                <textarea name="hc3t" id="hc3t" style="width:100%;" rows="10"><?php echo $currentC3Title; ?></textarea>
                                <input type="submit" class="btn btn-info btn-sm my-3" name="updateC3Title" value="Update Title">
                            </form>
                            </div>
                            <div>
                            <i class="fa fa-edit icon" style="color:#17a2b8;"></i>
                            <h6 class="mt-3" style="display:inline;">content:</h6>
                            <?php echo $currentC3Content; ?>
                            <form action="#" method="post" style="display:none;" class="mt-3">
                                <textarea name="hc3c" id="hc3c" style="width:100%;" rows="10"><?php echo $currentC3Content; ?></textarea>
                                <input type="submit" class="btn btn-info btn-sm my-3" name="updateC3Conent" value="Update Title">
                            </form>
                            </div>
                        </div>

                        <!--               CARD FOUR-->
                        <div>
                            <h5>Card 4</h5>
                            <div>
                            <i class="fa fa-edit icon" style="color:#17a2b8;"></i>
                            <h6 style="display:inline;">title:</h6>
                            <?php echo $currentC4Title; ?>
<!--                            <h4 class="text-muted d-block"><?php echo $currentC4Title; ?></h4>-->
                            <form action="#" method="post" class="mt-3" style="display:none;">
                                <textarea name="hc4t" id="hc4t" style="width:100%;" rows="10"><?php echo $currentC4Title; ?></textarea>
                                <input type="submit" class="btn btn-info btn-sm my-3" name="updateC4Title" value="Update Title">
                            </form>
                            </div>
                            <div>
                            <i class="fa fa-edit icon" style="color:#17a2b8;"></i>
                            <h6 class="mt-3" style="display:inline;">content:</h6>
                            <?php echo $currentC4Content; ?>
<!--                            <p class="text-muted d-block"><?php echo $currentC4Content; ?></p>-->
                            <form action="#" method="post" style="display:none;" class="mt-3">
                                <textarea name="hc4c" id="hc4c" style="width:100%;" rows="10"><?php echo $currentC4Content; ?></textarea>
                                <input type="submit" class="btn btn-info btn-sm my-3" name="updateC4Conent" value="Update Title">
                            </form>
                            </div>
                        </div>
                    </div>
                </div>


            </main>
        </div>
    </div>
    <script>
        let editors = document.querySelectorAll(".fa-edit");
        editors.forEach(edit=>{
        edit.addEventListener("click", (e) => {
            let myForm = e.target.parentElement.querySelector("form");
            console.log(myForm);
            if (myForm.style.display === "none") {
                myForm.style.display = "block";
                e.target.style.color = "#333";
            } else {
                myForm.style.display = "none";
                e.target.style.color = "#17a2b8";
            }
        })});

        tinymce.init({
            selector: 'textarea',
            plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
            toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
            toolbar_mode: 'floating',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
        });

    </script>

</body>

</html>
