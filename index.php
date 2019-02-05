<?php
    require 'db/koneksi.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <style>
        ul{
            box-shadow: 1px 1px 9px #e1e1e1;
            overflow: hidden;
            position: absolute;
            width: 100%;
            margin:0;
            list-style-type: none;
            padding: 0;
            background-color:white;
        }
        li a{
            padding:9px;
            float: left;
            color:#3d3d3d;
        }
        li a:hover{
            background-color: #e1e1e1;
            color:#ffffff;
            text-decoration: none;
        }
        .header{
            background-color: ghostwhite;
            padding: 80px;
        }
        .title{
            color:#6d6d6d;
            font-family: calibri;
        }
    </style>
<ul>
    <li><a href="">Home</a></li>
    <?php
        if (empty($_SESSION['email'])) {
            ?>
            <li><a style="float:right" href="auth/login.php">Login</a></li>
            <?php
        }else{
            ?>
            <li><a style="float:right" href="auth/logout.php?logout">Logout</a></li>
            <?php
        }
    ?>
</ul>
<div class="container-fluid header">
    <div class="row">
        <div class="col-md-12">
            <br>
            <center>
                <h1 class="title">Welcome</h1>
                <p class="title">Selamat datang di website <code>Spp Online</code>, Proses membayar menjadi lebih mudah</p>
            </center>
        </div>
    </div>
</div><br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h4 align="center">Cara Pembayaran Melalui ATM</h4>
        </div>
        <div class="col-md-4">
            <b>1. ATM BCA:</b>
                <li>Silakan masukkan PIN ATM BCA</li>
                <li>Pilih Menu Lainnya</li>
                <li>Pilih Menu Pembayaran</li>
                <li>Pilih Tlp/HP</li>
                <li>Pilih Menu Telkom</li>
                <li>Masukkan <kode bayar terdaftar></li>
                <li>Akan tampil jumlah Rp yang harus dibayar dan Nama terdaftar</li>
                <li>Lakukan pembayaran</li>
                <li>Selesai</li>
                
        </div>
    </div>
</div>
</body>
</html>