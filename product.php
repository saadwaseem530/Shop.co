<?php
include "database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/font-awesome.min.css">
    <script src="bootstrap-5.0.2-dist/js/bootstrap.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="FONTS/Satoshi_Complete/Fonts/WEB/css/satoshi.css">
    <!-- BOOTSTRAP LINKS  -->
    <!-- JQUERY LINK -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- JQUERY LINK -->
    <title>Document</title>
</head>
<style>
  nav ul {
  list-style: none;
}
nav ul li {
  display: inline;
  font-size: 17px;
}
nav ul li a {
  color: rgb(99, 99, 99);
  text-decoration: none;
  margin-left: 25px;
}
nav ul li:hover a {
  color: black;
  text-decoration: none;
}
.dot {
  height: 30px;
  width: 30px;
  border-radius: 50%;
  display: inline-block;
}
.class {
  border-top: 1px dotted black;
  padding-top: 20px;
}
</style>
<body>
    <!-- Navbar -->
    <?php
include "navbar.html";
?>
<!-- Navbar -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header "  >
              <span style="display: flex; align-items: center; justify-content: center;  width: 100%;" ><a class="navbar-brand" href="#" style='color: black; font-size: 33px;font-weight: bold;font-family: Intergral-Cf; '>SHOP.CO</a></span>
              
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>-
          <div class="modal-body">
            <h5 class="modal-title" id="exampleModalLabel">Registered Customers</h5>
            <p style="font-size: smaller;font-weight: 600;">If you have an account with us, please log in.</p>
            <label>Email Address</label><br>
            <a class="email" href="#"><i class="fa fa-user" style="font-size:15px"></i></a> 
            <input class="email-t" type="email" name="email" required>
            <br><br>
            <label>Password</label><br>
            <a class="email" href="#"><i class="fa fa-lock" style="font-size:15px"></i></a> 
            <input class="password-t" type="password" name="password"  required>
            <br><br>
            <input class="form-check-input  " type="checkbox" value="" id="form2Example31">
            <label class="form-check-label" for="form2Example31">Remember me </label>
            <br><br>
            <button type="button" class="Login-bt mb-4">Login</button>
            <div class="p" style="display: flex;">
            <span style="width: 50%; display: flex;justify-content: left;"><a style="text-decoration: none;font-size: 15px;" href="#">Create an Account</a></span><span style="width: 50%; display: flex;justify-content: right;"><a style="text-decoration: none;color: red;font-size: 14px;" href="#">Forgot password?</a></span>
          </div>
            <br>
          </div>
    
        </div>
      </div>
    </div>
<!-- Modal -->
<!-- Section -->
<div class="container-fluid">
<nav>
      <ul>
          <li><a href="index.php">Home  ></a></li>
          <li><a href="#">Shop  ></a></li>
          <li><a href="product-detail.php" style="color: black;">Men</a></li>
      </ul>
  </nav>
</div>
<!-- Section -->
<div class=" container  d-flex  col-lg-2 col-md-2  d-lg-block">
    <div class="cards">
        <div class='card  card-image col-9' style='border: none;'>
          <img src="Product-image/image 2.png"  class='card-img-top mb-1 ml-1' alt='...'>
        </div>
        <div class='card  card-image col-9' style='border: none;'>
          <img src="Product-image/image 5.png"  class='card-img-top mb-1 ml-1'  alt='...'>
        </div>
        <div class='card  card-image col-9' style='border: none;'>
        <img src="Product-image/image 6.png"  class='card-img-top' alt='...'>
      </div>
      </div>
      <div class="container">
      <div class="col-lg-4 col-md-4 d-none d-lg-block">
        <div class='card  card-image' style='border: none;'>
          <img src="Product-image/image 1.png"  class='card-img-top' alt='...'>
        </div>
        <div class="card-body col-6">
      <h1>One Life Graphic T-shirt</h1>
    <h2 class="card-title">260</h2>
    <p class="card-text fs-5" style="font-family: arial;">This graphic t-shirt which is perfect for any occasion. Crafted from a soft and breathable fabric, it offers superior comfort and style.</p>
    <p class="card-text fs-4 mt-1 class" style="font-family: arial;font-weight: 600;">Select Color</p>
    <a href="#" class="dot" style="background-color: rgb(93, 27, 27);"></a>
    <a href="#" class="dot" style="background-color: rgb(1, 48, 1);"></a>
    <a href="#" class="dot" style="background-color: rgb(23, 23, 23);"></a>
    <p class="card-text fs-4 mt-1 class" style="font-family: arial;font-weight: 600;">Select Size</p>
    <a class='btn col-3 fs-10' style="border-radius: 20px;background-color: rgb(235, 235, 235);font-family:Arial, Helvetica, sans-serif;">Small</a>
    <a class='btn col-3 fs-10' style="border-radius: 20px;background-color: rgb(235, 235, 235);font-family:Arial, Helvetica, sans-serif;">Medium</a>
    <a class='btn col-3 fs-10' style="border-radius: 20px;background-color: rgb(235, 235, 235);font-family:Arial, Helvetica, sans-serif;">Large</a>
    <span class='d-flex mt-2 class'>
        <button type='button' class='btn btn-dark col-12 fs-5' style="border-radius: 20px;">ADD TO CART</button>
        </span>
  </div>
      </div>
      </div>
    </div>
</body>
</html>