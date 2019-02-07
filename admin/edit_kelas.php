<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Siswa</title>
</head>
<body>
    
      <?php 

        include '../koneksi/koneksi.php';

        $id = $_GET['id_kelas'];

        $query = mysqli_query($host,"SELECT * FROM kelas WHERE id_kelas = '$id'");
        $tampil = mysqli_fetch_object($query);
    ?>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $tampil->id_kelas ?>">
        <label>Kelas</label>
        <input type="text" name="kelas" value="<?= $tampil->kelas ?>"><br>
        <input type="submit" value="simpan" name="simpan">
        
    </form>

</body>
</html>
<?php
    include '../koneksi/koneksi.php';
    if (isset($_POST['simpan'])) {
        $id = $_POST['id'];
        $kelas = $_POST['kelas'];
        $query = mysqli_query($host,"UPDATE kelas SET kelas ='$kelas' WHERE id_kelas = '$id' ");
        var_dump($query);
        if ($query){
            header('location:lihat_kelas.php');
        }
    }
