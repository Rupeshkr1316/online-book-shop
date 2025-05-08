<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Online Book Shop</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="css/prettyPhoto.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <style>
    body {
      overflow-x: hidden;
    }
  </style>
</head>

<body class="homepage">
  <?php include('head.php');
  ?>
  </div>
  <nav class="navbar navbar-inverse" role="banner">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
      </div>
      <div class="collapse navbar-collapse navbar-right">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="index.php"> Book Collection</a></li>
          <li><a href="contact1.php">Contact</a></li>
          <?php
          if (isset($_SESSION['username'])) { ?>
            <li><a href="logout.php">Logout</a></li>
            <li>
              <a href="showcart.php">View Cart<span style="background-color: #c52d2f; color: #fff; padding: 3px 6px; border-radius: 25%; margin-left: 5px;">
                  <?php if (isset($_SESSION['cart'])) {
                    echo count($_SESSION['cart']);
                  } ?>
                </span></a>
            </li>


          <?php } else { ?>
            <li><a href="login.php">Login</a></li>
            <li><a href="login-register.php">Register</a></li>
            <li><a href="./admin/index.php">Admin</a></li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </nav>
  </header>