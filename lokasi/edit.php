<?php
include "../koneksi.php";
$id = $_POST['id'];

$lokasi = $_POST['nama_lokasi'];
$vdeskripsi = $_POST['deskripsi'];

$edit = mysqli_query($conn, "update lokasi set nama_lokasi = '$lokasi', deskripsi = '$vdeskripsi' where id_lokasi = '$id'");

echo"<meta http-equiv=refresh content=0;url=lokasi.php>";
?>