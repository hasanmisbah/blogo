<?php
session_start();
include ('./../app/db.php');


$username = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['password1']);

if($username && $email && $password){

    $query = "INSERT INTO users (name, email, password) VALUES('$username','$email','$password')";

    mysqli_query($db, $query);
    
  	header('Location: http://localhost/blogo/admin/login.php');
}else{
    echo 'There is a problem';
}

