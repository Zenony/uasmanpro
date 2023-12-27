<?php
include "index.php";
$email = $_POST['email'];
$password = $_POST['password'];

$cekdata= mysqli_query($conn, "SELECT * FROM user where email='$email' and password='$password'");
$cek = mysqli_fetch_array($cekdata);

if(mysqli_num_rows($cekdata) == 1){
    header("location : index.html");
}
else{
    echo "<script>alert('Gagal Login');history.go(-1);</script>";
}