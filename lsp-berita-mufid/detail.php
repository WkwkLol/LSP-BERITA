<?php
include 'config/koneksi.php';
$id = $_GET['id'];

$data = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM berita WHERE id=$id"));
?>

<head>
    <link rel="stylesheet" type="text/css" href="../assets/index.css">
</head>
<body>
    <h1 class="putih"><?= $data['judul'] ?></h1><hr>
    <p class="putih"><?= $data['isi'] ?></p>
    <a class="button" href="index.php">Kembali</a>
</body>
