<?php include "../includes/db.php"; ?>
<?php $currentPage="posts"; ?>
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
    <form action="#" id="app">
        <div class="form-group">
            <input type="text" name="title" id="title" class="form-control" placeholder="title">
        </div>
        <div class="form-group">
            <input type="text" name="content" id="content" class="form-control" placeholder="content">
        </div>
        <div class="form-group">
            <a id="insert" class="btn" @click="rows++" style="background-color:gray;">+ Add row</a>
            <a id="insert" class="btn" @click="rows--" style="background-color:gray;">- Remove row</a>
        </div>
        <div v-for="count in rows" v-html="list">
        </div>
        
<!--        row-->
<!--
        <div class="form-group">
             <div class="form-group">
             <small>
            <a id="delete" style="background-color:orange; padding:5px; cursor:pointer; float:right;">Delete Row</a>
             </small>
                <select class="form-control" id="exampleFormControlSelect1">
                    <?php
                    $query="SELECT * FROM `plan_card_rows`";
                    $q_res=mysqli_query($con,$query);
                    if(!$q_res){
                        die("query failed ".mysqli_error($con));
                    }
                    while($row=mysqli_fetch_assoc($q_res)){
                    $content=$row['content'];
                    $content=htmlspecialchars_decode($content);

                        echo "<option>$content</option>";
                    } 
                    ?>
                </select>
              </div>
        </div>
-->
<!--        row-->
       <hr>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" name="create" value="Create new card">
        </div>
    </form>
    </div>
</div>

<script>
    var vm = new Vue({
      el: '#app',
      data: {
        rows: 3,
        list: `<div class="form-group">
                         <div class="form-group">
                            <select class="form-control">
                                <?php
                                $query="SELECT * FROM `plan_card_rows`";
                                $q_res=mysqli_query($con,$query);
                                if(!$q_res){
                                    die("query failed ".mysqli_error($con));
                                }
                                while($row=mysqli_fetch_assoc($q_res)){
                                $content=$row['content'];
                                $content=htmlspecialchars_decode($content);

                                    echo "<option>$content</option>";
                                } 
                                ?>
                            </select>
                          </div>
                    </div>`
    }
    });
</script>


<?php include "includes/footer.php"; ?>