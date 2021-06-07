<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko K'lontongan</title>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- Style -->
    <link rel="stylesheet" href="css/toko-page/header-tokopage.css">
    <link rel="stylesheet" href="css/toko-page/mainstyle-tokopage.css">
    <link rel="stylesheet" href="css/toko-page/footer-tokopage.css">
</head>

<?php 
require 'connect2.php';
session_start();
$email=$_SESSION['user'];
$sql=mysqli_query($conn, "SELECT * FROM barang");
if (isset($_POST["submit"])) {
    $id_barang=$_POST['id_barang'];
    $banyak=$_POST['banyak'];
    $status = "Belum Terbayar";
    $sqljenis=mysqli_query($conn, "SELECT nama,harga,deskripsi FROM barang WHERE id_barang='$id_barang' LIMIT 1");
    $resultjenis=mysqli_fetch_array($sqljenis);
    $nama=$resultjenis['nama'];
    if($banyak<1){
        echo "<script>
        alert('Pesan dengan minimal 1 item');
        document.location.href='toko-page.php';
        </script>";
    } else {
      $totalharga=($banyak * $resultjenis['harga']);
        $sqlquery=mysqli_query($conn, "INSERT INTO pemesanan (totalharga, banyak, email, nama, status) VALUES ('$totalharga', '$banyak', '$email', '$nama', '$status') ");
    }
    if($sqlquery){
        echo "<script>
                alert('Pesanan anda sudah disimpan');
                document.location.href='pesanan-page.php';
                </script>";
    }else{
        echo mysqli_error($conn);
    }
    }
    ?>

<body>
    <div class="container">
        <header>
            <img src="../img/header/logo-header.png" alt="K'lontongan" class="logo-header">
            <nav class="nav-link">
                <a href="beranda-page.php" class="nav-items">Beranda</a>
                <a href="toko-page.php" class="nav-items">Toko</a>
                <a href="tentangkami.php" class="nav-items">Tentang kami</a>
                <a href="#" class="profile-user"><img src=".." alt="" class="picture-user"></a>
                <a href="logout.php">Logout</a>
            </nav>
            <div class="nav-mobile">
                <div class="hamburger">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>
                <ul class="nav-link-mobile">
                    <li class="nav-items-mobile" href="#">Beranda</li>
                    <li class="nav-items-mobile" href="#">Toko</li>
                    <li class="nav-items-mobile" href="#">Tentang kami</li>
                </ul>
            </div>
        </header>
        <main>
            <div class="template-of-card">
            <?php foreach($sql as $row) : ?>
                <div class="card">
                    <div class="image-products">
                    <span class="qategory"><?= $row['deskripsi']; ?></span>
                    <img src="<?= $row['pict']; ?>" class="products-picture">
                    </div>
                    <div class="description-products">
                        <form action="" method="POST">
                        <h4 class="products-name"><?= $row['nama']; ?></h4>
                        <div class="hargadanjumlah">
                            <p class="products-price">Rp<?= $row['harga']; ?></p>
                            <input type="number" id="quantity" name="banyak" min="1" max="5"  value="1">
                        </div>
                        <input type="hidden" value="<?= $row['id_barang'] ?>" name="id_barang">
                        <button type="submit" name="submit" class="btn-pesan">Pesan</button>
                        </form>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </main>
        <footer>
            <div class="social-media">
                    <a href="#"><img src="img/footer/instagram-hitam.svg" alt="Instagram" width="25px"></a>
                    <a href="#"><img src="img/footer/line-hitam.svg" alt="Line" width="25px"></a>
                    <a href="#"><img src="img/footer/facebook-hitam.svg" alt="Facebook" width="25px"></a>
                </div>
                <span class="copyright">
                    <p> Copyright by &nbsp;</p><a href="#"> 
                    <img src="img/footer/logo-footer.png" alt="K'lontongan">
                </span>
            </div>
        </footer>
    </div>
</body>

</html>
