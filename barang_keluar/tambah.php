<?php
include "../koneksi.php";

$tanggal = $_POST['tanggal'];
$penerima = $_POST['penerima'];
$deskripsi = $_POST['deskripsi'];

$data = mysqli_query($conn, "insert into barang_keluar values('','','$tanggal','$penerima','$deskripsi')");
echo"<meta http-equiv=refresh content=0;url=barang_keluar.php>";
?>