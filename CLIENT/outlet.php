<?PHP
require_once '../database/connection.php';
$sql = "SELECT * FROM product";
$all_product=$conn->query($sql);
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
        <link rel="stylesheet" href="../css/index.css" />
        <link rel="stylesheet" href="../css/outlet.css" />
        <title>About Us - Sugarboo</title>
        <link rel="shortcut icon" href="../img/favicon.png">

        <!-- glider -->
        <link rel="stylesheet" href="../js/glider.min.css" />
        <!--  glider.js -->
        <script src="../js/glider.min.js"></script>

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
    </head>

    <body>
        <!-- navbar -->
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
                    <a class="nav-link active amenu" aria-current="page" href="indexs.php">Home</a>
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

        <!-- outlet -->
        <h2 class="title">Outlet Information</h2>
        <div class="container mt-5">
        <div class="card-columns">
        <div class="card-horizontal">
        <div class="card-content">
            <div class="image-box">
                <img src="..\img\bankecil2.png" alt="Outlet Image">
            </div>
            <div class="card-text">
                <div class ="judul-box">
                    <h4><u>Jakarta Timur</u></h4>
                </div>
                <p>Jl. Raya St. Cakung, Jl. Sentra Primer Timur, Pulo Gebang, Kec. Cakung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta</p>
                <div class = "box-buka">
                    <div class="lingkaran">
                        
                    </div>
                    <span>
                        08:00 - 21:00
                    </span>
                </div>
            </div>
            <div class = "button-box">
                <button class="map-button-horizontal"><a href="https://maps.app.goo.gl/DYstTGdwLuMhkKRx6" target="_blank"><img src="../img/arrow-right-48px.png" alt=""></a></button>
            </div>
        </div>
    </div>
    <div class="card-horizontal">
        <div class="card-content">
            <div class="image-box">
                <img src="..\img\bankecil2.png" alt="Outlet Image">
            </div>
            <div class="card-text">
                <div class ="judul-box">
                    <h4><u>Jakarta Selatan</u></h4>
                </div>
                <p>Jl. Kapten Tendean No.13, Kuningan Bar., Kec. Mampang Prpt., Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta</p>
                <div class = "box-buka">
                    <div class="lingkaran">
                        
                    </div>
                    <span>
                        08:00 - 21:00
                    </span>
                </div>
            </div>
            <div class = "button-box">
                <button class="map-button-horizontal"><a href="https://maps.app.goo.gl/EDwhGsSSapUrfpNk8" target="_blank"><img src="../img/arrow-right-48px.png" alt=""></a></button>
            </div>
        </div>
    </div>
    <div class="card-horizontal">
        <div class="card-content">
            <div class="image-box">
                <img src="..\img\bankecil2.png" alt="Outlet Image">
            </div>
            <div class="card-text">
                <div class ="judul-box">
                    <h4><u>Jakarta Timur</u></h4>
                </div>
                <p>Jl. Pemuda No.3A, Rawamangun, Kec. Pulo Gadung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta</p>
                <div class = "box-buka">
                    <div class="lingkaran">
                        
                    </div>
                    <span>
                        08:00 - 21:00
                    </span>
                </div>
            </div>
            <div class = "button-box">
                <button class="map-button-horizontal"><a href="https://maps.app.goo.gl/UP55yXVkep2XfMjF6" target="_blank"><img src="../img/arrow-right-48px.png" alt=""></a></button>
            </div>
        </div>
    </div>
        <!-- end of outlet -->
    </body>

    <footer>
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
                            <a  aria-disabled="true" ><img class="medsos-icon-img" src=".//img/youtube-icon.png" alt="yt"></a>
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
        </section>
    </footer>
</html>