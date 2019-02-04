<?php
  session_start();
  require'./app/db.php';
  forceLogin();
  $user = $users['name'];

  if(!empty($_SESSION['FeedBackSuccess']) || !empty($_SESSION['FeedBackError'])){

    if(!empty($_SESSION['FeedBackSuccess'])){

      $messages = array(
        'messages' => $_SESSION['FeedBackSuccess'],
        'type' => 'success'
      );

    }else{

      $messages = array(
        'messages' => $_SESSION['FeedBackError'],
        'type' => 'danger'
      );
    }
    
  }else{
    $feedback = 'error';
  }

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area || <?= $title ?> </title>

    <link rel="stylesheet" href="../admin/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../admin/styles/main.css">
    <script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
    
  </head>
  <body>
    <nav class="navbar navbar-default" id="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
            aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Boots Admin</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="<?= $title == 'Dashboard' ? 'active' : '' ?>"><a href="index.php">Dashboard</a></li>
            <li class="<?= $title == 'Pages' ? 'active' : '' ?>"><a href="pages.php">Pages</a></li>
            <li class="<?= $title == 'Posts' ? 'active' : '' ?>"><a href="post.php">Posts</a></li>
            <li class="<?= $title == 'Users' ? 'active' : '' ?>"><a href="users.php">Users</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome, <?php echo $user ?></a></li>
            <li><a href="action/logout.php">Logout</a></li>
          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
    </nav>
    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1> <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> <?= $title ?> <small>Manage Your Site</small> </h1>
          </div>
          <div class="col-md-2">
            <div class="dropdown create">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="true">
                Create Content
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a type="button" data-toggle="modal" data-target="#addpost">Add Post</a></li>
                <li><a type="button" data-toggle="modal" data-target="#addpages">Add Pages</a></li>
                <li><a type="button" data-toggle="modal" data-target="#adduser">Add User</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
    <section id="breadcrumb">
      <div class="container">
        <ul class="breadcrumb">
          
          <?php
            if($title != 'Dashboard'){
              echo '<li><a href="index.php">Dashboard</a></li>';
              echo '<li> / </li>';
              echo '<li class="active">'.$title.'</li>';
            }else{
              echo '<li>Dashboard</li>';
            }
          ?>
        </ul>
      </div>
    </section>
      <?php
        if(isset($messages)){
      ?>
    <section class="messages">
      <div class="container">
        <div class="col-md-12">
          <div class="alert alert-<?= $messages['type'] ?>  fade in">
              <a href="#" class="close" data-dismiss="alert">&times;</a>
              <?= $messages['messages'] ?>
          </div>

        </div>
      </div>
    </section>
     <?php
        }
      ?>

    <main>
      <section id="main">
        <div class="container">
          <div class="row">

            <?php require 'sidebar.php' ?>