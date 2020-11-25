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
    $post_id = $_POST['post_id'];
    $comment = $_POST['comment'];
    $cmnt_author = $_SESSION['username'];
    $comment_add_query = "INSERT INTO `post_comments`(`post_id`, `comment`, `cmnt_author`) VALUES ('$post_id','$comment','$cmnt_author')";
    $comment_add_res = mysqli_query($con, $comment_add_query);
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
