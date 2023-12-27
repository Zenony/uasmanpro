<?php
include "index.php";
$email = $_POST['email'];
$nama = $_POST['nama'];
$password = $_POST['password'];

$cekdata= mysqli_query($conn, "SELECT * FROM user where email='$email'");
$cek = mysqli_num_rows($cekdata);
if($cek>0){
    echo "<script>alert('Email Anda Sudah Terdaftar, Silahkan Register Ulang');history.go(-1);</script>";
}
else{
    $input=mysqli_query($conn."INSERT INTO user (email, nama, password) VALUES ('$email', '$nama', '$password')");
    if($input){
    echo "<script>alert('Selamat Anda Berhasil Mendaftar!');location.href=\"formlogin.html\"</script>";
    }
   }