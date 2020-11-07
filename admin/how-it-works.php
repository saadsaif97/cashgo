<?php include "../includes/db.php"; ?>
<?php $currentPage="howItWorks"; ?>
<!--bringing the current logo-->
<?php
    //    showing current values
    $query="SELECT * FROM `home`";
    $q_res=mysqli_query($con,$query);
    if(!$q_res){
        die("query failed ".mysqli_error($con));
    }
    $row=mysqli_fetch_assoc($q_res);   
    $currentLogo=$row['logo'];
?>
<?php include "includes/header.php"; ?>
<?php
/////////////////
//TITLE AND TAG LINE 
/////////////////
//    updating the title
    if(isset($_POST['updateTitle'])){
        $title=$_POST['title'];
        $title=preg_replace('/<[h123456p*\/]*>/','',$title);
        $query="UPDATE `howitworks` SET `title`='$title'";
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
        $query="UPDATE `howitworks` SET `tag_line`='$tagLine'";
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
        $query="UPDATE `howitworks` SET `hero_img`='$imagename'";

        mysqli_query($con,$query);
        
        move_uploaded_file($imagetmp, "../assets/img/$imagename");
        
    }
//=============================
/////////////////
//SECTION 1 
/////////////////
//    updating the title
    if(isset($_POST['updateS1Title'])){
        $s1_title=$_POST['s1_title'];
        $s1_title=preg_replace('/<[h123456p*\/]*>/','',$s1_title);
        $query="UPDATE `howitworks` SET `s1_title`='$s1_title'";
        $q_res=mysqli_query($con,$query);
        if(!$q_res){
            die("query failed ".mysqli_error($con));
        }else{
            header("Refreash:1");
        }
    }
//============================
//    updating the content
    if(isset($_POST['updateS1Content'])){
        $s1_content=$_POST['s1_content'];
        $s1_content=preg_replace('/<[h123456p*\/]*>/','',$s1_content);
        $query="UPDATE `howitworks` SET `s1_content`='$s1_content'";
        $q_res=mysqli_query($con,$query);
        if(!$q_res){
            die("query failed ".mysqli_error($con));
        }else{
            header("Refreash:1");
        }
    }
//============================
/////////////////
//SECTION 2 
/////////////////
//    updating the title
    if(isset($_POST['updateS2Title'])){
        $s2_title=$_POST['s2_title'];
        $s2_title=preg_replace('/<[h123456p*\/]*>/','',$s2_title);
        $query="UPDATE `howitworks` SET `s2_title`='$s2_title'";
        $q_res=mysqli_query($con,$query);
        if(!$q_res){
            die("query failed ".mysqli_error($con));
        }else{
            header("Refreash:1");
        }
    }
//============================
//    updating the content
    if(isset($_POST['updateS2Content'])){
        $s2_content=$_POST['s2_content'];
        $s2_content=preg_replace('/<[h123456p*\/]*>/','',$s2_content);
        $query="UPDATE `howitworks` SET `s2_content`='$s2_content'";
        $q_res=mysqli_query($con,$query);
        if(!$q_res){
            die("query failed ".mysqli_error($con));
        }else{
            header("Refreash:1");
        }
    }
//============================
/////////////////
//SECTION 3 
/////////////////
//    updating the title
    if(isset($_POST['updateS3Title'])){
        $s3_title=$_POST['s3_title'];
        $s3_title=preg_replace('/<[h123456p*\/]*>/','',$s3_title);
        $query="UPDATE `howitworks` SET `s3_title`='$s3_title'";
        $q_res=mysqli_query($con,$query);
        if(!$q_res){
            die("query failed ".mysqli_error($con));
        }else{
            header("Refreash:1");
        }
    }
//============================
//    updating the content
    if(isset($_POST['updateS3Content'])){
        $s3_content=$_POST['s3_content'];
        $s3_content=preg_replace('/<[h123456p*\/]*>/','',$s3_content);
        $query="UPDATE `howitworks` SET `s3_content`='$s3_content'";
        $q_res=mysqli_query($con,$query);
        if(!$q_res){
            die("query failed ".mysqli_error($con));
        }else{
            header("Refreash:1");
        }
    }
//============================


?>


<?php
    //    showing current values
    $query="SELECT * FROM `howitworks`";
    $q_res=mysqli_query($con,$query);
    if(!$q_res){
        die("query failed ".mysqli_error($con));
    }
    $row=mysqli_fetch_assoc($q_res);
    $currentTitle=$row['title'];
    $currentTagLine=$row['tag_line'];
    $currentHeroImg=$row['hero_img'];
    $currentS1Title=$row['s1_title'];
    $currentS1Content=$row['s1_content'];
    $currentS2Title=$row['s2_title'];
    $currentS2Content=$row['s2_content'];
    $currentS3Title=$row['s3_title'];
    $currentS3Content=$row['s3_content'];
?>
    
<div class="container">
    <h6 class="mt-3">background image:</h6>
<!--<img style="width:200px;" class="mb-3" src="../assets/img/<?php echo $currentHeroImg; ?>"                       alt="backgound image">-->
    <form action="#" method="post" enctype="multipart/form-data">
        <input type="file" name="myimage">
        <input type="submit" name="submit_image" class="btn btn-info btn-sm my-3" value="Update Image">
    </form>
</div>
    
<!--    title-->
    <section style="background-image:linear-gradient(to bottom, rgb(29 36 127 / 50%) 0%, rgba(20,18,19,0.6) 90%, #141213 100% ),url(../assets/img/<?php echo $currentHeroImg; ?>); background-size:cover; color:#fff; height: 400px; width:100%; display: grid; place-items:center;">
        <h1 class="text-center" data-aos="fade" data-aos-delay="50" id="small" style="font-weight: 600;color: rgb(255,255,255);font-size: 48px;font-family: Montserrat, sans-serif;height: 1px;"><?php echo $currentTitle; ?><sup><a id="editorBtn"><i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i></a></sup></h1>
        <div  id="editor" style="display:none; backgound-color:#fff;">
            <form action="#" method="post" class="mt-3">
                <textarea name="title" id="title" style="width:100%;" rows="10"><?php echo $currentTitle; ?></textarea>
                <input type="submit" class="btn btn-info btn-sm my-3" name="updateTitle" value="Update">
            </form>
        </div>
    </section>
<!--    title-->

   
    

<!--section 1-->
<section class="index-howto-alt py-3">
        <div class="container">
<!--           tagline-->
            <h2 class="text-center my-3 font-weight-bolder"><?php echo $currentTagLine; ?><sup><a id="editorBtn"><i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i></a></sup></h2>
<!--            editor-->
            <div  id="editor" style="display:none; backgound-color:#fff;">
                <form action="#" method="post" class="mt-3">
                    <textarea name="tag_line" id="tag_line" style="width:100%;" rows="10"><?php echo $currentTagLine; ?></textarea>
                    <input type="submit" class="btn btn-info btn-sm my-3" name="updateTagLine" value="Update Tagline">
                </form>
            </div>
<!--            editor-->
<!--            tagline-->
<!--                SECTION 1-->
            <div class="psd-line pos-rel" style="position:relative;">
                <div class="row align-items-center">
                    <div class="col-12 col-sm-6 d-flex flex-row justify-content-center align-items-center intro-card-1 p-5"><img class="howto-img" src="assets/img/bulb-icon.png">
                    </div>
                    <div class="col-12 col-sm-6 d-flex flex-column justify-content-center p-5 psd-left1">
                        <h1 style="color: #002632;font-size: 24px;font-family: Montserrat, sans-serif;font-weight: 500;"><strong><?php echo $currentS1Title; ?></strong><sup><a id="editorBtn"><i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i></a></sup></h1>
<!--                        editor-->
                        <div  id="editor" style="display:none; backgound-color:#fff;">
                            <form action="#" method="post" class="mt-3">
                                <textarea name="s1_title" id="s1_title" style="width:100%;" rows="10"><?php echo $currentS1Title; ?></textarea>
                                <input type="submit" class="btn btn-info btn-sm my-3" name="updateS1Title" value="Update">
                            </form>
                        </div>
<!--                        editor-->
                        <p class="m-0 text-center text-sm-left" style="color: #666666;font-size: 14px;line-height: 24px;font-family: Montserrat, sans-serif;"><?php echo $currentS1Content; ?><sup><a id="editorBtn"><i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i></a></sup></p>
<!--                        editor-->
                            <div  id="editor" style="display:none; backgound-color:#fff;">
                                <form action="#" method="post" class="mt-3">
                                    <textarea name="s1_content" id="s1_content" style="width:100%;" rows="10"><?php echo $currentS1Content; ?></textarea>
                                    <input type="submit" class="btn btn-info btn-sm my-3" name="updateS1Content" value="Update">
                                </form>
                            </div>
<!--                        editor-->
                       
                    </div>
                </div>
<!--                SECTION 1-->
<!--                SECTION 2-->
                <div class="row flex-column-reverse align-items-center flex-sm-row">
                    <div class="col-12 col-sm-6 d-flex flex-column justify-content-center p-5 psd-right1">
                        <h1 style="color: #002632;font-size: 24px;font-family: Montserrat, sans-serif;font-weight: 500;"><strong><?php echo $currentS2Title; ?></strong><sup><a id="editorBtn"><i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i></a></sup></h1>
<!--                        editor-->
                        <div  id="editor" style="display:none; backgound-color:#fff;">
                            <form action="#" method="post" class="mt-3">
                                <textarea name="s2_title" id="s2_title" style="width:100%;" rows="10"><?php echo $currentS2Title; ?></textarea>
                                <input type="submit" class="btn btn-info btn-sm my-3" name="updateS2Title" value="Update">
                            </form>
                        </div>
<!--                        editor-->
                        <p class="m-0 text-center text-sm-left" style="color: #666666;font-size: 14px;line-height: 24px;font-family: Montserrat, sans-serif;"><?php echo $currentS2Content; ?><sup><a id="editorBtn"><i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i></a></sup></p>
<!--                        editor-->
                        <div  id="editor" style="display:none; backgound-color:#fff;">
                            <form action="#" method="post" class="mt-3">
                                <textarea name="s2_content" id="s2_content" style="width:100%;" rows="10"><?php echo $currentS2Content; ?></textarea>
                                <input type="submit" class="btn btn-info btn-sm my-3" name="updateS2Content" value="Update">
                            </form>
                        </div>
<!--                        editor-->
                        
                    </div>
                    <div class="col-12 col-sm-6 d-flex flex-row justify-content-center align-items-center intro-card-2 p-5"><img class="howto-img" src="assets/img/phone-icon.png">
                    </div>
                </div>
<!--                SECTION 2-->
<!--                SECTION 3-->

                <div class="row align-items-center">
                    <div class="col-12 col-sm-6 d-flex flex-row justify-content-center align-items-center intro-card-3 p-5"><img class="howto-img" src="assets/img/clock-icon.png">
                    </div>
                    <div class="col-12 col-sm-6 d-flex flex-column justify-content-center p-5 psd-left2">
                        <h1 style="color: #002632;font-size: 24px;font-family: Montserrat, sans-serif;font-weight: 500;"><strong><?php echo $currentS3Title; ?></strong><sup><a id="editorBtn"><i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i></a></sup></h1>
<!--                        editor-->
                        <div  id="editor" style="display:none; backgound-color:#fff;">
                            <form action="#" method="post" class="mt-3">
                                <textarea name="s3_title" id="s3_title" style="width:100%;" rows="10"><?php echo $currentS3Title; ?></textarea>
                                <input type="submit" class="btn btn-info btn-sm my-3" name="updateS3Title" value="Update">
                            </form>
                        </div>
<!--                        editor-->
                        <p class="m-0 text-center text-sm-left" style="color: #666666;font-size: 14px;line-height: 24px;font-family: Montserrat, sans-serif;"><?php echo $currentS3Content; ?><sup><a id="editorBtn"><i class="fa fa-edit icon" style="color:#17a2b8; font-size:24px;"></i></a></sup></p>
<!--                        editor-->
                        <div  id="editor" style="display:none; backgound-color:#fff;">
                            <form action="#" method="post" class="mt-3">
                                <textarea name="s3_content" id="s3_content" style="width:100%;" rows="10"><?php echo $currentS3Content; ?></textarea>
                                <input type="submit" class="btn btn-info btn-sm my-3" name="updateS3Content" value="Update">
                            </form>
                        </div>
<!--                        editor-->
                       
                    </div>
                </div>
<!--                SECTION 3-->

            </div>
        </div>
    </section>

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