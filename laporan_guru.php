<!--PAPAR PERNYATAAN PELAJAR IKUT TOPIK-->
<?php
require 'sambung.php';
require 'keselamatan.php';
$topik_pilihan = $_GET['idtopik'];
$topik=mysqli_query($hubung, "SELECT * FROM topik 
WHERE idtopik='$topik_pilihan'");
$infoTopik=mysqli_fetch_array($topik);
?>
<html>
<title><?php echo $nama_sistem; ?></title>
<body>
<table width="800" border="0">
	<tr>
	 <td width="800">
	<table width="800" border="0">
	<td width="80" valign="top">
	<img src="<?php echo $lencana; ?>" width="85" height="102"
	hspace="7" align="left" />
	</td>
	<td>
	<h5><?php echo $nama_sekolah; ?></h5>
	</tr>
	<tr>
	<td colspan="3" valign="top"><hr/></td>
	</tr>
	</table></td>
	</tr>
<tr>
<td><p><strong> LAPORAN PRESTASI PELAJAR BAGI TOPIK:
<?php echo $infoTopik['topik']; ?></strong></p>
<table width="800" border="0" align="center">
</td>
</tr>
<tr>
<td width="60"><b>Bil.</b></td>
<td width="400"><b>Nama Pelajar</b></td>
<td width="150"><b>Jenis Soalan</b></td>
<td width="150"><b>Skor Tertinggi</b></td>
<td width="90"><b>Bil. Ujian</b></td>
</tr>
<?php
$no=1;
$rekod=mysqli_query($hubung, "SELECT idpengguna, idtopik, Max(skor),jenis,COUNT(idpengguna) as 'Bil' FROM perekodan
WHERE idtopik='$topik_pilihan' GROUP BY idpengguna HAVING Max(skor)>=1");
while ($infoRekod=mysqli_fetch_array($rekod)){
	$pelajar=mysqli_query($hubung,"select * from pengguna
	where idpengguna='$infoRekod[idpengguna]'");
	$infoPelajar=mysqli_fetch_array($pelajar);
?>
	<tr style='font-size: 16px'>
	<td><?php echo $no; ?></td>
	<td><?php echo $infoPelajar['nama']; ?></td>
	<td><?php if ($infoRekod['jenis']==1){
		echo "MCQ / TF";
	}else{
		echo "FIB";
	} ?></td>
	<td align="center"><?php echo $infoRekod['Max(skor)'];
	?></td>
	<td align="center"><?php echo $infoRekod['Bil']; ?>
	</td>
</tr>
<?php $no++;
	}?>
</table>
<center><h5>* Laporan Tamat *<br/>
Jumlah Rekod:<?php echo $no-1; ?></h5><br>
<button title="Kembali ke dashboard"><a href="index2.php">Home</a></button>&nbsp;&nbsp;&nbsp;
<button title="Cetak laporan ini"><a href="javascript:window.print()">Cetak Laporan</a></button>&nbsp;&nbsp;&nbsp;
<button title="Log Keluar"><a href="logout.php">Logout</a></button>
<button title="Prestasi Pelajar"><a href="prestasi_topik.php">Prestasi</a></button>
</body>
</html>