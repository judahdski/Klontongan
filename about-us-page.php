<?php 
    require 'connect2.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cerita tentang Toko K'lontongan</title>
    <!-- My Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <!-- My Style -->
    <link rel="stylesheet" href="css/about-us-page/header-aboutus.css">
    <link rel="stylesheet" href="css/about-us-page/main-aboutus.css">
    <link rel="stylesheet" href="css/about-us-page/footer-aboutus.css">
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
            <section class="topic">
                <h3>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate ut rerum accusantium. Veritatis
                    eum alias rem? Quo, perspiciatis hic voluptate natus voluptatibus in nemo asperiores dicta autem
                    reiciendis, error vitae tenetur eum eaque incidunt, maiores voluptatum similique perferendis nisi
                    aliquam consequuntur quis doloremque!
                </h3>
            </section>
            <section class="image">
                <img src="img/aboutUs-page/gambar-desktop.jpg" alt="Gambar Desktop" class="image-desktop">
                <img src="img/aboutUs-page/gambar-tablet.jpg" alt="Gambar Tablet" class="image-tablet">
                <img src="img/aboutUs-page/gambar-mobile.jpg" alt="Gambar Mobile" class="image-mobile">
            </section>
            <section class="content">
                <p class="text-story">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi modi quas cupiditate soluta vel
                    aperiam et! Facilis dolorem ipsum ratione aspernatur dolor illum pariatur nesciunt fuga enim
                    assumenda vitae quam fugiat quia ab, praesentium, vel atque rerum. Reiciendis, labore? Id quia nulla
                    maxime alias quod voluptate, blanditiis fugiat dolor laboriosam omnis temporibus in molestiae ipsa
                    modi explicabo est cupiditate ullam rem tempora neque accusamus.
                    <br><br>
                    Officiis aliquam odio cum illo veritatis! At minus possimus rem est placeat fugiat dolorum tenetur
                    similique a commodi nemo voluptates dolores quas soluta molestiae ipsam, sint facilis ullam. Natus
                    explicabo debitis perferendis quaerat tenetur totam esse, maiores sed obcaecati qui repellat facere
                    neque odio quos
                    possimus optio voluptatem, eveniet veritatis error ipsam illo. Maiores nisi ab modi fugit amet!
                    <br><br>
                    Praesentium dolores fuga atque asperiores hic iusto quo corporis
                    velit voluptatum voluptate porro, earum ab facilis soluta impedit nisi odit incidunt dignissimos,
                    iste illum maiores, nostrum eaque nobis quaerat! Illum, nihil, cumque numquam nulla eos ipsa
                    voluptatum debitis tempora dignissimos optio, deleniti aut
                    suscipit architecto ullam eaque? Ullam hic suscipit id alias ipsum doloribus, quae sequi cupiditate.
                </p>
            </section>
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
    </div>

    <script src="js/script.js"></script>
</body>

</html>
