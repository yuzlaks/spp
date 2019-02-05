<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lihat kelas</title>
</head>
<body>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
    <?php
        include '../koneksi/koneksi.php';
        $query = mysqli_query($host,"SELECT * FROM kelas");
        $no = 1;
        while ($tampil = mysqli_fetch_assoc($query)) {
    ?>
            <tr>
                <td> <?= $no++ ?> </td>
                <td> <?= $tampil['kelas'] ?> </td>
                <td>
                    <a href="edit_kelas.php?id_kelas=<?= $tampil['id_kelas'] ?> ">Edit</a>
                    <a href="hapus_kelas.php?id_kelas=<?= $tampil['id_kelas'] ?> ">Hapus</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>

    </table>

</body>
</html>