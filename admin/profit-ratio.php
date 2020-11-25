<?php include "../includes/db.php"; ?>
<?php $currentPage = "profitRatio"; ?>
<!--bringing the current logo-->
<?php
//    showing current values
$query = "SELECT * FROM `home`";
$q_res = mysqli_query($con, $query);
if (!$q_res) {
    die("query failed " . mysqli_error($con));
}
$row = mysqli_fetch_assoc($q_res);
$currentLogo = $row['logo'];
?>



<?php include "includes/header.php"; ?>
<div class="container">

    <div class="row py-5">

        <div class="col col-12 col-md-6 offset-md-3">

            <div id="f_mes" style="position: relative;">
                <!--SUCCESS FLASH MESSAGE-->
                <?php if (isset($_SESSION['success_message'])) { ?>
                    <div class="alert alert-success" style="position:absolute; width:100%; box-shadow:2px 2px 4px rgba(0,0,0,0.2);">
                        <i class="fas fa-check-circle"></i>
                        <?php echo $_SESSION['success_message']; ?>
                    </div>
                <?php } ?>
                <?php unset($_SESSION['success_message']); ?>
                <!--SUCCESS FLASH MESSAGE-->
                <!--warning FLASH MESSAGE-->
                <?php if (isset($_SESSION['warning_message'])) { ?>
                    <div class="alert alert-warning" style="position:absolute; width:100%; box-shadow:2px 2px 4px rgba(0,0,0,0.2);">
                        <i class="fas fa-exclamation-circle"></i>
                        <?php echo $_SESSION['warning_message']; ?>
                    </div>
                <?php } ?>
                <?php unset($_SESSION['warning_message']); ?>
                <!--warning FLASH MESSAGE-->

            </div>

            <h4 style="font-weight: bolder;">Insert today's profit ratio:</h4>
            <h5 class="text-muted">If you don't add the date, doday's date will be added automatically</h5>
            <form action="#" method="post" id="profit_form">
                <div class="form-group">
                    <input type="date" name="p_date" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" name="p_ratio" id="p_ratio" class="form-control" placeholder="profit ratio">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info" name="add">Add <i class="fa fa-plus"></i></button>
                </div>
            </form>

            <div id="ratios"></div>
        </div>
    </div>


    <!-- DELETE Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="delete-ratio.php" method="post" id="del_form">
                        <h4>Do you really want to delete this ratio?</h4>
                        <div id="ratio"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" style="background-color: gray;" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn" style="background-color: orangered;">Delete</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {


        // fetching the ratios real time 
        $.get("fetch-ratios.php", function(ratios) {
            $("#ratios").html(ratios);
        });


        // on loading the document the value of the date changes automatically to today
        var now = new Date();
        var day = ("0" + now.getDate()).slice(-2);
        var month = ("0" + (now.getMonth() + 1)).slice(-2);
        var today = now.getFullYear() + "-" + (month) + "-" + (day);
        $("input[name=p_date]").val(today);

        // submitting the form data through ajax
        let profit_form = document.getElementById("profit_form");
        profit_form.addEventListener("submit", function(e) {
            e.preventDefault();

            // getting the form data
            var formData = {
                "profit_ratio_date": $("input[name=p_date]").val(),
                "profit_ratio": $("input[name=p_ratio]").val()
            };

            // process the form
            $.ajax({
                    type: "POST", // define the type of HTTP verb we want to use (POST for our form)
                    url: "add-ratio.php", // the url where we want to POST
                    data: formData // our data object
                })
                // using the done promise callback
                .done(function(data) {
                    $("input[name=p_date]").val("");
                    $("input[name=p_ratio]").val("");
                    // fetching the ratios after posting the data
                    $.get("fetch-ratios.php", function(ratios) {
                        $("#ratios").html(ratios);
                    });
                    // refreshing the flash message div to show message set through session
                    $("#f_mes").load(window.location.href + " #f_mes");
                    // remove the flash message
                    setTimeout(function() {
                        let alert = document.querySelector(".alert");
                        alert.remove();
                    }, 3000);
                });


        });





    });
</script>


<?php include "includes/footer.php"; ?>