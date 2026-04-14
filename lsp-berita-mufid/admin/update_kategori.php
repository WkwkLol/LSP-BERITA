<?php
include '../config/koneksi.php';

$data = mysqli_query($conn, "SELECT * FROM kategori WHERE id = '$id'");
$d = mysqli_fetch_assoc($data);
?>

<form method="POST">
    <input type="text" name="nama" value="<?= $d['nama']; ?>">
    <button name="update">Update</button>
</form>

<?php
if (isset($_POST['update'])) {
    $name = $_POST['nama'];

    mysqli_query($conn,"UPDATE kategori SET nama='$nama' WHERE id='$id'");
    header("Location: kategori.php");
}
?>