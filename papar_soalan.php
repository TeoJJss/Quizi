<?php //PAPAR SOALAN IKUT SUSUN NOMBOR
require 'sambung.php';
require 'keselamatan.php';
include 'header.php';
//DAPATKAN ID TOPIK
$topik_pilihan = $_GET['idtopik'];
$_SESSION['pilihan'] = $topik_pilihan;
//SAMBUNG KE TABLE
$result = mysqli_query($hubung, "SELECT * FROM topik WHERE
idtopik='$topik_pilihan'");
while($res=mysqli_fetch_array($result)){
	//PAPAR NILAI ASAL
	$papartopik=$res['topik'];
}
?>

<html>
<head><?php include 'menu.php'; ?></head>
<body>
<center><h2>SENARAI SOALAN TOPIK:
<?php echo $papartopik; ?></h2></center>
<main><table width="70%" border="0" align="center"
style='font-size:16px'>
	<tr>
		<td width="2%"><b>Bil.</b></td>
		<td width="48%"><b>Soalan</b></td>
		<td width="8%"><b>Jenis</b></td>
		<td width="12%"><b>Tindakan</b></td>
	</tr>
	
<?php
$no=1;
$data1=mysqli_query($hubung, "SELECT * FROM soalan WHERE
idtopik='$topik_pilihan'");
while ($info1=mysqli_fetch_array($data1)){
	$bil_rekod=mysqli_num_rows($data1);
?>
	<tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $info1['soalan']; ?></td>
		<td><?php
		if ($info1['jenis']==1){
			echo "MCQ / TF";
		}else{
			echo "FIB";
		} ?>
		</td>
		<td>
			<a href="edit_soalan.php?idsoalan=
			<?php echo $info1['idsoalan'];?>"><button title="Menyunting">EDIT
			</button></a>
			<button onclick="pastiH()" title="Hapuskan data soalan ini">HAPUS
			</button> </a>
		</td>
	</tr>
	<script>
		function pastiH(){
			if(window.confirm("Soalan yang dipilih akan dihapuskan, anda pasti? 🥺")){
				window.location="hapus_soalan.php?idsoalan=<?php echo $info1['idsoalan']; ?>";
			}else{
				//null
			}
		}
	</script>
<?php $no++; 
} ?>
</table>
</main>
<center><BR>
<font style='font-size:14px'>
* Senarai Tamat *<br />Jumlah Rekod:<?php echo $no-1; ?>
</font>
</center>
</body>
</html>