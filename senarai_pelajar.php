<!--PAPAR SENARAI PELAJAR YANG BERDAFTAR-->
<BR><BR><BR>
<?php
//WAJIB FAIL INI
require 'sambung.php';
require 'keselamatan.php';
//PERLU FAIL INI
include 'header.php';
?>

<html>
	<?php 
	include 'menu.php'; 
	
	?>
	<style>
		.hapus{
			background-color: crimson;
		}
		table, tr, td{
			text-align: center;
		}
	</style>
	<body>
	<center><h2>SENARAI PELAJAR BERDAFTAR</h2></center>
	<main>
	<BR>
	<table width="65%" border="0" align="center"
	style='font-size:16px'>
	<tr>
	<td width="5%"><b>Bil.</b></td>
	<td width="10%"><b>ID Pelajar</b></td>
	<td width="5%"><b>Password</b></td>
	<td width="50%"><b>Nama Pelajar</b></td>
	<td width="5%"><b>Jantina</b></td>
	<td width="5%"><b>Tindakan</b></td>
	</tr>
	<?php
	$no=1;
	$data1=mysqli_query($hubung,"SELECT * FROM pengguna WHERE aras='PELAJAR' ORDER BY nama ASC");
while ($info1=mysqli_fetch_array($data1)){
	?>
	<tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $info1['idpengguna']; ?></td>
		<td><?php echo $info1['password']; ?></td>
		<td><?php echo $info1['nama']; ?></td>
		<td><?php echo $info1['jantina']; ?></td>
		<td><a href="hapus_pelajar.php?idpengguna=<?php echo $info1['idpengguna']; ?>"><button class="hapus" title="HAPUS">&#128465;</button></td>
		</tr>
<?php $no++; } ?>
</table>
</main>
<center><font style='font-size: 14px'>
* Senarai Tamat *<br />Jumlah Rekod:<?php echo $no-1; ?>
</font></center>
<BR><BR>
<?php include 'carian.php'; ?>
</body>
<BR><BR><BR><BR><BR><BR>
<?php include 'footer.php'; ?>
</html>