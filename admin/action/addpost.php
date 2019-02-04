<?php
session_start();
include ('./../app/db.php');
    $userId = $_SESSION['user_id'];

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $postTitle = $_POST['post-title'];
    $postBody = $_POST['posteditor'];
    $category = $_POST['category'];

    $postQuery = "INSERT INTO post (user_id, category_id, post_title, post_body) VALUES('$userId', '$category', '$postTitle', 'postBody')";

    if($db->query($postQuery) === TRUE){

        $_SESSION['FeedBackSuccess'] = 'Your Post Successfully Added';

        header('Location: http://localhost/blogo/admin/index.php');

    }else{
        $_SESSION['FeedBackError'] = 'Failed To Add Data';

        header('Location: http://localhost/blogo/admin/index.php');
    }
}