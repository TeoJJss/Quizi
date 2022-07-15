<BR><BR><BR>
<?php
//WAJIB FAIL INI
require 'sambung.php';
require 'keselamatan.php';
//PERLUKAN FAIL INI
include 'header.php';
?>


<html>
<head><?php include 'menu.php'; ?>
<style>
html{
	background-color: whitesmoke;
}
	.hapus{
		background-color: crimson;
	}
	table, tr, td{
		text-align: center;
	}
	.baru{
		text-align: right;
	}
</style>
</head>
<body><center><h2>SENARAI TOPIK</h2></center>
<main>
<table width="65%" border="0" align="center" style='font-
size:16px'>
<tr>
<td class="baru" colspan="4" valign="middle"><b>
<a href="tambah_topik.php"><button title="Topik baharu">TOPIK BARU</button></a></b><br></td>
</tr>
<tr><BR>
<td width="2%"><b>Bil.</b></td>
<td width="41%"><b>Topik</b></td>
<td width="11%" align="center"><b>Urus Topik</b></td>
<td width="16%" align="center"><b>Urus Soalan</b></td>
</tr>
<?php
$no=1;
$data1=mysqli_query($hubung, "SELECT * FROM topik");
while ($info1=mysqli_fetch_array($data1)){
	?>
	<tr>
	<td><?php echo $no; ?></td>
	<td><?php echo $info1['topik']; ?></td>
	<td><a href="edit_topik.php?idtopik=
	<?php echo $info1['idtopik']; ?>"><button title="Menyunting" class="edit"><img src="edit.png" width="15" height="15">
	</button></a>
	<button onclick="pastiHapus()" class="hapus" title="HAPUS">&#128465;</button></a></td>
	<script>
		function pastiHapus(){
			if(window.confirm("Semua rekod berkaitan topik ini akan dihapuskan, anda pasti? 🥺")){
				window.location="hapus_topik.php?idtopik=<?php echo $info1['idtopik']; ?>";
			}else{
				//null
			}
		}
	</script>
	<td><a href="papar_soalan.php?idtopik=
	<?php echo $info1['idtopik']; ?>"><button title="Soalan yang sedia ada">PAPAR
	</button></a>
	<a href="soalan_baru1.php?idtopik=
	<?php echo $info1['idtopik']; ?>"><button title="Tambah soalan objektif baharu">MCQ/TF
	</button></a>

	<a href="soalan_baru2.php?idtopik=
	<?php echo $info1['idtopik']; ?>"><button title="Tambah soalan struktur baharu">FIB
	</button></a>
	</td>
 </tr>
<?php $no++; } ?>
</table>
</main>
<br><br>
<center><font style='font-size:14px'>
* Senarai Tamat *<br />Jumlah Rekod: <?php echo $no-1; ?>
</font></center><BR><BR>
<?php include 'footer.php'; ?>
</body>
</html>