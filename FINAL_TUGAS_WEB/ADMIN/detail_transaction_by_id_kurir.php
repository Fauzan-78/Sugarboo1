<?php
require_once "../database/connection.php";

$id_transaction = $_GET['id_transaksi'];
$kind_delivery = $_GET['kind_delivery'];
// echo $id_transaction;
// echo "$kind_delivery";

session_start(); 
if(!isset($_SESSION['session_username'])) { 
  echo "<p align='center'>Want to login again"; 
  echo "<a href='login.php'>Click Here to Login</a></p>";
} else{
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <title>Display Transaksi </title>
    <link rel="stylesheet" href="../css/display_transaction_by_id_ambil.css">
    <title>Detail Pembayaran</title>
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

<!-- ngambil id dan nama -->
<?php
$query_id_transksi = "SELECT * FROM identitas_transaksi where id_transaksi = $id_transaction";
$result = mysqli_query($conn,$query_id_transksi);
if($result){
    while($row = mysqli_fetch_assoc($result)){
        $id_transaction = $row['id_transaksi'];
        $nama_Pelanggan = $row['nama'];
        $no_telp1 = $row['no_telp1'];
        $no_telp2 = $row['no_telp2'];
        $email = $row['email'];
?>
<section id="identitas_transaksi">
<div class="header_transaksi">
        Detail Transaksi
    </div>
<div class="kotak_transaksi">
    
    <div class="id_nama">
        <h2>Nomor Transaksi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :  &nbsp;&nbsp;&nbsp;&nbsp;<?= $id_transaction ?></h2>
        <h2>Nama Pelanggan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :  &nbsp;&nbsp;&nbsp;&nbsp;  <?= $nama_Pelanggan ?> </h2>
    </div>
    <div class="bungkus_kotak">
        <div class="kotak_transaksi_1">
            <span>nomor telepon 1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :  &nbsp;&nbsp;&nbsp;&nbsp;<?= $no_telp1?> </span>
            <span>nomor telepon 2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :  &nbsp;&nbsp;&nbsp;&nbsp;<?= $no_telp2 ?> </span>
            <span>email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :  &nbsp;&nbsp;&nbsp;&nbsp;<?= $email ?></span>
        </div>
    <?php
      }
    }
    ?>

<!-- php buat ngambil lokasi waktu dan letak toko -->
<?php
$query_id_transaksi_2 = "SELECT * FROM detail_transaksi_kurir where id_transaksi = $id_transaction";
$result2 = mysqli_query($conn,$query_id_transaksi_2);
if($result2){
    while($row2 = mysqli_fetch_assoc($result2)){
        $waktu_pengiriman= $row2['waktu_pengiriman'];
        $wilayah_pengiriman = $row2['wilayah_pengiriman'];
        $alamat_pengiriman = $row2['alamat_pengiriman'];
        $detail_pengiriman = $row2['detail_pengiriman'];
?>
        <div class="kotak_transaksi_2">
            <span>Waktu Pengiriman&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:  &nbsp;&nbsp;&nbsp;&nbsp;<?= $waktu_pengiriman ?></span>
            <span>Wilayah Pengiriman&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :  &nbsp;&nbsp;&nbsp;&nbsp; <?= $wilayah_pengiriman ?> </span>
        </div>
    </div>
    <div class="catatan">
    <span><b>Alamat Pengiriman </b></span>
    <span>" <?= $alamat_pengiriman?> "</span>

    </div>

    <div class="catatan">
    <span><b>Detail Alamat </b></span>
    <span>" <?= $detail_pengiriman?> "</span>

    </div>

    <?php
      }
    }
    ?>
</div>

<div class="header_tabel_produk">
    Detail Produk :
</div>
<section id="tabel_transaksi_produk">
<table class="table table-striped">
  <thead>
    <tr style="background-color: #0D6EFD;color:aliceblue;">
      <th scope="col">Nama Produk</th>
      <th scope="col">Kuantitas</th>
    </tr>
  </thead>

  <?php
$query_id_transaksi_produk= "SELECT Nama_Produk,Kuantitas FROM transaksi where id_transaksi = $id_transaction";
$result3 = mysqli_query($conn,$query_id_transaksi_produk);
if($result3){
    while($row3 = mysqli_fetch_assoc($result3)){
        $nama_produk = $row3['Nama_Produk'];
        $kuantitas = $row3['Kuantitas'];
  ?>
  <tbody>
    <tr>
      <th scope="row"><?=$nama_produk?></th>
      <td><?=$kuantitas?></td>
    </tr>
  </tbody>
  <?php
      }
    }
    ?>
  
</table>
</section>
</section>


</body>
</html>

<?php
}

?>