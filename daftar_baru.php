<!--UNTUK PENGGUNA BAHARU DAFTAR -->
<BR><BR><BR>
<?php
require 'sambung.php';
include 'header.php';
if (isset($_POST['idpengguna'])) {
	$idpengguna = $_POST['idpengguna'];
	$password = $_POST['password'];
	$nama=$_POST['nama'];
	$jantina=$_POST['jantina'];
	$daftar= "INSERT INTO pengguna
	(idpengguna, password, nama, jantina, aras) VALUES
	('$idpengguna', '$password', '$nama', '$jantina', 'PELAJAR')";
	$hasil=mysqli_query($hubung, $daftar);
	if ($hasil) {
		echo "<script>alert('Pendaftaran berjaya');
		window.location='login.php'</script>"; //teruskan ke login selepas berjaya daftar
	}else{
		echo "<script>alert('Pendaftaran gagal');
		window.location='daftar_baru.php'</script>"; //kembali ke halaman daftar baru jika gagal
	}
}
?>

<html>
<head><?php include 'menu1.php' ?>
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
		width: 400px;
		height: 100px;
		
	}
	.text{
		text-align:left;
		font-size: 15px;
	}
	button{
		align: center;
	}
	.pasti{
		font-size: 15px;
		font-family: papyrus;
		font-style: bold;
	}
</style>
</head>
<body><center><h2>PENDAFTARAN PENGGUNA BAHARU</h2>
</center>
<table class="log" align="center">
<tr>
<td>
<!-- Papar Borang Pendaftaran -->
<div class="text">
<BR>
<form method="POST">
<label>&nbsp;&nbsp;&nbsp;&nbsp;Nombor Kad Pengenalan</label><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input title="Sama dengan IDPengguna" onblur="checkLength(this)" type="text"
name="idpengguna" placeholder="Tanpa tanda -" maxlength='12'size="25"
onkeypress='return event.charCode >= 48 && event.charCode <= 57' required autofocus />
<script>
function checkLength(el) {
	if (el.value.length != 12) {
	alert("Nombor KP mesti 12 digit"); //Pastikan NoKP mesti lebih daripada 12 digit
	}
}
</script>
<br><label>&nbsp;&nbsp;&nbsp;&nbsp;Kata Laluan</label><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input title="Kata Laluan 4 digit" type="password"
name="password" size="25" id="password" placeholder="4 digit sahaja"
maxlength='4' onkeypress='return event.charCode >= 48 &&
event.charCode <= 57' required>

<br><label title="Nama Pengguna">&nbsp;&nbsp;&nbsp;&nbsp;Nama Pelajar</label><BR>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"
size="25" name="nama" placeholder="Nama Penuh Anda"
required ><br>
<label>&nbsp;&nbsp;&nbsp;&nbsp;Jantina</label><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="jantina">
<option value=""> ---Pilih---</option>
<option value="LELAKI">LELAKI</option>
<option value="PEREMPUAN">PEREMPUAN</option>
</select><br>
</div>
<div class="button">
<input title="Kosongkan input" type="reset" value="Reset">&nbsp;&nbsp;
<button title="Sila pastikan maklumat betul" type="submit">Daftar</button><br><br>
</div>
</form>
</td>
</tr>
</table>
<center class="pasti"><font color="red">*Pastikan maklumat anda betul sebelum
teruskan pendaftaran.</font></center>
<BR><BR>
<?php include 'footer.php'; ?>
</body>
</html>