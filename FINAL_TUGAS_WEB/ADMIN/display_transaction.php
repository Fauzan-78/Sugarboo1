<?php
require_once "../database/connection.php";
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
    <title>Display Transaksi </title>
    <link rel="stylesheet" href="../css/display_transaction.css">
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
<table class="table table-striped tabel-asli-untuk-display">
  <thead>
    <tr class="header-tr">
      <th scope="col">ID Transaksi</th>
      <th scope="col">Nama Pelanggan </th>
      <th scope="col">No Telepon 1</th>
      <th scope="col">No Telepon 2</th>
      <th scope="col">Email</th>
      <th scope="col">Jenis Pengiriman</th>
      <th scope="col">Metode Bayar</th>
      <th scope="col">Total</th>
      <th scope="col">Detail Pemesanan</th>
    </tr>
  </thead>
  <tbody>

  <?php
    $query_display = "select * from identitas_transaksi";
    $result = mysqli_query($conn,$query_display);
    if($result){
        while($row = mysqli_fetch_assoc($result)){
            $transaction_id = $row['id_transaksi'];
            $customer_name = $row['nama'];
            $Telp_no_1 = $row['no_telp1'];
            $Telp_no_2  = $row['no_telp2'];
            $customer_email= $row['email'];
            $kind_delivery = $row['jenis_pengiriman'];
            $pay_methode = $row['metode_bayar'];
            $total = $row['total'];
    ?>
    <tr>
      <th scope="row"><?php echo $transaction_id; ?></th>
      <td><?php echo $customer_name;?></td>
      <td><?php echo $Telp_no_1;?></td>
      <td><?php echo $Telp_no_2;?></td>
      <td><?php echo $customer_email; ?></td>
      <td><?php echo $kind_delivery;?></td>
      <td><?php echo $pay_methode; ?></td>
      <td>Rp <?php echo $total; ?></td>
      <td>
        <?php
        if($kind_delivery=="ambil di tempat"){
        ?>
        <button class="btn btn-primary button-edit-product"><a style="color:white;text-decoration:none;" href="detail_transaction_by_id_ambil.php?id_transaksi=<?php echo  $transaction_id;?>&kind_delivery=<?php echo "$kind_delivery";?>">Detail</a></button>
        <?php
        }else{
          ?>
        <button class="btn btn-primary button-edit-product"><a style="color:white;text-decoration:none;" href="detail_transaction_by_id_kurir.php?id_transaksi=<?php echo  $transaction_id;?>&kind_delivery=<?php echo "$kind_delivery";?>">Detail</a></button>
      <?php
        }
        ?>
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

<?php 
}
?>