<?php
require_once '../database/connection.php';





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
<section id="navigasi">
      <nav class="navbar tempat-navigasi navbar-expand-lg bg-body-tertiary">
        <div class="tempat-navigasi-con container-fluid">
          <a class="tempat-navigasi-con-gambar navbar-brand" href="">
            <img class="tempat-navigasi-con-gambar1 d-none d-lg-block" src="/img/sugarboo.png" style="width:250px;margin-left:-55px;" alt="logo" />
          </a>
          <button class="button-navigasi-handphone navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><img style="width:40px" src="../img/navigasi-burger.png" alt=""></span>
            <span class="navbar-toggler-icon"><img style="height:100px;  margin-top:-35px; margin-left:-150px;" src="../img/sugarboo.png" alt=""></span>
          </button>
          
        </div>
      </nav>
    </section>

<section id="tabel-display">
<h4 class="header-upload">Uploads product to database</h4>
<button class=" button-uploads">
    <a style="color:black;text-decoration:none;" href="uploads.php">uploads</a>
</button>
<table class="table table-striped tabel-asli-untuk-display">
  <thead>
    <tr class="header-tr">
      <th scope="col">Product ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Category</th>
      <th scope="col">Price</th>
      <th scope="col">Discount</th>
      <th scope="col">Product Image</th>
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
            $discount = $row['discount'];
            $keterangan = $row['keterangan'];
    ?>
    <tr>
      <th scope="row"><?php echo $product_id; ?></th>
      <td><img src="<?php echo $product_image; ?>" alt="" style="width:100px;"></td>
      <td><?php echo $product_name;?></td>
      <td><?php echo $product_category;?></td>
      <td><?php echo $price; ?></td>
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
</body>
</html>