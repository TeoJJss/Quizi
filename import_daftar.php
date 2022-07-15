<!--HALAMAN IMPORT CSV-->
<BR><BR><BR>
<?php
//MESTI ADA
require 'sambung.php';
require 'keselamatan.php';
//PERLU ADA
include 'header.php';
?>

<html>
<head><?php include 'menu.php'; ?>
<style>
	p{
		color: blue;
		font-size: 14px;
		font-family: papyrus;
		font-weight: bold;
	}
</style>
</head>
<body>
<center><h2>IMPORT NAMA PELAJAR DARI FAIL CSV</h2>
</center><br>
<main>
<table width="70%" border="0" align="center">
<tr>
<td>
<label style='font-family:verdana'>Kemudahan untuk daftar nama pelajar secara
berkelompok</label><br>
<label>Pilih lokasi fail CSV/Excel:</labe>
<form action="import_csv.php" method="post"
name="upload_excel" enctype="multipart/form-data"><BR>
<input type="file" name="file" id="file"
class="input-large" title="Pilih fail CSV"><br><BR>
<button type="submit" id="submit" name="import" title="Muat naik">Hantar
</button>
</center>
</form>

<p>*Cipta fail dalam perisian hamparan (seperti Ms Excel) dan save as CSV mengikut
aturan lajur seperti di bawah:</p>
<table width="70%" border="1" align="center">
<tr>
<td>111213031234</td>
<td>1234</td>
<td>SITI NORHALIZA BINTI SAMAD</td>
<td>PEREMPUAN</td>
</tr>
</table>
</td>
</tr>
</table>
</main>
<center><b>↓</b></center>
<center><BR>
<img src="csv_sample.jpg" width="400px" height="200px">
</center>
<BR><BR><BR><BR>
<?php include 'footer.php'; ?>
</body>
</html>