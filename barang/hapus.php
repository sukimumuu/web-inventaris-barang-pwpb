<?php
include "../koneksi.php";

$id = $_GET['id'];

$hapus = mysqli_query($conn, "delete from barang where id_barang = '$id'");

echo"<meta http-equiv=refresh content=0;url=barang.php>";

?>
