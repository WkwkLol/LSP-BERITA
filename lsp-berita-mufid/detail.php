<?php
include 'config/koneksi.php';
$id = $_GET['id'];

$data = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM berita WHERE id=$id"));
?>

<h2><?= $data['judul'] ?></h2>
<p><?= $data['isi'] ?></p>
<a href="index.php">Kembali</a>