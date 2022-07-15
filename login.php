<!--HALAMAN LOGIN -->
<BR><BR><BR>
<?php
require 'sambung.php';
include 'header.php';
?>

<html>
<head><?php include 'menu1.php' ?>
<title>Daftar</title>
<style>
	body{
		background-color: whitesmoke;
	}
	.log{
		border-style: inset;
		border-collapse: collapse;
		border-width: 1px;
		background-color: ivory;
		padding: 100px;
		width: 500px;
		height: 100px;
		
	}
	h5{
		text-align:center;
		font-family: papyrus;
	}
	.button{
		align:center;
	}
	.text{
		font-size: 15px;
		left: 10px;
	}
	.saran{
		font-size: 11px;
	}
	.lupa{
		font-size: 12px;
		text-decoration: underline overline;
	}
</style>
</head>
<body>
<center><h2>LOG MASUK PENGGUNA</h2></center>
<main>
<table class="log" align="center">
<tr><td>
<BR>
<div class="text">
<form action="proseslogin.php" method="post">
Nombor Kad Pengenalan:
<input title="IDPengguna"  type="username" name="idpengguna" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>"
 placeholder="Nom tanpa tanda '-'"
maxlength='12'size="25"
onkeypress='return event.charCode >= 48 &&
event.charCode <= 57' required autofocus />
<br><br>
Kata Laluan: 
<input title="Kata laluan 4 digit" type="password" name="password"
placeholder="4 Digit" maxlength='4' size="10" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>"
onkeypress='return event.charCode >= 48 &&
event.charCode <= 57' required>
<p><input type="checkbox" name="remember" /> Ingat saya</p>
</div>
<b class="lupa" style="font-family:papyrus" onclick="window.alert('Sila hubungi guru/admin segera!')"><font color="red">Lupa kata laluan?</font></b>
<BR><BR>
<div class="button">
<button type="submit">DAFTAR MASUK</button>
<button type="reset">RESET</button><br>
<br>
</div>

</td></tr>
</table>
<h5>*Jika belum mendaftar,
<a href="daftar_baru.php">Daftar di sini</a></h5>
<center class="saran"><b>Sila hubungi guru jika gagal log masuk</b></center>
</form>
<br><br>
<?php include 'footer.php'; ?>
</body>
</html>