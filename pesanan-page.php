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
    <link rel="stylesheet" href="css/checkout/pesanan-page.css">

    <title>Checkout | Pesanan</title>
</head>

<?php 
require 'connect2.php';
session_start();
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

                <?php 
		$email =$_SESSION["user"];
		//PERBAIKI QUERY DISINI
    $query = mysqli_query($conn, "SELECT * FROM pemesanan  WHERE email='$email'");
		
		if (mysqli_num_rows($query) > 0) {
      // output data of each row
			echo "<table>";//start table
      //creating our table heading
			echo "<tr>";	
			echo "<th><u>Product</u></th>";
			echo "<th><u>Quantity</u></th>";
			echo "<th><u>Price</u></th>";
			echo "</tr>";
      
      //loop to show each records
      
			while($row = mysqli_fetch_assoc($query)) {
        
        extract($row);
				//creating new table row per record
				echo "<tr>";
				echo "<td>{$nama}</td>";
				echo "<td>{$banyak}</td>";
				echo "<td>{$totalharga}</td>";
                echo "<td><a href='delete.php?id_transaksi={$id_transaksi}'>delete</td>";
       
        // echo "<td><a href='tes.php?id={$id}'>checkout</td>";
				echo "</tr>";
			}
			echo "</table>";//end table
		}
    ?>
                    
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
