<?php
include "../koneksi.php";

$nama  = $_POST['nama'];
$tipe  = $_POST['tipe'];
$harga = $_POST['harga'];

mysqli_query($koneksi, "INSERT INTO kendaraan VALUES(NULL, '$nama', '$tipe', '$harga')");
header("location:kendaraan.php");
?>
