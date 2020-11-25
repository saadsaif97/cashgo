<?php
ob_start();
if (!isset($_SESSION)) {
    session_start();
}
?>
<?php include "includes/db.php"; ?>
<?php

$errors         = array();      // array to hold validation errors
$data           = array();      // array to pass back data

if (!empty($_POST['comment'])) {
    $parent_id = $_POST['comment_id'];
    $reply = $_POST['reply$reply'];
    $cmnt_author = $_SESSION['username'];
    $reply_add_query = "INSERT INTO `comment_reply`(`reply`, `parent_id`, `author`) VALUES ('$reply','$parent_id','$cmnt_author')";
    $comment_add_res = mysqli_query($con, $reply_add_query);
    if (!$comment_add_res) {
        $data['success'] = false;
        $data['message'] = 'Query failed!';
    } else {
        $data['success'] = true;
        $data['message'] = 'Success!';
    }
} elseif (empty($_POST['comment'])) {
    $data['success'] = false;
    $errors['comment'] = 'Comment not set.';
    $data['errors']  = $errors;
    $data['message'] = 'Outer bracket failed';
}


// return all our data to an AJAX call
echo json_encode($data);
