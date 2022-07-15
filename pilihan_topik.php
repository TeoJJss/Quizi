<!--PAPAR SENARAI SOALAN BERDASARKAN TOPIK-->
<BR><BR><BR>
<?php
require 'sambung.php';
require 'keselamatan.php';
include 'header.php';
?>

<html>
	<head><?php include 'menu.php'; ?></head>
	<body>
	<center>
	<h2>SENARAI TOPIK</h2>
	</center>
	<main>
	<table width="70%" border="0" align="center"
	style='font-size:16px'>
	<tr>
		<td width="2%"><b>Bi1.</b></td>
		<td width="50%"><b>Topik</b></td>
		<td width="8%"><b> Jenis Soalan</b></td>
		<td width="10%"><b>Bilangan Soalan</b></td>
		<td width="5%"><b>Tindakan</b></td>
	</tr> 
<?php
$no=1;
$data1=mysqli_query($hubung, "SELECT jenis,idtopik,COUNT(idtopik) as 'bil' 
FROM soalan GROUP BY idtopik, jenis");
while ($info1=mysqli_fetch_array($data1)){
	$topik=mysqli_query($hubung, "SELECT * FROM topik WHERE
	idtopik='$info1[idtopik]'");
	$infoTopik=mysqli_fetch_array($topik);
	?>
	<tr>
	<td><?php echo $no; ?></td>
	<td><?php echo $infoTopik['topik']; ?></td>
	<td><?php
	if($info1['jenis']==1){
		echo "MCQ/TF";
	}else{
		echo"FIB";
	}
	?></td>
	<td><?php echo $info1['bil']; ?></td>
	<td><a href="soalan_mula.php?idtopik=<?php echo $infoTopik['idtopik'];?>&jenis=<?php echo
	$info1['jenis']; ?>"><button title="Buat kuiz ini">Buka</button></a></td>
	</tr>
	<?php $no++; 
	} ?>
</table>
</main><br><br><br><br>
<center><font style='font-size:14px'>
* Senarai Tamat *<br />Jumlah Rekod: <?php echo $no-1; ?>
</font>
</center>
<BR><BR><BR>
<?php include 'footer.php'; ?>
</body>
</html>