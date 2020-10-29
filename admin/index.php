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


/*/////////////////////////////
*   CARDS TITLE & DESCRIPTION
*   
*   hc1t --means--> home card one title
*   hc1c --means--> home card one content
*   
*//////////////////////////////
/*
*******************************
         CARD 1
*******************************
*/
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
/*
*******************************
         CARD 2
*******************************
*/
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
/*
*******************************
         CARD 3
*******************************
*/
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
/*
*******************************
         CARD 4
*******************************
*/
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
//    s1 line1
    if(isset($_POST['updateS1L1'])){
        $s1_line1=$_POST['s1_line1'];
        $query="UPDATE `home` SET `s1_line1`='$s1_line1'";
        $q_res=mysqli_query($con,$query);
        if(!$q_res){
            die("query failed ".mysqli_error($con));
        }else{
            header("Refreash:1");
        }
    }
//============================
/*
*******************************
         SECTION 1
*******************************
*/
//    s1 line2
    if(isset($_POST['updateS1L2'])){
        $s1_line2=$_POST['s1_line2'];
        $query="UPDATE `home` SET `s1_line2`='$s1_line2'";
        $q_res=mysqli_query($con,$query);
        if(!$q_res){
            die("query failed ".mysqli_error($con));
        }else{
            header("Refreash:1");
        }
    }
//============================
//    s1 content
    if(isset($_POST['updateS1Content'])){
        $s1_content=$_POST['s1_content'];
        $query="UPDATE `home` SET `s1_content`='$s1_content'";
        $q_res=mysqli_query($con,$query);
        if(!$q_res){
            die("query failed ".mysqli_error($con));
        }else{
            header("Refreash:1");
        }
    }
//============================
/*
*******************************
         SECTION 2
*******************************
*/
//    s2 line1
    if(isset($_POST['updateS2L1'])){
        $s2_line1=$_POST['s2_line1'];
        $query="UPDATE `home` SET `s2_line1`='$s2_line1'";
        $q_res=mysqli_query($con,$query);
        if(!$q_res){
            die("query failed ".mysqli_error($con));
        }else{
            header("Refreash:1");
        }
    }
//============================
//    s2 line2
    if(isset($_POST['updateS2L2'])){
        $s2_line2=$_POST['s2_line2'];
        $query="UPDATE `home` SET `s2_line2`='$s2_line2'";
        $q_res=mysqli_query($con,$query);
        if(!$q_res){
            die("query failed ".mysqli_error($con));
        }else{
            header("Refreash:1");
        }
    }
//============================
/*
*******************************
         SECTION 3
*******************************
*/
//    s3 line1
    if(isset($_POST['updateS3L1'])){
        $s3_line1=$_POST['s3_line1'];
        $query="UPDATE `home` SET `s3_line1`='$s3_line1'";
        $q_res=mysqli_query($con,$query);
        if(!$q_res){
            die("query failed ".mysqli_error($con));
        }else{
            header("Refreash:1");
        }
    }
//============================
//    s3 line2
    if(isset($_POST['updateS3L2'])){
        $s3_line2=$_POST['s3_line2'];
        $query="UPDATE `home` SET `s3_line2`='$s3_line2'";
        $q_res=mysqli_query($con,$query);
        if(!$q_res){
            die("query failed ".mysqli_error($con));
        }else{
            header("Refreash:1");
        }
    }
//============================
//    s3 title1
    if(isset($_POST['updateS3T1'])){
        $s3_title1=$_POST['s3_title1'];
        $query="UPDATE `home` SET `s3_title1`='$s3_title1'";
        $q_res=mysqli_query($con,$query);
        if(!$q_res){
            die("query failed ".mysqli_error($con));
        }else{
            header("Refreash:1");
        }
    }
//============================
//    s3 content1
    if(isset($_POST['updateS3C1'])){
        $s3_content1=$_POST['s3_content1'];
        $query="UPDATE `home` SET `s3_content1`='$s3_content1'";
        $q_res=mysqli_query($con,$query);
        if(!$q_res){
            die("query failed ".mysqli_error($con));
        }else{
            header("Refreash:1");
        }
    }
//============================
//    s3 title2
    if(isset($_POST['updateS3T2'])){
        $s3_title2=$_POST['s3_title2'];
        $query="UPDATE `home` SET `s3_title2`='$s3_title2'";
        $q_res=mysqli_query($con,$query);
        if(!$q_res){
            die("query failed ".mysqli_error($con));
        }else{
            header("Refreash:1");
        }
    }
//============================
//    s3 content2
    if(isset($_POST['updateS3C2'])){
        $s3_content2=$_POST['s3_content2'];
        $query="UPDATE `home` SET `s3_content2`='$s3_content2'";
        $q_res=mysqli_query($con,$query);
        if(!$q_res){
            die("query failed ".mysqli_error($con));
        }else{
            header("Refreash:1");
        }
    }
//============================
//    s3 title3
    if(isset($_POST['updateS3T3'])){
        $s3_title3=$_POST['s3_title3'];
        $query="UPDATE `home` SET `s3_title3`='$s3_title3'";
        $q_res=mysqli_query($con,$query);
        if(!$q_res){
            die("query failed ".mysqli_error($con));
        }else{
            header("Refreash:1");
        }
    }
//============================
//    s3 content3
    if(isset($_POST['updateS3C3'])){
        $s3_content3=$_POST['s3_content3'];
        $query="UPDATE `home` SET `s3_content3`='$s3_content3'";
        $q_res=mysqli_query($con,$query);
        if(!$q_res){
            die("query failed ".mysqli_error($con));
        }else{
            header("Refreash:1");
        }
    }
//============================
//    s3 title4
    if(isset($_POST['updateS3T4'])){
        $s3_title4=$_POST['s3_title4'];
        $query="UPDATE `home` SET `s3_title4`='$s3_title4'";
        $q_res=mysqli_query($con,$query);
        if(!$q_res){
            die("query failed ".mysqli_error($con));
        }else{
            header("Refreash:1");
        }
    }
//============================
//    s3 content4
    if(isset($_POST['updateS3C4'])){
        $s3_content4=$_POST['s3_content4'];
        $query="UPDATE `home` SET `s3_content4`='$s3_content4'";
        $q_res=mysqli_query($con,$query);
        if(!$q_res){
            die("query failed ".mysqli_error($con));
        }else{
            header("Refreash:1");
        }
    }
//============================
/*
*******************************
         TESTIMONIALS
*******************************
*/
//TESTIMONIAL 1
//    t1 link
    if(isset($_POST['updateT1L'])){
        $t1_link=$_POST['t1_link'];
        $query="UPDATE `home` SET `t1_link`='$t1_link'";
        $q_res=mysqli_query($con,$query);
        if(!$q_res){
            die("query failed ".mysqli_error($con));
        }else{
            header("Refreash:1");
        }
    }
//============================
//    t1 content
    if(isset($_POST['updateT1C'])){
        $t1_content=$_POST['t1_content'];
        $query="UPDATE `home` SET `t1_content`='$t1_content'";
        $q_res=mysqli_query($con,$query);
        if(!$q_res){
            die("query failed ".mysqli_error($con));
        }else{
            header("Refreash:1");
        }
    }
//============================
//    t1 name
    if(isset($_POST['updateT1N'])){
        $t1_name=$_POST['t1_name'];
        $query="UPDATE `home` SET `t1_name`='$t1_name'";
        $q_res=mysqli_query($con,$query);
        if(!$q_res){
            die("query failed ".mysqli_error($con));
        }else{
            header("Refreash:1");
        }
    }
//============================
//TESTIMONIAL 2
//    t2 link
    if(isset($_POST['updateT2L'])){
        $t2_link=$_POST['t2_link'];
        $query="UPDATE `home` SET `t2_link`='$t2_link'";
        $q_res=mysqli_query($con,$query);
        if(!$q_res){
            die("query failed ".mysqli_error($con));
        }else{
            header("Refreash:1");
        }
    }
//============================
//    t2 content
    if(isset($_POST['updateT2C'])){
        $t2_content=$_POST['t2_content'];
        $query="UPDATE `home` SET `t2_content`='$t2_content'";
        $q_res=mysqli_query($con,$query);
        if(!$q_res){
            die("query failed ".mysqli_error($con));
        }else{
            header("Refreash:1");
        }
    }
//============================
//    t2 name
    if(isset($_POST['updateT2N'])){
        $t2_name=$_POST['t2_name'];
        $query="UPDATE `home` SET `t2_name`='$t2_name'";
        $q_res=mysqli_query($con,$query);
        if(!$q_res){
            die("query failed ".mysqli_error($con));
        }else{
            header("Refreash:1");
        }
    }
//============================
//TESTIMONIAL 3
//    t3 link
    if(isset($_POST['updateT3L'])){
        $t3_link=$_POST['t3_link'];
        $query="UPDATE `home` SET `t3_link`='$t3_link'";
        $q_res=mysqli_query($con,$query);
        if(!$q_res){
            die("query failed ".mysqli_error($con));
        }else{
            header("Refreash:1");
        }
    }
//============================
//    t3 content
    if(isset($_POST['updateT3C'])){
        $t3_content=$_POST['t3_content'];
        $query="UPDATE `home` SET `t3_content`='$t3_content'";
        $q_res=mysqli_query($con,$query);
        if(!$q_res){
            die("query failed ".mysqli_error($con));
        }else{
            header("Refreash:1");
        }
    }
//============================
//    t3 name
    if(isset($_POST['updateT3N'])){
        $t3_name=$_POST['t3_name'];
        $query="UPDATE `home` SET `t3_name`='$t3_name'";
        $q_res=mysqli_query($con,$query);
        if(!$q_res){
            die("query failed ".mysqli_error($con));
        }else{
            header("Refreash:1");
        }
    }
//============================


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
    $currentS1Line1=$row['s1_line1'];
    $currentS1Line2=$row['s1_line2'];
    $currentS1Content=$row['s1_content'];
    $currentS2Line1=$row['s2_line1'];
    $currentS2Line2=$row['s2_line2'];
    $currentS3Line1=$row['s3_line1'];
    $currentS3Line2=$row['s3_line2'];
    $currentS3Title1=$row['s3_title1'];
    $currentS3Content1=$row['s3_content1'];
    $currentS3Title2=$row['s3_title2'];
    $currentS3Content2=$row['s3_content2'];
    $currentS3Title3=$row['s3_title3'];
    $currentS3Content3=$row['s3_content3'];
    $currentS3Title4=$row['s3_title4'];
    $currentS3Content4=$row['s3_content4'];
    $currentT1L=$row['t1_link'];
    $currentT1C=$row['t1_content'];
    $currentT1N=$row['t1_name'];
    $currentT2L=$row['t2_link'];
    $currentT2C=$row['t2_content'];
    $currentT2N=$row['t2_name'];
    $currentT3L=$row['t3_link'];
    $currentT3C=$row['t3_content'];
    $currentT3N=$row['t3_name'];
//============================
?>
<?php $currentPage="home"; ?>
<?php include "includes/header.php"; ?>
   
    <div class="container-fluid h-100">
        <div class="row h-100">
            
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
                <!--            title, tagline and hero image-->
                <!--           000000000000000000-->
                <div class="container p-3 mt-5" style="background-image:linear-gradient(to bottom, rgb(29 36 127 / 50%) 0%, rgba(20,18,19,0.6) 90%, #141213 100% ),url(../assets/img/<?php echo $currentHreoImg; ?>); background-size:cover; color:#fff; height: 400px; width:100%;">
                    <h3 class="font-weight-bold">Hero Area</h3>
                    <hr>
                    <div>
                        <i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i>
                        <h6 style="display:inline;">title:</h6>
                        <?php echo $currentTitle; ?>
                        <form action="#" method="post" class="mt-3" style="display:none;">
                            <textarea name="title" id="title" style="width:100%;" rows="10"><?php echo $currentTitle; ?></textarea>
                            <input type="submit" class="btn btn-info btn-sm my-3" name="updateTitle" value="Update Title">
                        </form>
                    </div>
                    <div>
                        <i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i>
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
                            <i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i>
                            <h6 style="display:inline;">title:</h6>
                            <?php echo $currentC1Title; ?>
                            <form action="#" method="post" class="mt-3" style="display:none;">
                                <textarea name="hc1t" id="hc1t" style="width:100%;" rows="10"><?php echo $currentC1Title; ?></textarea>
                                <input type="submit" class="btn btn-info btn-sm my-3" name="updateC1Title" value="Update Title">
                            </form>
                            </div>
                            <div>
                            <i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i>
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
                            <i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i>
                            <h6 style="display:inline;">title:</h6>
                            <?php echo $currentC2Title; ?>
                            <form action="#" method="post" class="mt-3" style="display:none;">
                                <textarea name="hc2t" id="hc2t" style="width:100%;" rows="10"><?php echo $currentC2Title; ?></textarea>
                                <input type="submit" class="btn btn-info btn-sm my-3" name="updateC2Title" value="Update Title">
                            </form>
                            </div>
                            <div>
                            <i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i>
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
                            <i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i>
                            <h6 style="display:inline;">title:</h6>
                            <?php echo $currentC3Title; ?>
                            <form action="#" method="post" class="mt-3" style="display:none;">
                                <textarea name="hc3t" id="hc3t" style="width:100%;" rows="10"><?php echo $currentC3Title; ?></textarea>
                                <input type="submit" class="btn btn-info btn-sm my-3" name="updateC3Title" value="Update Title">
                            </form>
                            </div>
                            <div>
                            <i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i>
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
                            <i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i>
                            <h6 style="display:inline;">title:</h6>
                            <?php echo $currentC4Title; ?>
<!--                            <h4 class="text-muted d-block"><?php echo $currentC4Title; ?></h4>-->
                            <form action="#" method="post" class="mt-3" style="display:none;">
                                <textarea name="hc4t" id="hc4t" style="width:100%;" rows="10"><?php echo $currentC4Title; ?></textarea>
                                <input type="submit" class="btn btn-info btn-sm my-3" name="updateC4Title" value="Update Title">
                            </form>
                            </div>
                            <div>
                            <i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i>
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
                
                <!--           00000000000000-->
                <!--            section 1-->
                <!--           00000000000000-->
                
                <div class="container p-3 mt-5" style="box-shadow: 0 0 2px 2px rgba(0,0,0,0.2); border-radius:10px;">
                    <h3 class="font-weight-bold">Section 1</h3>
                    <hr>
                    <div>
                        <i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i>
                        <h6 style="display:inline;">line 1:</h6>
                        <?php echo $currentS1Line1; ?>
                        <form action="#" method="post" class="mt-3" style="display:none;">
                            <textarea name="s1_line1" id="s1_line1" style="width:100%;" rows="10"><?php echo $currentS1Line1; ?></textarea>
                            <input type="submit" class="btn btn-info btn-sm my-3" name="updateS1L1" value="Update s1_line1">
                        </form>
                    </div>
                
                    <div>
                        <i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i>
                        <h6 style="display:inline;">line 2:</h6>
                        <?php echo $currentS1Line2; ?>
                        <form action="#" method="post" class="mt-3" style="display:none;">
                            <textarea name="s1_line2" id="s1_line2" style="width:100%;" rows="10"><?php echo $currentS1Line2; ?></textarea>
                            <input type="submit" class="btn btn-info btn-sm my-3" name="updateS1L2" value="Update s1_line2">
                        </form>
                    </div>
                
                    <div>
                        <i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i>
                        <h6 style="display:inline;">content:</h6>
                        <span display="block">
                        <?php echo $currentS1Content; ?>
                        </span>
                        <form action="#" method="post" class="mt-3" style="display:none;">
                            <textarea name="s1_content" id="s1_content" style="width:100%;" rows="10"><?php echo $currentS1Content; ?></textarea>
                            <input type="submit" class="btn btn-info btn-sm my-3" name="updateS1Content" value="Update s1_content">
                        </form>
                    </div>
                </div>
                
                <!--           00000000000000-->
                <!--            section 2-->
                <!--           00000000000000-->
                
                <div class="container p-3 mt-5" style="box-shadow: 0 0 2px 2px rgba(0,0,0,0.2); border-radius:10px;">
                    <h3 class="font-weight-bold">Section 2</h3>
                    <hr>
                    <div>
                        <i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i>
                        <h6 style="display:inline;">line 1:</h6>
                        <?php echo $currentS2Line1; ?>
                        <form action="#" method="post" class="mt-3" style="display:none;">
                            <textarea name="s2_line1" id="s2_line1" style="width:100%;" rows="10"><?php echo $currentS2Line1; ?></textarea>
                            <input type="submit" class="btn btn-info btn-sm my-3" name="updateS2L1" value="Update s2_line1">
                        </form>
                    </div>
                
                    <div>
                        <i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i>
                        <h6 style="display:inline;">line 2:</h6>
                        <?php echo $currentS2Line2; ?>
                        <form action="#" method="post" class="mt-3" style="display:none;">
                            <textarea name="s2_line2" id="s2_line2" style="width:100%;" rows="10"><?php echo $currentS2Line2; ?></textarea>
                            <input type="submit" class="btn btn-info btn-sm my-3" name="updateS2L2" value="Update s2_line2">
                        </form>
                    </div>
                
                </div>
                
                
                <!--           00000000000000-->
                <!--            section 3-->
                <!--           00000000000000-->
                
                <div class="container p-3 mt-5" style="box-shadow: 0 0 2px 2px rgba(0,0,0,0.2); border-radius:10px;">
                    <h3 class="font-weight-bold">Section 3</h3>
                    <hr>
                    <div>
                        <i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i>
                        <h6 style="display:inline;">line 1:</h6>
                        <?php echo $currentS3Line1; ?>
                        <form action="#" method="post" class="mt-3" style="display:none;">
                            <textarea name="s3_line1" id="s3_line1" style="width:100%;" rows="10"><?php echo $currentS3Line1; ?></textarea>
                            <input type="submit" class="btn btn-info btn-sm my-3" name="updateS3L1" value="Update s3_line1">
                        </form>
                    </div>
                
                    <div>
                        <i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i>
                        <h6 style="display:inline;">line 2:</h6>
                        <?php echo $currentS3Line2; ?>
                        <form action="#" method="post" class="mt-3" style="display:none;">
                            <textarea name="s3_line2" id="s3_line2" style="width:100%;" rows="10"><?php echo $currentS3Line2; ?></textarea>
                            <input type="submit" class="btn btn-info btn-sm my-3" name="updateS3L2" value="Update s3_line2">
                        </form>
                    </div>
                    <hr>
<!--                    TITLE 1 -->
                    <div>
                        <i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i>
                        <h6 style="display:inline;">title 1:</h6>
                        <?php echo $currentS3Title1; ?>
                        <form action="#" method="post" class="mt-3" style="display:none;">
                            <textarea name="s3_title1" id="s3_title1" style="width:100%;" rows="10"><?php echo $currentS3Title1; ?></textarea>
                            <input type="submit" class="btn btn-info btn-sm my-3" name="updateS3T1" value="Update s3_title1">
                        </form>
                    </div>
<!--                    CONTENT 1 -->
                    <div>
                        <i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i>
                        <h6 style="display:inline;">content 1:</h6>
                        <?php echo $currentS3Content1; ?>
                        <form action="#" method="post" class="mt-3" style="display:none;">
                            <textarea name="s3_content1" id="s3_content1" style="width:100%;" rows="10"><?php echo $currentS3Content1; ?></textarea>
                            <input type="submit" class="btn btn-info btn-sm my-3" name="updateS3C1" value="Update s3_content1">
                        </form>
                    </div>
                    
<!--                    TITLE 2 -->
                    <div>
                        <i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i>
                        <h6 style="display:inline;">title 2:</h6>
                        <?php echo $currentS3Title2; ?>
                        <form action="#" method="post" class="mt-3" style="display:none;">
                            <textarea name="s3_title2" id="s3_title2" style="width:100%;" rows="10"><?php echo $currentS3Title2; ?></textarea>
                            <input type="submit" class="btn btn-info btn-sm my-3" name="updateS3T2" value="Update s3_title2">
                        </form>
                    </div>
<!--                    CONTENT 2 -->
                    <div>
                        <i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i>
                        <h6 style="display:inline;">content 2:</h6>
                        <?php echo $currentS3Content2; ?>
                        <form action="#" method="post" class="mt-3" style="display:none;">
                            <textarea name="s3_content2" id="s3_content2" style="width:100%;" rows="10"><?php echo $currentS3Content2; ?></textarea>
                            <input type="submit" class="btn btn-info btn-sm my-3" name="updateS3C2" value="Update s3_content2">
                        </form>
                    </div>
                    
<!--                    TITLE 3 -->
                    <div>
                        <i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i>
                        <h6 style="display:inline;">title 3:</h6>
                        <?php echo $currentS3Title3; ?>
                        <form action="#" method="post" class="mt-3" style="display:none;">
                            <textarea name="s3_title3" id="s3_title3" style="width:100%;" rows="10"><?php echo $currentS3Title3; ?></textarea>
                            <input type="submit" class="btn btn-info btn-sm my-3" name="updateS3T3" value="Update s3_title3">
                        </form>
                    </div>
<!--                    CONTENT 3 -->
                    <div>
                        <i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i>
                        <h6 style="display:inline;">content 3:</h6>
                        <?php echo $currentS3Content3; ?>
                        <form action="#" method="post" class="mt-3" style="display:none;">
                            <textarea name="s3_content3" id="s3_content3" style="width:100%;" rows="10"><?php echo $currentS3Content3; ?></textarea>
                            <input type="submit" class="btn btn-info btn-sm my-3" name="updateS3C3" value="Update s3_content3">
                        </form>
                    </div>
                    
<!--                    TITLE 4 -->
                    <div>
                        <i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i>
                        <h6 style="display:inline;">title 4:</h6>
                        <?php echo $currentS3Title4; ?>
                        <form action="#" method="post" class="mt-3" style="display:none;">
                            <textarea name="s3_title4" id="s3_title4" style="width:100%;" rows="10"><?php echo $currentS3Title4; ?></textarea>
                            <input type="submit" class="btn btn-info btn-sm my-3" name="updateS3T4" value="Update s3_title4">
                        </form>
                    </div>
<!--                    CONTENT 4 -->
                    <div>
                        <i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i>
                        <h6 style="display:inline;">content 4:</h6>
                        <?php echo $currentS3Content4; ?>
                        <form action="#" method="post" class="mt-3" style="display:none;">
                            <textarea name="s3_content4" id="s3_content4" style="width:100%;" rows="10"><?php echo $currentS3Content4; ?></textarea>
                            <input type="submit" class="btn btn-info btn-sm my-3" name="updateS3C4" value="Update s3_content4">
                        </form>
                    </div>

                
                </div>
                
                <!--           00000000000000-->
                <!--            Testimonials-->
                <!--           00000000000000-->
                
                <div class="container p-3 mt-5" style="box-shadow: 0 0 2px 2px rgba(0,0,0,0.2); border-radius:10px;">
                    <h3 class="font-weight-bold">Testimonials</h3>
                    <hr>
<!--                    testimonial 1-->
                    <div>
                        <i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i>
                        <h6 style="display:inline;">link 1:</h6>
                        <?php echo $currentT1L; ?>
                        <form action="#" method="post" class="mt-3" style="display:none;">
                            <input type="text" name="t1_link" id="t1_link" value="<?php echo $currentT1L; ?>">
                            <input type="submit" class="btn btn-info btn-sm my-3" name="updateT1L" value="Update t1_link">
                        </form>
                    </div>
                    <div>
                        <i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i>
                        <h6 style="display:inline;">content 1:</h6>
                        <?php echo $currentT1C; ?>
                        <form action="#" method="post" class="mt-3" style="display:none;">
                            <textarea name="t1_content" id="t1_content" style="width:100%;" rows="10"><?php echo $currentT1C; ?></textarea>
                            <input type="submit" class="btn btn-info btn-sm my-3" name="updateT1C" value="Update t1_content">
                        </form>
                    </div>
                    <div>
                        <i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i>
                        <h6 style="display:inline;">name 1:</h6>
                        <?php echo $currentT1N; ?>
                        <form action="#" method="post" class="mt-3" style="display:none;">
                            <textarea name="t1_name" id="t1_name" style="width:100%;" rows="10"><?php echo $currentT1N; ?></textarea>
                            <input type="submit" class="btn btn-info btn-sm my-3" name="updateT1N" value="Update t1_name">
                        </form>
                    </div>
                    <hr>
<!--                    testimonial 2-->
                    <div>
                        <i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i>
                        <h6 style="display:inline;">link 2:</h6>
                        <?php echo $currentT2L; ?>
                        <form action="#" method="post" class="mt-3" style="display:none;">
                            <input type="text" name="t2_link" id="t2_link" value="<?php echo $currentT2L; ?>">
                            <input type="submit" class="btn btn-info btn-sm my-3" name="updateT2L" value="Update t2_link">
                        </form>
                    </div>
                    <div>
                        <i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i>
                        <h6 style="display:inline;">content 2:</h6>
                        <?php echo $currentT2C; ?>
                        <form action="#" method="post" class="mt-3" style="display:none;">
                            <textarea name="t2_content" id="t2_content" style="width:100%;" rows="10"><?php echo $currentT2C; ?></textarea>
                            <input type="submit" class="btn btn-info btn-sm my-3" name="updateT2C" value="Update t2_content">
                        </form>
                    </div>
                    <div>
                        <i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i>
                        <h6 style="display:inline;">name 2:</h6>
                        <?php echo $currentT2N; ?>
                        <form action="#" method="post" class="mt-3" style="display:none;">
                            <textarea name="t2_name" id="t2_name" style="width:100%;" rows="10"><?php echo $currentT2N; ?></textarea>
                            <input type="submit" class="btn btn-info btn-sm my-3" name="updateT2N" value="Update t2_name">
                        </form>
                    </div>
                    <hr>
<!--                    testimonial 3-->
                    <div>
                        <i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i>
                        <h6 style="display:inline;">link 3:</h6>
                        <?php echo $currentT3L; ?>
                        <form action="#" method="post" class="mt-3" style="display:none;">
                            <input type="text" name="t3_link" id="t3_link" value="<?php echo $currentT3L; ?>">
                            <input type="submit" class="btn btn-info btn-sm my-3" name="updateT3L" value="Update t3_link">
                        </form>
                    </div>
                    <div>
                        <i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i>
                        <h6 style="display:inline;">content 3:</h6>
                        <?php echo $currentT3C; ?>
                        <form action="#" method="post" class="mt-3" style="display:none;">
                            <textarea name="t3_content" id="t3_content" style="width:100%;" rows="10"><?php echo $currentT3C; ?></textarea>
                            <input type="submit" class="btn btn-info btn-sm my-3" name="updateT3C" value="Update t3_content">
                        </form>
                    </div>
                    <div>
                        <i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i>
                        <h6 style="display:inline;">name 3:</h6>
                        <?php echo $currentT3N; ?>
                        <form action="#" method="post" class="mt-3" style="display:none;">
                            <textarea name="t3_name" id="t3_name" style="width:100%;" rows="10"><?php echo $currentT3N; ?></textarea>
                            <input type="submit" class="btn btn-info btn-sm my-3" name="updateT3N" value="Update t3_name">
                        </form>
                    </div>
                
                </div>
                
                
                

            </main>
        </div>
    </div>
    <script>//opening and closing the text editor
        let editors = document.querySelectorAll(".fa-edit");
        editors.forEach(edit=>{
        edit.addEventListener("click", (e) => {
            let myForm = e.target.parentElement.querySelector("form");
            if (myForm.style.display === "none") {
                myForm.style.display = "block";
            } else {
                myForm.style.display = "none";
            }
        })});

        

    </script>
<?php include "includes/footer.php"; ?>
