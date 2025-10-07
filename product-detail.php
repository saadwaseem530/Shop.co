<?php
include "database.php";
if(isset($_GET["pid"]))
$id=$_GET["pid"];
else{
 $id=$_GET["id"];
}
$squery="SELECT * FROM products WHERE id = $id";
$scmd=mysqli_query($conn,$squery);
$row=mysqli_fetch_assoc($scmd);
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









<!-- PRODUCT DETAILS  -->
<section class="py-5">
  <div class="container">
    <div class="row gx-5">
      <aside class="col-lg-6">
        <div class=" mb-3 d-flex justify-content-center">
        <?php

  print("
  <img   id='bigImage'  class='w-75' style='max-width: 100%; max-height: 100vh; margin: auto;' class='rounded-4 fit'  src='Product-image/{$row['Product-image']}'  />
  ");

          ?>
        
          </a>
        </div>
        <div class="d-flex justify-content-center mb-3">
        <?php
$query = "SELECT * FROM `products` ORDER BY `products`.`id` DESC LIMIT 4 ";
$cmd = mysqli_query($conn, $query);
while ($srow = mysqli_fetch_assoc($cmd)) {
    print("<img onclick='changeBigImage(\"{$srow['Product-image']}\")' width='60' height='60' class='rounded-2' src='Product-image/{$srow['Product-image']}' />");
}
?>
        </div>
        <!-- thumbs-wrap.// -->
        <!-- gallery-wrap .end// -->
      </aside>
      <main class="col-lg-6">
        <div class="ps-lg-3">
          <h4 class="title text-dark">
          <?php
print($row['Product-name']);
          ?>
          </h4>
          <div class="d-flex flex-row my-3">
            <div class="text-warning mb-1 me-2">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
              <span class="ms-1">
                4.5
              </span>
            </div>
            <span class="text-muted"><i class="fas fa-shopping-basket fa-sm mx-1"></i>154 orders</span>
            <span class="text-success ms-2">In stock</span>
          </div>

          <div class="mb-3">
            <span class="h5">          <?php
print($row['Price']);
          ?></span>
            <span class="text-muted">/per box</span>
          </div>

          <p>
            Modern look and quality demo item is a streetwear-inspired collection that continues to break away from the conventions of mainstream fashion. Made in Italy, these black and brown clothing low-top shirts for
            men.
          </p>

          <div class="row">
            <dt class="col-3">Type:</dt>
            <dd class="col-9">Regular</dd>

            <dt class="col-3">Color</dt>
            <dd class="col-9">Brown</dd>

            <dt class="col-3">Material</dt>
            <dd class="col-9">Cotton, Jeans</dd>

            <dt class="col-3">Brand</dt>
            <dd class="col-9">Reebook</dd>
          </div>

          <hr />

          <div class="row mb-4">
            <div class="col-md-4 col-6">
              <label class="mb-2">Size</label>
              <select class="form-select border border-secondary" style="height: 35px;">
                <option>Small</option>
                <option>Medium</option>
                <option>Large</option>
              </select>
            </div>
            <!-- col.// -->
            <div class="col-md-4 col-6 mb-3">
              <label class="mb-2 d-block">Quantity</label>
              <div class="input-group mb-3" style="width: 170px;">
                <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon1" data-mdb-ripple-color="dark">
                  <i class="fas fa-minus"></i>
                </button>
                <input type="text" class="form-control text-center border border-secondary" placeholder="14" aria-label="Example text with button addon" aria-describedby="button-addon1" />
                <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon2" data-mdb-ripple-color="dark">
                  <i class="fas fa-plus"></i>
                </button>
              </div>
            </div>
          </div>
          <a href="#" class="btn btn-warning shadow-0"> Buy now </a>
          <a href="#" class="btn btn-primary shadow-0"> <i class="me-1 fa fa-shopping-basket"></i> Add to cart </a>
          <a href="#" class="btn btn-light border border-secondary py-2 icon-hover px-3"> <i class="me-1 fa fa-heart fa-lg"></i> Save </a>
        </div>
      </main>
    </div>
  </div>
</section>
<!-- PRODUCT DETAILS  -->
<!-- REVIEWS -->
<section style="color: #000; background-color: #f3f2f2;">
  <div class="container py-5">
    <div class="row d-flex justify-content-center">
      <div class="col-md-10 col-xl-8 text-center">
        <h3 class="fw-bold mb-4">CUSTOMER REVIEWS</h3>
        <p class="mb-4 pb-2 mb-md-5 pb-md-0">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet
          numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum
          quisquam eum porro a pariatur veniam.
        </p>
      </div>
    </div>

    <div class="row text-center">
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="card">
          <div class="card-body py-4 mt-2">
            <div class="d-flex justify-content-center mb-4">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp"
                class="rounded-circle shadow-1-strong" width="100" height="100" />
            </div>
            <h5 class="font-weight-bold">Teresa May</h5>
            <h6 class="font-weight-bold my-3">Founder at ET Company</h6>
            <ul class="list-unstyled d-flex justify-content-center">
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star-half-alt fa-sm text-info"></i>
              </li>
            </ul>
            <p class="mb-2">
              <i class="fas fa-quote-left pe-2"></i>Lorem ipsum dolor sit amet,
              consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat
              ad velit ab hic tenetur.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="card">
          <div class="card-body py-4 mt-2">
            <div class="d-flex justify-content-center mb-4">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(15).webp"
                class="rounded-circle shadow-1-strong" width="100" height="100" />
            </div>
            <h5 class="font-weight-bold">Maggie McLoan</h5>
            <h6 class="font-weight-bold my-3">Photographer at Studio LA</h6>
            <ul class="list-unstyled d-flex justify-content-center">
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
            </ul>
            <p class="mb-2">
              <i class="fas fa-quote-left pe-2"></i>Autem, totam debitis suscipit saepe
              sapiente magnam officiis quaerat necessitatibus odio assumenda perferendis
              labore laboriosam.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-0">
        <div class="card">
          <div class="card-body py-4 mt-2">
            <div class="d-flex justify-content-center mb-4">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(17).webp"
                class="rounded-circle shadow-1-strong" width="100" height="100" />
            </div>
            <h5 class="font-weight-bold">Alexa Horwitz</h5>
            <h6 class="font-weight-bold my-3">Front-end Developer in NY</h6>
            <ul class="list-unstyled d-flex justify-content-center">
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="far fa-star fa-sm text-info"></i>
              </li>
            </ul>
            <p class="mb-2">
              <i class="fas fa-quote-left pe-2"></i>Cras sit amet nibh libero, in gravida
              nulla metus scelerisque ante sollicitudin commodo cras purus odio,
              vestibulum in tempus viverra turpis.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- REVIEWS -->
<!-- SUGGETION CARDS -->
<div class="container">
<h2 class="mb-5 mt-5" style="font-weight: bold;font-family: Intergral-Cf; font-size : 33px;  display: flex;justify-content: center;">YOU MIGHT ALSO LIKE</h2>
<div class='row mb-5 d-flex ' style='justify-content: space-evenly;'> 
<?php

$query = "SELECT * FROM `products`   ORDER BY `products`.`id` DESC LIMIT 4 ";
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
<!-- SUGGETION CARDS -->






















<!-- FOOTER -->
<?php
include "footer.html";
?>
<!-- FOOTER -->
<script>
  function changeBigImage(imageSrc) {
    document.getElementById('bigImage').src = 'Product-image/' + imageSrc;
  }
</script>

</body>
</html>