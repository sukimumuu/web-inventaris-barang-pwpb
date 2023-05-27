<?php
include "../koneksi.php";

$vnamabarang = $_POST['nama_barang'];
$vstok = $_POST['stok'];
$vdeskripsi = $_POST['deskripsi'];

$catat = mysqli_query($conn, "insert into barang values('','$vnamabarang','$vstok','$vdeskripsi')");

echo"<meta http-equiv=refresh content=0;url=barang.php>";
?>