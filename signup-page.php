<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Silahkan Daftar</title>
    <!-- Style -->
    <link rel="stylesheet" href="css/login-signup/signup-page.css">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
</head>

<?php 
require 'connect2.php';
if (isset($_POST["submit"])) {

    if (register($_POST)>0){
        echo "<script>
            alert('Data berhasil disimpan!');
            document.location.href='login-page.php';
            </script>";
    } else {
        echo mysqli_error($conn);
    }
}
?> 
    
<body>
<div class="container">
        <nav>
            <img src="img/login-signup/logo-header.png" alt="K'lontongan" class="logo-picture">
            <span class="close-btn"><a href="#"><img src="img/login-signup/close.svg" alt="Back to home-page"
                        class="close"></a></span>
        </nav>
        <h3 class="title-page">Daftar</h3>
        <p class="to-login">Sudah punya akun? <a href="login-page.php" class="link-to-signup">Masuk di sini</a></p>
        <form action="" class="signup-form" method="POST">
            <div class="name-field">
                <input type="text" name="nama_depan" placeholder="Nama Depan">
                <input type="text" name="nama_belakang" placeholder="Nama Belakang">
            </div>
            <input type="email" name="email" id="email" placeholder="E-mail">
            <input type="password" name="password" placeholder="Password">
            <input type="text" name="noHp" placeholder="Nomor telepon">
            <textarea name="alamat" cols="30" rows="10" placeholder="Alamat"></textarea>
            <button type="submit" name="submit" value="Buat Akun" class="button-submit"><a>Daftar</a></button>
        </form>
        <p class="term-of-use">* Dengan mendaftar, Anda menyetujui <a href="#">Persyarat Penggunaan kami</a></p>
    </div>
</body>

</html>
