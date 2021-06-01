<?php 

$conn = mysqli_connect("localhost","root","","webkelontongan");
session_start(); 

function register($infologin){
	global $conn;
	
	$nama_depan = htmlspecialchars(stripcslashes($infologin["nama_depan"])) ;
	$nama_belakang = htmlspecialchars(stripcslashes($infologin["nama_belakang"])) ;
	$email = htmlspecialchars(stripcslashes($infologin["email"])) ;
	$password = mysqli_real_escape_string($conn,$infologin["password"]);
	$alamat = htmlspecialchars(stripcslashes($infologin["alamat"])) ;
	$noHp = mysqli_real_escape_string($conn,$infologin["noHp"]);
	$status = "user";
	$cek = mysqli_query($conn, "SELECT email FROM pembeli WHERE email = '$email' ");

	if (mysqli_num_rows($cek) > 0){
		echo "<script>alert('email sudah ada !');</script>";
		return false;
	}

	$password = password_hash($password, PASSWORD_DEFAULT);

	$query = mysqli_query($conn, "INSERT INTO pembeli (nama_depan, nama_belakang, email, password, alamat, noHp, status) 
	VALUES ('$nama_depan','$nama_belakang','$email','$password','$alamat','$noHp','$status') ");

	return mysqli_affected_rows($conn);
	
}
	function ceklogin($datalogin){
	global $conn;
	$email = $datalogin["email"];
	$password = $datalogin["password"];

	$cekuser = mysqli_query($conn, "SELECT * FROM pembeli WHERE email = '$email'");

	if (mysqli_num_rows($cekuser) === 1) {
		$hasil = mysqli_fetch_assoc($cekuser);
		if (password_verify($password,$hasil["password"])) {		
		
			$_SESSION["user"] = $email;
			$_SESSION["login"] = true;
			if ($hasil["status"] == 'admin'){
				echo "<script>
				alert('Anda berhasil login!');
				document.location.href='admin-page.php';
				</script>";	
			}else{
				echo "<script>
				alert('Anda berhasil login!');
				document.location.href='toko-page.php';
				</script>";
			}
		}else{
			echo "password salah";
		}
	} else {
		print "<p style=\" font-weight: bold; color: rgb(255, 49, 49); text-align: center;\"> Email / password yang anda masukan salah !</p>";
	}
}
?>