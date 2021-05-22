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
            <section class="header-page">
                <div class="header-logo">
                    <a href="#"><img src="img/header/logo-header.png" alt="K'lontongan"></a>
                </div>
                <nav class="nav-link">
                    <a href="beranda-page.php">Beranda</a>
                    <a href="toko-page.php">Toko</a>
                    <a href="tentangkami.php">Tentang Kami</a>
                    <a href="#"><img src="img/header/shopping-cart-hitam.svg" alt="Shopping Cart" width="20px"></a>
                </nav>
            </section>
        </header>
        <main>
            <div class="template-of-card">
                <?php foreach($sql as $row) : ?>
                                <div class="card">
                                <span class="qategory"><?= $row['deskripsi']; ?></span>
                                    <img src="<?= $row['pict']; ?>" class="products-picture">
                                    <h4 class="products-name"><?= $row['nama']; ?></h4>
                                    <p class="products-price"><?= $row['harga']; ?></p>
                                    <input type="hidden" value="<?= $row['id_barang'] ?>" name="id_barang">
                                    <a href="#" class="btn-pesan">pesan</a>
                                </div>
                            <br>
                                <?php endforeach; ?>
            </div>
        </main>
        <footer>
            <section class="footer-page">
                <div class="group-of-logo">
                    <a href="#"><img src="img/footer/instagram-hitam.svg" alt="Instagram" width="23px"></a>
                    <a href="#"><img src="img/footer/line-hitam.svg" alt="Line" width="23px"></a>
                    <a href="#"><img src="img/footer/facebook-hitam.svg" alt="Facebook" width="23px"></a>
                </div>
                <div class="group-copyright">
                    <p>Copyright by</p>
                    <img src="img/footer/logo-footer.png" alt="K'lontongan">
                </div>
            </section>
        </footer>
    </div>
</body>

</html>
