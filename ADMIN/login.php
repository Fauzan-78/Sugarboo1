<?php
session_start();
require_once '../database/connection.php';

//atur variabel
$err = "";
$username = "";
$ingataku = "";


/*Isset adalah fungsi bahasa pemrograman PHP untuk melakukan pengecekan 
terhadap suatu variabel atau isi dari variabel yang terdefinisi1234.
 Fungsi ini mengembalikan nilai boolean (true atau false) dan berguna 
 untuk menghindari pemanggilan variabel yang belum terdefinisi1. Fungsi isset akan mengembalikan 
 nilai true jika sebuah variabel sudah diatur atau jika variabel sudah ada, dan false
  jika variabel belum diatur atau belum ada2
  */
if(isset($_COOKIE['cookie_username'])){
    $cookie_username = $_COOKIE['cookie_username'];
    $cookie_password = $_COOKIE['cookie_password'];

    $sql1="select * from login where username = '$cookie_username'";
    $q1 = mysqli_query($koneksi,$sql1);
    $r1 =mysqli_fetch_array($q1);
    if($r1['password']== $cookie_password){
        $_SESSION['session_username']=$cookie_username;
        $_SESSION['session_password']=$cookie_password;
        header("location:../ADMIN/display.php");
    }
}

if(isset($_SESSION['session_username'])){
    header("location:../ADMIN/display.php");
    exit();
    
}

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $ingataku = $_POST['ingataku'];


        if($username == '' or $password == ''){
            $err .= "<li>Silahkan masukkan username dan juga password.</li>";
        }else{
            $sql1 = "select * from login where username = '$username' ";
            $q1 = mysqli_query($conn,$sql1);
            $r1 =mysqli_fetch_array($q1);

            if($r1['username'] == ''){
                $err .= "<li>Username <b>$username</b> tidak tersedia.</li>";
            }elseif($r1['password']!= md5($password)){
                $err .= "<li>Password yang dimasukkan tidak sesuai</li>";
            }

            if(empty($err)){
            //     $_SESSION['session_username'] = $username;
            //     $_SESSION['session_password'] = md5($password);

            //     if($ingataku == 1){
            //         $cookie_name = "cookie_username";
            //         $cookie_value = $username;
            //         $cookie_time = time()+ (60 * 60 * 24 * 30);
            //         setcookie($cookie_name,$cookie_value,$cookie_time,"/");

            //         $cookie_name = "cookie_password";
            //         $cookie_value = md5($password);
            //         $cookie_time = time()+(60 * 60 * 24 * 30);
            //         setcookie($cookie_name,$cookie_value,$cookie_time,"/");
            //     }
                header("location:../admin/display.php");
            }
        }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="\tampilan\aset\css\index.css" />
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css" />
</head>
<body>
<section id="navigasi">
      <nav class="navbar tempat-navigasi navbar-expand-lg bg-body-tertiary">
        <div class="tempat-navigasi-con container-fluid">
          <a class="tempat-navigasi-con-gambar navbar-brand" href="">
            <img class="tempat-navigasi-con-gambar1 d-none d-lg-block" src="../img/sugarboo.png" style="width:300px;margin-left:-55px;" alt="logo" />
          </a>
          <!-- <button class="button-navigasi-handphone navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><img style="width:40px" src="../img/navigasi-burger.png" alt=""></span>
            <span class="navbar-toggler-icon"><img style="height:100px;  margin-top:-35px; margin-left:-150px;" src="../img/sugarboo.png" alt=""></span>
          </button> -->
          
        </div>
      </nav>
</section>
<div class="container-fluid kotaklogin">
<div class="row content-baris">
    Login
</div>
<div class="row content-baris2">
    <?php if($err){ ?>
        <div id="login-alert" class="alert alert-danger col-sm-12">
            <ul><?php echo $err ?></ul>
        </div>

   <?php } ?>
<form action="" method="post" >
  <div class="mb-3">
    <br>
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="text" class="form-control" id="inputusername" name="username" value="<?php echo $username ?>" placeholder="username" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="ingataku" value="1" <?php if($ingataku == 1) echo "checked"?>>Ingat Aku
    <!-- <label class="form-check-label" for="exampleCheck1">ingat saya</label> -->
  </div>
  <button type="submit" class="btn btn-primary login-button" name="login">Login</button>
</form>
</div>
</div>














    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
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