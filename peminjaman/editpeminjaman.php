<?php
include "../koneksi.php";

$id = $_GET['id'];
$edit = mysqli_query($conn, "select * from peminjaman where id_peminjaman = '$id'");
$data = mysqli_fetch_array($edit);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Peminjaman</title>
</head>
<body>
        <form action="edit.php" method="post">
            <table>
                <tr>
                    <td>Id Barang</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="id_barang" value="<?php echo $data['id_barang'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Peminjaman</td>
                    <td>:</td>
                    <td>
                        <input type="date" name="tanggal_peminjaman" value="<?php echo $data['tanggal_peminjaman'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Kembali</td>
                    <td>:</td>
                    <td>
                        <input type="date" name="tanggal_kembali" value="<?php echo $data['tanggal_kembali'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="keterangan" value="<?php echo $data['keterangan'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Peminjam</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="peminjam" value="<?php echo $data['peminjam'] ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $data['id_peminjaman'] ?>">
                        <input type="submit" value="edit">
                    </td>
                </tr>
            </table>
        </form>    
</body>
</html>

