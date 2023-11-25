<?php
session_start();
include("../database/connection.php");
if(isset($_POST['scope']))
{
    if(isset($_SESSION['cart'])){

        $session_array_id = array_column($_SESSION['cart'],'prod_id' );
        $a = $_GET['prod_id'];
        echo $a;
        if (!in_array($_GET['prod_id'], $session_array_id)){
            $prod_id = $_POST['prod_id'];
            $prod_qty = $_POST['prod_qty'];
            $prod_price = $_POST['prod_price'];
            $prod_img= $_POST['prod_img'];
            $prod_name= $_POST['prod_name'];
            $prod_total_price = $_POST['prod_total_price'];
                $session_array = [
                    'prod_id' => $prod_id,
                    'prod_qty' => $prod_qty,
                    'prod_price' => $prod_price,
                    'prod_img' => $prod_img,
                    'prod_name' => $prod_name,
                    'prod_total_price' => $prod_total_price,
                ];

                $_SESSION['cart'][]= $session_array;

                
        }
        // else{
        //     $prod_qty = $_POST['prod_qty'];
        //     $session_array = [
               
        //         'prod_qty' => $prod_qty,
              
        //     ];
        //     $_SESSION['cart'][]= $session_array;
        //     echo "ditemukan";
        // }
    }else{

    
    $scope = $_POST['scope'];
    switch ($scope){
        case "add" :
            $prod_id = $_POST['prod_id'];
            $prod_qty = $_POST['prod_qty'];
            $prod_price = $_POST['prod_price'];
            $prod_img= $_POST['prod_img'];
            $prod_name= $_POST['prod_name'];
            $prod_total_price = $_POST['prod_total_price'];
                $session_array = [
                    'prod_id' => $prod_id,
                    'prod_qty' => $prod_qty,
                    'prod_price' => $prod_price,
                    'prod_img' => $prod_img,
                    'prod_name' => $prod_name,
                    'prod_total_price' => $prod_total_price,
                ];

                $_SESSION['cart'][]= $session_array;
          
                
                
            //     $cek_existing_cart = "SELECT * FROM carts where prod_id='$prod_id' ";
            //     $cek_existing_cart_run = mysqli_query($conn, $cek_existing_cart);
            //     if(mysqli_num_rows($cek_existing_cart_run)>0)
            //     {
            //         echo "existing";
            //     }else{
            //         $insert_query= "INSERT INTO carts(prod_id,prod_qty) VALUES('$prod_id','$prod_qty')";
            //         $insert_query_run = mysqli_query($conn,$insert_query);

            //     if($insert_query_run){
            //         
            //     }else{
            //         echo 300;
            //     }
            // }
                break;
        
            }
            echo 201;
    }
} else{
    echo 301;
}
// 

global $total;
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <title>Document</title>
    <link rel="stylesheet" href="../css/handlecart.css">
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
                <a class="nav-link active amenu" aria-current="page" href="../CLIENT/indexs.php">Home</a>
              </li>
              <li class="nav-item dropdown menu ">
                <a class="nav-link dropdown-toggle amenu" href="product.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">Product</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../CLIENT/product.php#product-bread">bread</a></li>
                  <li><a class="dropdown-item" href="../CLIENT/product.php#product-danish">danish</a></li>
                  <li><a class="dropdown-item" href="../CLIENT/product.php#product-cookies">cookies</a></li>
                  <li><a class="dropdown-item" href="../CLIENT/product.php#product-cakes">cakes</a></li>
                  <li><a class="dropdown-item" href="../CLIENT/product.php#product-traditional">traditional</a></li>
                  <li><a class="dropdown-item" href="../CLIENT/product.php#product-toast">toast</a></li>
                  <li><a class="dropdown-item" href="../CLIENT/product.php#product-hampers">hampers</a></li>
                
                </ul>
              </li>
              <li class="nav-item menu ">
                <a class="nav-link amenu" href="../CLIENT/about-us.php">About US</a>
              </li>
              <li class="nav-item menu ">
                <a class="nav-link amenu" href="../CLIENT/outlet.php" aria-disabled="true">Outlet</a>
              </li>
              <li class="nav-item menu ">
                <a href="../function/handlecart.php" class="nav-link shop-bag" aria-disabled="true" ><img style="width:25px;" src="../img/shop-bag.png" alt=""></a>
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


    <section id="tabel-cart" style="overflow-y: scroll; height:500px;" class="d-none d-lg-block">
    <div class="judul-shop">
        <h1>Shopping Cart</h1>
      </div>

    <table class = 'table table-bordered table-stripped tabel-cart-tabel'>
            <tr>
                <!-- <th>ID</th> -->
                <th>product</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total Price</th>
                <tr>

    <?PHP
    if(!empty($_SESSION['cart'])){

    foreach($_SESSION['cart'] as $key => $value){
    ?>

<tr >
                    <td><img class="gambar-produk" src="<?= $value['prod_img']?>"  ></td>
                    <td><?= $value['prod_name']?></td>
                    <td><?= $value['prod_qty']?></td>
                    <td>Rp. <?= number_format($value['prod_price'],2,",",".")?></td>
                    <td>Rp. <?= number_format($value['prod_total_price'],2,",",".")?></td>
                    <td>
                    <a>
                    <a class="a-button-remove" href='handlecart.php?action=remove&prod_id=<?=$value['prod_id']?>'> 
                        <button class='btn button-remove '><img class=" logo-close" src="../img/close.png" alt=""></button>
                    </a>
                    </td>
                <tr>
            

    <?PHP

      
      $total += $value['prod_total_price'];
        }

    }

    ?>

<tr>
                <td colspan='3'></td>
                <td style="background-color:yellow;"><b>Total Price</b></td>
                <td style="background-color:yellow;font-size:larger;"><b>Rp. <?=number_format($total,2,",",".")?><b></td>
                <tr>


    </table>
    </section>

                <a class="a-Bayar-sekarang" > 
                <button style="font-size:larger;" class='btn btn-danger btn-block Bayar-sekarang'  type="button" data-bs-toggle="modal" data-bs-target="#Modal-Jenis-Pembayaran"><b>Bayar sekarang = Rp <?=number_format($total,2)?><b></button>
                </a>
   


    <section id="tabel-cart-handphone" class="d-lg-none">
        <div class="judul-shop">
        <h1>Shopping Cart</h1>
        </div>
    <table class = 'table table-bordered table-stripped '>
            <!-- <tr> -->
                <!-- <th>ID</th> -->
                <!-- <th>product</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total Price</th>
                <tr> -->

    <?PHP
    if(!empty($_SESSION['cart'])){

    foreach($_SESSION['cart'] as $key => $value){
    ?>

<tr >
                    <td class="td-handphone"> 
                      <div class="konten-cart-isi-handphone">
                      <img class="gambar-produk" src="<?= $value['prod_img']?>"  >
                      <div class="konten-cart-informasi">
                     <div> <?= $value['prod_name']?></div>
                     <div>Qty : <?= $value['prod_qty']?></div>
                     <div>Rp <?= $value['prod_total_price']?></div>
                      </div>
                      </div>

                      <div class="remove-handphone">
                      <a class="a-button-remove-handphone" href='handlecart.php?action=remove&prod_id=<?=$value['prod_id']?>'> 
                        <button class='btn button-remove-handphone'><img class=" logo-close-handphone" src="../img/close.png" alt=""></button>
                    </a>
                      </div>

                  
                <tr>
            

    <?PHP

      
        }

    }

    ?>

                <tr>
                <td class="td-button-handphone">
                  <div>
                  <b>Total Price</b>
             Rp <?=number_format($total,2,",",".")?>
                  </div>
               
             <a class="a-Bayar-sekarang-handphone" href='pembayaran.php'> 
                <button class='btn btn-block Bayar-sekarang-handphone' style="font-size:25px"  type="button" data-bs-toggle="modal" data-bs-target="#Modal-Jenis-Pembayaran">Bayar sekarang</button>
                </a>
            </td>
                <tr>

    </table>


    </section>
   

<?php


if(isset($_GET['action'])){

        if($_GET['action']=="remove"){

            foreach($_SESSION['cart'] as $key => $value){
                if($value['prod_id']== $_GET['prod_id']){
                    unset($_SESSION['cart'][$key]);
                }
            }
        }
}

?>


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
                <a href="../CLIENT/product.php#product-bread" class="text footer-menu" style="text-decoration:none; color:white; font-size:large">The Bread</a>
              </p>
              <p class="mb-0"> 
                <a href="../CLIENT/product.php#product-danish" class="text footer-menu" style="text-decoration:none;color:white;font-size:large">Amazing Danish</a>
              </p>
              <p class="mb-0"> 
                <a href="../CLIENT/product.php#product-cakes" class="text footer-menu" style="text-decoration:none;color:white;font-size:large">Great Cakes</a>
              </p>
              <p class="mb-0"> 
                <a href="../CLIENT/product.php#product-toast" class="text footer-menu" style="text-decoration:none;color:white;font-size:large">Toasty Toast</a>
              </p>
              <p class="mb-0"> 
                <a href="../CLIENT/product.php#product-hampers" class="text footer-menu" style="text-decoration:none;color:white;font-size:large">Make your Hampers</a>
              </p>
              <p class="mb-0"> 
                <a href="../CLIENT/product.php#product-traditional" class="text footer-menu" style="text-decoration:none;color:white;font-size:large">Traditional cakes</a>
              </p>
              <p class="mb-0"> 
                <a href="../CLIENT/product.php#product-cookies" class="text footer-menu" style="text-decoration:none;color:white;font-size:large">Want a Cookies</a>
              </p>
              </div>

              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
              <h5 class="text-uppercase mb-4 font-weight-bold text-warning">About</h5>
              <p class="mb-0"> 
                <a href="../CLIENT/about-us.php" class="text-white" style="text-decoration:none;">About Us</a>
              </p>
              <p class="mb-0"> 
                <a href="../CLIENT/outlet.php" class="text-white" style="text-decoration:none;">Location</a>
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
                <a href="../CLIENT/product.php#product-bread" class="text" style="text-decoration:none; color:black; font-size:large">The Bread</a>
              </p>
              <p class="mb-0"> 
                <a href="../CLIENT/product.php#product-danish" class="text" style="text-decoration:none;color:black;font-size:large">Amazing Danish</a>
              </p>
              <p class="mb-0"> 
                <a href="../CLIENT/product.php#product-cakes" class="text" style="text-decoration:none;color:black;font-size:large">Great Cakes</a>
              </p>
              <p class="mb-0"> 
                <a href="../CLIENT/product.php#product-toast" class="text" style="text-decoration:none;color:black;font-size:large">Toasty Toast</a>
              </p>
              <p class="mb-0"> 
                <a href="../CLIENT/product.php#product-hampers" class="text" style="text-decoration:none;color:black;font-size:large">Make your Hampers</a>
              </p>
              <p class="mb-0"> 
                <a href="../CLIENT/product.php#product-traditional" class="text" style="text-decoration:none;color:black;font-size:large">Traditional cakes</a>
              </p>
              <p class="mb-0"> 
                <a href="../CLIENT/product.php#product-cookies" class="text" style="text-decoration:none;color:black;font-size:large">Want a Cookies</a>
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
                <a href="../CLIENT/about-us.php" class="text" style="text-decoration:none;color:black;font-size:large">About Us</a>
              </p>
              <p class="mb-0"> 
                <a href="../CLIENT/outlet.php" class="text" style="text-decoration:none;color:black;font-size:large">Location</a>
              </p>
              <p class="mb-0"> 
                <a href="" class="text" style="text-decoration:none;color:black;font-size:large">Contact Us</a>
              </p>
      </div>
    </div>
  </div>
</div>

<div class="row align-items-center text-center mt-4" style="display: flex; justify-content:center; align-items:center;">
<h5 class="text-uppercase mb-2 font-weight-bold  col-8" style="color: maroon;">Order online , pick it up in store & enjoy</h5>
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

<!-- Modal -->
<div class="modal fade" id="Modal-Jenis-Pembayaran" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 judul_modal_antar" id="exampleModalLabel">Pilih jenis pengantaran kue</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body tubuh-modal-jenis-pembayaran">
        <a href="paymen2.php">
          <button class="button_ambil">Mengambil roti di toko langsung (tanpa antri)</button>
        </a>
        <a href="paymen.php">
          <button class="button_ambil">Mengirim roti ke alamat yang diinginkan</button>
        </a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" style="background-color:maroon; color: white;" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<!-- <a href='handlecart.php?action=remove&prod_id=".$value['prod_id']."'> -->

<!-- <div class='cart-product-content'>

</div> -->

<script src="../js/jquery-3.7.1.min.js"></script>

    <!-- custom -->
    <script src="../js/custom.js"></script>
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



