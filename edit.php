<?php
include "koneksi.php";

// Mendapatkan ID yang akan diedit
$id = $_GET['NIM'];

// Mengambil data dari tabel berdasarkan ID
$ambildata = mysqli_query($conn, "SELECT * FROM tbl_member WHERE NIM='$id'");
$tampil = mysqli_fetch_array($ambildata);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Anggota UNITY</title>
    <style>
        body {
            padding: 30px;
            margin: 10px;
            font-family: Arial, sans-serif;
            color: #1f2748;
            background-color: #1f2748;
        }

        .card {
            width: 450px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border-radius: 4px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: white;
        }

        form {
            width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            padding: 8px 16px;
            font-size: 14px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            border: none;
            background-color: #1f2748;
            color: white;
            cursor: pointer;
            border-radius: 4px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Edit Data Anggota UNITY</h1>
    <div class="card">
    <form method="POST" action="proses_edit.php">
        <label>Nama:</label>
        <input type="text" name="Nama" value="<?php echo $tampil['Nama']; ?>"><br><br>
        <label>NIM:</label>
        <input type="text" name="NIM" value="<?php echo $tampil['NIM']; ?>"><br><br>
        <label>Email:</label>
        <input type="email" name="Email" value="<?php echo $tampil['Email']; ?>"><br><br>
        <label>Fakultas:</label>
        <input type="text" name="Fakultas" value="<?php echo $tampil['Fakultas']; ?>"><br><br>
        <label>Divisi:</label>
        <input type="text" name="Divisi" value="<?php echo $tampil['Divisi']; ?>"><br><br>
        <input type="submit" name="submit" value="Simpan">
    </form>
    </div>
</body>
</html>
