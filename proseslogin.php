<?php
require 'sambung.php';
include 'header.php';
session_start();
if (isset($_POST['idpengguna'])) {
	$user = $_POST['idpengguna'];
	$pass = $_POST['password'];
	$query = mysqli_query($hubung,
	"SELECT * FROM pengguna WHERE idpengguna='$user'
	AND password='$pass'");
	$row = mysqli_fetch_assoc($query);
	//JIKA IDPENGGUNA YANG TIDAK WUJUD ATAU KATA LALUAN SALAH, KEMBALI KE HALAMAN LOGIN
	if (mysqli_num_rows($query)==0||$row['password']!==$pass){ 
		echo "<script>alert('ID Pengguna atau Katalaluan yang salah');
		window.location='login.php'</script>";
	}
	//JIKA BETUL, TERUSKAN KE DASHBOARD
	else{
		$_SESSION['idpengguna']=$row['idpengguna'];
		$_SESSION['level'] = $row['aras'];
		header("Location: index2.php");
	}
}

//JIKA MINTA UNTUK "INGAT SAYA",SIMPAN DALAM KUKI HTTP
if(!empty($_POST["remember"])) {
	setcookie ("username",$_POST["idpengguna"],time()+ (10*365*24*60*60));
	setcookie ("password",$_POST["password"],time()+ (10*365*24*60*60));
	echo "Cookies Set Successfuly";
}else {
	setcookie("username","");
	setcookie("password","");
	echo "Cookies Not Set";
}
?>
