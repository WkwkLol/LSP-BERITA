<?php
include '../config/koneksi.php';
$id = $_GET ['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM berita WHERE id=$id"));
?>

<head>
    <link rel="stylesheet" type="text/css" href="../assets/index.css">
</head>
<body>
    <form method="POST">
        <h2 class="putih">Judul Berita: </h2>
        <input type="text" name="judul" value="<?=  $data['judul'] ?>">
        <h2 class="putih">Isi: </h2>
        <textarea name="isi"><?=  $data['isi'] ?></textarea><br><br>
        <button class="button" name="update">Update</button>
    </form>

    <?php
    if (isset($_POST['update'])) {
        mysqli_query($conn,"UPDATE berita SET
        judul = '$_POST[judul]',
        isi = '$_POST[isi]'
        WHERE id=$id");

        header("Location: berita.php");
    }
    ?>
</body>
