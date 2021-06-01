<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <!-- My Style -->
    <link rel="stylesheet" href="css/checkout/pesanan/header-pesananpage.css">
    <link rel="stylesheet" href="css/checkout/pesanan/footer-pesananpage.css">
    <link rel="stylesheet" href="css/checkout/pesanan/main-pesananpage.css">

    <title>Checkout | Pesanan</title>
</head>

<?php 
if (isset($_POST["submit"])) {

	if(order($_POST)>0) {
		echo "<script>
			alert('Pesanan anda sudah disimpan');
			document.location.href='pengiriman.php';
			</script>";
	} else {
		echo mysqli_error($conn);
	}
}
?>

<body>
    <div class="container">
        <nav>
            <a href="#" class="back-btn"><img src="../img/checkout-page/left-arrow.svg" alt="Back to homepage"
                    class="back"></a>
            <h2 class="title-page">Pesanan</h2>
        </nav>
        <main>
            <div class="container-products">


                <!-- Edit kodenya mulai dari bawah sini ajaa yang di atas gaperlu diapa-apain lagi yaa -->


                <!-- Ini buat kotak/box buat setiap item/barangnya-->
                <span class="box-products">

                    <!-- Ini buat yang gambar dari produknyaaa -->
                    <img src="../img/checkout-page/buncis.jpg" alt="Sayuran" class="product-image">

                    <!-- Tulisan di sebelah gambar barang -->
                    <div class="product-desc">
                    <?php 
                        require 'connect2.php';
                        $email =$_SESSION['user'];

                        //PERBAIKI QUERY DISINI
                        $query = mysqli_query($conn, "SELECT `nama`, `jumlah`, `totalharga`,`id_transaksi` FROM transaksi  WHERE email='$email'");
                    ?>
                        <!-- Ini buat yang nama barang yeee -->
                        <p class="product-name">Bawang Merah</p>

                        <!-- Ini buat yang jumlah dari barangnya -->
                        <p class="amount-of-product">2kg</p>

                        <!-- Ini buat yang harga barangnya -->
                        <p class="product-price">Rp0</p>
                    </div>

                    <!-- Dan yang ini buat tanda tempat sampah buat hapus barang -->
                    <a href="#" class="delete-items"><img src="../img/checkout-page/trash.svg" alt="Buang Barang"
                            class="trash"></a>
                </span>
            </div>
        </main>
        <aside>

            <!-- dan yang ini buat tombol beli yang ada di paling bawahhh -->
            <a href="#" class="btn-buy">Beli</a>
        </aside>
    </div>
</body>

</html>