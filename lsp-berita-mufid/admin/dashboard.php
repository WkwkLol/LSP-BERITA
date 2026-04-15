<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('Location: ../auth/login.php');
}
?> 

<head>
    <link rel="stylesheet" type="text/css" href="../assets/index.css">
</head>
<body>
    <center>
    <h1 class="putih">Admin Dashboard</h1>

    <a href="../admin/kategori.php" class="button">Tambah Kategori</a>
    <a href="../admin/berita.php" class="button">Tambah Berita</a>
    <a href="../auth/logout.php" class="button">Logout</a><br>
    </center>
</body>

