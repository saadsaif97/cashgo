<?php
ob_start();
if (!isset($_SESSION)) {
    session_start();
}
?>
<?php include "includes/db.php"; ?>
<!-- ||BRINGING COMMENTS|| -->
<?php
$id = $_GET['id'];
$query = "SELECT * FROM `post_comments` WHERE `post_id`='$id' ORDER BY `id` DESC";
$q_res = mysqli_query($con, $query);
if (!$q_res) {
    die("query failed " . mysqli_error($con));
}

if (mysqli_num_rows($q_res) == 0) {
    echo "This post has no comment";
} else {
    while ($row = mysqli_fetch_assoc($q_res)) {
        $comment_id = $row['id'];
        $comment = $row['comment'];
        $cmnt_author = $row['cmnt_author'];
        $time_stamp = $row['time_stamp'];

        // making the time stamp legible
        if (!function_exists('timeago')) {
            function timeago($date)
            {
                $timestamp = strtotime($date);

                $strTime = array("second", "minute", "hour", "day", "month", "year");
                $length = array("60", "60", "24", "30", "12", "10");

                $currentTime = time();
                if ($currentTime >= $timestamp) {
                    $diff     = time() - $timestamp;
                    for ($i = 0; $diff >= $length[$i] && $i < count($length) - 1; $i++) {
                        $diff = $diff / $length[$i];
                    }

                    $diff = round($diff);
                    return $diff . " " . $strTime[$i] . "(s) ago ";
                }
            }
        }

        $strTimeAgo = timeago($time_stamp);
?>
        <hr>
        <div class="media  p-3" style="flex-direction: column;">
            <div style="display: flex; flex-direction:row;">
                <img src="https://image.ibb.co/jw55Ex/def_face.jpg" alt="<?php echo $cmnt_author; ?>" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                <div class="media-body">
                    <h5><span style="font-weight:bolder;"><?php echo $cmnt_author; ?></span> <small><i><?php echo $strTimeAgo; ?></i></small></h5>
                    <p style="text-align:left; font-weight:normal;"><?php echo $comment; ?></p>
                </div>
            </div>
            <hr>
            <div class="fold">
                <h6 style="cursor: pointer; font-weight:bolder; color:blue;"><i class="fa fa-chevron-down" style="transition: all 0.3s ease-in-out;"></i> view replies</h6>

                <div id="reply_box" style="display: none; transition:all 0.3s ease-in-out;">
                    <?php
                    $replies_query = "SELECT * FROM `comment_reply` WHERE `parent_id`='$id'";
                    $replies_query_response = mysqli_query($con, $replies_query);
                    if (!$replies_query_response) {
                        die("query failed " . mysqli_error($con));
                    }
                    if (mysqli_num_rows($replies_query_response) > 0) {

                        while ($row = mysqli_fetch_assoc($replies_query_response)) {
                            $reply = $row['content'];
                            $reply_author = $row['author'];
                            $reply_time_stamp = $row['time_stamp'];
                            $reply_time = timeago($reply_time_stamp);
                    ?>
                            <div class="media mt-3" style="padding-left: 50px;">
                                <div style="display: flex; flex-direction:row;">
                                    <img src="https://image.ibb.co/jw55Ex/def_face.jpg" alt="<?php echo $reply_author; ?>" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                                    <div class="media-body">
                                        <h5><span style="font-weight:bolder;"><?php echo $reply_author; ?></span> <small><i><?php echo $reply_time; ?></i></small></h5>
                                        <p style="text-align:left; font-weight:normal;"><?php echo $reply; ?></p>
                                    </div>
                                </div>
                            </div>


                    <?php
                        } //while end
                    } else {
                        echo "This comment has no reply.";
                    } //if no replay are here
                    ?>

                    <hr>
                    <div class="mt-3" style="width:100%">
                        <?php if (isset($_SESSION['logged_in'])) { ?>

                            <!--	FORM TO ADD REPLY-->
                            <form id="reply_form" method="post">
                                <input type="hidden" name="comment_id" value="<?php echo $comment_id; ?>">
                                <h5 class="text-muted" style="font-weight: bolder;"> Send reply:</h5>
                                <div class="form-group">
                                    <input type="text" style="border: none; border-bottom:1px solid #e9e9e9;" name="reply" id="reply">
                                </div>
                                <div class="form-group">
                                    <input type="submit" style="width:auto;" class="btn btn-secondary btn-sm" value="Send reply">
                                </div>
                            </form>

                        <?php } else {
                            echo "<small>You can only reply to comment when logged in</small>";
                        } ?>
                    </div>
                </div>
            </div>





        </div>

<?php
    } //while
} //while cover
?>

<script>
    // reply_forms.forEach((form) => {
    //     form.addEventListener("submit", function(e) {
    //         e.preventDefault();
    //         console.log(e.target);
    //     })
    // })

    // comment_form.addEventListener("submit", function(e) {
    //     e.preventDefault();
    //     // get the form data
    //     // there are many ways to get this data using jQuery (you can use the class or id also)
    //     var formData = {
    //         'post_id': $('input[name=post_id]').val(),
    //         'comment': $('textarea[name=comment]').val()
    //     };

    //     // process the form
    //     $.ajax({
    //             type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
    //             url: 'add-comment.php', // the url where we want to POST
    //             data: formData, // our data object
    //             dataType: 'json', // what type of data do we expect back from the server
    //         })
    //         // using the done promise callback
    //         .done(function(data) {

    //             // log data to the console so we can see
    //             $('textarea[name=comment]').val("");
    //             $.get("fetch-comments.php?id=<?php echo $post_id; ?>", function(data) {
    //                 $("#comment_box").html(data);
    //             });

    //         });
    // })
</script>