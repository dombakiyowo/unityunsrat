<?php
$servername = "localhost";
$database = "unity";
$username = "root";
$password = "";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("Koneksi gagal : " . mysqli_connect_error());
} else{
    echo"Koneksi berhasil";
}