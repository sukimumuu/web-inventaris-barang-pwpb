<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Barang</title>
</head>
<body>
        <form action="tambah.php" method="post">
            <table>
                <tr>
                    <td>Nama Barang</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama_barang">
                    </td>
                </tr>
                <tr>
                    <td>Stok</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="stok">
                    </td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="deskripsi">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="submit" value="submit">
                        <input type="reset" value="reset">
                    </td>
                </tr>
            </table>
        </form>    
</body>
</html>