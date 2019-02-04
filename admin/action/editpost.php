<?php
session_start();
include ('./../app/db.php');
    

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $postID = $_POST['postid'];
    $postTitle = $_POST['post-title'];
    $postBody = $_POST['posteditor'];
    $category = $_POST['category'];

    $postQuery = "UPDATE post  SET category_id = '$category', post_title = '$postTitle', post_body = '$postBody'  WHERE post_id =  '$postID'"; 

    if($db->query($postQuery) === TRUE){

        $_SESSION['FeedBackSuccess'] = 'Your Post Successfully Updated';

        header('Location: http://localhost/blogo/admin/index.php');

    }else{
        $_SESSION['FeedBackError'] = 'Failed Update Post';

        header('Location: http://localhost/blogo/admin/index.php');
    }
}