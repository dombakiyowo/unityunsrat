<?php
include "koneksi.php";

// Mendapatkan ID yang akan dihapus
$id = $_GET['NIM'];

// Menghapus data dari tabel berdasarkan ID
$hapusdata = mysqli_query($conn, "DELETE FROM tbl_member WHERE NIM='$id'");

// Redirect kembali ke halaman utama setelah menghapus data
header("Location: admin.php");
exit();
?>
