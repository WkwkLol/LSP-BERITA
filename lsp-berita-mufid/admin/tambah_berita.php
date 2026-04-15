<?php include '../config/koneksi.php'; ?>

<head>
    <link rel="stylesheet" type="text/css" href="../assets/index.css">
</head>
<body>

    <form method="POST">
        <h2 class="putih">Judul Berita: </h2>
        <input type="text" name="judul"></input>
        <h2 class="putih">Isi Berita:</h2>
        <textarea name="isi"></textarea><br><br>

        <select name="kategori">
            <?php
            $kat = mysqli_query($conn, "SELECT * FROM kategori");
            while ($k = mysqli_fetch_assoc($kat)) {
                echo "<option value='{$k['id']}'>{$k['nama_kategori']}</option>";
            }
            ?>
        </select>

        <button class="button" name="simpan">Simpan</button> <a class="button" href="dashboard.php">Kembali</a><br><br>
    </form>

    <?php
    if (isset($_POST['simpan'])) {
        mysqli_query($conn, "INSERT INTO berita (judul, isi, kategori_id, tanggal) VALUES('$_POST[judul]', '$_POST[isi]', '$_POST[kategori]', NOW())");

        header("Location: berita.php");
    }
    ?>
</body>