<?php
session_start();
include ('./../app/db.php');
    $userId = $_SESSION['user_id'];

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = $_POST['user-name'];
    $useremail = $_POST['email'];
    $userpass = md5($_POST['password']);

    $postQuery = "INSERT INTO users (name,  email, password) VALUES('$username', '$useremail', '$userpass')";

    if($db->query($postQuery) === TRUE){

        $_SESSION['FeedBackSuccess'] = 'Your User Successfully Added';

        header('Location: http://localhost/blogo/admin/index.php');

    }else{
        $_SESSION['FeedBackError'] = 'Failed To Add user';

        header('Location: http://localhost/blogo/admin/index.php');
    }
}