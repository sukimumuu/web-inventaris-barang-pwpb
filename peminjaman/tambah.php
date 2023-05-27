<?php
include "../koneksi.php";

$tglpinjam = $_POST['tanggal_peminjaman'];
$tglkembali = $_POST['tanggal_kembali'];
$ket = $_POST['keterangan'];
$peminjam = $_POST['peminjam'];


$data = mysqli_query($conn, "insert into peminjaman values('','','$tglpinjam','$tglkembali','$ket','$peminjam')");
echo"<meta http-equiv=refresh content=0;url=peminjaman.php>";
?>