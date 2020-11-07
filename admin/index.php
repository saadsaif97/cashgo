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
        $title=preg_replace('/<[h123456p*\/]*>/','',$title);
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
        $tagLine=preg_replace('/<[h123456p*\/]*>/','',$tagLine);
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
        $title=preg_replace('/<[h123456p*\/]*>/','',$title);
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
        $title=preg_replace('/<[h123456p*\/]*>/','',$title);
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
        $title=preg_replace('/<[h123456p*\/]*>/','',$title);
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
        $title=preg_replace('/<[h123456p*\/]*>/','',$title);
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
        $title=preg_replace('/<[h123456p*\/]*>/','',$title);
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
        $title=preg_replace('/<[h123456p*\/]*>/','',$title);
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
        $title=preg_replace('/<[h123456p*\/]*>/','',$title);
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
        $s1_line1=preg_replace('/<[h123456p*\/]*>/','',$s1_line1);
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
        $s1_line2=preg_replace('/<[h123456p*\/]*>/','',$s1_line2);
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
        $s1_content=preg_replace('/<[h123456p*\/]*>/','',$s1_content);
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
        $s2_line1=preg_replace('/<[h123456p*\/]*>/','',$s2_line1);
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
        $s2_line2=preg_replace('/<[h123456p*\/]*>/','',$s2_line2);
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
        $s3_line1=preg_replace('/<[h123456p*\/]*>/','',$s3_line1);
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
        $s3_line2=preg_replace('/<[h123456p*\/]*>/','',$s3_line2);
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
        $s3_title1=preg_replace('/<[h123456p*\/]*>/','',$s3_title1);
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
        $s3_content1=preg_replace('/<[h123456p*\/]*>/','',$s2_content1);
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
        $s3_title2=preg_replace('/<[h123456p*\/]*>/','',$s3_title2);
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
        $s3_content2=preg_replace('/<[h123456p*\/]*>/','',$s3_content2);
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
        $s3_title3=preg_replace('/<[h123456p*\/]*>/','',$s3_title3);
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
        $s3_content3=preg_replace('/<[h123456p*\/]*>/','',$s3_content3);
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
        $s3_title4=preg_replace('/<[h123456p*\/]*>/','',$s3_title4);
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
        $s3_content4=preg_replace('/<[h123456p*\/]*>/','',$s3_content4);
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
        $t1_link=preg_replace('/<[h123456p*\/]*>/','',$t1_link);
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
        $t1_contetn=preg_replace('/<[h123456p*\/]*>/','',$t1_contetn);
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
        $t1_name=preg_replace('/<[h123456p*\/]*>/','',$t1_name);
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
        $t2_link=preg_replace('/<[h123456p*\/]*>/','',$t2_link);
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
        $t2_content=preg_replace('/<[h123456p*\/]*>/','',$t2_content);
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
        $t2_name=preg_replace('/<[h123456p*\/]*>/','',$t2_name);
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
        $t3_link=preg_replace('/<[h123456p*\/]*>/','',$t3_link);
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
        $t3_content=preg_replace('/<[h123456p*\/]*>/','',$t3_content);
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
        $t3_name=preg_replace('/<[h123456p*\/]*>/','',$t3_name);
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
 
<!--    UPDATE LOGO-->
     <div class="container my-3">
         <div class="container p-3" style="box-shadow: 0 0 2px 2px rgba(0,0,0,0.2); border-radius:10px;">
            <h6 >logo:</h6>
            <img style="width:132px;" class="mb-3" src="../assets/img/<?php echo $currentLogo; ?>" alt="backgound image">
            <form action="#" method="post" enctype="multipart/form-data">
                <input type="file" name="logo">
                <input type="submit" name="update_logo" class="btn btn-info btn-sm my-3" value="Update logo">
            </form>
        </div>
     </div>
  
<!--     UPDATING TITLE AND TAGLINE-->
      <section class="text-left" id="hero" style="display: block;background-image: linear-gradient(to bottom, rgb(29 36 127 / 50%) 0%, rgba(20,18,19,0.6) 90%, #141213 100% ), url(../assets/img/<?php echo $currentHreoImg; ?>);filter: blur(0px) brightness(100%);width: 100%;height: 900px; padding:100px 0; background-size:cover;">

       
        <h4 class="text-center small" data-aos="fade" data-aos-delay="50" style="margin:0;"><?php echo $currentTitle; ?><sup><a id="editorBtn"><i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i></a></sup></h4>
        <div  id="editor" style="display:none; backgound-color:#fff;">
            <form action="#" method="post" class="mt-3">
                <textarea name="title" id="title"><?php echo $currentTitle; ?></textarea>
                <input type="submit" class="btn btn-info btn-sm my-3" name="updateTitle" value="Update Title">
            </form>
        </div>
        <h1 class="text-center big" data-aos="fade" data-aos-delay="200"  style="color: rgb(255,255,255);font-family: Montserrat, sans-serif;font-size: 70px;line-height: 50px;"><br><strong><?php echo $currentTagLine; ?></strong><sup><a id="editorBtn"><i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i></a></sup></h1>
        <div  id="editor" style="display:none; backgound-color:#fff;">
            <form action="#" method="post" class="mt-3">
                <textarea name="tag_line" id="tag_line" ><?php echo $currentTagLine; ?></textarea>
                <input type="submit" class="btn btn-info btn-sm my-3" name="updateTagLine" value="Update Tagline">
            </form>
        </div>
        
        <div class="card" style="width:300px; margin:0 auto; padding:20px; background-color:rgb(255, 255, 255);">
            <h5 class="mt-3">background image:</h5>
            <form action="#" method="post" enctype="multipart/form-data">
                <input type="file" name="myimage">
                <input type="submit" name="submit_image" class="btn btn-info btn-sm my-3" value="Update Image">
            </form>
        </div>
        
        
        
    </section>
   
   <!--    cards section-->
    <div class="container" data-aos="fade" style="padding-bottom: 150px;">
        <div class="row row-fitur" style="margin-top: -5rem;">
            <div class="col-12 col-sm-12 col-md-3">
                <div class="row">
                    <div class="col-10 col-sm-12 col-md-11 waves-effect kolom-a" data-aos="fade" data-aos-delay="100" style="background-color:#3aadaa; text-align:center; padding:30px 20px;">
                       
                        <div class="fitur-a"><i class="far fa-gem icon"></i></div>
                        <hr>
                        <div>
                            <h4 class="text-center heading-fitur" ><?php echo $currentC1Title; ?><sup><a id="editorBtn"><i class="fa fa-edit icon" style="color:#fff; font-size:24px;"></i></a></sup></h4>
                            <div  id="editor" style="display:none; backgound-color:#fff;">
                                <form action="#" method="post" class="mt-3">
                                    <textarea name="hc1t" id="hc1t" style="width:100%;" rows="10"><?php echo $currentC1Title; ?></textarea>
                                    <input type="submit" class="btn btn-info btn-sm my-3" name="updateC1Title" value="Update Title">
                                </form>
                            </div>
                            
                            <p class="text-center paragraf-fitur" ><?php echo $currentC1Content; ?><sup><a id="editorBtn"><i class="fa fa-edit icon" style="color:#fff; font-size:24px;"></i></a></sup></p>
                            <div  id="editor" style="display:none; backgound-color:#fff;">
                            <form action="#" method="post"  class="mt-3">
                                <textarea name="hc1c" id="hc1c" style="width:100%;" rows="10"><?php echo $currentC1Content; ?></textarea>
                                <input type="submit" class="btn btn-info btn-sm my-3" name="updateC1Conent" value="Update Title">
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3">
                <div class="row">
                    <div class="col-11 col-sm-12 col-md-11 waves-effect kolom-a" data-aos="fade" data-aos-delay="200" style="background-color: #98b446; text-align:center; padding:30px 20px;">
                        <div class="fitur-a"><i class="fas fa-tachometer-alt icon" ></i></div>
                        <hr>
                        <div>
                            <h4 class="text-center heading-fitur" ><?php echo $currentC2Title; ?><sup><a id="editorBtn"><i class="fa fa-edit icon" style="color:#fff; font-size:24px;"></i></a></sup></h4>
                            <div  id="editor" style="display:none; backgound-color:#fff;">
                            <form action="#" method="post"  class="mt-3">
                                <textarea name="hc2t" id="hc2t" style="width:100%;" rows="10"><?php echo $currentC2Title; ?></textarea>
                                <input type="submit" class="btn btn-info btn-sm my-3" name="updateC2Title" value="Update Title">
                            </form>
                            </div>
                            <p class="text-center paragraf-fitur" ><?php echo $currentC2Content; ?><sup><a id="editorBtn"><i class="fa fa-edit icon" style="color:#fff; font-size:24px;"></i></a></sup></p>
                            <div  id="editor" style="display:none; backgound-color:#fff;">
                            <form action="#" method="post"  class="mt-3">
                                <textarea name="hc2c" id="hc2c" style="width:100%;" rows="10"><?php echo $currentC2Content; ?></textarea>
                                <input type="submit" class="btn btn-info btn-sm my-3" name="updateC2Conent" value="Update Title">
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3">
                <div class="row">
                    <div class="col-11 col-sm-12 col-md-11 waves-effect kolom-a" data-aos="fade" data-aos-delay="300" style="background-color: #F1B22F; text-align:center; padding:30px 20px;">
                        <div class="fitur-a"><i class="far fa-money-bill-alt icon" ></i></div>
                        <hr>
                        <div>
                            <h4 class="text-center heading-fitur" ><?php echo $currentC3Title; ?><sup><a id="editorBtn"><i class="fa fa-edit icon" style="color:#fff; font-size:24px;"></i></a></sup></h4>
                            <div  id="editor" style="display:none; backgound-color:#fff;">
                            <form action="#" method="post"  class="mt-3">
                                <textarea name="hc3t" id="hc3t" style="width:100%;" rows="10"><?php echo $currentC3Title; ?></textarea>
                                <input type="submit" class="btn btn-info btn-sm my-3" name="updateC3Title" value="Update Title">
                            </form>
                            </div>
                            <p class="text-center paragraf-fitur" ><?php echo $currentC3Content; ?><sup><a id="editorBtn"><i class="fa fa-edit icon" style="color:#fff; font-size:24px;"></i></a></sup></p>
                            <div  id="editor" style="display:none; backgound-color:#fff;">
                            <form action="#" method="post"  class="mt-3">
                                <textarea name="hc3c" id="hc3c" style="width:100%;" rows="10"><?php echo $currentC3Content; ?></textarea>
                                <input type="submit" class="btn btn-info btn-sm my-3" name="updateC3Conent" value="Update Title">
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3">
                <div class="row">
                    <div class="col-11 col-sm-12 col-md-11 waves-effect kolom-a" data-aos="fade" data-aos-delay="400" style="background-color: #FD6420; text-align:center; padding:30px 20px;">
                        <div class="fitur-a"><i class="far fa-clock icon" ></i></div>
                        <hr>
                        <div>
                            <h4 class="text-center heading-fitur" ><?php echo $currentC4Title; ?><sup><a id="editorBtn"><i class="fa fa-edit icon" style="color:#fff; font-size:24px;"></i></a></sup></h4>
                            <div  id="editor" style="display:none; backgound-color:#fff;">
                            <form action="#" method="post"  class="mt-3">
                                <textarea name="hc4t" id="hc4t" style="width:100%;" rows="10"><?php echo $currentC4Title; ?></textarea>
                                <input type="submit" class="btn btn-info btn-sm my-3" name="updateC4Title" value="Update Title">
                            </form>
                            </div>
                            <p class="text-center paragraf-fitur" ><?php echo $currentC4Content; ?><sup><a id="editorBtn"><i class="fa fa-edit icon" style="color:#fff; font-size:24px;"></i></a></sup></p>
                            <div  id="editor" style="display:none; backgound-color:#fff;">
                            <form action="#" method="post"  class="mt-3">
                                <textarea name="hc4c" id="hc4c" style="width:100%;" rows="10"><?php echo $currentC4Content; ?></textarea>
                                <input type="submit" class="btn btn-info btn-sm my-3" name="updateC4Conent" value="Update Title">
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--        cards section ends-->
<!--  section one starts-->
        
        <div class="row" style="margin-top: 200px;">
            <div class="col">
                <h4 class="text-center small-dark" data-aos="fade" style="margin:0; padding-bottom:20px;"><?php echo $currentS1Line1; ?><sup><a id="editorBtn"><i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i></a></sup></h4>
                <div  id="editor" style="display:none; backgound-color:#fff;">
                <form action="#" method="post" class="mt-3">
                    <textarea name="s1_line1" id="s1_line1" style="width:100%;" rows="10"><?php echo $currentS1Line1; ?></textarea>
                    <input type="submit" class="btn btn-info btn-sm my-3" name="updateS1L1" value="Update s1_line1">
                </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1 class="text-center big-dark display-1" data-aos="fade" data-aos-delay="100" ><?php echo $currentS1Line2; ?><sup><a id="editorBtn"><i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i></a></sup></h1>
                <div  id="editor" style="display:none; backgound-color:#fff;">
                <form action="#" method="post" class="mt-3">
                    <textarea name="s1_line2" id="s1_line2" style="width:100%;" rows="10"><?php echo $currentS1Line2; ?></textarea>
                    <input type="submit" class="btn btn-info btn-sm my-3" name="updateS1L2" value="Update s1_line2">
                </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="text-center small-text" data-aos="fade" data-aos-delay="200" ><br><?php echo $currentS1Content; ?><sup><a id="editorBtn"><i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i></a></sup></p>
                <div  id="editor" style="display:none; backgound-color:#fff;">
                <form action="#" method="post" class="mt-3" >
                    <textarea name="s1_content" id="s1_content" style="width:100%;" rows="10"><?php echo $currentS1Content; ?></textarea>
                    <input type="submit" class="btn btn-info btn-sm my-3" name="updateS1Content" value="Update s1_content">
                </form>
                </div>
            </div>
        </div>
        
   </div>
<!--  section one ends-->
   
   
<!--    section two starts here-->
    
    <section data-aos="fade" id="feature" style="background-image: linear-gradient(to bottom, rgb(29 36 127 / 50%) 0%,
    rgba(20,18,19,0.6) 90%, #141213 100% ),
    url(&quot;assets/img/features.jpg&quot;);
     ">
        <div class="container">
            <div class="row">
                <div class="col"></div>
                <div class="col-5 col-sm-12 col-md-6 pt-5">
                    <p class="small text-left" data-aos="fade" data-aos-delay="100"><?php echo $currentS2Line1; ?><sup><a id="editorBtn"><i class="fa fa-edit icon" style="color:#fff; font-size:24px;"></i></a></sup></p>
                    <div  id="editor" style="display:none; backgound-color:#fff;">
                        <form action="#" method="post" class="mt-3" >
                            <textarea name="s2_line1" id="s2_line1" style="width:100%;" rows="10"><?php echo $currentS2Line1; ?></textarea>
                            <input type="submit" class="btn btn-info btn-sm my-3" name="updateS2L1" value="Update s2_line1">
                        </form>
                    </div>

                    <h1 class="big" data-aos="fade" data-aos-delay="200"><strong><?php echo $currentS2Line2; ?></strong><sup><a id="editorBtn"><i class="fa fa-edit icon" style="color:#fff; font-size:24px;"></i></a></sup></h1>
                    <div  id="editor" style="display:none; backgound-color:#fff;">
                        <form action="#" method="post" class="mt-3" >
                            <textarea name="s2_line2" id="s2_line2" style="width:100%;" rows="10"><?php echo $currentS2Line2; ?></textarea>
                            <input type="submit" class="btn btn-info btn-sm my-3" name="updateS2L2" value="Update s2_line2">
                        </form>
                    </div>

                    <div class="row pl-3">
                        <div class="col" style="padding-top: 30px;">
                            <ul class="list-unstyled fa-ul" data-aos="fade" data-aos-delay="300">
                                <li class="lite-list" ><i class="fas fa-calendar-alt fa-li" style="background-color: #3aadaa;color: rgb(255,255,255);padding-top: 5px;padding-bottom: 5px;"></i>Choose your preferred monthly payment</li>
                            </ul>
                            <ul class="list-unstyled fa-ul" data-aos="fade" data-aos-delay="400">
                                <li class="lite-list" ><i class="far fa-arrow-alt-circle-up fa-li" style="background-color: #98B446;color: rgb(255,255,255);padding-top: 5px;padding-bottom: 5px;"></i>Increase your payment amount anytime<br></li>
                            </ul>
                            <ul class="list-unstyled fa-ul" data-aos="fade" data-aos-delay="500">
                                <li class="lite-list" ><i class="fas fa-star fa-li" style="background-color: #F1B22F;color: rgb(255,255,255);padding-top: 5px;padding-bottom: 5px;"></i>Make extra or early payments without fees<br></li>
                            </ul>
                            <ul class="list-unstyled fa-ul" data-aos="fade" data-aos-delay="600">
                                <li class="lite-list" ><i class="fas fa-plane fa-li" style="background-color: #E96F34;color: rgb(255,255,255);font-size: 20px;padding-top: 5px;padding-bottom: 5px;"></i>No fees, hidden or otherwise<br></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--    section two ends here-->
<!--    section three starts here-->
    <section data-aos="fade" id="pricing">
        <div class="container" style="padding-top: 100px;padding-bottom: 100px;">
            <div class="row">
                <div class="col">
                   
                    <h4 class="text-center small-dark" data-aos="fade" data-aos-delay="100" style="font-weight: normal; margin:0; padding:0;"><?php echo $currentS3Line1; ?><sup><a id="editorBtn"><i class="fa fa-edit icon" style="color:#333; font-size:24px;"></i></a></sup></h4>
                    <div  id="editor" style="display:none; backgound-color:#fff;">
                        <form action="#" method="post" class="mt-3" >
                            <textarea name="s3_line1" id="s3_line1" style="width:100%;" rows="10"><?php echo $currentS3Line1; ?></textarea>
                            <input type="submit" class="btn btn-info btn-sm my-3" name="updateS3L1" value="Update s3_line1">
                        </form>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col">
                   
                    <h1 class="text-center big-dark" data-aos="fade" data-aos-delay="200" style="margin-bottom: 30px;"><strong><?php echo $currentS3Line2; ?></strong><sup><a id="editorBtn"><i class="fa fa-edit icon" style="color:#333; font-size:24px;"></i></a></sup></h1>
                    <div  id="editor" style="display:none; backgound-color:#fff;">
                        <form action="#" method="post" class="mt-3" >
                            <textarea name="s3_line2" id="s3_line2" style="width:100%;" rows="10"><?php echo $currentS3Line2; ?></textarea>
                            <input type="submit" class="btn btn-info btn-sm my-3" name="updateS3L2" value="Update s3_line2">
                        </form>
                    </div>

                </div>
            </div>
            
            
<!--            pricing cards-->
            <div style="display:grid; grid-template-columns: repeat(auto-fit,minmax(200px, 1fr)); grid-gap:20px;">
               
                <div class="l-card" data-aos="fade-right" style="width:100%;">
                    <div class="color-div" style="background-color: #3aadaa;">
                        <h4 class="text-center card-title" ><?php echo $currentS3Title1; ?><sup><a id="editorBtn"><i class="fa fa-edit icon" style="color:#fff; font-size:24px;"></i></a></sup></h4>
                        <div  id="editor" style="display:none; backgound-color:#fff;">
                        <form action="#" method="post" class="mt-3" >
                            <textarea name="s3_title1" id="s3_title1" style="width:100%;" rows="10"><?php echo $currentS3Title1; ?></textarea>
                            <input type="submit" class="btn btn-info btn-sm my-3" name="updateS3T1" value="Update s3_title1">
                        </form>
                    </div>
                    </div>
                    <div class="text-center border1" style="padding: 20px 15px;">
                        <p style="color: rgb(102,102,102);font-family: Montserrat, sans-serif;font-size: 14px;"><br>APR range:<br></p>
                        <h4 style="font-size: 22px;color: #3aadaa;font-family: Montserrat, sans-serif;font-weight: 500;line-height: 0;"><br>5.95% – 6.99%<br><br></h4>
                        <div style="background-color: rgba(111,108,108,0.42);height: 1px;margin: 30px 0;"></div>
                        <p>
                            <?php echo $currentS3Content1; ?><sup><a id="editorBtn"><i class="fa fa-edit icon" style="color:#333; font-size:24px;"></i></a></sup>
                        </p>
                        <div  id="editor" style="display:none; backgound-color:#fff;">
                        <form action="#" method="post" class="mt-3" >
                            <textarea name="s3_content1" id="s3_content1" style="width:100%;" rows="10"><?php echo $currentS3Content1; ?></textarea>
                            <input type="submit" class="btn btn-info btn-sm my-3" name="updateS3C1" value="Update s3_content1">
                        </form>
                    </div>
                        <br>
                    </div>
                </div>
                
                <div class="l-card" data-aos="fade-right" data-aos-delay="100" style="width:100%;">
                    <div class="color-div " style="background-color: #98b446;">
                        <h4 class="text-center card-title" ><?php echo $currentS3Title2; ?><sup><a id="editorBtn"><i class="fa fa-edit icon" style="color:#fff; font-size:24px;"></i></a></sup></h4>
                        <div  id="editor" style="display:none; backgound-color:#fff;">
                        <form action="#" method="post" class="mt-3" >
                            <textarea name="s3_title2" id="s3_title2" style="width:100%;" rows="10"><?php echo $currentS3Title2; ?></textarea>
                            <input type="submit" class="btn btn-info btn-sm my-3" name="updateS3T2" value="Update s3_title2">
                        </form>
                    </div>
                    </div>
                    <div class="text-center border2" style="padding: 20px 15px;">
                        <p style="color: rgb(102,102,102);font-family: Montserrat, sans-serif;font-size: 14px;"><br>APR range:<br></p>
                        <h4 style="font-size: 22px;color: #98b446;font-family: Montserrat, sans-serif;font-weight: 500;line-height: 0;">7.50% – 12.99%</h4>
                        <div style="background-color: rgba(111,108,108,0.42);height: 1px;margin: 30px 0;"></div>
                        <p style="text-align:center; max-length:max-content;">
                            <?php echo $currentS3Content2; ?><sup><a id="editorBtn"><i class="fa fa-edit icon" style="color:#333; font-size:24px;"></i></a></sup>
                        </p>
                        <div  id="editor" style="display:none; backgound-color:#fff;">
                        <form action="#" method="post" class="mt-3" >
                            <textarea name="s3_content2" id="s3_content2" style="width:100%;" rows="10"><?php echo $currentS3Content2; ?></textarea>
                            <input type="submit" class="btn btn-info btn-sm my-3" name="updateS3C2" value="Update s3_content2">
                        </form>
                    </div>
                        <br>
                    </div>
                </div>
                
                
                <div class="l-card" data-aos="fade-left" data-aos-delay="100" style="width:100%;">
                    <div class="color-div" style="background-color: #f1b22f;">
                        <h4 class="text-center card-title" ><?php echo $currentS3Title3; ?><sup><a id="editorBtn"><i class="fa fa-edit icon" style="color:#fff; font-size:24px;"></i></a></sup></h4>
                        <div  id="editor" style="display:none; backgound-color:#fff;">
                        <form action="#" method="post" class="mt-3" >
                            <textarea name="s3_title3" id="s3_title3" style="width:100%;" rows="10"><?php echo $currentS3Title3; ?></textarea>
                            <input type="submit" class="btn btn-info btn-sm my-3" name="updateS3T3" value="Update s3_title3">
                        </form>
                    </div>
                    </div>
                    <div class="text-center border3" style="padding: 20px 15px;">
                        <p style="color: rgb(102,102,102);font-family: Montserrat, sans-serif;font-size: 14px;"><br>APR range:<br></p>
                        <h4 style="font-size: 22px;color: #f1b22f;font-family: Montserrat, sans-serif;font-weight: 500;line-height: 0;"><br><br>8.00% – 15.49%<br><br></h4>
                        <div style="background-color: rgba(111,108,108,0.42);height: 1px;margin: 30px 0;"></div>
                        <p>
                            <?php echo $currentS3Content3; ?><sup><a id="editorBtn"><i class="fa fa-edit icon" style="color:#333; font-size:24px;"></i></a></sup>
                        </p>
                        <div  id="editor" style="display:none; backgound-color:#fff;">
                        <form action="#" method="post" class="mt-3" >
                            <textarea name="s3_content3" id="s3_content3" style="width:100%;" rows="10"><?php echo $currentS3Content3; ?></textarea>
                            <input type="submit" class="btn btn-info btn-sm my-3" name="updateS3C3" value="Update s3_content3">
                        </form>
                    </div>
                        <br>
                    </div>
                </div>
                
                
                
                <div class="l-card" data-aos="fade-left" style="width:100%;">
                    <div class="color-div" style="background-color: #fd6420;">
                        <h4 class="text-center card-title"><?php echo $currentS3Title4; ?><sup><a id="editorBtn"><i class="fa fa-edit icon" style="color:#fff; font-size:24px;"></i></a></sup></h4>
                        <div  id="editor" style="display:none; backgound-color:#fff;">
                        <form action="#" method="post" class="mt-3" >
                            <textarea name="s3_title4" id="s3_title4" style="width:100%;" rows="10"><?php echo $currentS3Title4; ?></textarea>
                            <input type="submit" class="btn btn-info btn-sm my-3" name="updateS3T4" value="Update s3_title4">
                        </form>
                    </div>
                    </div>
                    <div class="text-center border4" style="padding: 20px 15px;">
                        <p style="color: rgb(102,102,102);font-family: Montserrat, sans-serif;font-size: 14px;"><br>APR range:<br></p>
                        <h4 style="font-size: 22px;color: #fd6420;;font-family: Montserrat, sans-serif;font-weight: 500;line-height: 0;"><br><br>9.00% – 14.49%<br><br></h4>
                        <div style="background-color: rgba(111,108,108,0.42);height: 1px;margin: 30px 0;"></div>
                        <p>
                            <?php echo $currentS3Content4; ?><sup><a id="editorBtn"><i class="fa fa-edit icon" style="color:#333; font-size:24px;"></i></a></sup>
                        </p>
                        <div  id="editor" style="display:none; backgound-color:#fff;">
                        <form action="#" method="post" class="mt-3" >
                            <textarea name="s3_content4" id="s3_content4" style="width:100%;" rows="10"><?php echo $currentS3Content4; ?></textarea>
                            <input type="submit" class="btn btn-info btn-sm my-3" name="updateS3C4" value="Update s3_content4">
                        </form>
                    </div>
                        <br>
                    </div>
                </div>
<!--                pricing cards-->
                
                
            </div>
        </div>
    </section>
    
<!--    section three ends here-->
   
    <div class="container-fluid h-100">
        <div class="row h-100">
            
            <div class="col py-5">
                
                
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
                     index   <form action="#" method="post" class="mt-3" style="display:none;">
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
                
                
                

            </div>
        </div>
    </div>
 <script>//opening and closing the text editor
        let editors = document.querySelectorAll("#editorBtn");
        editors.forEach(edit=>{
        edit.addEventListener("click", (e) => {
            let myForm = e.target.parentElement.parentElement.parentElement.nextElementSibling;
            console.log(myForm);
            if (myForm.style.display === "none") {
                myForm.style.display = "block";
            } else {
                myForm.style.display = "none";
            }
        })});
</script>

<?php include "includes/footer.php"; ?>
