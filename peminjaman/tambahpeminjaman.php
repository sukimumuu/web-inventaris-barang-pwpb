<!DOCTYPE html>
</title>
</head
<body>
        <form action="tambah.php" method="post">
            <table>
                <tr>
                    <td>Tanggal Peminjaman</td>
                    <td>:</td>
                    <td>
                        <input type="date" name="tanggal_peminjaman">
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Kembali</td>
                    <td>:</td>
                    <td>
                        <input type="date" name="tanggal_kembali">
                    </td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="keterangan">
                    </td>
                </tr>
                <tr>
                    <td>Peminjam</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="peminjam">
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