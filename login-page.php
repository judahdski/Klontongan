<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Silahkan Daftar</title>
    <!-- Style -->
    <link rel="stylesheet" href="css/login-signup/loginpage-style.css">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
</head>

<?php 
		require 'connect2.php';
        session_start();
			if (isset($_POST["login"])){
				ceklogin($_POST);
			}
?>

<body>
<div class="container">
        <nav>
            <img src="img/login-signup/logo-header.png" alt="Logo Klontongan" class="logo-picture">
            <a href="#"><img src="img/login-signup/close.svg" alt="back to home" class="btn-exit"></a>
        </nav>
        <h3 class="title-page">Masuk</h3>
        <p class="to-signup">Belum punya akun? <a href="signup-page.php" class="link-to-signup">Daftar di sini</a></p>
        <form action="" class="signup-form" method="POST">
            <input type="email" name="email" placeholder="E-mail">
            <input type="password" name="password" placeholder="Password">
            <button type="submit" name="login" class="btn-login"><p>Masuk</p></button>
        </form>
    </div>
</body>

</html>
