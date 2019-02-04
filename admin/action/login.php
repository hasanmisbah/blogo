<?php
session_start();
include ('./../app/db.php');


if($_SERVER["REQUEST_METHOD"] == "POST") {
   
      $email = mysqli_real_escape_string($db,$_POST['email']);
      
      $password = md5(mysqli_real_escape_string($db,$_POST['password'])); 

      $sql = "SELECT email FROM users WHERE email = '$email' AND password = '$password' LIMIT 1";

      $result = mysqli_query($db,$sql);

      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      $count = mysqli_num_rows($result);
      
      // If result matched $email and $password, table row must be 1 row
      if($count) {

         $query = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
         $result = $db->query($query);

         while($row = $result->fetch_assoc()){
            $_SESSION['login_user'] = $row['name'];
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['user_joining'] = $row['created_at'];
         }

        header('Location: http://localhost/blogo/admin/index.php');
      }else {
         echo "Your Login Name or Password is invalid";
      }
   }