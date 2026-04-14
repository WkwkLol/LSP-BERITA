<?php

$conn = new mysqli("localhost","root","","db_berita_mufid");

if (!$conn) {
    die("gagal" . mysqli_connect_error());
}

?>