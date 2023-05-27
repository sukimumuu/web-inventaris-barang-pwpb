<?php
include "../koneksi.php";

$id = $_GET['id'];

$hapus = mysqli_query($conn, "delete from lokasi where id_lokasi = '$id'");

echo"<meta http-equiv=refresh content=0;url=lokasi.php>";

?>
