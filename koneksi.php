<?php
$conn = mysqli_connect("localhost","root","","db_kue");

if (!$conn) {
    die("Koneksi Gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi Berhasil Brow";
}
?>