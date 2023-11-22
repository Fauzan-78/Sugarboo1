<?php
//Server name
$servername = "localhost";

//Username
$username = "root";

//Password
$password = "";

//database
$dbname = "tugas_web_php";

//Make connection with database
$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("connection failed: ".$conn->connect_error );
}else{
    echo "Connected Succesfully";
}

?>