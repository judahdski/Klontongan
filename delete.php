<?php
 require "connect2.php";
 $id_transaksi = $_GET['id_transaksi'];
 $cek = mysqli_query($conn, "DELETE FROM pemesanan WHERE id_transaksi = '$id_transaksi'");
 echo "<meta http-equiv='refresh' content='1;url=http://localhost/Kelontongan/pesanan-page.php'>";
 ?>