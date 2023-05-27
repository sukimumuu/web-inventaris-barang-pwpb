<?php
include "../koneksi.php";

$id = $_GET['id'];
$edit = mysqli_query($conn, "select * from lokasi where id_lokasi = '$id'");
$data = mysqli_fetch_array($edit);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Lokasi</title>
</head>
<body>
        <form action="edit.php" method="post">
            <table>
                <tr>
                    <td>Nama Lokasi</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama_lokasi" value="<?php echo $data['nama_lokasi'] ?>">
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
                        <input type="hidden" name="id" value="<?php echo $data['id_lokasi'] ?>">
                        <input type="submit" value="edit">
                    </td>
                </tr>
            </table>
        </form>    
</body>
</html>

