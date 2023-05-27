<?php
include "../koneksi.php";

$id = $_GET['id'];
$edit = mysqli_query($conn, "select * from barang_keluar where id_keluar = '$id'");
$data = mysqli_fetch_array($edit);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Barang Keluar</title>
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
                    <td>Tanggal</td>
                    <td>:</td>
                    <td>
                        <input type="date" name="tanggal" value="<?php echo $data['tanggal'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Penerima</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="penerima" value="<?php echo $data['penerima'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="deskripsi" value="<?php echo $data['deskripsi'] ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $data['id_keluar'] ?>">
                        <input type="submit" value="edit">
                    </td>
                </tr>
            </table>
        </form>    
</body>
</html>

