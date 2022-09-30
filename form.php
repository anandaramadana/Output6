<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Output Pertemuan Ke 6</title>
    </head>
    <body>
        <h1>TABEL MAHASISWA</h1>
        <form action="action.php" method="POST">
        <table>
            <tr>
                <td>ID Mahasiswa :</td>
                <td><input type="text" name="id_mhs" placeholder="Masukkan ID"></td>
            </tr>
            <tr>
                <td>ID Prodi :</td>
                <td><input type="text" name="id_prodi" placeholder="Masukkan ID"></td>
            </tr>
            <tr>
                <td>Nama Mahasiswa :</td>
                <td><input type="text" name="nama_mhs" placeholder="Masukkan Nama"></td>
            </tr>
            <tr>
                <td>Alamat :</td>
                <td><input type="text" name="alamat_mhs" placeholder="Masukkan Alamat"></td>
            </tr>
        </table>

        <button type="submit" name="proses">Kirim</button>
    </body>
</html>
