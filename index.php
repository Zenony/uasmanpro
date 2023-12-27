<?php
$servername="localhost";
$username="root";
$password="";
$dbname="uasmanpro";

$conn = new mysqli($servername, $username,$password,$dbname);

if($conn-> connection_error){
    die("Koneksi error: ".$conn-> connection_error);
}