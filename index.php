<?php
include "database.php";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP LINKS  -->
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
<body>
  <!-- HEADER -->
   <?php
  include "navbar.html";
  ?> 
  
  
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
          <!-- modal -->
  <!-- HEADER -->
  <!-- CAROUSEL -->
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner  ">
        <div class="carousel-item active">
          <!-- <img src="assets/img/Rectangle.png" class="d-none d-lg-block d-md-block w-100" height="550px" style="position: relative;" alt="..."> 
          <img src="assets/img/2024-02-01 020536.png" class="d-block d-lg-none d-md-none w-100" height="550px" style="position: relative;" alt="...">  -->
          <img src="assets/img/Rectangle.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/img/sale-2.jpg" class="d-block w-100"  alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/img/sale.jpeg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  <!-- CAROUSEL -->
<!-- BRANDS NAME -->
<div class="container-fluid mt-3">
      <div class="row d-flex pt-3 pb-3" style="background-color: black;justify-content: center;">
        <div class="col-4 col-lg-2 col-md-4 d-flex" style="justify-content: center;"><img  class="w-50" src="assets/img/versace.png" alt=""></div>
        <div class="col-4 col-lg-2 col-md-4 d-flex" style="justify-content: center;"><img   class="w-50  "  src="assets/img/zara-logo-1 1.png" alt=""></div>
        <div class="col-4 col-lg-2 col-md-4 d-flex" style="justify-content: center;"><img   class="w-50  "  src="assets/img/prada-logo-1 1.png" alt=""></div>
        <div class=" col-6 col-lg-2 col-md-4 d-flex" style="justify-content: center;"><img   class="w-50  "  src="assets/img/gucci-logo-1 1.png" alt=""></div>
        <div class=" col-6 col-lg-2 col-md-4 d-flex" style="justify-content: center;"><img   class="w-50  "  src="assets/img/Calvin-kelvin.png" alt=""></div>
      </div>
<!-- BRANDS NAME -->
<!-- CARDS SECTION -->
<h2 class="mb-5 mt-5" style="font-weight: bold;font-family: Intergral-Cf; font-size : 33px;  display: flex;justify-content: center;">NEW ARRIVALS</h2>
<div class="container">
<div class='row mb-5 d-flex ' style='justify-content: space-evenly;'> 
<?php

$query = "SELECT * FROM `products`";
$cmd = mysqli_query($conn,$query);


while ($row = mysqli_fetch_assoc($cmd)) {
  print "<div class='card  card-image col-6 col-lg-3 col-md-3' style='border: none;'>
  <a  href='product-detail.php?pid=$row[id]'><img  src='Product-image/{$row['Product-image']}' class='card-img-top' alt='...'></a>
            
            <div class='card-body'>
              <a href='#' style='font-size: 18px;font-weight: bold;text-decoration: none;color: black;'>{$row['Product-name']}</a>
              <h5 class='card-title'>{$row['Price']}</h5>
              <span class='d-flex  '>
        <button type='button' class='btn btn-dark ms-lg-5 ms-2 '>ADD TO CART</button
        </span>
            </div>
        </div>";
};

?>
</div>
<h2 class="mb-5 mt-5" style="font-weight: bold;font-family: Intergral-Cf; font-size : 33px;  display: flex;justify-content: center;">MOST SELLING</h2>
<div class='row mb-5 d-flex ' style='justify-content: space-evenly;'> 
  <?php

  $query = "SELECT * FROM `products`";
  $cmd = mysqli_query($conn,$query);

  
  while ($row = mysqli_fetch_assoc($cmd)) {
    print "<div class='card  card-image col-6 col-lg-3 col-md-3' style='border: none;'>
    <a href='product-detail.php?pid=$row[id]'><img src='Product-image/{$row['Product-image']}' class='card-img-top' alt='...'></a>
              
              <div class='card-body'>
                <a href='#' style='font-size: 18px;font-weight: bold;text-decoration: none;color: black;'>{$row['Product-name']}</a>
                <h5 class='card-title'>{$row['Price']}</h5>
                <span class='d-flex  '>
          <button type='button' class='btn btn-dark ms-lg-5 ms-2 '>ADD TO CART</button
          </span>
              </div>
          </div>";
   
  };
  
  ?>
</div>
</div>
<!-- CARDS SECTION -->
<!-- BROWSE SECTION -->
<div class="container d-flex mb-5" style="justify-content: center;">
      <img class="d-none d-lg-block d-md-block" src="assets/img/Frame 60.png" alt="">
      <img class="d-block d-lg-none d-md-none" src="assets/img/Frame 104.png" alt="">
    </div>
    
<!-- BROWSE SECTION -->
<!-- FOOTER SECTION -->
<h2 class="mb-5 mt-5" style="font-weight: bold;font-family: Intergral-Cf; font-size : 33px;  display: flex;justify-content: center;">OUR HAPPY CUSTOMERS</h2>
<?php
include "footer.html";?>
<!-- FOOTER SECTION -->












</body>
</html>