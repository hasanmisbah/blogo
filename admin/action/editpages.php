<?php
session_start();
include ('./../app/db.php');
    

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $pagesID = $_POST['pages-id'];
    $pageTitle = $_POST['pages-title'];
    $pagesBody = $_POST['pageeditor'];

    $postQuery = "UPDATE pages SET pages_title = '$pageTitle', pages_body = '$pagesBody'  WHERE pages_id =  '$pagesID'"; 


   // echo $pageTitle;

    if($db->query($postQuery) === TRUE){

        $_SESSION['FeedBackSuccess'] = 'Pages Successfully Updates';

        header('Location: http://localhost/blogo/admin/pages.php');

    }else{
        $_SESSION['FeedBackError'] = 'Failed Update Pages';

        header('Location: http://localhost/blogo/admin/pages.php');
    }
}