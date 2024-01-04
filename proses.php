<?php
require 'koneksi.php';
$nama = $_POST["nama"];
$email = $_POST["email"];
$nohp = $_POST["nohp"];

$query_sql = "INSERT INTO tbl_pelanggan (nama, email, nohp)
VALUES ('$nama', '$email','$nohp')";

if (mysqli_query($conn, $query_sql)) {
    header("location: index_contact.html");
}   else {
    echo "Koneksi Gagal : " . mysqli_connect($conn);
}
?>