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
   <h4>Plan card:</h4>
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
            <input type="submit" class="btn btn-primary" name="create" value="Create new card">
        </div>
    </form>
    </div>
</div>
<table>
    <tr></tr>
</table>

<?php
    if(isset($_POST['create'])){
        $title=$_POST['title'];
        $content=$_POST['content'];
        
        if(isset($_POST['1']) && !isset($_POST['2'])){ //if only one row is set
            $row1=$_POST['1'];
            $row1='<tr>'.$row1.'</tr>';
            $my_rows=$row1;
            
            $query="INSERT INTO `plan_card`(`title`, `content`, `my_rows`) VALUES ('$title','$content','$my_rows')";
            $q_res=mysqli_query($con,$query);
            if(!$q_res){
                die("query failed ".mysqli_error($con));
            }else{
                header("Location: add-plan-card.php");
            }
            }elseif(isset($_POST['2']) && !isset($_POST['3'])){ //two rows are set
                $row1=$_POST['1'];
                $row1='<tr>'.$row1.'</tr>';
                $row2=$_POST['2'];
                $row2='<tr>'.$row2.'</tr>';
                $my_rows=$row1.$row2;

                $query="INSERT INTO `plan_card`(`title`, `content`, `my_rows`) VALUES ('$title','$content','$my_rows')";
                $q_res=mysqli_query($con,$query);
                if(!$q_res){
                    die("query failed ".mysqli_error($con));
                }else{
                    header("Location: add-plan-card.php");
                }
            }elseif(isset($_POST['3']) && !isset($_POST['4'])){ //two rows are set
                $row1=$_POST['1'];
                $row1='<tr>'.$row1.'</tr>';
                $row2=$_POST['2'];
                $row2='<tr>'.$row2.'</tr>';
                $row3=$_POST['3'];
                $row3='<tr>'.$row3.'</tr>';
                $my_rows=$row1.$row2.$row3;

                $query="INSERT INTO `plan_card`(`title`, `content`, `my_rows`) VALUES ('$title','$content','$my_rows')";
                $q_res=mysqli_query($con,$query);
                if(!$q_res){
                    die("query failed ".mysqli_error($con));
                }else{
                    header("Location: add-plan-card.php");
                }
            }elseif(isset($_POST['4']) && !isset($_POST['5'])){ //two rows are set
                $row1=$_POST['1'];
                $row1='<tr>'.$row1.'</tr>';
                $row2=$_POST['2'];
                $row2='<tr>'.$row2.'</tr>';
                $row3=$_POST['3'];
                $row3='<tr>'.$row3.'</tr>';
                $row4=$_POST['4'];
                $row4='<tr>'.$row4.'</tr>';
                $my_rows=$row1.$row2.$row3.$row4;

                $query="INSERT INTO `plan_card`(`title`, `content`, `my_rows`) VALUES ('$title','$content','$my_rows')";
                $q_res=mysqli_query($con,$query);
                if(!$q_res){
                    die("query failed ".mysqli_error($con));
                }else{
                    header("Location: add-plan-card.php");
                }
            }elseif(isset($_POST['5'])){ //two rows are set
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

                $query="INSERT INTO `plan_card`(`title`, `content`, `my_rows`) VALUES ('$title','$content','$my_rows')";
                $q_res=mysqli_query($con,$query);
                if(!$q_res){
                    die("query failed ".mysqli_error($con));
                }else{
                    header("Location: add-plan-card.php");
                }
            }else{
                echo "<div class='alert alert-warning' role='alert'>
                      <strong>Please fill all the fields!</strong>
                    </div>";
            }

    
        
        
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