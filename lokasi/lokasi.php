<?php
 include "../koneksi.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Inventaris Barang</title>
</head>
<body>
    <h3>Table Lokasi</h3>
    <a href="../index.php">Dashboard</a>

    <a href="tambahlokasi.php">Tambah</a>
    <table border="1">
        <thead>
            <th>No</th>
            <th>Nama Lokasi</th>
            <th>Deskripsi</th>
            <th>Id Barang</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php
                $barang = mysqli_query($conn, "select * from lokasi");
                $no =1;
                while($data=mysqli_fetch_array($barang)){
                    echo("
                       <tr>
                        <td>$no </td>
                
                        <td>$data[nama_lokasi]</td>
                        <td>$data[deskripsi]</td>
                        <td>$data[id_barang]</td>
                        <td>
                        <a href='editlokasi.php?id=$data[id_lokasi]'> Edit </a> | <a href='hapus.php?id=$data[id_lokasi]'> Hapus </a>
                        </td>
                       </tr>
                    ");
                    $no++;
                }
            ?>
        </tbody>
    </table>
</body>
</html>