<?php include '../config/koneksi.php'; ?>
<head>
    <link rel="stylesheet" type="text/css" href="../assets/index.css">
</head>
<body>
<center>
    <h2 class="putih">Data Berita</h2>
    <a class="button" href="tambah_berita.php">Tambah</a><a class="button" href="dashboard.php">Kembali</a>

    <p></p>
    <table border="1">
        <tr>
            <th class="putih">No</th>
            <th class="putih">Judul</th>
            <th class="putih">Kategori</th>
            <th class="putih">Aksi</th>
        </tr>

        <?php
        $no = 1;
        $query = mysqli_query($conn, "SELECT berita.* , kategori.nama_kategori FROM berita
        JOIN kategori ON berita.kategori_id = kategori.id");

        while ($row = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td class="putih"><?= $no++ ?></td>
                <td class="putih"><?= $row['judul'] ?></td>
                <td class="putih"><?= $row['nama_kategori'] ?></td>
                <td class="putih"><a class="button" href="edit_berita.php?id=<?= $row['id'] ?>">Edit</a><br><br>
                    <a class="buttonwarning" href="hapus_berita.php?id=<?=  $row['id'] ?>">Hapus</a></td>
            </tr>
            
        <?php } ?>
    </table>
<center>
</body>