<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lihat Siswa</title>
</head>
<body>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Siswa</th>
                <th>Kelas</th>
                <th>No Hp Orang tua</th>
                <th>E-mail Orang tua</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
    <?php
        include '../koneksi/koneksi.php';
        $query = mysqli_query($host,"SELECT * FROM siswa INNER JOIN kelas ON siswa.id_kelas = kelas.id_kelas");
        $no = 1;
        while ($tampil = mysqli_fetch_assoc($query)) {
    ?>
            <tr>
                <td> <?= $no++ ?> </td>
                <td> <?= $tampil['nama_siswa'] ?> </td>
                <td> <?= $tampil['kelas'] ?> </td>
                <td> <?= $tampil['no_hp'] ?> </td>
                <td> <?= $tampil['email'] ?> </td>
                <td>
                    <a href="edit_siswa.php?id_siswa=<?= $tampil['id_siswa'] ?> ">Edit</a>
                    <a href="hapus_siswa.php?id_siswa=<?= $tampil['id_siswa'] ?> ">Hapus</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>

    </table>

</body>
</html>