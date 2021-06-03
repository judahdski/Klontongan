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
            <section class="header-page">
                <div class="header-logo">
                    <a href="#"><img src="img/header/logo-header.png" alt="K'lontongan"></a>
                </div>
                <nav class="nav-link">
                    <a href="beranda-page.php">Beranda</a>
                    <a href="toko-page.php">Toko</a>
                    <a href="tentangkami.php">Tentang Kami</a>
                    <a href="#" class="shopping-cart"><img src="img/header/shopping-cart-warna.svg"
                            alt="Shopping Cart"></a>
                            <a href="logout.php">Logout</a>
                </nav>
            </section>
        </header>
        <main>
            <section class="main-page">
                <!-- hero-content -->
                <section class="hero-content">
                    <div class="inside-hero-content">
                        <div class="content-hero-content">
                            <h1>Ayo Periksa Kebutuhan Panganmu Sekarang</h1>
                            <p>Kami menyediakan berbagai macam sayur, buah dan bahan sembako.</p>
                            <p>Coba cek di sini!</p>
                            <a href="toko-page.php" class="btn-hero-content">Kunjungi Toko</a>
                        </div>
                        <div class="bkground-hero-content">
                            <div class="black-filter"></div>
                        </div>
                    </div>
                </section>
                <section class="aboutus">
                    <div class="inside-aboutus">
                        <div class="row title-section-aboutus">
                            <div class="col-d-12">
                                <h3>Tentang Kami</h3>
                            </div>
                        </div>
                        <div class="row content-section-aboutus">
                            <div class="col-d-5"><img src="img/beranda-page/foto-pasar.jpg" alt="Pasar"></div>
                            <div class="col-d-5">
                                <p>K'lontongan dikenal dengan nama "Toko Rian". Rian sendiri adalah anak pertama dari pendiri warung ini.
                                    Awal mula K'lontongan ini berdiri yaitu tahun 1998. Pada tahun itu, warung Rian masih sangat sederhana sekali. 
                                    Hingga pendiri warung ini memenuhi apa yang pembeli butuhkan akhirnya warung bisa sebesar sekarang. 
                                    Warung Rian ini berada didaerah Tipar Cakung, Jakarta Timur. Setalah lama mengalami jatuh bangun, pada tahun 2020
                                    akhirnya membuka cabang ke-2 didaerah Babelan, Kab. Bekasi, Perumahan Wahana Pondok Ungu. Asal mula dibuatnya Website K'lontongan 
                                    yaitu karena masa pandemi yang membuat pendapatan warung turun. Alasan dibuat Website ini salah satunya untuk mempermudah semua orang
                                    memenuhi kebutuhannya tanpa keluar rumah. </p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="advantages">
                    <div class="inside-advantages">
                        <div class="title-section-advantages">
                            <h3>#pakeKlontonganAja</h3>
                        </div>
                        <div class="content-advantages">
                            <div class="box one">
                                <img src="img/beranda-page/harvest.png" alt="Fresh food" width="71px">
                                <p>Fresh food</p>
                                <p>Kami hanya menyediakan barang yang berkualitas tinggi</p>
                            </div>
                            <div class="box two">
                                <img src="img/beranda-page/best-price.png" alt="Best offer" width="70px">
                                <p>Best offer</p>
                                <p>Kami hanya menyediakan barang dengan harga yang terjangkau</p>
                            </div>
                            <div class="box three">
                                <img src="img/beranda-page/food-delivery.png" alt="Fast delivery" width="65px">
                                <p>Fast delivery</p>
                                <p>Barang akan sampai ke tempat tujuan hanya dalam waktu 10 menit</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="toko">
                    <div class="inside-toko">
                        <div class="title-section-toko row">
                            <h3>Hanya Menyediakan Barang dengan Kualitas #1</h3>
                        </div>
                        <div class="row">
                            <p>Fakta, bahwa kami mendapatkan barang dari suplier terbaik.</p>
                        </div>
                        <div class="row group-of-images">
                            <img src="img/beranda-page/kentang.jpg" alt="Kentang">
                            <img src="img/beranda-page/jeruk.jpg" alt="Jeruk">
                            <img src="img/beranda-page/ayam.jpg" alt="Ayam">
                        </div>
                        <div class="row">
                            <a href="#">Belanja di sini</a>
                        </div>
                    </div>
                </section>
                <section class="comments">
                    <div class="inside-comments">
                        <div class="row title-section-comments">
                            <h4>apa yang mereka katakan</h4>
                        </div>
                        <div class="row content-comments">
                            <div class="col-d-5 comment-content">
                                <span class="image-person">
                                    <img src="img/beranda-page/..." alt="...">
                                </span>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum reprehenderit
                                    recusandae
                                    exercitationem dolorum asperiores libero est repellendus? Modi at debitis
                                    temporibus,
                                    quos
                                    maxime saepe deleniti velit, non architecto vero omnis incidunt veniam. Corporis,
                                    neque
                                    commodi!</p>
                            </div>
                            <div class="col-d-5 comment-content">
                                <span class="image-person"><img src="img/beranda-page/..." alt="..."></span>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia perferendis vitae ipsam
                                    atque
                                    facere, quis illo animi incidunt, omnis sint nesciunt exercitationem eaque quas
                                    consectetur
                                    temporibus enim sapiente eius. Quisquam beatae porro fugit autem unde.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="login-main">
                    <div class="inside-login-main">
                        <div class="content-login-main">
                            <h3>Selamat Datang</h3>
                            <p>Silahkan masuk dan dapatkan penawaran yang lebih menarik</p>
                            <a href="#" class="btn-login-main">Masuk</a>
                        </div>
                        <div class="bkground-login-main">
                            <div class="black-filter"></div>
                        </div>
                    </div>
                </section>
            </section>
        </main>
        <footer>
            <section class="footer-page">
                <div class="group-of-logo">
                <a href="#"><img src="img/footer/instagram-hitam.svg" alt="Instagram" width="25px"></a>
                    <a href="#"><img src="img/footer/line-hitam.svg" alt="Line" width="25px"></a>
                    <a href="#"><img src="img/footer/facebook-hitam.svg" alt="Facebook" width="25px"></a>
                </div>
                <div class="group-copyright">
                    <p>Copyright by </p>
                    <img src="img/footer/logo-footer.png" alt="K'lontongan">
                </div>
            </section>
        </footer>
    </div>
</body>

</html>
