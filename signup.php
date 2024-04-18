<?php
include "header.php";
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Food Recipes</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/signup_login.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <div class="wallpaper">
        <img src="img/recepie/recpie_5.png">
        <div class="signup-box">
        <h1>Sign Up</h1>
        <h4>It's free and only takes a minute</h4>
          <form action="signup.inc.php" method="post">
          <label>First name</label>
          <input type="text" name="firstname" placeholder="firstname">
          <label>Last Name</label>
          <input type="text" name="lastname" placeholder="lastname">
          <label>Username</label>
          <input type="text" name="username" placeholder="Username">
          <label>Email</label>
          <input type="text" name="email" placeholder="email">
          <label>Password</label>
          <input type="password" name="pwd" placeholder="password">
          <button>Signup</button>
         
        </form>
        <?php
        check_signup_errors();
        ?>
        </div>
      <p class="para-2">
        Already have an account? <a href="login.html">Login here</a>
      </p>

    </div>
    
</body>
</html>   