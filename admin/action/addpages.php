<?php
session_start();
include ('./../app/db.php');
    $userId = $_SESSION['user_id'];

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $pageTitle = $_POST['page-title'];
    $pageBody = $_POST['pageeditor'];

    $postQuery = "INSERT INTO pages (user_id,  pages_title, pages_body) VALUES('$userId', '$pageTitle', '$pageBody')";

    if($db->query($postQuery) === TRUE){

        $_SESSION['FeedBackSuccess'] = 'Your Pages Successfully Added';

        header('Location: "PROJECT_ROOT"/index.php');

    }else{
        $_SESSION['FeedBackError'] = 'Failed To Add Pages';

        header('Location: http://localhost/blogo/admin/index.php');
    }
}