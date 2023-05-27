<?php
include "../koneksi.php";
$id = $_POST['id'];

$vnamabarang = $_POST['nama_barang'];
$vstok = $_POST['stok'];
$vdeskripsi = $_POST['deskripsi'];

$edit = mysqli_query($conn, "update barang set nama_barang = '$vnamabarang', stok = '$vstok', deskripsi = '$vdeskripsi' where id_barang = '$id'");

echo"<meta http-equiv=refresh content=0;url=barang.php>";
?>