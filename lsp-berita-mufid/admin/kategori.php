<?php include '../config/koneksi.php';?>

<head>
    <link rel="stylesheet" type="text/css" href="../assets/index.css">
</head>
<body>
<center>
    <h2 class="putih">Kategori</h2>
    <a class="button" href="tambah_kategori.php">Tambah</a><a class="button" href="dashboard.php">Kembali</a><br><br>

    <table border="1">
    <tr>
        <th class="putih">No</th>
        <th class="putih">Nama Kategori</th>
        <th class="putih">Aksi</th>
        <?php
        $no = 1;
        $query = mysqli_query($conn, "SELECT * FROM kategori");
        while ($row = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td class="putih"><?= $no++ ?></td>
            <td class="putih"><?= $row['nama_kategori'] ?></td>
            <td class="putih"><a class="button" href="edit_kategori.php?id=<?= $row['id'] ?>">Edit</a><br><br>
                <a class="buttonwarning" href="hapus_kategori.php?id=<?=  $row['id'] ?>">Hapus</a></td>
        </tr>
        <?php } ?>
    </tr>
</center>
</body>