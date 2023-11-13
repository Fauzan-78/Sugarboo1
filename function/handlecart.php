<?php
session_start();
include("../database/connection.php");
if(isset($_POST['scope']))
{
    if(isset($_SESSION['cart'])){

        $session_array_id = array_column($_SESSION['cart'],'prod_id' );

        if (!in_array($_GET['prod_id'], $session_array_id)){
            $prod_id = $_POST['prod_id'];
            $prod_qty = $_POST['prod_qty'];
            $prod_price = $_POST['prod_price'];
            $prod_img= $_POST['prod_img'];
            $prod_name= $_POST['prod_name'];
                $session_array = [
                    'prod_id' => $prod_id,
                    'prod_qty' => $prod_qty,
                    'prod_price' => $prod_price,
                    'prod_img' => $prod_img,
                    'prod_name' => $prod_name,
                ];

                $_SESSION['cart'][]= $session_array;
        }
    }else{

    
    $scope = $_POST['scope'];
    switch ($scope){
        case "add" :
            $prod_id = $_POST['prod_id'];
            $prod_qty = $_POST['prod_qty'];
            $prod_price = $_POST['prod_price'];
            $prod_img= $_POST['prod_img'];
            $prod_name= $_POST['prod_name'];
                $session_array = [
                    'prod_id' => $prod_id,
                    'prod_qty' => $prod_qty,
                    'prod_price' => $prod_price,
                    'prod_img' => $prod_img,
                    'prod_name' => $prod_name,
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
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <title>Document</title>
</head>
<body>
    <?php

        $output = "";
        $output .= "
        <table class = 'table table-bordered table-stripped '>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Image</th>
                <th>Qty</th>
                <th>Price</th>
                <tr>
      
        ";

        if(!empty($_SESSION['cart'])){

            foreach($_SESSION['cart'] as $key => $value){
                $output .= " 
            
                <tr >
                    <td>".$value['prod_id']."</td>
                    <td>".$value['prod_name']."</td>
                    <td><img src=".$value['prod_img']." style='width:40px' ></td>
                    <td>".$value['prod_img']."></td>
                    <td>".$value['prod_qty']."</td>
                    <td>".$value['prod_price']."</td>
                    <td>
                    <a href='handlecart.php?action=remove&prod_id=".$value['prod_id']."'>
                        <button class='btn btn-danger btn-block '>Remove</button>
                    </a>
                    </td>
                <tr>
            
                ";
            }
        }
     



        echo $output;


        // var_dump($_SESSION['cart']);
        ?>


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



