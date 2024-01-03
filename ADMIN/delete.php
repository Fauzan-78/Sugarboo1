<?php
require_once '../database/connection.php';

if(isset($_GET['deleteid'])){
    $product_id= $_GET['deleteid'];
    $query_delete = "DELETE FROM product where product_id= $product_id";
    $result = mysqli_query($conn,$query_delete);
    if($result){
      // header('location:display.php');
    }
}

?>