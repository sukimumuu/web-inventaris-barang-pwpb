<?php
include "../koneksi.php";

$id = $_GET['id'];

$hapus = mysqli_query($conn, "delete from barang_keluar where id_keluar = '$id'");

echo"<meta http-equiv=refresh content=0;url=barang_keluar.php>";

?>
