<head>
    <link rel="stylesheet" type="text/css" href="../assets/index.css">
</head>
<body>
<center>
    <h1 class="putih">Tambah Kategori</h1>
    <a class="button" href="dashboard.php">Kembali</a><br><br>
    <form method="POST">
        <input type="text" name="nama">
        <button class="button" name="simpan">Simpan</button>
    </form>
</center>
</body>


<?php 
include '../config/koneksi.php';

if (isset($_POST['simpan'])) {
    mysqli_query($conn,"INSERT INTO kategori (nama_kategori) VALUES ('$_POST[nama]')");
    header("Location: kategori.php");
}
?>