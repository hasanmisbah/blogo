<?php
  session_start();
  require'./app/db.php';
  forceDashboard();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Boots Admin || Login</title>
  <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles/main.css">
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
      <a class="navbar-brand" href="#">Boots Admin</a>
    </div>
    <!--/.nav-collapse -->
  </div>
</nav>
<header id="header">
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h1> <span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span> Login <small> to Manage Your Site</small>
        </h1>
      </div>
    </div>
  </div>
</header>
  <section class="section section-login">
    <div class="container">
      <div class="row col-sm-8 col-sm-offset-2">
        <div class="panel panel-default login-panel">
          <div class="panel-heading">
            <div class="row">
              <div class="col-sm-6">
                <h3 id="login-form-handler" class="panel-title active">Login</h3>
              </div>
              <div class="col-sm-6">
                <h3 id="signup-form-handler" class="panel-title">Signup</h3>
              </div>

            </div>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-sm-12">

                <!-- Signup Form -->
                <div id="signup">
                  <form action="./action/registration.php" id="signup-form" method="post">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Your name">
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Your Email">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password1" placeholder="Your Password">
                  </div>
                  <div class="form-group">
                    <label>Retype Password</label>
                    <input type="password" class="form-control" name="password2" placeholder="Your Password">
                  </div>
                  <div class="form-group text-center">
                    <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                    <button type="reset" class="btn btn-lg btn-warning">Reset</button>
                  </div>
                  </form>
                </div>
                <!-- End Signup Form -->

                <!-- Login Form -->
                <div id="login">
                  <form action="./action/login.php" id="login-form" method="post">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Your Email">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Your Password">
                  </div>
                  <div class="form-group text-center">
                    <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                    <button type="reset" class="btn btn-lg btn-warning">Reset</button>
                  </div>
                  </form>
                </div>
                <!-- End Login Form -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<footer id="footer" class="container-fluid">
  <div class="container">
    <p class="text-center">Copyright &copy; Boots Admin || 2018</p>
  </div>
</footer>

<script src="./assets/js/jquery.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<script src="./scripts/main.js"></script>
</body>
</html>

