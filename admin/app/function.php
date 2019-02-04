<?php

// Force Login
function forceLogin(){

    if(!isset($_SESSION['login_user'])) : 
    header("Location: login.php"); exit;
    endif;
}

//Force Dashboard
function forceDashboard(){

    if(isset($_SESSION['login_user'])) : 
        header("Location: index.php"); exit;
    endif;
}

//Counting All User
function userCount(){
    global $db;
    $query = ("SELECT COUNT(*) AS count FROM users");
    $results = $db-> query($query);
    $row = mysqli_fetch_assoc($results);
    $count = $row['count'];
    return $count;
}


// Counting post
function postCount(){
    global $db;
    $query = ("SELECT COUNT(*) AS count FROM post");
    $results = $db-> query($query);
    $row = mysqli_fetch_assoc($results);
    $count = $row['count'];
    return $count;
}

// Counting Pages
function pageCount(){
    global $db;
    $query = ("SELECT COUNT(*) AS count FROM pages");
    $results = $db-> query($query);
    $row = mysqli_fetch_assoc($results);
    $count = $row['count'];
    return $count;
}

// Counting comments
function commentCount(){
    global $db;
    $query = ("SELECT COUNT(*) AS count FROM commment");
    $results = $db-> query($query);
    $row = mysqli_fetch_assoc($results);
    $count = $row['count'];
    return $count;
}

// Counting Category
function categoryCount(){
    global $db;
    $query = ("SELECT COUNT(*) AS count FROM category");
    $results = $db-> query($query);
    $row = mysqli_fetch_assoc($results);
    $count = $row['count'];
    return $count;
}


// getting logged in ussers Data
function getUser(){

    if(isset($_SESSION['login_user']) && isset($_SESSION['user_id']) && isset($_SESSION['user_joining'])){
        $date = date('j-M-Y', strtotime($_SESSION['user_joining']));
        return array(
            'name' => $_SESSION['login_user'],
            'email' => $_SESSION['user_email'],
            'joining' => $date
        );

    }else{

        return array(
            'name' => 'oops!',
            'email' => 'oops!',
            'joining' => 'oops!'
        );
    }
}
$users = getUser();