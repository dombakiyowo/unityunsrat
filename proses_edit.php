<?php
include "koneksi.php";

// Mendapatkan data dari formulir pengeditan
$id = $_POST['NIM'];
$nama = $_POST['Nama'];
$nim = $_POST['NIM'];
$email = $_POST['Email'];
$fakultas = $_POST['Fakultas'];
$divisi = $_POST['Divisi'];

// Memperbarui data pada tabel berdasarkan ID
$editdata = mysqli_query($conn, "UPDATE tbl_member SET Nama='$nama', NIM='$nim', Email='$email', Fakultas='$fakultas', Divisi='$divisi' WHERE NIM='$id'");

// Redirect kembali ke halaman utama setelah mengedit data
header("Location: admin.php");
exit();
?>
