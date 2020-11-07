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
       
<!--           FETCHING THE PLAN CARD TO BE EDITED-->
            <?php
                    $edit_id=$_GET['edit'];
                    $query="SELECT * FROM `plan_card` WHERE `id`='$edit_id'";
                    $q_res=mysqli_query($con,$query);
                    if(!$q_res){
                        die("query failed ".mysqli_error($con));
                    }
                    $row=mysqli_fetch_assoc($q_res);
                    $title=$row['title'];
                    $content=$row['content'];
                    $my_rows=$row['my_rows'];
                ?>
                
                <div class="plan_card" data-aos="fade" data-aos-delay="600">
                    <div>
                        <img src="assets/img/gallery2.jpg" style="width: 100%;height: auto;">
                    </div>
                    <div class="plan_card_body" style="padding: 20px 15px;">
                        <h4 style="font-weight:bolder;"><?php echo $title; ?></h4>
                        <p style="color: #666666;margin: 10px 0;font-size: 14px; text-align:left; font-weight:normal;"><?php echo $content; ?></p>
                        <h5 style="font-weight:bolder;">Referal Bonuses:</h5>
                        <table class="plan_table">
                            <tr>
                                <th>Investment Bonus</th>
                                <th>Profit Bonus</th>
                            </tr>
                            <?php echo $my_rows; ?>
                        </table>
                    </div>
                </div>
<!--           FETCHING THE PLAN CARD TO BE EDITED-->

                
                
       
       
    <hr>
   <h4>Update the plan card:</h4>
   <hr>
    <form action="#" method="post" id="app">
        <div class="form-group">
            <input type="text" name="title" id="title" class="form-control" placeholder="title">
        </div>
        <div class="form-group">
            <input type="text" name="content" id="content" class="form-control" placeholder="content">
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
           <a href="plan-cards.php" class="btn" style="background-color:gray;">Back</a>
            <input type="submit" class="btn btn-primary" name="update" value="Update the card">
        </div>
    </form>
    </div>
</div>
<table>
    <tr></tr>
</table>

<?php
    $edit_id=$_GET['edit'];
    if(isset($_POST['update'])){
        $title=$_POST['title'];
        $content=$_POST['content'];
        
        if(isset($_POST['1']) && !isset($_POST['2'])){ //if only one row is set
            $row1=$_POST['1'];
            $row1='<tr>'.$row1.'</tr>';
            $my_rows=$row1;
            
            $query="UPDATE `plan_card` SET `title`='$title',`content`='$content',`my_rows`='$my_rows' WHERE `id`='$edit_id'";
            $q_res=mysqli_query($con,$query);
            if(!$q_res){
                die("query failed ".mysqli_error($con));
            }else{
                header("Location: plan-cards.php");
            }
            }elseif(isset($_POST['2']) && !isset($_POST['3'])){ //two rows are set
                $row1=$_POST['1'];
                $row1='<tr>'.$row1.'</tr>';
                $row2=$_POST['2'];
                $row2='<tr>'.$row2.'</tr>';
                $my_rows=$row1.$row2;

                $query="UPDATE `plan_card` SET `title`='$title',`content`='$content',`my_rows`='$my_rows' WHERE `id`='$edit_id'";
                $q_res=mysqli_query($con,$query);
                if(!$q_res){
                    die("query failed ".mysqli_error($con));
                }else{
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

                $query="UPDATE `plan_card` SET `title`='$title',`content`='$content',`my_rows`='$my_rows' WHERE `id`='$edit_id'";
                $q_res=mysqli_query($con,$query);
                if(!$q_res){
                    die("query failed ".mysqli_error($con));
                }else{
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

                $query="UPDATE `plan_card` SET `title`='$title',`content`='$content',`my_rows`='$my_rows' WHERE `id`='$edit_id'";
                if(!$q_res){
                    die("query failed ".mysqli_error($con));
                }else{
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

                $query="UPDATE `plan_card` SET `title`='$title',`content`='$content',`my_rows`='$my_rows' WHERE `id`='$edit_id'";
                if(!$q_res){
                    die("query failed ".mysqli_error($con));
                }else{
                    header("Location: plan-cards.php");
                }
            }else{
                echo "<div class='alert alert-warning' role='alert'>
                      <strong>Please fill all the fields!</strong>
                    </div>";
            }

        
        echo $my_rows;
        
        
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


<?php include "includes/footer.php"; ?>