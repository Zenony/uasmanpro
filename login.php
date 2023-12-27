<?php
include "index.php";
$email = $_POST['email'];
$password = $_POST['password'];

$cekdata= mysqli_query($conn, "SELECT * FROM user where email='$email' and password='$password'");
$cek = mysqli_num_rows($cekdata);
while($row=cekdata->fetch_assoc()){
    $nama= $row['nama'];
}
if($cek>0){
    header("localtion : index.html?nama=".$nama."");
}
else{
    echo "<script>alert('Gagal Login');history.go(-1);</script>";
}