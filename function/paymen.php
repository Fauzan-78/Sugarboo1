<?PHP
session_start();
require_once '../database/connection.php';
global $total;

//menghitung total 
foreach($_SESSION['cart'] as $key => $value){
  $total += $value['prod_total_price'];
  }

  //ketika pencet submit
if(isset($_POST["submit"])){
    $nama           = $_POST['name'];
    $nohandphone1   = $_POST['nomor'];
    $nohandphone2   = $_POST['nomor2'];
    $email          = $_POST['email'];
    $jenis_pengiriman = "kurir";
    $metode_pembayaran     = $_POST['pembayaran'];

   //masukin identitas transaksi ke database id_transaksi
    $input1 = "INSERT INTO identitas_transaksi (nama, no_telp1, no_telp2, email,jenis_pengiriman,metode_bayar,total) VALUES ('$nama','$nohandphone1','$nohandphone2',' $email','$jenis_pengiriman',' $metode_pembayaran','$total')";
    if($result1 = mysqli_query($conn,$input1)){
      // echo "data 1 berhasil";
    }

    //cari last insert id dengan max
    $id = mysqli_query($conn,"SELECT MAX(id_transaksi) from identitas_transaksi");
    $row    = mysqli_fetch_row($id);
    $highest_id = $row[0];
    if($id){
      // echo "id berhasil dilacak";
    }

    //masukkin detail alamat wilayah pemesanan
    $wilayah = $_POST['wilayah_pemesanan'];
    $waktu         = $_POST['waktu'];
    $lokasi      = $_POST['lokasi'];
    $detail_lokasi        = $_POST['detail'];

    $input_detail_transaksi = "INSERT INTO detail_transaksi_kurir(id_transaksi, waktu_pengiriman, wilayah_pengiriman, alamat_pengiriman, detail_pengiriman) VALUES ('$highest_id','$waktu','$wilayah','$lokasi',' $detail_lokasi ')";
    if($result_detail =  mysqli_query($conn,$input_detail_transaksi)){
      echo  "<script>alert('your product upload to database')</script>";
  } else {
      
    //Jika Gagal
    echo "pemesanan Gagal diinput, Silahkan diulangi!";
    
    }
   

    //masukin semua produk yang dibeli olhe pembeli dengan id transaksi terakhir
    if(!empty($_SESSION['cart'])){

    foreach($_SESSION['cart'] as $key => $value){
    $produk = $value['prod_name'];
    $qty = $value['prod_qty'];
    $input2 = "INSERT INTO transaksi (id_transaksi,Nama_produk,kuantitas) VALUES ('$highest_id','$produk','$qty')";
  
    if($result2 = mysqli_query($conn,$input2)){
        echo  "<script>alert('your product upload to database')</script>";
    } else {
        
      //Jika Gagal
      echo "pemesanan Gagal diinput, Silahkan diulangi!";
      
      }
    }


  }else{
    echo  "<script>alert('produk kamu masih kosong')</script>";
  }
}

?>


   <!--HTML -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/payment.css" />
    <script src="../js/date.js"></script>
    <title>Sugarboo</title>

    <!-- glider -->
    <link rel="stylesheet" href="../js/glider.min.css" />
  </head>
  <body>

  <!-- navigasi -->
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

    <!-- Pembayaran -->
    <section class="payment-general">
    <form id="form" action="paymen.php" method="POST"  enctype="multipart/form-data" >
    <div class="pembayaran">

     <!-- Pembayaran sebelah kanan -->
        <div class="pembayaran-konten">
      <div class= "informasi-pelanggan ">
      <div class="header-biodata">
        <p>Biodata</p>
        </div>
        <div class="input-control">
          <label for="nama">Nama</label>

          <input style="border-radius:5px;" id="name" name="name" type="text" />

          <div class="error"></div>
        </div>
       
        <div class="input-control">
          <label for="nomor">Nomor Handphone</label>

          <input style="border-radius:5px;" id="nomor" name="nomor" type="tel" />

          <div class="error"></div>
        </div>

        <div class="input-control">
          <label for="nomor2">Nomor Handphone 2</label>

          <input style="border-radius:5px;" id="nomor2" name="nomor2" type="tel" />

          <div class="error"></div>
        </div>
        <div class="input-control">
          <label for="email">Email</label>

          <input style="border-radius:5px;" id="email" name="email" type="text" />

          <div class="error"></div>
        </div>
      
      </div>

      <div class="alamat-pengiriman">
      <div class="header-biodata">
        <p>Pengiriman</p>
        </div>

        <div class="input-control">
          <label for="wilayah_pemesanan">Wilayah Pemesanan</label>

          <select name="wilayah_pemesanan" id="wilayah_pemesanan" placeholder="wilayah pemesanan"  required>
               <?php
              $query_wilayah= mysqli_query($conn,"SELECT wilayah from toko");
              if(mysqli_num_rows($query_wilayah)>0){

                foreach ($query_wilayah as $key) {
                 ?>
                 <option value="<?php echo $key['wilayah'] ?>"><?php echo $key['wilayah'] ?></option>
                 <?php
                }
              }
                ?>
            </select>
          <div class="error"></div>
        </div>

      <div class="input-control">
          <label for="waktu">waktu pengiriman</label>

          <input id="waktu" name="waktu" type="date" />

          <div class="error"></div>
        </div>
       
        <div class="input-control">
          <label for="lokasi">lokasi</label>

          <input id="lokasi" name="lokasi" type="text" />

          <div class="error"></div>
        </div>

        

        <div class="input-control">
          <label for="detail">Detail Pengiriman</label>

          <input id="detail" name="detail" type="text" />

          <div class="error"></div>
        </div>


      </div>
      </div>


<!-- Pembayaran sebelah kiri -->
      <div class="pembayaran-konten-2">
      <div class= "Ringkasan-pemesanan">
      
      <div class="header-biodata">
        <p>Ringkasan Pemesanan</p>
        </div>
      <section style="overflow-y: scroll; height:300px;" id="tabel-cart-handphone" >
      <table class = 'table table-bordered table-stripped '>

    <?PHP
    if(!empty($_SESSION['cart'])){

    foreach($_SESSION['cart'] as $key => $value){
    ?>

    <tr >
                    <td class="td-handphone"> 
                      <div class="konten-cart-isi-handphone">
                      <img class="gambar-produk" src="<?= $value['prod_img']?>"  >
                      <div class="konten-cart-informasi">
                     <div class="konten-cart-informasi3"> <?= $value['prod_name']?></div>
                     <div class="konten-cart-informasi2">Jml : <?= $value['prod_qty']?></div>
                     <div class="konten-cart-informasi3">Rp. <?= number_format($value['prod_total_price'],2,",",".")?></div>
                      </div>
                      </div>  
    </tr>
    <?PHP
        }
    }
    ?>    
    </table>
    </section>

    <div class="footer-biodata">
        <div><p>Total Pemesanan</p></div>
        <div><p>Rp. <?=number_format($total,2,",",".")?></p></div>
        </div>
    </div>
    <div class="pilih-metode-pengiriman">
    <div class="header-biodata">
        <p>Metode Pembayaran</p>
        </div>
<div class="input-control-metode-pembayaran">
<div class="input-pembayaran-kotak">
  <div class="input-pembayaran">
<input type="radio" id="pembayaran" name="pembayaran" value="dana" required>
<label for="dana"><img class="logo-pembayaran"src="../img/dana.png" alt=""></label><br>
<div class="error"></div>
</div>
<div class="input-pembayaran">
<input type="radio" id="pembayaran1" name="pembayaran" value="gopay">
<label for="gopay"> <img class="logo-pembayaran"src="../img/gopay.png" alt=""></label><br>
</div>
</div>
<div class="input-pembayaran-kotak">
<div class="input-pembayaran">
<input type="radio" id="pembayaran2" name="pembayaran" value="qrid">
<label for="gopay"> <img class="logo-pembayaran"src="../img/qris.png" alt=""></label><br>
</div>
<div class="input-pembayaran">
<input type="radio" id="pembayaran3" name="pembayaran" value="mandiri">
<label for="mandiri"> <img class="logo-pembayaran"src="../img/mandiir.png" alt=""></label><br>
</div>
</div>
  </div>
</div>

   <!--tombol submit -->
<div class="a-Bayar-sekarang"> 
                <input class='btn btn-danger btn-block Bayar-sekarang' type="submit" value="check out" name="submit" >
  </div>
      </div>
      </div>
      </form>
    </section>
  </body>
   
    <br><br>


       <!--footer -->
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



    <!--  glider.js -->
    <script src="../js/glider.min.js"></script>

    <script src="../js/jquery-3.7.1.min.js"></script>


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