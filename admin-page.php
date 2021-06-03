<?php 
	session_start();
	if (isset($_COOKIE["login"])){

				if ($_COOKIE["login"]=="true"){
					$_SESSION["login"] = true;
				}
			}

	if (!isset($_SESSION["login"])) {

		echo "<script>alert('Ilegal akses!');
		document.location.href='login-page.php';</script>";
		die;
	}
	?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- My CSSS -->
    <link rel="stylesheet" href="css/admin-page/style-admin.css">
    <title>Hello, world!</title>
</head>

<body>
    <nav class="navbar navbar-light nav-klontongan">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/header/logo-header.png" alt="Klontongan" width="150">
            </a>
            <a class="btn btn-primary" href="logout.php" role="button" 
	onclick="return confirm('yakin akan logout ?')">Logout</a>
        </div>
    </nav>

    <section class="data-admin container">
        <h1>Halo, Admin </h1>
        <p>Wellcome to admin page!!</p>
        <div class="dropdown">
            <a class="btn btn-warning dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                data-bs-toggle="dropdown" aria-expanded="false">
                Kamu mo ngapain sih?
            </a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="#tambah-barang">Tambah Barang dong</a></li>
                <li><a class="dropdown-item" href="#lihat-data-pembeli">Lihat Data Pembeli doang kok</a></li>
            </ul>
        </div>
    </section>

    <div class="row justify-content-center mb-5 tambah-barang">
        <section id="tambah-barang" class="col-10 col-md-8 col-xl-5">
            <h3>Tambah Barang</h3>
            <form action="..." method="POST">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Barang</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" name="...">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Harga Barang</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" name="...">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Barang</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="..."></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Jumlah</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" name="...">
                </div>
                <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-warning" name="...">Simpan</button>
                    <a href="#" class="btn btn-link">Back to admin</a>
                </div>
            </form>

        </section>

    </div>

    <div class="row justify-content-center data-pembeli">
        <section id="lihat-data-pembeli" class="col-11 col-md-10 col-xl-8">
            <h3>Data Pembeli</h3>
            <!-- <table class="table  table-hover"> -->
                <!-- <tbody> -->
                <style>
	table{
		border-collapse: collapse;
		border-radius:12px 12px 0 0;
		position: relative;
		background: #fafafa;
		text-align: center;
	}
	th,td{
		padding:12px 15px;
        border: 1px solid black;
        width: 10%;

	}
	th{
		background: #FFD700;
	}
	td{
		background: white;
	}
	</style>
                <?php 
		require 'connect2.php';
		
		$query = mysqli_query($conn, "SELECT * FROM pemesanan");
		
		if (mysqli_num_rows($query) > 0) {
		// output data of each row
			echo "<table border='1' >";//start table
		//creating our table heading
			echo "<tr>";	
			echo "<th>id_transaksi</th>";
			echo "<th>email</th>";
			echo "<th>no_hp</th>";
			echo "<th>alamat</th>";
			echo "<th>totalharga</th>";
			echo "<th>id_pembeli</th>";
            echo "<th>status</th>";
            echo "<th>Keterangan</th>";
			echo "</tr>";

		//loop to show each records
		
			while($row = mysqli_fetch_assoc($query)) {		
				extract($row);
				//creating new table row per record
				echo "<tr>";
				echo "<td>{$id_transaksi}</td>";
				echo "<td>{$email}</td>";
				echo "<td>{$no_hp}</td>";
				echo "<td>{$alamat}</td>";
				echo "<td>{$totalharga}</td>";
                echo "<td>{$id_pembeli}</td>";
                echo "<td>{$status}</td>";
				echo "<td>";
				echo "<a href='adminstatus-page.php?id_transaksi={$id_transaksi}'>Edit</a>";
				echo "</td>";
				echo "</tr>";				
			}
			echo "</table>";//end table

		} else {
			echo "0 results";
		}
	?>
                <!-- </tbody> -->
            <!-- </table> -->
            <a href="#" class="btn btn-link">Back to admin</a>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>
