<!-- E8951A -->


<?PHP
require_once 'C:\xampp\htdocs\FINAL_TUGAS_WEB\database\connection.php';
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
    <title>Sugarboo</title>

    <!-- glider -->
    <link rel="stylesheet" href="../js/glider.min.css" />
  </head>
  <body>


    <section id="navigasi">
      <nav class="navbar tempat-navigasi navbar-expand-lg bg-body-tertiary">
        <div class="tempat-navigasi-con container-fluid">
          <a class="tempat-navigasi-con-gambar navbar-brand" href="">
            <img class="tempat-navigasi-con-gambar1 d-none d-lg-block" src="/img/sugarboo.png" alt="logo" />
          </a>
          <button class="button-navigasi-handphone navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><img style="width:40px" src="../img/navigasi-burger.png" alt=""></span>
            <span class="navbar-toggler-icon"><img style="height:100px;  margin-top:-35px; margin-left:-150px;" src="../img/sugarboo.png" alt=""></span>
          </button>
          <div class="tempat-navigasi-con-konten collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="tempat-navigasi-con-konten-list navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item menu ">
                <a class="nav-link active amenu" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item dropdown menu ">
                <a class="nav-link dropdown-toggle amenu" href="product.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">Product</a>
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
                <a class="nav-link amenu" href="about-us.php">About US</a>
              </li>
              <li class="nav-item menu ">
                <a class="nav-link amenu" href="outlet.php" aria-disabled="true">Outlet</a>
              </li>
              <li class="nav-item menu ">
                <a href="../function/handlecart.php" class="nav-link shop-bag" aria-disabled="true" ><img style="width:25px;" src="../img/shop-bag.png" alt=""></a>
              </li>
              <li class=" nav-item menu-except d-flex">
                <a class="nav-link medsos-icon " aria-disabled="true" ><img class="medsos-icon-img" src="/img/youtube-icon.png" alt="yt"></a>
                <a class="nav-link medsos-icon " aria-disabled="true" ><img class="medsos-icon-img" src="/img/instagram-icon.png" alt="yt"></a>
                <a class="nav-link medsos-icon " aria-disabled="true" ><img class="medsos-icon-img" src="/img/facebook-icon.png" alt="yt"></a>
              </li>
          
            </ul>
          </div>
        </div>
      </nav>
    </section>


    <!-- carosel-baner leptop -->
    <section class="carosel">
      <div id="carouselExampleAutoplaying" class="carousel slide carousel-laptop d-none d-lg-block" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../img/baner1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../img/baner2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../img/baner3.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../img/baner4.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

 <!-- carosel-baner handphone -->
      <div id="carouselExampleAutoplaying" class="carousel slide carousel-laptop d-lg-none" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../img/bankecil1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../img/bankecil2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../img/bankecil3.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../img/bankecil4.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      
    </section>

     <!-- glider -->

    <!-- sliderr -->
    <section class="p-slider">
      <!-- heading -->
      <div class="container-fluid kotak-product-slider-heading">
        
        <img class="kotak-product-slider-heading-img" src="../img/thebest.png" alt="">
      
      </div>
    

      <!-- tombol -->
      <!-- <div class="slider-btns">
        <button aria-label="Previous" class="glider-prev">
          <span></span>
        </button>
        <button aria-label="Next" class="glider-next">
          <span></span>
        </button>
      </div> -->

      <div class="glider-contain">
        <div class="glider">

        <?php
    while($row = mysqli_fetch_assoc($all_product)){
        ?>
          <!-- product box -->
          <div class="product-box">
            <!-- Discount -->
            <span class="p-discount">-<?php echo $row["discount"]; ?>%</span>
            <!-- img-container -->
            <div class="p-img-container">
              <div class="p-img">
                <a href="">
               
                  <img src="<?php echo $row["product_image"];?>" class="p-img-front" alt="Front" />
                  <!-- <img src="/aset/bankecil2.png" class="p-img-back" alt="Back" /> -->
                </a>
              </div>
            </div>

            <!-- Text -->
            <div class="p-box-text">
              <!-- category -->
              <div class="product-category">
                <span><?php echo $row["product_category"]; ?></span>
              </div>

              <!-- TItle -->
              <a href="#" class="product-title"> <?php echo $row["product_name"]; ?></a>

              <!-- price-buy -->
              <div class="price-buy">
                <span class="p-price"><?php echo $row["price"]; ?></span>
                <button type="button" style="border:none ;" class="btn  passingID" data-id="<?= $row["product_image"]; ?>" data-id2="<?= $row["product_id"]; ?>" data-id3="<?= $row["product_name"]; ?>" data-id4="<?= $row["keterangan"]; ?>" data-id5="<?= $row["price"]; ?>">
                <a href="#" class="p-btn-buy">Buy now</a>
                </button>
              </div>
            </div>
          </div>

         
          <?php }  ?>
        </div>

        <button aria-label="Previous" class="glider-prev d-none d-lg-block">«</button>
        <button aria-label="Next" class="glider-next d-none d-lg-block">»</button> 
        <div role="tablist" class="dots"></div>
      
      </div>

      </section>
      
    <section class="jenis-makanan">
      <div class="slider-menu-contain">
    <div class="slider-menu">
        <div class="jenis-makanan-kotak">
          <!-- bread -->
        <a href="product.php#product-bread"><div class="jenis-makanan-kotak-gambar">
            <img class="jenis-makanan-kotak-gambar-aset" src="../img/jenis_produk/bread.png" alt="" /></div>
            </a>
            
        </div>
        <div class="jenis-makanan-kotak">
        <a href="product.php#product-cookies"><div class="jenis-makanan-kotak-gambar">
          <img class="jenis-makanan-kotak-gambar-aset" src="../img/jenis_produk/cookies.png" alt="" /></div></a>
        </div>
        <div class="jenis-makanan-kotak">
        <a href="product.php#product-danish"><div class="jenis-makanan-kotak-gambar">
          <img class="jenis-makanan-kotak-gambar-aset" src="../img/jenis_produk/danish.png" alt="" /></div>
          </a>
        </div>
        <div class="jenis-makanan-kotak">
        <a href="product.php#product-toast"><div class="jenis-makanan-kotak-gambar">
         <img class="jenis-makanan-kotak-gambar-aset" src="../img/jenis_produk/toast.png" alt="" /></div>
         </a>
        </div>
        <div class="jenis-makanan-kotak">
        <a href="product.php#product-cakes"><div class="jenis-makanan-kotak-gambar">
         <img class="jenis-makanan-kotak-gambar-aset" src="../img/jenis_produk/cakes.png" alt="" /></div>
         </a>
        </div>
        <div class="jenis-makanan-kotak">
        <a href="product.php#product-traditional"><div class="jenis-makanan-kotak-gambar">
          <img class="jenis-makanan-kotak-gambar-aset" src="../img/jenis_produk/traditional.png" alt="" /></div>
          </a>
        </div>
        <div class="jenis-makanan-kotak">
        <a href="product.php#product-hampers"><div class="jenis-makanan-kotak-gambar">
          <img class="jenis-makanan-kotak-gambar-aset" src="../img/jenis_produk/hampers.png" alt="" /></div>
          </a>
        </div>
        </div>
    <!-- <button aria-label="Previous" class="glider-menu-prev">«</button>
    <button aria-label="Next" class="glider-menu-next">»</button>
    <div role="tablist" class="dots"></div> -->
  </div>

      </section>

      <section class="cara-order">
        <div class="container-fluid mb-4 cara-order-kue">
          <div class="foto-pengiriman"><img class="foto-pengiriman-aset" src="../img/order/order.png" alt=""></div>
          <div class="tatacara-pengiriman">
            <h2 style="color: maroon;font-weight:bold;">--- ORDER WITH SUGARBOO ---</h2>
           <h3 class="d-none d-lg-block">Want to order a cake for yourself or a loved one? but can't visit the store? Don't worry, Sugarboo provides <b>free delivery services for the Jabodetabek area.</b>  Your cake is guaranteed to be safe, good, and certainly delicious.
            Order your cake before 1pm for delivery tomorrow. The maximum load for this free shipment is <b>5 kg.</b> </h2>

            <h5 class="d-lg-none ">Want to order a cake for yourself or a loved one? but can't visit the store? Don't worry, Sugarboo provides <b>free delivery services for the Jabodetabek area.</b>  Your cake is guaranteed to be safe, good, and certainly delicious.
            Order your cake before 1pm for delivery tomorrow. The maximum load for this free shipment is <b>5 kg.</b> </h3>
          </div>
        </div>
      </section>

      <section class="jenis-pengiriman">
        <div class="container-fluid jenis-pengiriman-contain d-none d-lg-block">
        <div class="row  text-center">
        <h2 class="" style="color: maroon;font-weight:bold">GET DELIVERED</h2>
       </div>
      
        <div class="row jenis-pengiriman-baris ">
          <div class="col-4  text-center">
            <img class="jenis-pengiriman-foto" src="../img/order/order-store.png" alt="">
            <h4 class="d-none d-lg-block">STORES PICK-UP</h4>
            <h6 class="d-none d-lg-block" style="padding-right:100px;padding-left:100px;">Order prepared in 2H or at the time of your choice. Skip-the-line access in stores eligible for the service.</h6>
          </div>

          <div class="col-4 text-center">
          <img class="jenis-pengiriman-foto" src="../img/order/order-home.png" alt="">
          <h4 class="d-none d-lg-block">HOME DELIVERY</h4>
           
            <h6 class="d-none d-lg-block" style="padding-right:100px;padding-left:100px;">Free delivery for Jabodetabek area with a maximum load of 5 kg.</h6>
            
          </div>

          <div class="col-4 text-center">
          <img class="jenis-pengiriman-foto" src="../img/order/order-kurir.png" alt="">
          <h4>COURIER DELIVERY</h4>
          <h6 style="padding-right:100px;padding-left:100px;">Delivery for areas other than Jabodetabek and located on the island of Java.</h6>
          </div>
        </div>
          </div>
        

        <div class="container-fluid jenis-pengiriman-contain d-lg-none">
        <div class="row  text-center">
        <h2 class="" style="color: maroon;font-weight:bold" >GET DELIVERED</h2>
       </div>
      
        <div class="row jenis-pengiriman-baris d-lg-none">
          <div class="col-6  text-center">
            <img class="jenis-pengiriman-foto" src="../img/order/order-store.png" alt="">
            <h4 class="d-none d-lg-block">STORES PICK-UP</h4>
            <h6 class="d-lg-none">STORES PICK-UP</h4>
            <h6 class="d-none d-lg-block" style="padding-right:100px;padding-left:100px;">Order prepared in 2H or at the time of your choice. Skip-the-line access in stores eligible for the service.</h6>
            <p class="d-lg-none" style="padding-right:2px;padding-left:2px; font-size:small">Order prepared in 2H or at the time of your choice. Skip-the-line access in stores eligible for the service.</p>
          </div>

          <div class="col-6 text-center">
          <img class="jenis-pengiriman-foto" src="../img/order/order-home.png" alt="">
          <h4 class="d-none d-lg-block">HOME DELIVERY</h4>
            <h6 class="d-lg-none">HOME DELIVERY</h4>
            <h6 class="d-none d-lg-block" style="padding-right:100px;padding-left:100px;">Free delivery for Jabodetabek area with a maximum load of 5 kg.</h6>
            <p class="d-lg-none" style="padding-right:2px;padding-left:2px; font-size:small">Free delivery for Jabodetabek area with a maximum load of 5 kg.</p>
          </div>
          </div>
          <div class="row jenis-pengiriman-baris d-lg-none">
          <div class="col-12 text-center">
          <img class="jenis-pengiriman-foto" src="../img/order/order-kurir.png" alt="">
          <h4>COURIER DELIVERY</h4>
          <h6 style="padding-right:40px;padding-left:40px;">Delivery for areas other than Jabodetabek and located on the island of Java.</h6>
          </div>
        </div>
        </div>
        
      </section>


      <section class="footer">
        <footer class="footer-lg-keatas text-white pt-1 pb-2 d-none d-lg-block" style="background-color: maroon;">
          <div class="container text-left text-md-left">
            <div class="row" >
              <div col-12>
              <a class="tempat-foto-footer" href="" style="display: flex;justify-content:center; align-items:center;">
            <img class="tempat-foto-footer d-none d-lg-block" style="width: 300px;" src="/img/sugarboo.png" alt="logo" />
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
                <a href="product.php#product-bread" class="text footer-menu" style="text-decoration:none; color:white; font-size:large">The Bread</a>
              </p>
              <p class="mb-0"> 
                <a href="product.php#product-danish" class="text footer-menu" style="text-decoration:none;color:white;font-size:large">Amazing Danish</a>
              </p>
              <p class="mb-0"> 
                <a href="product.php#product-cakes" class="text footer-menu" style="text-decoration:none;color:white;font-size:large">Great Cakes</a>
              </p>
              <p class="mb-0"> 
                <a href="product.php#product-toast" class="text footer-menu" style="text-decoration:none;color:white;font-size:large">Toasty Toast</a>
              </p>
              <p class="mb-0"> 
                <a href="product.php#product-hampers" class="text footer-menu" style="text-decoration:none;color:white;font-size:large">Make your Hampers</a>
              </p>
              <p class="mb-0"> 
                <a href="product.php#product-traditional" class="text footer-menu" style="text-decoration:none;color:white;font-size:large">Traditional cakes</a>
              </p>
              <p class="mb-0"> 
                <a href="product.php#product-cookies" class="text footer-menu" style="text-decoration:none;color:white;font-size:large">Want a Cookies</a>
              </p>
              </div>

              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
              <h5 class="text-uppercase mb-4 font-weight-bold text-warning">About</h5>
              <p class="mb-0"> 
                <a href="about-us.php" class="text-white" style="text-decoration:none;">About Us</a>
              </p>
              <p class="mb-0"> 
                <a href="outlet.php" class="text-white" style="text-decoration:none;">Location</a>
              </p>
              <p class="mb-0"> 
                <a href="" class="text-white" style="text-decoration:none;">Contact Us</a>
              </p>
             
              </div>

              <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
              <h5 class="text-uppercase mb-2 font-weight-bold text-warning">Order online,pick it up in store & enjoy</h5>
              <div class="choose-store">
                <a href="outlet.php" style="color:maroon;">
                Choose your store
                </a>
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
                      <a  aria-disabled="true" ><img class="medsos-icon-img" src="/img/youtube-icon.png" alt="yt"></a>
                    </li>
                    <li class="list-inline-item">
                      <a aria-disabled="true" ><img class="medsos-icon-img" src="/img/instagram-icon.png" alt="yt"></a>
                    </li>
                    <li class="list-inline-item">
                      <a  aria-disabled="true" ><img class="medsos-icon-img" src="/img/facebook-icon.png" alt="yt"></a>
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
                      <a  aria-disabled="true" ><img class="medsos-icon-img" src="/img/youtube-icon.png" alt="yt"></a>
                    </li>
                    <li class="list-inline-item">
                      <a aria-disabled="true" ><img class="medsos-icon-img" src="/img/instagram-icon.png" alt="yt"></a>
                    </li>
                    <li class="list-inline-item">
                      <a  aria-disabled="true" ><img class="medsos-icon-img" src="/img/facebook-icon.png" alt="yt"></a>
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
