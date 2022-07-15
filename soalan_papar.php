<?php
require 'sambung.php';
include 'header.php';
?>
<?php session_start(); ?>
<?php
	$topik_pilihan=$_SESSION['pilih_topik'];
	$jenis=$_SESSION['jenis_soalan'];
	$dataTopik=mysqli_query($hubung, "SELECT * FROM topik WHERE idtopik=$topik_pilihan");
	$getTopik=mysqli_fetch_array($dataTopik);
	
	//JUMLAH SOALAN
	$query="SELECT * FROM soalan WHERE idtopik=$topik_pilihan";
	$results=mysqli_query($hubung,$query);
	$total=mysqli_num_rows($results);
	//NOM SOALAN
	$number=(int) $_GET['n'];
	
	//SOALAN
	$query = "SELECT * FROM soalan WHERE nom_soalan=$number AND idtopik=$topik_pilihan";
	//JAWAPAN
	$result = mysqli_query($hubung, $query);
	$question = mysqli_fetch_assoc($result);

	//PILIHAN
	$query = "SELECT * FROM pilihan WHERE nom_soalan=$number AND idsoalan='$question[idsoalan]'";
	//DAPAT JAWAPAN
	$choices = mysqli_query($hubung, $query);
?>

<!DOCTYPE html>
<html>
<head>
	<style>
		html{
			background-color: snow;
		}
		
	table{
		border: 1px solid black;
	}
	</style>
</head>
<body>
<center><h2>TOPIK: <?php echo $getTopik['topik']; ?></h1>
</center>
<main>
<p>
		<?php
	if($number == 1) {
		echo "<p style='font-family:georgia' color='' align='center'>Sila baca soalan dengan teliti</font>";
	}else{
		$jawapan=$_GET['semakan'];
		if($jawapan=="TEPAT"){
		?>
			
		<?php
			echo '<script>alert("Tahniah, jawapan adalah TEPAT✅")</script>';
		}else{
			?>
			
			<?php
			echo '<script>alert("Maaf, Jawapan adalah SALAH ❎")</script>';
		}
	}
?>
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Soalan <b><?php echo $number; ?></b> dari <b><?php echo $total; ?></b>
<br><br>
</p>
<table align="center" border="solid" width="30%">
<tr class="soalan"><td>
<?php echo $question['soalan'] ?><br>
</td></tr>
<tr><td>
<?php
if ($question['gambarajah'] ==NULL){
	//empty
}else{
	echo "<img src='gambar/".$question['gambarajah']."'width='100%' height='100%'/>";
}
?>
</td></tr>
<form method="post" action="soalan_semak.php">
<tr><td><BR>
<?php
if ($question['jenis']==1){
	?>
	<ul>
	<?php
	while($row=mysqli_fetch_assoc($choices)):
	?>
	<li><input name="choice" type="radio"
	value="<?php echo $row['idpilihan']; ?>" required />
	<?php echo $row['pilihan_jawapan'];?>
	</li>
	<?php
	endwhile;
	?>
</ul>
<?php
}else{
?>

<input type="text" name="idJawapan"
placeholder="Taip Jawapan Di sini" size='70%'>
<?php
}
?>
<BR><BR>
<input type="submit" value="HANTAR" />
<input type="hidden" name="number" value="<?php echo
$number; ?>" />
<input type="hidden" name="jenis_soalan" value="<?php echo
$question['jenis']; ?>" />
<input type="hidden" name="idsoalan" value="<?php echo
$question['idsoalan']; ?>" />
</form>
</td>
</tr>
</table>
<br><br><br>
<?php include 'footer.php'; ?>
</body>
</html>