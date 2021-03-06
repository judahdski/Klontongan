<?php 
    require 'connect2.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Require META tag -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <!-- Style -->
    <link rel="stylesheet" href="css/beranda-page/header-berandapage.css">
    <link rel="stylesheet" href="css/beranda-page/main-berandapage.css">
    <link rel="stylesheet" href="css/beranda-page/footer-berandapage.css">

    <title>Selamat Datang di K'lontongan</title>
</head>

<body>
    <div class="container">
        <header>
            <img src="img/header/logo-header.png" alt="K'lontongan" class="logo-header">
            <nav class="nav-link">
                <a href="beranda-page.php" class="nav-items">Beranda</a>
                <a href="toko-page.php" class="nav-items">Toko</a>
                <a href="about-us-page.php" class="nav-items">Tentang kami</a>
                <div class="profile">
                    <img src="img/header/account.png" alt="user" class="picture-user">
                    <div class="profile-desktop" id="profile-dropdown">
                        <a href="../html/profile-page.html">Pengaturan Profile</a>
                        <a href="#">Logout</a>
                    </div>
                </div>
            </nav>
            <div class="nav-mobile">
                <div class="hamburger">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>
                <ul class="nav-link-mobile" id="nav-mobile-non-active">
                    <li class="nav-items-mobile"><a href="beranda-page.php">Beranda</a></li>
                    <li class="nav-items-mobile"><a href="toko-page.php">Toko</a></li>
                    <li class="nav-items-mobile"><a href="about-us-page.php">Tentang kami</a></li>
                    <li class="nav-items-mobile"><a href="html/profile-page.html">Pengaturan Akun</a></li>
                    <li class="nav-items-mobile"><a href="logout.php" class="logout-btn">Logout</a></li>
                </ul>
            </div>
        </header>
        <main>
            <section class="hero-content">
                <h1 class="title-hero-content">ayo periksa kebutuhan panganmu sekarang</h1>
                <p class="caption-hero-content">Kami menyediakan berbagai macam sayur, buah, dan bahan sembako. Coba
                    cek di sini!</p>
                <a href="toko-page.php" class="hero-content-btn">Kunjungi Toko</a>
            </section>
            <section class="aboutus">
                <h2 class="title-aboutus">Tentang Kami</h2>
                <img src="img/beranda-page/pasar-tablet.jpg" alt="gambar-mobile" class="image-aboutus-mobile">
                <img src="img/beranda-page/pasar-tablet.jpg" alt="gambar-tablet" class="image-aboutus-tablet">
                <img src="img/beranda-page/pasar-desktop.jpg" alt="gambar-desktop" class="image-aboutus-desktop">
                <p class="text-aboutus">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad ullam est ex
                    omnis? Id, consectetur deleniti eveniet ipsa asperiores commodi laboriosam et soluta, assumenda
                    maiores quasi repellat ratione, ex sequi adipisci aperiam minima? Ea et blanditiis tenetur porro
                    illum consequatur. Dignissimos quaeratb suscipit deserunt corporis!</p>
            </section>
            <section class="advantages">
                <h2 class="title-advantages">#pakeKlontonganAja</h2>
                <span class="card">
                    <img src="img/beranda-page/harvest.png" alt="gambar-paling-kiri" class="image-card">
                    <h4 class="topic-card">Fresh Food</h4>
                    <p class="caption-card">Kami hanya menyediakan barang yang berkualitas tinggi</p>
                </span>
                <span class="card">
                    <img src="img/beranda-page/best-price.png" alt="gambar-tengah" class="image-card">
                    <h4 class="topic-card">Best Offer</h4>
                    <p class="caption-card">Kami menyediakan barang dengan harga yang sangat terjangkau</p>
                </span>
                <span class="card">
                    <img src="img/beranda-page/food-delivery.png" alt="gambar-paling-kanan" class="image-card">
                    <h4 class="topic-card">Fast Delivery</h4>
                    <p class="caption-card">Barang akan sampai ke tempat tujuan hanya dalam waktu kurang dari 10
                        menit.</p>
                </span>
            </section>
            <section class="toko">
                <h2 class="title-toko">Hanya Menyediakan Barang dengan Kualitas #1</h2>
                <p class="caption-toko">Fakta, bahwa kami mendapatkan barang dari supplier terbaik</p>
                <div class="group-image">
                    <img src="img/beranda-page/kentang.jpg" alt="gambar-satu" class="image-toko-desktop">
                    <img src="img/beranda-page/jeruk.jpg" alt="gambar-dua" class="image-toko-tablet">
                    <img src="img/beranda-page/ayam.jpg" alt="gambar-tiga" class="image-toko-mobile">
                </div>
                <a href="toko-page.php" class="toko-btn">Belanja di Sini</a>
            </section>
            <section class="comments">
                <h2 class="title-comments">apa yang mereka katakan</h2>
                <div class="card-comment">
                    <img src="img/beranda-page/christopher-campbell-rDEOVtE7vOs-unsplash.jpg" alt="gambar-contoh"
                        class="picture-user">
                    <p class="comment-user"><em>"Gaperlu ke pasar ato warung lagi. Tinggal klik aja."</em></p>
                </div>
                <div class="card-comment">
                    <img src="img/beranda-page/joseph-pearson-827XUhVSp8M-unsplash.jpg" alt="gambar-contoh"
                        class="picture-user">
                    <p class="comment-user"><em>"Websitenya baguss dan ngebantu bangettt!!!"</em></p>
                </div>
            </section>
            <section class="to-login">
                <span class="black-mask"></span>
                <h3 class="title-to-login">selamat datang</h3>
                <p class="caption-to-login">klik dan masuk dengan alamat emailmu untuk mendapatkan penawaran yang
                    terbaik</p>
                <a href="login-page.php" class="btn-to-login">Masuk</a>
            </section>
        </main>
        <footer>
            <div class="social-media">
                <a href="https://www.instagram.com/klontongan.id/" target="_blank"><img src="img/footer/instagram-warna.svg"
                        alt="Instagram"></a>
                <a href="#"><img src="img/footer/line-warna.svg" alt="Line"></a>
                <a href="#"><img src="img/footer/facebook-warna.svg" alt="Facebook"></a>
            </div>
            <span class="copyright">
                <p> Copyright by &nbsp;</p><a href="#"> <img src="img/footer/logo-footer.png" alt="K'lontongan"
                        class="logo-footer"></a>
            </span>
        </footer>
    </div>

    <script src="js/script.js"></script>
</body>

</html>
