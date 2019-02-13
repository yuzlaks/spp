<?php 

    include '../koneksi/koneksi.php';

    $id = $_GET['id_kelas'];

    $query = mysqli_query($host,"DELETE FROM kelas WHERE id_kelas = '$id' ");

    if ($query){
        header('location:lihat_kelas.php?status=berhasil');
    }
?>