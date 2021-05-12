<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Silahkan Daftar</title>
    <link rel="stylesheet" href="mainstyle.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
</head>

 <?php 
		require 'connect2.php';
			if (isset($_POST["login"])){
				ceklogin($_POST);
			}
?>

<body>
    <div class="container">
        <div class="kotak-hitam">
            <h3>Selamat Datang</h3>
            <form action="" class="signup-form" method="POST">
                <input type="email" name="email" id="email">
                <input type="password" name="password" id="password">
                <button  type="submit" name="login"><a href="toko.php">Masuk</button>
            </form>
        </div>
    </div>
</body>

</html>
