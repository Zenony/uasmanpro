<?php
$servername="localhost";
$username="root";
$password="";
$dbname="uasmanpro";

$conn = new mysqli($servername, $username,$password,$dbname);

if($conn-> connect_error){
    die("Koneksi error: ".$conn-> connect_error);
}