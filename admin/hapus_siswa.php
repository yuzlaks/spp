<?php 

    include '../koneksi/koneksi.php';

    $id = $_GET['id_siswa'];

    $query = mysqli_query($host,"DELETE FROM siswa WHERE id_siswa = '$id' ");

    if ($query){
        header('location:lihat_siswa.php');
    }
?>