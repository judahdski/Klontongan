<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko K'lontongan</title>
    <!-- Style -->
    <link rel="stylesheet" href="css/toko-page/header-tokopage.css">
    <link rel="stylesheet" href="css/toko-page/mainstyle-tokopage.css">
    <link rel="stylesheet" href="css/toko-page/footer-tokopage.css">
</head>

<?php 
require 'connect2.php';
session_start();
$sql=mysqli_query($conn, "SELECT * FROM barang");
if (isset($_POST["submit"])) {
  $sqljenis=mysqli_query($conn, "SELECT nama,harga,deskripsi FROM barang WHERE id_barang='$id_barang' LIMIT 1");
  $resultjenis=mysqli_fetch_array($sqljenis);
  $nama=$resultjenis['nama'];
}
?>

<body>
    <div class="container">
        <header>
            <img src="img/header/logo-header.png" alt="K'lontongan" class="logo-header">
            <nav class="nav-link">
                <a href="beranda-page.html" class="nav-items">Beranda</a>
                <a href="toko-page.html" class="nav-items">Toko</a>
                <a href="about-us-page.html" class="nav-items">Tentang kami</a>
                <a href="#" class="profile-user"><img src=".." alt="" class="picture-user"></a>
            </nav>
            <div class="nav-mobile">
                <div class="hamburger">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>
                <ul class="nav-link-mobile" id="">
                    <li class="nav-items-mobile"><a href="beranda-page.html">Beranda</a></li>
                    <li class="nav-items-mobile"><a href="toko-page.html">Toko</a></li>
                    <li class="nav-items-mobile"><a href="about-us-page.html">Tentang kami</a></li>
                </ul>
            </div>
        </header>
        <main>
            <div class="template-of-card">
                <?php foreach($sql as $row) : ?>
                                <div class="card">
                                    <div class="image-products">
                                        <span class="category"><?= $row['deskripsi']; ?></span>
                                        <img src="<?= $row['pict']; ?>" class="products-picture">
                                    </div>
                                    <div class="description-products">
                                        <h4 class="products-name"><?= $row['nama']; ?></h4>
                                        <p class="products-price"><?= $row['harga']; ?></p>
                                        <input type="hidden" value="<?= $row['id_barang'] ?>" name="id_barang">
                                        <a href="#" class="btn-pesan">pesan</a>
                                    </div>
                                </div>
                            <br>
                                <?php endforeach; ?>
            </div>
        </main>
        <footer>
            <div class="social-media">
                <a href="#"><img src="img/footer/instagram-hitam.svg" alt="Instagram"></a>
                <a href="#"><img src="img/footer/line-hitam.svg" alt="Line"></a>
                <a href="#"><img src="img/footer/facebook-hitam.svg" alt="Facebook"></a>
            </div>
            <span class="copyright">
                <p> Copyright by &nbsp;</p><a href="#"> <img src="img/footer/logo-footer.png" alt="K'lontongan"
                        class="logo-footer"></a>
            </span>
        </footer>

        <script src="js/header.js"></script>
    </div>
</body>

</html>
