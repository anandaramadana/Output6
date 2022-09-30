<?php
    include "connect.php";
    
    if(isset($_POST['proses'])) {
        mysqli_query($koneksi, "insert into tbl_mhs set 
        id_mhs = '$_POST[id_mhs]',
        id_prodi = '$_POST[id_prodi]',
        nama_mhs = '$_POST[nama_mhs]',
        alamat_mhs = '$_POST[alamat_mhs]'");

        echo "Berhasil Menambah Data";
    }
?>