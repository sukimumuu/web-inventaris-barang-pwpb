<?php
include "../koneksi.php";
$id = $_POST['id'];

$tglpinjam = $_POST['tanggal_peminjaman'];
$tglkembali = $_POST['tanggal_kembali'];
$ket = $_POST['keterangan'];
$peminjam = $_POST['peminjam'];

$edit = mysqli_query($db, "update peminjaman set tanggal_peminjaman = '$tglpinjam', tanggal_kembali = '$tglkembali', keterangan = '$ket', peminjam = '$peminjam' where id_peminjaman = '$id'");

echo"<meta http-equiv=refresh content=0;url=peminjaman.php>";
?>