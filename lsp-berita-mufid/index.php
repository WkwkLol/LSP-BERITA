<?php include 'config/koneksi.php'; ?>

<h1>Website Berita</h1>

<a href='admin/dashboard.php'id']."'>Login</a> <br>
<a href='admin/kategori.php'id']."'>Tambah Kategori</a>

<?php
$query = mysqli_query($conn, "SELECT * FROM berita");

while ($row = mysqli_fetch_array($query)) {
    ?>
    <h3><?=  $row['judul'] ?></h3>
    <p><?=  substr($row['isi'], 0, 100) ?>...</p>
    <a href="detail.php?id=<?= $row['id'] ?>">Baca</a>
    <hr>
<?php } ?>

