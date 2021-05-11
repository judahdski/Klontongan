<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Silahkan Daftar</title>
    <link rel="stylesheet" href="css/mainstyle.css">
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
            document.location.href='index.php';
            </script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>    
    
<body>
    <div class="container">
        <div class="kotak-hitam">
            <h3>Buat Akun</h3>
            <form action="" class="signup-form" method="POST">
                <div class="bagi-dua">
                    <input type="text" name="firstname" id="firstname" class="nama">
                    <input type="text" name="lastname" id="lastname" class="nama">
                </div>
                <input type="email" name="email" id="email">
                <input type="password" name="password" id="password">
                <input type="password" name="retypepass" id="retypepass">
                <input type="submit" value="Buat Akun" class="button-submit">
            </form>
        </div>
    </div>
</body>

</html>
