<?PHP
// session_start();
require_once '../database/connection.php';
// include '../function/handlecart.php';
$sql = "SELECT * FROM product";
$all_product=$conn->query($sql);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/product.css" />
    <title>Sugarboo</title>

    <!-- glider -->
    <link rel="stylesheet" href="../js/glider.min.css" />
  </head>

  <body>



    

  <!-- navbar -->
  <section id="navigasi">
      <nav class="navbar tempat-navigasi navbar-expand-lg bg-body-tertiary">
        <div class="tempat-navigasi-con container-fluid">
          <a class="tempat-navigasi-con-gambar navbar-brand" href="indexs.php">
            <img class="tempat-navigasi-con-gambar1 d-none d-lg-block" src="../img/sugarboo.png" alt="logo" />
          </a>
          <button class="button-navigasi-handphone navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><img style="width:40px" src="../img/navigasi-burger.png" alt=""></span>
            <span class="navbar-toggler-icon"><img style="height:100px;  margin-top:-35px; margin-left:-150px;" src="img/sugarboo.png" alt=""></span>
          </button>
          <div class="tempat-navigasi-con-konten collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="tempat-navigasi-con-konten-list navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item menu ">
                <a class="nav-link" aria-current="page" href="indexs.php">Home</a>
              </li>
              <li class="nav-item menu ">
                <a class="nav-link active" href="product.php" role="button">Product</a>
                <!-- <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul> -->
              </li>
              <li class="nav-item menu ">
                <a class="nav-link" href="about-us.php">About US</a>
              </li>
              <li class="nav-item menu ">
                <a class="nav-link " href="outlet.php" aria-disabled="true">Outlet</a>
              </li>
              <li class="nav-item menu ">
         
                <a  href="../function/handlecart.php" class="nav-link " aria-disabled="true"  >SHOP NOW</a>
                <!-- href="../function/handlecart.php"  -->
            
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
  <!-- end of navbar -->

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

  <section class="navbar-product" >
      <div>
        <a class="link-p" href="#bread">Bread</a>
        <a class="link-p" href="#cakes">Cakes</a>
        <a class="link-p" href="#danish">Danish</a>
        <a class="link-p" href="#cookies">Cookies</a>
        <a class="link-p" href="#hampers">Hampers</a>
        <a class="link-p" href="#toast">Toast</a>
        <a class="link-p" href="#traditional">Traditional</a>
      </div>
    </div>
  </section>

  



    <!-- BREAD -->
    <section id="product-bread" class="">
      <h2 style="text-align: left; color: maroon; font-weight:bold; padding-left: 50px; padding-top: 40px;" id="bread">BREAD</h2>
      <div class="product-showcase-c">
          <div class="product-showcase">

          <?php
              $sql = "SELECT * FROM product WHERE product_category='Bread'";
              $bread=$conn->query($sql);
              while($row = mysqli_fetch_assoc($bread)){
          ?>
          
              <!-- product box -->
            <div class="product-box">
             
              <!-- img-container -->
              <div class="p-img-container">
                <div class="p-img">
                <button type="button" class="btn "
                    data-bs-toggle="popover" data-bs-placement="right"
                    data-bs-custom-class="custom-popover"
                    data-bs-title=" <?php echo $row["product_name"]; ?>"
                    data-bs-content="<?php echo $row["keterangan"];?>">
                    <img src="<?php echo $row["product_image"];?>" class="p-img-front gambar-depan" alt="<?php echo $row["product_name"]; ?> image" />
                      <!-- <img src="/aset/bankecil2.png" class="p-img-back" alt="Back" /> -->
                  </button>
                </div>
              </div>

              <!-- Text -->
              <div class="p-box-text">
                <!-- category -->
                <div class="product-category">
                  <span><?php echo $row["product_category"]; ?></span>
                </div>

                <!-- Title -->
                <a href="#" class="product-title"> <?php echo $row["product_name"]; ?></a>

                <!-- price-buy -->
                <div class="price-buy">
                  <span class="p-price">Rp. <?php echo $row["price"]; ?></span>
                  <button type="button" style="border:none ;" class="btn  passingID" data-id="<?= $row["product_image"]; ?>" data-id2="<?= $row["product_id"]; ?>" data-id3="<?= $row["product_name"]; ?>" data-id4="<?= $row["keterangan"]; ?>" data-id5="<?= $row["price"]; ?>">
                  <a href="#" class="p-btn-buy">Add To Cart</a>
                  </button>
                </div>
              </div>
            </div>
          <?php }  ?>
          </div>
          <!-- <button aria-label="Previous" class="glider-prev d-none d-lg-block">«</button>
          <button aria-label="Next" class="glider-next d-none d-lg-block">»</button> 
          <div role="tablist" class="dots"></div> -->
        </div>

        </section>

     

    <!-- CAKES -->
    <section id="product-cakes">
      <h2 style="text-align: left; color: maroon; font-weight:bold; padding-left: 50px; padding-top: 40px;" id="cakes">CAKES</h2>
      <div class=".product-showcase-c">
          <div class="product-showcase">

          <?php
              $sql = "SELECT * FROM product WHERE product_category='Cakes'";
              $cake=$conn->query($sql);
              while($row = mysqli_fetch_assoc($cake)){
          ?>
           <!-- product box -->
           <div class="product-box">
             
             <!-- img-container -->
             <div class="p-img-container">
               <div class="p-img">
               <button type="button" class="btn "
                   data-bs-toggle="popover" data-bs-placement="right"
                   data-bs-custom-class="custom-popover"
                   data-bs-title=" <?php echo $row["product_name"]; ?>"
                   data-bs-content="<?php echo $row["keterangan"];?>">
                   <img src="<?php echo $row["product_image"];?>" class="p-img-front gambar-depan" alt="<?php echo $row["product_name"]; ?> image" />
                     <!-- <img src="/aset/bankecil2.png" class="p-img-back" alt="Back" /> -->
                 </button>
               </div>
             </div>

             <!-- Text -->
             <div class="p-box-text">
               <!-- category -->
               <div class="product-category">
                 <span><?php echo $row["product_category"]; ?></span>
               </div>

               <!-- Title -->
               <a href="#" class="product-title"> <?php echo $row["product_name"]; ?></a>

               <!-- price-buy -->
               <div class="price-buy">
                 <span class="p-price">Rp. <?php echo $row["price"]; ?></span>
                 <button type="button" style="border:none ;" class="btn  passingID" data-id="<?= $row["product_image"]; ?>" data-id2="<?= $row["product_id"]; ?>" data-id3="<?= $row["product_name"]; ?>" data-id4="<?= $row["keterangan"]; ?>" data-id5="<?= $row["price"]; ?>">
                 <a href="#" class="p-btn-buy">Add To Cart</a>
                 </button>
               </div>
             </div>
           </div>
             
          <?php }  ?>
          </div>
          <!-- <button aria-label="Previous" class="glider-prev d-none d-lg-block">«</button>
          <button aria-label="Next" class="glider-next d-none d-lg-block">»</button> 
          <div role="tablist" class="dots"></div> -->
        </div>
        </section>

    <!-- DANISH -->
    <section id="product-danish">
    <h2 style="text-align: left; color: maroon; font-weight:bold; padding-left: 50px; padding-top: 40px;" id="danish">DANISH</h2>
      <div class=".product-showcase-c">
          <div class="product-showcase">

          <?php
              $sql = "SELECT * FROM product WHERE product_category='Danish'";
              $danish=$conn->query($sql);
              while($row = mysqli_fetch_assoc($danish)){
          ?>
          
              <!-- product box -->
            <div class="product-box">
             
             <!-- img-container -->
             <div class="p-img-container">
               <div class="p-img">
               <button type="button" class="btn "
                   data-bs-toggle="popover" data-bs-placement="right"
                   data-bs-custom-class="custom-popover"
                   data-bs-title=" <?php echo $row["product_name"]; ?>"
                   data-bs-content="<?php echo $row["keterangan"];?>">
                   <img src="<?php echo $row["product_image"];?>" class="p-img-front gambar-depan" alt="<?php echo $row["product_name"]; ?> image" />
                     <!-- <img src="/aset/bankecil2.png" class="p-img-back" alt="Back" /> -->
                 </button>
               </div>
             </div>

             <!-- Text -->
             <div class="p-box-text">
               <!-- category -->
               <div class="product-category">
                 <span><?php echo $row["product_category"]; ?></span>
               </div>

               <!-- Title -->
               <a href="#" class="product-title"> <?php echo $row["product_name"]; ?></a>

               <!-- price-buy -->
               <div class="price-buy">
                 <span class="p-price">Rp. <?php echo $row["price"]; ?></span>
                 <button type="button" style="border:none ;" class="btn  passingID" data-id="<?= $row["product_image"]; ?>" data-id2="<?= $row["product_id"]; ?>" data-id3="<?= $row["product_name"]; ?>" data-id4="<?= $row["keterangan"]; ?>" data-id5="<?= $row["price"]; ?>">
                 <a href="#" class="p-btn-buy">Add To Cart</a>
                 </button>
               </div>
             </div>
           </div>
          <?php }  ?>
          </div>
          <!-- <button aria-label="Previous" class="glider-prev d-none d-lg-block">«</button>
          <button aria-label="Next" class="glider-next d-none d-lg-block">»</button> 
          <div role="tablist" class="dots"></div> -->
        </div>
        </section>

    <!-- COOKIES -->
    <section id="product-cookies">
      <h2 style="text-align: left; color: maroon; font-weight:bold; padding-left: 50px; padding-top: 40px;" id="cookies">COOKIES</h2>
      <div class=".product-showcase-c">
          <div class="product-showcase">

          <?php
              $sql = "SELECT * FROM product WHERE product_category='Cookies'";
              $cookies=$conn->query($sql);
              while($row = mysqli_fetch_assoc($cookies)){
          ?>
          
             <!-- product box -->
             <div class="product-box">
             
             <!-- img-container -->
             <div class="p-img-container">
               <div class="p-img">
               <button type="button" class="btn "
                   data-bs-toggle="popover" data-bs-placement="right"
                   data-bs-custom-class="custom-popover"
                   data-bs-title=" <?php echo $row["product_name"]; ?>"
                   data-bs-content="<?php echo $row["keterangan"];?>">
                   <img src="<?php echo $row["product_image"];?>" class="p-img-front gambar-depan" alt="<?php echo $row["product_name"]; ?> image" />
                     <!-- <img src="/aset/bankecil2.png" class="p-img-back" alt="Back" /> -->
                 </button>
               </div>
             </div>

             <!-- Text -->
             <div class="p-box-text">
               <!-- category -->
               <div class="product-category">
                 <span><?php echo $row["product_category"]; ?></span>
               </div>

               <!-- Title -->
               <a href="#" class="product-title"> <?php echo $row["product_name"]; ?></a>

               <!-- price-buy -->
               <div class="price-buy">
                 <span class="p-price">Rp. <?php echo $row["price"]; ?></span>
                 <button type="button" style="border:none ;" class="btn  passingID" data-id="<?= $row["product_image"]; ?>" data-id2="<?= $row["product_id"]; ?>" data-id3="<?= $row["product_name"]; ?>" data-id4="<?= $row["keterangan"]; ?>" data-id5="<?= $row["price"]; ?>">
                 <a href="#" class="p-btn-buy">Add To Cart</a>
                 </button>
               </div>
             </div>
           </div>
          <?php }  ?>
          </div>
          <!-- <button aria-label="Previous" class="glider-prev d-none d-lg-block">«</button>
          <button aria-label="Next" class="glider-next d-none d-lg-block">»</button> 
          <div role="tablist" class="dots"></div> -->
        </div>
        </section>

        <section id="product-hampers">
    <!-- Hampers -->
      <h2 style="text-align: left; color: maroon; font-weight:bold; padding-left: 50px; padding-top: 40px;" id="hampers">HAMPERS</h2>
      <div class=".product-showcase-c">
          <div class="product-showcase">

          <?php
              $sql = "SELECT * FROM product WHERE product_category='Hampers'";
              $hampers=$conn->query($sql);
              while($row = mysqli_fetch_assoc($hampers)){
          ?>
          
             <!-- product box -->
             <div class="product-box">
             
             <!-- img-container -->
             <div class="p-img-container">
               <div class="p-img">
               <button type="button" class="btn "
                   data-bs-toggle="popover" data-bs-placement="right"
                   data-bs-custom-class="custom-popover"
                   data-bs-title=" <?php echo $row["product_name"]; ?>"
                   data-bs-content="<?php echo $row["keterangan"];?>">
                   <img src="<?php echo $row["product_image"];?>" class="p-img-front gambar-depan" alt="<?php echo $row["product_name"]; ?> image" />
                     <!-- <img src="/aset/bankecil2.png" class="p-img-back" alt="Back" /> -->
                 </button>
               </div>
             </div>

             <!-- Text -->
             <div class="p-box-text">
               <!-- category -->
               <div class="product-category">
                 <span><?php echo $row["product_category"]; ?></span>
               </div>

               <!-- Title -->
               <a href="#" class="product-title"> <?php echo $row["product_name"]; ?></a>

               <!-- price-buy -->
               <div class="price-buy">
                 <span class="p-price">Rp. <?php echo $row["price"]; ?></span>
                 <button type="button" style="border:none ;" class="btn  passingID" data-id="<?= $row["product_image"]; ?>" data-id2="<?= $row["product_id"]; ?>" data-id3="<?= $row["product_name"]; ?>" data-id4="<?= $row["keterangan"]; ?>" data-id5="<?= $row["price"]; ?>">
                 <a href="#" class="p-btn-buy">Add To Cart</a>
                 </button>
               </div>
             </div>
           </div>
          <?php }  ?>
          </div>
          <!-- <button aria-label="Previous" class="glider-prev d-none d-lg-block">«</button>
          <button aria-label="Next" class="glider-next d-none d-lg-block">»</button> 
          <div role="tablist" class="dots"></div> -->
        </div>
        </section>

    <!-- TOAST -->
    <section id="product-toast">
      <h2 style="text-align: left; color: maroon; font-weight:bold; padding-left: 50px; padding-top: 40px;" id="toast">TOAST</h2>
      <div class=".product-showcase-c">
          <div class="product-showcase">

          <?php
              $sql = "SELECT * FROM product WHERE product_category='Toast'";
              $toast=$conn->query($sql);
              while($row = mysqli_fetch_assoc($toast)){
          ?>
          
               <!-- product box -->
            <div class="product-box">
             
             <!-- img-container -->
             <div class="p-img-container">
               <div class="p-img">
               <button type="button" class="btn "
                   data-bs-toggle="popover" data-bs-placement="right"
                   data-bs-custom-class="custom-popover"
                   data-bs-title=" <?php echo $row["product_name"]; ?>"
                   data-bs-content="<?php echo $row["keterangan"];?>">
                   <img src="<?php echo $row["product_image"];?>" class="p-img-front gambar-depan" alt="<?php echo $row["product_name"]; ?> image" />
                     <!-- <img src="/aset/bankecil2.png" class="p-img-back" alt="Back" /> -->
                 </button>
               </div>
             </div>

             <!-- Text -->
             <div class="p-box-text">
               <!-- category -->
               <div class="product-category">
                 <span><?php echo $row["product_category"]; ?></span>
               </div>

               <!-- Title -->
               <a href="#" class="product-title"> <?php echo $row["product_name"]; ?></a>

               <!-- price-buy -->
               <div class="price-buy">
                 <span class="p-price">Rp. <?php echo $row["price"]; ?></span>
                 <button type="button" style="border:none ;" class="btn  passingID" data-id="<?= $row["product_image"]; ?>" data-id2="<?= $row["product_id"]; ?>" data-id3="<?= $row["product_name"]; ?>" data-id4="<?= $row["keterangan"]; ?>" data-id5="<?= $row["price"]; ?>">
                 <a href="#" class="p-btn-buy">Add To Cart</a>
                 </button>
               </div>
             </div>
           </div>
          <?php }  ?>
          </div>
          <!-- <button aria-label="Previous" class="glider-prev d-none d-lg-block">«</button>
          <button aria-label="Next" class="glider-next d-none d-lg-block">»</button> 
          <div role="tablist" class="dots"></div> -->
        </div>
        </section>

    <!-- TRADITIONAL -->
    <section id="product-traditional">
      <h2 style="text-align: left; color: maroon; font-weight:bold; padding-left: 50px; padding-top: 40px;" id="traditional">TRADITIONAL</h2>
      <div class=".product-showcase-c">
          <div class="product-showcase">

          <?php
              $sql = "SELECT * FROM product WHERE product_category='Traditional'";
              $traditional=$conn->query($sql);
              while($row = mysqli_fetch_assoc($traditional)){
          ?>
          
              <!-- product box -->
            <div class="product-box">
             
             <!-- img-container -->
             <div class="p-img-container">
               <div class="p-img">
               <button type="button" class="btn "
                   data-bs-toggle="popover" data-bs-placement="right"
                   data-bs-custom-class="custom-popover"
                   data-bs-title=" <?php echo $row["product_name"]; ?>"
                   data-bs-content="<?php echo $row["keterangan"];?>">
                   <img src="<?php echo $row["product_image"];?>" class="p-img-front gambar-depan" alt="<?php echo $row["product_name"]; ?> image" />
                     <!-- <img src="/aset/bankecil2.png" class="p-img-back" alt="Back" /> -->
                 </button>
               </div>
             </div>

             <!-- Text -->
             <div class="p-box-text">
               <!-- category -->
               <div class="product-category">
                 <span><?php echo $row["product_category"]; ?></span>
               </div>

               <!-- Title -->
               <a href="#" class="product-title"> <?php echo $row["product_name"]; ?></a>

               <!-- price-buy -->
               <div class="price-buy">
                 <span class="p-price">Rp. <?php echo $row["price"]; ?></span>
                 <button type="button" style="border:none ;" class="btn  passingID" data-id="<?= $row["product_image"]; ?>" data-id2="<?= $row["product_id"]; ?>" data-id3="<?= $row["product_name"]; ?>" data-id4="<?= $row["keterangan"]; ?>" data-id5="<?= $row["price"]; ?>">
                 <a href="#" class="p-btn-buy">Add To Cart</a>
                 </button>
               </div>
             </div>
           </div>
          <?php }  ?>
          </div>
          <!-- <button aria-label="Previous" class="glider-prev d-none d-lg-block">«</button>
          <button aria-label="Next" class="glider-next d-none d-lg-block">»</button> 
          <div role="tablist" class="dots"></div> -->
        </div>
        </section>



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
                  <a href="" class="text-white" style="text-decoration:none;">The Bread</a>
                </p>
                <p class="mb-0"> 
                  <a href="" class="text-white" style="text-decoration:none;">Amazing Danish</a>
                </p>
                <p class="mb-0"> 
                  <a href="" class="text-white" style="text-decoration:none;">Great Cakes</a>
                </p>
                <p class="mb-0"> 
                  <a href="" class="text-white" style="text-decoration:none;">Toasty Toast</a>
                </p>
                <p class="mb-0"> 
                  <a href="" class="text-white" style="text-decoration:none;">Make your Hampers</a>
                </p>
                <p class="mb-0"> 
                  <a href="" class="text-white" style="text-decoration:none;">Traditional cakes</a>
                </p>
                <p class="mb-0"> 
                  <a href="" class="text-white" style="text-decoration:none;">Want a Cookies</a>
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
                      <a href="" class="text" style="text-decoration:none; color:black; font-size:large">The Bread</a>
                    </p>
                    <p class="mb-0"> 
                      <a href="" class="text" style="text-decoration:none;color:black;font-size:large">Amazing Danish</a>
                    </p>
                    <p class="mb-0"> 
                      <a href="" class="text" style="text-decoration:none;color:black;font-size:large">Great Cakes</a>
                    </p>
                    <p class="mb-0"> 
                      <a href="" class="text" style="text-decoration:none;color:black;font-size:large">Toasty Toast</a>
                    </p>
                    <p class="mb-0"> 
                      <a href="" class="text" style="text-decoration:none;color:black;font-size:large">Make your Hampers</a>
                    </p>
                    <p class="mb-0"> 
                      <a href="" class="text" style="text-decoration:none;color:black;font-size:large">Traditional cakes</a>
                    </p>
                    <p class="mb-0"> 
                      <a href="" class="text" style="text-decoration:none;color:black;font-size:large">Want a Cookies</a>
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


  <div id="contentaddtocart">
    
  </div>

 


<!-- Modal2 -->
<!-- <div   class="modal fade" id="modal-shop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modalshop-content">
         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
 -->



      <script src="../js/glider.min.js"></script>
   <!-- jquery -->
   <script src="../js/jquery-3.7.1.min.js"></script>
    <!--  glider.js -->
   
        <!-- custom.js -->
    <script src="../js/custom.js"></script>






  <!-- glider -->
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
    <script>
      const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
      const popoverList = [...popoverTriggerList].map((popoverTriggerEl) => new bootstrap.Popover(popoverTriggerEl));
    </script>
    



      
    </body>
</html>