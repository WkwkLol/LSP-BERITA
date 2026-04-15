<?php include 'config/koneksi.php'; ?>

<head>
    <link rel="stylesheet" type="text/css" href="assets/index.css">
</head>
<body>
    <a href="admin/dashboard.php" class="button">Login Admin</a>

    <h1 class="putih">Radar News</h1>

    <?php
    $query = mysqli_query($conn, "SELECT * FROM berita");

    while ($row = mysqli_fetch_array($query)) {
        ?>
        <hr>
        <h3 class="putih"><?= $row['judul'] ?></h3>
        <p class="putih"><?= substr($row['isi'], 0, 100) ?>...</p>
        <a href="detail.php?id=<?= $row['id'] ?>" class="button">Baca</a>
    <?php } ?>
</body>



