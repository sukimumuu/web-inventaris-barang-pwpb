<?php
include "../koneksi.php";

$id = $_GET['id'];

$hapus = mysqli_query($conn, "delete from peminjaman where id_peminjaman = '$id'");

echo"<meta http-equiv=refresh content=0;url=peminjaman.php>";

?>
