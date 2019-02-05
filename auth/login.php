<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="email" name="email">
        <input type="password" name="password">
        <input type="submit" name="submit" value="masuk">
    </form>
</body>
</html>
<?php
    require '../db/koneksi.php';
    session_start();
    if (isset($_POST['submit'])) {
        $email    = $_POST['email'];
        $password = $_POST['password'];
        $sql = $host->query("SELECT * FROM users WHERE email = '$email' ");
        if (mysqli_num_rows($sql) > 0 ) {
            $data = mysqli_fetch_assoc($sql);
            if (password_verify($password, $data['password'])) {
                $_SESSION['email'] = $email;
                ?>
                    <script type="text/javascript"> alert("Selamat datang!"); window.location = '../index.php' </script>
                <?php
            }
        }
    }
?>