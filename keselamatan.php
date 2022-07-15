<?php
session_start();
//MULAKAN SESI LOGIN
if(!isset($_SESSION['idpengguna'])){ //JIKA BELUM LOGIN, LENCONGKAN KE HALAMAN UTAMA
	header('Location: index.php');
	exit();
}
?>