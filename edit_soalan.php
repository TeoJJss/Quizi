<?php
require 'sambung.php';
require 'keselamatan.php';
include 'header.php';
?>

<?php
//DAPATKAN ID SOALAN
$soalan_terpilih=$_GET['idsoalan'];
$pilihSoalan = mysqli_query($hubung, "SELECT * FROM soalan
WHERE idsoalan=$soalan_terpilih");
while($dataSoalan = mysqli_fetch_array($pilihSoalan)){
//PAPAR NILAI ASAL
	$nom_soalan = $dataSoalan['nom_soalan'];
	$soalan= $dataSoalan['soalan'];
	$gambarajah = $dataSoalan['gambarajah'];
}
?>
<html>
<head><?php include 'menu.php'; ?></head>
<body><center><h2>KEMASKINI SOALAN</h2></center>
<main>
<table width="40%" border="0" align="center">
<tr>
<td>
<p>
<label>Soalan ke-<?php echo $nom_soalan; ?>
</label>
<input type="text" name="idsoalan"
value="<?php echo $soalan_terpilih; ?>" readonly hidden>
</p >
<fieldset><legend><b>Soalan</b></legend>
<p>
<?php echo $soalan; ?>
</p>
<p>
<label>Gambar<br>
<?php
if ($gambarajah==NULL) {
	echo "-TIADA-";
}else{
	echo "<img src='gambar/".$gambarajah." width='30%'
	height='30%' />";
}
?>
</p>

</td>
</tr>
</fieldset>
<tr> <td>
<BR>
<fieldset width="40%"><legend><b>Pilihan</b></legend>
<?php
$terpilih=$_GET['idsoalan'];
$no=1;
$pilihan=mysqli_query($hubung,
"SELECT * FROM pilihan AS a INNER JOIN soalan AS q
ON q.idsoalan = a.idsoalan
WHERE q.idsoalan=$terpilih");
while($dataPilihan=mysqli_fetch_array($pilihan)){
//TENTUKAN JENIS SOALAN
 if($dataPilihan['jenis']==1) {
	?>
	<p>Pilihan <?php echo $no;?> :
	<?php echo $dataPilihan ['pilihan_jawapan']; ?>
	</p>
	<?php
	if($dataPilihan['jawapan']==1){
		echo "<font size='2px' color='red'>*Jawapan <font size='2px'>&#11014;</font></font>";
	}
	$no++;
 }else {
	?>
<p>Cadangan Jawapan <?php echo $no;?> :
<?php echo $dataPilihan['pilihan_jawapan'];?></p>
<?php $no++;
}
	}
	?>
</td></tr>
</table><BR>
<center>
<a href="edit_soalan1.php?idsoalan=<?php echo
$soalan_terpilih;?>"> <button title="Menyunting">EDIT</button></a>
<input type="button" title="Data soalan tidak akan berubah" value="BATAL"
onclick="history.back()"/>
</center>
<BR><BR>
<?php include 'footer.php'; ?>
</html>