<!-- E8951A -->


<?PHP
require_once '../database/connection.php';
$sql = "SELECT * FROM product WHERE product_category = 'promo'";
$all_product=$conn->query($sql);
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet" href="../css/payment.css" />
    <script src="../js/date.js"></script>
    <title>Sugarboo</title>

    <!-- glider -->
    <link rel="stylesheet" href="../js/glider.min.css" />
  </head>
  <body>


    <section id="navigasi">
      <nav class="navbar tempat-navigasi navbar-expand-lg bg-body-tertiary">
        <div class="tempat-navigasi-con container-fluid">
          <a class="tempat-navigasi-con-gambar navbar-brand" href="">
            <img class="tempat-navigasi-con-gambar1 d-none d-lg-block" src="../img/sugarboo.png" alt="logo" />
          </a>
          <button class="button-navigasi-handphone navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><img style="width:40px" src="../img/navigasi-burger.png" alt=""></span>
            <span class="navbar-toggler-icon"><img style="height:100px;  margin-top:-35px; margin-left:-150px;" src="../img/sugarboo.png" alt=""></span>
          </button>
          <div class="tempat-navigasi-con-konten collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="tempat-navigasi-con-konten-list navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item menu ">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item dropdown menu ">
                <a class="nav-link dropdown-toggle" href="product.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">Product</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="product.php#product-bread">bread</a></li>
                  <li><a class="dropdown-item" href="product.php#product-danish">danish</a></li>
                  <li><a class="dropdown-item" href="product.php#product-cookies">cookies</a></li>
                  <li><a class="dropdown-item" href="product.php#product-cakes">cakes</a></li>
                  <li><a class="dropdown-item" href="product.php#product-traditional">traditional</a></li>
                  <li><a class="dropdown-item" href="product.php#product-toast">toast</a></li>
                  <li><a class="dropdown-item" href="product.php#product-hampers">hampers</a></li>
                
                </ul>
              </li>
              <li class="nav-item menu ">
                <a class="nav-link" href="about-us.php">About US</a>
              </li>
              <li class="nav-item menu ">
                <a class="nav-link " aria-disabled="true">Outlet</a>
              </li>
              <li class="nav-item menu ">
                <a class="nav-link " aria-disabled="true" >SHOP NOW</a>
              </li>
              <li class=" nav-item menu-except d-flex">
                <a class="nav-link medsos-icon " aria-disabled="true" ><img class="medsos-icon-img" src="../img/youtube-icon.png" alt="yt"></a>
                <a class="nav-link medsos-icon " aria-disabled="true" ><img class="medsos-icon-img" src="../img/instagram-icon.png" alt="yt"></a>
                <a class="nav-link medsos-icon " aria-disabled="true" ><img class="medsos-icon-img" src="../img/facebook-icon.png" alt="yt"></a>
              </li>
          
            </ul>
          </div>
        </div>
      </nav>
    </section>
    <br><br><br>

    <!-- PAYMENT_DEBIT -->
    <section class="payment-general">
      <span style="display: flex; flex-direction: column; justify-content: space-evenly; width: 100%; margin-right: 30;">
      <div class="payment-plainbg">
        <div class="paymet-header">
          <h4>Debit/Credit Card</h4>
        </div>
        <form style="padding: 10;">

          <!-- CARD NUMBER -->
          <span>
            <label for="cardnumber">Card Number</label>
            <input class="payment-input" type="number" name="cardnumber" style="width:100%">
          </span>

          <!-- EXPIRED DATE & CVV -->
          <span style="display: flex; justify-content: space-evenly;">
            <!-- EXPIRED DATE -->
            <span style="display: flex; justify-content: space-evenly;">
              <span style="display: grid; grid-template: auto;">
                <label for="expired-month">Expiration Date</label>
                <span style="display: flex; justify-content: space-evenly;">
                  <input class="payment-input" type="number" name="expired-month" placeholder="Month" style="width:100%;">
                  <input class="payment-input" type="number" name="expired-year" placeholder="Year" style="width:100%; margin-left: 8;">
                </span>
              </span>
            </span>
            <!-- CVV -->
            <span style="display: grid; grid-template: auto;">
            <label for="cvv" style="margin-left: 10;">CVV</label>
              <span style="display: flex; justify-content: space-evenly;">
                <input class="payment-input" type="number" name="cvv" style="width:100%; margin-left: 10;">
              </span>
            </span>
          </span>

          <!-- HOLDER NAME -->
          <h4 style="margin-top: 15;">Billing Information</h4>
          <span style="display: grid; grid-template: auto;">
            <label for="holdername">Holder Name</label>
              <span style="display: flex; justify-content: space-evenly;">
                <input class="payment-input" type="text" name="holdername" style="width:100%;">
              </span>
          </span>

          <!-- ADDRESS -->
          <span style="display: grid; grid-template: auto;">
            <label for="address">Address</label>
              <span style="display: flex; justify-content: space-evenly;">
                <input class="payment-input" type="text" name="address" style="width:100%;">
              </span>
          </span>

          <!-- CITY & POSTALCODES -->
          <span style="display: flex; justify-content: space-between;">
              <!-- CITY -->
              <span style="display: grid; grid-template: auto;width: 50%;">
                <label for="city">City</label>
                  <input class="payment-input" type="text" name="city" style="width:90%;">
              </span>
              <!-- POSTAL CODE -->
              <span style="display: grid; grid-template: auto; width: 50%;">
                <label for="postalcode" >Postal Code</label>
                  <input class="payment-input" type="number" name="postalcode" style="width:100%;">
              </span>
          </span>

          <!-- COUNTRY & PHONE NUMBER -->
          <span style="display: flex; justify-content: space-between;">
              <!-- COUNTRY-->
              <span style="display: grid; grid-template: auto;width: 50%;">
                <label for="country">Country:</label>
                  <input class="payment-input" type="text" name="country" style="width:90%;">
              </span>
              <!-- PHONE NUMBER -->
              <span style="display: grid; grid-template: auto; width: 50%;">
                <label for="phone-number" >Phone Number</label>
                  <input class="payment-input" type="number" name="phone-number" style="width:100%;">
              </span>
          </span>
          </form>
        </div>

         <!-- OTHER PAYMENT METHOD -->
        <div style="display: flex; justify-content: space-evenly; background-color: white; padding-left: 15;">  
          <div class="payment-plainbg" style="width: 100%">
            <div class="paymet-header">
              <h4>Other Method</h4>
            </div>
            <div style="display: flex; justify-content: space-evenly; margin: 10; padding: 10 15 10 10;">
              <img class="o-pay" src="../img/payment/dana.png">
              <img class="o-pay" src="../img/payment/ovo.png">
              <img class="o-pay" src="../img/payment/linkaja.png">
            </div>
          </div>
        </div>
        </span>
      </div>

      <!-- INVOICE (LIST CART) -->
      <div class="payment-plainbg">
        <div class="paymet-header">
          <h4>Invoice</h4>
        </div>

      <!-- SUBTOTAL -->
        <hr class="solid">
        <!-- SUBTOTAL -->
        <div style="display: flex; flex-direction:row; justify-content:right;">
          <div style="margin: 5px 20px 0px 4px;padding: 5px; width: 200px;">
            <p style="text-align:right; padding: 5px 5px 5px 5px">SUBTOTAL</p>
          </div>
          <div style="margin: 5px 20px 0px 10px; padding: 5px; width: 150px;">
            <p style="text-align:center; border: solid black; padding: 5px 5px 5px 5px; border-radius: 5px;">$SUBTOTAL$</p>
          </div>
        </div>

        <!-- PAJAK -->
        <div style="display: flex; flex-direction:row; justify-content:right;">
          <div style="margin: 5px 20px 0px 4px;padding: 5px; width: 200px;">
            <p style="text-align:right; padding: 5px 5px 5px 5px">PAJAK</p>
          </div>
          <div style="margin: 5px 20px 0px 10px; padding: 5px; width: 150px;">
            <p style="text-align:center; border: solid black; padding: 5px 5px 5px 5px; border-radius: 5px;">$PAJAK$</p>
          </div>
        </div>

        <!-- TOTAL -->
        <div style="display: flex; flex-direction:row; justify-content:right;">
          <div style="margin: 5px 20px 0px 4px;padding: 5px; width: 200px;">
            <p style="text-align:right; padding: 5px 5px 5px 5px">TOTAL HARGA</p>
          </div>
          <div style="margin: 5px 20px 0px 10px; padding: 5px; width: 150px;">
            <p style="text-align:center; border: solid black; padding: 5px 5px 5px 5px; border-radius: 5px;">$TOTAL_HARGA$</p>
          </div>
        </div>
      </div>
    </section>
  </body>
   

    <br><br>

      <section class="footer">
        <footer class="footer-lg-keatas text-white pt-1 pb-2 d-none d-lg-block" style="background-color: maroon;">
          <div class="container text-left text-md-left">
            <div class="row" >
              <div col-12>
              <a class="tempat-foto-footer" href="" style="display: flex;justify-content:center; align-items:center;">
            <img class="tempat-foto-footer d-none d-lg-block" style="width: 300px;" src="../img/sugarboo.png" alt="logo" />
          </a>

              </div>
            </div>
            <div class="row text-left text-md-left">
              <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Sugarboo</h5>
                <p>Sugarboo is a legendary cake shop founded by Jovan Fajar Vikesa in 2008.This cake shop opened its first outlet in Bekasi City
                </p>
              </div>

              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
              <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Product</h5>
              <p class="mb-0"> 
                <a href="product.php#product-bread" class="text" style="text-decoration:none; color:black; font-size:large">The Bread</a>
              </p>
              <p class="mb-0"> 
                <a href="product.php#product-danish" class="text" style="text-decoration:none;color:black;font-size:large">Amazing Danish</a>
              </p>
              <p class="mb-0"> 
                <a href="product.php#product-cakes" class="text" style="text-decoration:none;color:black;font-size:large">Great Cakes</a>
              </p>
              <p class="mb-0"> 
                <a href="product.php#product-toast" class="text" style="text-decoration:none;color:black;font-size:large">Toasty Toast</a>
              </p>
              <p class="mb-0"> 
                <a href="product.php#product-hampers" class="text" style="text-decoration:none;color:black;font-size:large">Make your Hampers</a>
              </p>
              <p class="mb-0"> 
                <a href="product.php#product-traditional" class="text" style="text-decoration:none;color:black;font-size:large">Traditional cakes</a>
              </p>
              <p class="mb-0"> 
                <a href="product.php#product-cookies" class="text" style="text-decoration:none;color:black;font-size:large">Want a Cookies</a>
              </p>
              </div>

              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
              <h5 class="text-uppercase mb-4 font-weight-bold text-warning">About</h5>
              <p class="mb-0"> 
                <a href="" class="text-white" style="text-decoration:none;">About Us</a>
              </p>
              <p class="mb-0"> 
                <a href="" class="text-white" style="text-decoration:none;">Location</a>
              </p>
              <p class="mb-0"> 
                <a href="" class="text-white" style="text-decoration:none;">Contact Us</a>
              </p>
             
              </div>

              <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
              <h5 class="text-uppercase mb-2 font-weight-bold text-warning">Order online,pick it up in store & enjoy</h5>
              <div class="choose-store">
                Choose your store
              </div>
             
              </div>
            </div>

            <div class="row align-items-center mt-4">
              <div class="col-md-7 col-lg-8">
                <p>Copyright @2023 All rights reserved by:
                  <a href="" style="text-decoration: none;"><strong class="text-warning">Sugarboo Bekasi</strong></a>
                </p>
              </div>

              <div class="col-md-5 col-lg-4">
                <div class="text-center text-md-right">
                  <ul class="list-unstyled list-inline">
                    <li class="list-inline-item">
                      <a  aria-disabled="true" ><img class="medsos-icon-img" src="../img/youtube-icon.png" alt="yt"></a>
                    </li>
                    <li class="list-inline-item">
                      <a aria-disabled="true" ><img class="medsos-icon-img" src="../img/instagram-icon.png" alt="yt"></a>
                    </li>
                    <li class="list-inline-item">
                      <a  aria-disabled="true" ><img class="medsos-icon-img" src="../img/facebook-icon.png" alt="yt"></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </footer>



<footer class="footer-lebihkecil-lg d-lg-none ">
        <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
           <h2 class="accordion-header">
      <button class="accordion-button collapsed" style="background-color:maroon;color:gold;font-size:large;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        What is Sugarboo
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
      <p style="font-size:large;">Sugarboo is a legendary cake shop founded by Jovan Fajar Vikesa in 2008.This cake shop opened its first outlet in Bekasi City</p>
      </div>
    </div>
  </div>


  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" style="background-color:maroon;color:gold;font-size:large;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        Product
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
      <p class="mb-0"> 
                <a href="product.php#product-bread" class="text" style="text-decoration:none; color:black; font-size:large">The Bread</a>
              </p>
              <p class="mb-0"> 
                <a href="product.php#product-danish" class="text" style="text-decoration:none;color:black;font-size:large">Amazing Danish</a>
              </p>
              <p class="mb-0"> 
                <a href="product.php#product-cakes" class="text" style="text-decoration:none;color:black;font-size:large">Great Cakes</a>
              </p>
              <p class="mb-0"> 
                <a href="product.php#product-toast" class="text" style="text-decoration:none;color:black;font-size:large">Toasty Toast</a>
              </p>
              <p class="mb-0"> 
                <a href="product.php#product-hampers" class="text" style="text-decoration:none;color:black;font-size:large">Make your Hampers</a>
              </p>
              <p class="mb-0"> 
                <a href="product.php#product-traditional" class="text" style="text-decoration:none;color:black;font-size:large">Traditional cakes</a>
              </p>
              <p class="mb-0"> 
                <a href="product.php#product-cookies" class="text" style="text-decoration:none;color:black;font-size:large">Want a Cookies</a>
              </p>
      </div>
    </div>
  </div>


  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" style="background-color:maroon;color:gold;font-size:large;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        About
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
      <p class="mb-0"> 
                <a href="" class="text" style="text-decoration:none;color:black;font-size:large">About Us</a>
              </p>
              <p class="mb-0"> 
                <a href="" class="text" style="text-decoration:none;color:black;font-size:large">Location</a>
              </p>
              <p class="mb-0"> 
                <a href="" class="text" style="text-decoration:none;color:black;font-size:large">Contact Us</a>
              </p>
      </div>
    </div>
  </div>
</div>

<div class="row align-items-center text-center mt-4" style="display: flex; justify-content:center; align-items:center;">
<h5 class="text-uppercase mb-2 font-weight-bold  col-8" style="color: maroon;">Order online,pick it up in store & enjoy</h5>
              <div class="choose-store">
                Choose your store
              </div>
    </div>

    <div class="row align-items-center mt-4">
              <div class="col-12">
                <div class="text-center text-md-right">
                  <ul class="list-unstyled list-inline">
                    <li class="list-inline-item">
                      <a  aria-disabled="true" ><img class="medsos-icon-img" src="../img/youtube-icon.png" alt="yt"></a>
                    </li>
                    <li class="list-inline-item">
                      <a aria-disabled="true" ><img class="medsos-icon-img" src="../img/instagram-icon.png" alt="yt"></a>
                    </li>
                    <li class="list-inline-item">
                      <a  aria-disabled="true" ><img class="medsos-icon-img" src="../img/facebook-icon.png" alt="yt"></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="row align-items-center mt-4">
              <div class="text-center col-12">
                <p>Copyright @2023 All rights reserved by:
                  <a href="" style="text-decoration: none;"><strong style="color: maroon;">Sugarboo Bekasi</strong></a>
                </p>
              </div>
    </div>


</footer>
            </section>


            <!-- modal1 -->
<div class="modal fade" id="myModal" role="dialog">

<div class="modal-dialog modal-md">

  <!-- Modal content-->
  <div class="modal-content modal-product-data">
    <div class="modal-header modal-product-data-header">
    <h4 class="modal-title">Add To Cart</h4>
      <button type="button" class="close close-button-modal" data-bs-dismiss="modal">X</button>
    </div>


    <div class="modal-body modal-product-data-body">
   
    <img class="mb-3" id="idkl" src="" alt="">

    <div class="modal-product-data-nama">
      <div id="product-name-jquery"></div>
      <div id="product-keterangan-jquery"></div>
      <div id="price"></div>
    </div>

    <div class="inputan mt-3" >
      <button class=" decrement-btn">-</button>
      <input type="text" class=" qty-input text-center" value="1" disabled>
      <button class="increment-btn">+</button>
    </div>

    <button type="submit" class="addToCartBtn mt-3" >
     <div>  Add to cart </div>
    </button>
    
    </div>
  
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
    </div>
  </div>
  
</div>
</div>



    <!--  glider.js -->
    <script src="../js/glider.min.js"></script>

    <script src="../js/jquery-3.7.1.min.js"></script>

    <!-- custom -->
    <script src="../js/custom.js"></script>


    <!-- script -->
    <script>
      new Glider(document.querySelector(".glider"), {
        slidesToScroll: 1,
        slidesToShow: 4,
        draggable: true,
        dots: ".dots",
        arrows: {
          prev: ".glider-prev",
          next: ".glider-next",
        },
        responsive: [
          {
            // screens greater than >= 775px
            breakpoint: 1200,
            settings: {
              // Set to `auto` and provide item width to adjust to viewport
              slidesToShow: 4,
              slidesToScroll: 2,
              itemWidth: 150,
              duration: 0.25,
            },
          },
          {
            // screens greater than >= 1024px
            breakpoint: 900,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              itemWidth: 150,
              duration: 0.25,
            },
          },

          {
            // screens greater than >= 1024px
            breakpoint: 640,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              itemWidth: 150,
              duration: 0.25,
            },
          },

          {
            // screens greater than >= 1024px
            breakpoint: 304,
            settings: {
              slidesToShow: 1.5,
              slidesToScroll: 1,
              itemWidth: 150,
              duration: 0.25,
            },
          },

          {
            // screens greater than >= 1024px
            breakpoint: 0,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              itemWidth: 150,
              duration: 0.25,
            },
          },
        ],
      });


      new Glider(document.querySelector(".slider-menu"), {
        slidesToScroll: 1,
        slidesToShow: 4,
        draggable: true,
        // dots: ".dots",
        // arrows: {
        //   prev: ".slider-menu-prev",
        //   next: ".slider-menu-next",
        // },
        responsive: [
          {
            // screens greater than >= 775px
            breakpoint: 1200,
            settings: {
              // Set to `auto` and provide item width to adjust to viewport
              slidesToShow: 4,
              slidesToScroll: 2,
              itemWidth: 150,
              duration: 0.25,
            },
          },
          {
            // screens greater than >= 1024px
            breakpoint: 900,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              itemWidth: 150,
              duration: 0.25,
            },
          },

          {
            // screens greater than >= 1024px
            breakpoint: 640,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              itemWidth: 150,
              duration: 0.25,
            },
          },

          {
            // screens greater than >= 1024px
            breakpoint: 304,
            settings: {
              slidesToShow: 1.5,
              slidesToScroll: 1,
              itemWidth: 150,
              duration: 0.25,
            },
          },

          {
            // screens greater than >= 1024px
            breakpoint: 0,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              itemWidth: 150,
              duration: 0.25,
            },
          },
        ],
      });
    </script>
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <script>
      const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
      const popoverList = [...popoverTriggerList].map((popoverTriggerEl) => new bootstrap.Popover(popoverTriggerEl));
    </script>
  </body>
</html>
