<?php
    require 'db/koneksi.php';
    session_start();
    if (empty($_SESSION['email'])) {
        header('location:auth/login.php');
    }else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    hai <a href="auth/logout.php?logout">Logout</a>
</body>
</html>
<?php
    }
?>