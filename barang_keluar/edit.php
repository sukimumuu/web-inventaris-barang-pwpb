<?php
include "../koneksi.php";
$id = $_POST['id'];

$vid = $_POST['id_barang'];
$tgl = $_POST['tanggal'];
$penerima = $_POST['penerima'];
$vdeskripsi = $_POST['deskripsi'];

$edit = mysqli_query($conn, "update barang_keluar set id_barang = '$vid', tanggal = '$tgl', penerima = '$penerima', deskripsi = '$vdeskripsi' where id_keluar = '$id'");

echo"<meta http-equiv=refresh content=0;url=barang_keluar.php>";
?>