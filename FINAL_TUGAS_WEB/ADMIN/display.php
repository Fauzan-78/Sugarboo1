<?php
require_once '../database/connection.php';
session_start(); 
if(!isset($_SESSION['session_username'])) { 
  echo "<p align='center'>Want to login again"; 
  echo "<a href='login.php'>Click Here to Login</a></p>";
} else{





?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/display.css" />
    <title>Document</title>
</head>
<body>





<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/display.css" />
    <title>Document</title>
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
            <a href="../ADMIN/logout.php">EXIT ADMIN</a>
          </div>
        </div>
      </nav>
    </section>
    <!-- END OF NAVBAR ADMIN -->

<section id="tabel-display">
<h4 class="header-upload">Uploads product to database</h4>
<button class=" button-uploads">
    <a style="color:black;text-decoration:none;" href="uploads.php">uploads</a>
</button>
<table class="table table-striped tabel-asli-untuk-display">
  <thead>
    <tr class="header-tr">
      <th scope="col">Product ID</th>
      <th scope="col">Product Image</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Category</th>
      <th scope="col">Price</th>
      <th scope="col">Price After Discount</th>
      <th scope="col">Discount</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php
    $query_display = "select * from product";
    $result = mysqli_query($conn,$query_display);
    if($result){
        while($row = mysqli_fetch_assoc($result)){
            $product_id = $row['product_id'];
            $product_image = $row['product_image'];
            $product_name = $row['product_name'];
            $product_category = $row['product_category'];
            $price= $row['price'];
            $price_after_discount= $row['price_after_discount'];
            $discount = $row['discount'];
            $keterangan = $row['keterangan'];
    ?>
    <tr>
      <th scope="row"><?php echo $product_id; ?></th>
      <td><img src="<?php echo $product_image; ?>" alt="" style="width:100px;"></td>
      <td><?php echo $product_name;?></td>
      <td><?php echo $product_category;?></td>
      <td>Rp <?php echo $price; ?></td>
      <td>Rp <?php echo $price_after_discount; ?></td>
      <td><?php echo $discount;?></td>
      <td><?php echo $keterangan; ?></td>
      <td>
        <button class="btn btn-primary button-edit-product"><a style="color:white;text-decoration:none;" href="update.php?updateid=<?php echo  $product_id;?>">Edit</a></button>
        <button class="btn btn-danger button-delete-product" ><a href="delete.php?deleteid=<?php echo  $product_id;?>" style="color:white;text-decoration:none;">Delete</a></button>
      </td>

      <!-- Modal -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Yakin Untuk Menghapus?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="display: flex;justify-content:space-around;align-items:center;">
        <button class="btn btn-danger button-delete-product"><a  style="color:white;text-decoration:none;" href="delete.php?deleteid=<?php echo  $product_id;?>">hapus</a></button>
        <button class="btn btn-danger button-edit-product" data-bs-dismiss="modal">tidak</button>
      </div>
    
    </div>
  </div>
</div> -->
    </tr>

    


    <?php
}
    }
    ?>
  </tbody>
</table>

</section>

<!-- modal -->


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

<?php
}

?>
</body>
</html>
