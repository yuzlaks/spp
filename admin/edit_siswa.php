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

        $id = $_GET['id_siswa'];

        $query = mysqli_query($host,"SELECT * FROM siswa WHERE id_siswa = '$id'");
        $tampil = mysqli_fetch_object($query);
    ?>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $tampil->id_siswa ?>">
        <label>Nama Siswa</label>
        <input type="text" name="nama_siswa" value="<?= $tampil->nama_siswa ?>"><br>
        <label>Kelas</label>
        <select name="kelas">
            <option value="<?= $tampil->kelas ?>"><?= $tampil->kelas ?></option>
            <option value="X">X</option>
        </select><br>
        <label>Nomer Hp</label>
        <input type="text" name="nohp" maxlength="12" value="<?= $tampil->no_hp ?>">
        <label>E-mail</label>
        <input type="email" name="email" value="<?= $tampil->email ?>">
        <input type="submit" value="simpan" name="simpan">
        
    </form>

</body>
</html>
<?php
    include '../koneksi/koneksi.php';
    if (isset($_POST['simpan'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama_siswa'];
        $kelas = $_POST['kelas'];
        $no = $_POST['nohp'];
        $email = $_POST['email'];
        
        $query = mysqli_query($host,"UPDATE siswa SET nama_siswa='$nama', kelas='$kelas',no_hp = '$no',email='$email' WHERE id_siswa = '$id' ");
        var_dump($query);
        if ($query){
            header('location:lihat_siswa.php');
        }
    }
