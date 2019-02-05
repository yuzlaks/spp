<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="username">
        <input type="email" name="email">
        <input type="password" name="password">
        <input type="submit" name="submit" value="Daftar">
    </form>
</body>
</html>
<?php
    require '../db/koneksi.php';
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $email    = $_POST['email'];
        $password = $_POST['password'];
        $pass     = password_hash($password, PASSWORD_BCRYPT);
        $cek      = $host->query("SELECT * FROM users WHERE email =  '$email' ");
        if (mysqli_num_rows($cek) > 0 ) {
            ?>
                <script type="text/javascript"> alert("Email sudah ada!, gunakkan email lain"); window.location = 'register.php' </script>
            <?php
        }else{
            $submit = $host->query("INSERT INTO users VALUES('','$username','$email','$pass')");
            ?>
                <script type="text/javascript"> alert("Berhasil Daftar!"); window.location = 'login.php' </script>
            <?php
        }
    }
?>