<?php ob_start(); ?>
<?php include "../includes/db.php"; ?>
<?php $currentPage="planCards"; ?>
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


<div class="container py-5">
   <div class="col col-6 offset-3">

    <!--warning FLASH MESSAGE-->
    <?php if (isset($_SESSION['warning_message'])) { ?>
                <div class="alert alert-warning">
                <i class="fas fa-exclamation-circle"></i>
                <?php echo $_SESSION['warning_message']; ?>
                </div>
    <?php unset($_SESSION['warning_message']); ?>
    <?php } ?>
    <!--warning FLASH MESSAGE-->

   <h4>Plan card:</h4>
   <hr>
    <form action="#" method="post" id="app" enctype="multipart/form-data">
        
        <div class="from-group py-3">
            <input type="file" id="files" name="cardimg" required/>
            <img id="image" />
        </div>
        <div class="form-group">
            <input type="text" name="title" id="title" class="form-control" placeholder="title" required>
        </div>
        <div class="form-group">
            <input type="text" name="content" id="content" class="form-control" placeholder="content" required>
        </div>
        <div class="form-group">
            <a id="insert" class="btn" v-bind:class="{'disabled': (num==6)}" @click="add_row" style="background-color:gray;">+ Add row</a>
            <a id="insert" class="btn" v-bind:class="{'disabled': (num==2)}" @click="remove_row" style="background-color:gray;">- Remove row</a>
        </div>

        
<!--        row-->
        <div class="form-group" v-for="n in row">
            <select class="form-control" :name="n">
                <?php
                $query="SELECT * FROM `plan_card_rows`";
                $q_res=mysqli_query($con,$query);
                if(!$q_res){
                    die("query failed ".mysqli_error($con));
                }
                while($row=mysqli_fetch_assoc($q_res)){
                $content=$row['content'];
                echo $content;
                ?>
                    echo '<option value="<?php echo $content; ?>"><?php echo htmlspecialchars_decode($content); ?></option>';
                <?php
                } 
                ?>
            </select>
        </div>
<!--        row-->
      
      
       <hr>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" name="create" value="Create new card">
        </div>
    </form>
    </div>
</div>

<?php
    if(isset($_POST['create'])){
        $title=$_POST['title'];
        $title=mysqli_real_escape_string($con,$title);
        $content=$_POST['content'];
        $content=mysqli_real_escape_string($con,$content);
        $img_size = $_FILES['cardimg']['size'];
        $img_name = $_FILES['cardimg']['name'];
        $img_type = $_FILES['cardimg']['type'];
        $img_tmp_loc = $_FILES['cardimg']['tmp_name'];

            $errors = [];
            $maxsize = 2097152;
            $acceptable = [
                'image/jpeg',
                'image/jpg',
                'image/png'
            ];
        
            if (($img_size >= $maxsize)) {
                $errors[] = 'File too large. File must be less than 2 megabytes.';
            }
        
            if ((!in_array($img_type, $acceptable)) && (!empty($img_type))) {
                $errors[] = 'Invalid file type. Only JPG and PNG types are accepted.';
            }
        
            if (count($errors) === 0) {
                $extension = substr($img_name, strpos($img_name, '.'));
                $image_name = "$title$extension";
                echo $image_name;
        
                if(isset($title) && isset($content)){

                    if(isset($_POST['0']) && !isset($_POST['2'])){ //if only one row is set
                        $row1=$_POST['1'];
                        $row1='<tr>'.$row1.'</tr>';
                        $my_rows=$row1;
                        
                        $query="INSERT INTO `plan_card`(`img_name`, `title`, `content`, `my_rows`) VALUES ('$image_name','$title','$content','$my_rows')";
                        $q_res=mysqli_query($con,$query);
                        if(!$q_res){
                            die("query failed ".mysqli_error($con));
                        }else{
                            move_uploaded_file($img_tmp_loc, '../assets/img/cards_img/' . $image_name);
                            header("Location: plan-cards.php");
                        }
                        }elseif(isset($_POST['2']) && !isset($_POST['3'])){ //two rows are set
                            $row1=$_POST['1'];
                            $row1='<tr>'.$row1.'</tr>';
                            $row2=$_POST['2'];
                            $row2='<tr>'.$row2.'</tr>';
                            $my_rows=$row1.$row2;
            
                            $query="INSERT INTO `plan_card`(`img_name`, `title`, `content`, `my_rows`) VALUES ('$image_name','$title','$content','$my_rows')";
                            $q_res=mysqli_query($con,$query);
                            if(!$q_res){
                                die("query failed ".mysqli_error($con));
                            }else{
                                move_uploaded_file($img_tmp_loc, '../assets/img/cards_img/' . $image_name);
                                header("Location: plan-cards.php");
                            }
                        }elseif(isset($_POST['3']) && !isset($_POST['4'])){ //three rows are set
                            $row1=$_POST['1'];
                            $row1='<tr>'.$row1.'</tr>';
                            $row2=$_POST['2'];
                            $row2='<tr>'.$row2.'</tr>';
                            $row3=$_POST['3'];
                            $row3='<tr>'.$row3.'</tr>';
                            $my_rows=$row1.$row2.$row3;
            
                            $query="INSERT INTO `plan_card`(`img_name`, `title`, `content`, `my_rows`) VALUES ('$image_name','$title','$content','$my_rows')";
                            $q_res=mysqli_query($con,$query);
                            if(!$q_res){
                                die("query failed ".mysqli_error($con));
                            }else{
                                move_uploaded_file($img_tmp_loc, '../assets/img/cards_img/' . $image_name);
                                header("Location: plan-cards.php");
                            }
                        }elseif(isset($_POST['4']) && !isset($_POST['5'])){ //four rows are set
                            $row1=$_POST['1'];
                            $row1='<tr>'.$row1.'</tr>';
                            $row2=$_POST['2'];
                            $row2='<tr>'.$row2.'</tr>';
                            $row3=$_POST['3'];
                            $row3='<tr>'.$row3.'</tr>';
                            $row4=$_POST['4'];
                            $row4='<tr>'.$row4.'</tr>';
                            $my_rows=$row1.$row2.$row3.$row4;
            
                            $query="INSERT INTO `plan_card`(`img_name`, `title`, `content`, `my_rows`) VALUES ('$image_name','$title','$content','$my_rows')";
                            $q_res=mysqli_query($con,$query);
                            if(!$q_res){
                                die("query failed ".mysqli_error($con));
                            }else{
                                move_uploaded_file($img_tmp_loc, '../assets/img/cards_img/' . $image_name);
                                header("Location: plan-cards.php");
                            }
                        }elseif(isset($_POST['5'])){ //five rows are set
                            $row1=$_POST['1'];
                            $row1='<tr>'.$row1.'</tr>';
                            $row2=$_POST['2'];
                            $row2='<tr>'.$row2.'</tr>';
                            $row3=$_POST['3'];
                            $row3='<tr>'.$row3.'</tr>';
                            $row4=$_POST['4'];
                            $row4='<tr>'.$row4.'</tr>';
                            $row5=$_POST['5'];
                            $row5='<tr>'.$row5.'</tr>';
                            $my_rows=$row1.$row2.$row3.$row4.$row5;
            
                            $query="INSERT INTO `plan_card`(`img_name`, `title`, `content`, `my_rows`) VALUES ('$image_name','$title','$content','$my_rows')";
                            $q_res=mysqli_query($con,$query);
                            if(!$q_res){
                                die("query failed ".mysqli_error($con));
                            }else{
                                move_uploaded_file($img_tmp_loc, '../assets/img/cards_img/' . $image_name);
                                header("Location: plan-cards.php");
                            }
                        }else{
                            $_SESSION['warning_message'] = "Atleast one row is required!" ;
                        }
            
                
                    
                    
                }else{
                    $_SESSION['warning_message'] = "title and content are required!" ;
                }//title and content are available
        
            } else {
                foreach ($errors as $error) {
                    $_SESSION['warning_message'] = $error . '<br/>';
                }
            }//zero errors in image upload
        

        


    }
        
      
?>

<script>
    var vm = new Vue({
        el: '#app',
        data:{
            row:[1],
            num: 2
        },
        methods:{
            add_row: function(){
                this.row.push(this.num);
                this.num++;
            },remove_row: function(){
                this.row.pop();
                this.num--;
            },
        }
    });
</script>
<script>
    document.getElementById("files").onchange = function () {

    let reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("image").src = e.target.result;
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};
</script>

<?php include "includes/footer.php"; ?>