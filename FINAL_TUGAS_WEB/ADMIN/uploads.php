<?php

require_once '../database/connection.php';

session_start(); 
if(!isset($_SESSION['session_username'])) { 
  echo "<p align='center'>Want to login again"; 
  echo "<a href='login.php'>Click Here to Login</a></p>";
} else{

if(isset($_POST["submit"])){
    // echo "<script>alert('submitted')</script>";
    $productname = $_POST["productname"];
    $productcategory = $_POST["productcategory"];
    $price = $_POST["price"];
    $price_discount = $_POST["price_after_discount"];
    $discount = $_POST["discount"];
    $keterangan = $_POST["keterangan"];


//untuk upload foto
// $upload_dir ="C:/xampp/htdocs/FINAL_TUGAS_WEB/penyimpanan/uploads_promo/";// this is where the uploaded photo stored
$upload_dir ="../penyimpanan/uploads_Image/";
$product_image= $upload_dir.$_FILES["imageUpload"]["name"];
$upload_dir.$_FILES["imageUpload"]["name"];
$upload_file =$upload_dir.basename($_FILES["imageUpload"]["name"]);
echo $upload_file;
$imageType = strtolower(pathinfo($upload_file,PATHINFO_EXTENSION)); //used tu detected image format
$check = $_FILES["imageUpload"]["size"];
$upload_ok=0;

if(file_exists($upload_file)){
    echo "<script>alert('The file already exist')</script>";
    $upload_ok=0;
}else{
    $upload_ok=1;
    if($check !== false){
        $upload_ok=1;
        if($imageType == 'jpg' || $imageType == 'png' || $imageType == 'jpeg' || $imageType == "gif"){
            $upload_ok=1;
        }else{
            echo "<script>alert('please change the image format')</script>";
        }
    }else{
        echo "<script>alert('The photo size is 0 please change the photo')</script>" ;
        $upload_ok=0;
    }
}

if($upload_ok==0){
    echo "<script>alert('sorry your file doesnt upload,coba lagi')</script>" ;
}else{
    if($productname != "" && $price != ""){
        move_uploaded_file($_FILES["imageUpload"]["tmp_name"],$upload_file);
        $sql = "INSERT INTO product(product_name,product_category,price,price_after_discount,discount,product_image,keterangan) VALUES('$productname','$productcategory',$price,$price_discount, $discount,'$product_image','$keterangan') ";

        if($conn->query($sql)==TRUE){
            echo  "<script>alert('your product upload to database')</script>";
            header('location:display.php');
        }
    }
}
}



#Apa artinya ini? Artinya: file yang kita upload akan ditampung dalam variabel $_FILES. Variabel ini merupakan sebuah array yang menampung data tentang file-nya.

# Fungsi PHP $_Post. Dalam PHP, variabel $ _POST standar digunakan untuk mengumpulkan nilai dalam sebuah form dengan metode = “post”.
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <title>Document</title>
    <link rel="stylesheet" href="../css/upload.css">
</head>
<body>


 <!-- NAVBAR ADMIN -->
 <section id="navigasi">
      <nav class="navbaradmin">
        <div class="navbaradminmenu">
          <a href="" class="navbaradminpic">
            <img  src="../img/sugarboo.png" style="width:300px;margin-left:-50px;margin-bottom: -27px; margin-top:-26px" alt="logo" />
          </a>
          <div class="navlistadmin">
            <a class="navlistadmina" href="uploads.php">UPLOAD</a>
            <a class="navlistadmina" href="display.php">PRODUCT LIST</a>
            <a class="navlistadmina" href="display_transaction.php">TRANSACTION LIST</a>
          </div>
          <div class="exitadmin">
          <a href="../ADMIN/logout.php" style="text-decoration: none;">EXIT ADMIN</a>
          </div>
        </div>
      </nav>
    </section>
    <!-- END OF NAVBAR ADMIN -->
    <?php
    // include_once "header.php";
    #include berarti memasukkan, artinya kita memasukkan  file kedalam dokumen kita, file tersebut bisa apa saja, 
    #termasuk script PHP, file konfigurasi, file HTML, dll.
    ?>

    <section id="upload_container">
        <form  method="POST" enctype="multipart/form-data" >
            <input type="text" name="productname" id="productname" placeholder="Product Name" required>
            <label for="productcategory"><p style="font-size: 15px; color:#757575; margin: 8px 0px 8px 0px;">Product Category : </p></label>
            <select name="productcategory" id="productcategory" placeholder="Product Category"  required>
                <option value="Bread">Bread</option>
                <option value="Cakes">Cakes</option>
                <option value="Danish">Danish</option>
                <option value="Cookies">Cookies</option>
                <option value="Hampers">Hampers</option>
                <option value="Toast">Toast</option>
                <option value="Traditional">Traditional</option>
                <option value="Promo">Promo</option>
            </select>
            <input type="number" name="price" id="price" placeholder="Product Price" required>
            <input type="number" name="price_after_discount" id="price_after_discount" placeholder="Product Price After Discount" required>
            <input type="number" name="discount" id="discount" placeholder="Product Discount">
            <input type="text" name="keterangan" id="keterangan" placeholder="keterangan">
            <input type="file" name="imageUpload" id="imageUpload" required hidden>
            <button id="choose" onclick="upload();">Choose Image</button>
            <input type="submit" value="Upload" name="submit">
        </form>
    </section>

    <script>
        var productname = document.getElementById("productname");
        var productcategory = document.getElementById("productcategory");
        var price = document.getElementById("price");
        var discount = document.getElementById("discount");
        var choose = document.getElementById("choose");
        var uploadimage = document.getElementById("imageUpload");

        function upload(){
            uploadimage.click()
        }

        uploadimage.addEventListener("change",
        function(){
            var file = this.files[0];
            if(productname.value==""){
                productname.value=file.name;
            }
            choose.innerHTML="Kamu dapat mengubah("+file.name+") gambar";
        }
    )
    </script>
</body>
</html>

<?php

    }

    ?>