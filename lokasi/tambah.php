<?php
include "../koneksi.php";

$namalokasi = $_POST['nama_lokasi'];
$deskripsi = $_POST['deskripsi'];


$data = mysqli_query($conn, "insert into lokasi values('','$namalokasi','$deskripsi','')");
echo"<meta http-equiv=refresh content=0;url=lokasi.php>";
?>