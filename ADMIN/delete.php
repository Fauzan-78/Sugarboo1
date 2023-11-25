<?php
require_once '../database/connection.php';

if(isset($_GET['deleteid'])){
    $product_id= $_GET['deleteid'];
    $query_img= "SELECT * FROM product WHERE product_id = $product_id ";
    $result2 = $conn->query($query_img);
    if($result2){
      while($row = mysqli_fetch_assoc($result2)) {
        // echo $row["product_image"];
        unlink($row["product_image"]);
      }
    }

    $query_delete = "DELETE FROM product where product_id= $product_id";
    $result = mysqli_query($conn,$query_delete);
    if($result){
      header('location:display.php');
    }
}

?>