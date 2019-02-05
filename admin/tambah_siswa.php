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
        <label>Nama Siswa</label>
        <input type="text" name="nama_siswa"><br>
        <label>Kelas</label>
        <select name="kelas">
            <option value="X">X</option>
        </select><br>
        <label>Nomer Hp</label>
        <input type="text" name="nohp" maxlength="12">
        <label>E-mail</label>
        <input type="email" name="email">
        <input type="submit" value="simpan" name="simpan">
        
    </form>

</body>
</html>

<?php
    include '../koneksi/koneksi.php';
    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama_siswa'];
        $kelas = $_POST['kelas'];
        $no = $_POST['nohp'];
        $email = $_POST['email'];
        
        $query = mysqli_query($host,"INSERT INTO siswa(nama_siswa,kelas,no_hp,email) VALUES ('$nama','$kelas','$no','$email')");
        if ($query){
            header('location:lihat_siswa.php');
        }
    }

?>