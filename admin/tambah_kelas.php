<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Siswa</title>
</head>
<body>
    
    <form action="" method="post">
        <label>Kelas</label>
        <input type="text" name="kelas">
        <input type="submit" value="simpan" name="simpan">
    </form>

</body>
</html>

<?php
    include '../koneksi/koneksi.php';
    if (isset($_POST['simpan'])) {
        $kelas = $_POST['kelas'];
        $query = mysqli_query($host,"INSERT INTO kelas(kelas) VALUES ('$kelas')");
        if ($query){
            header('location:lihat_kelas.php');
        }
    }

?>