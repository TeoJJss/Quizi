<!--HALAMAN DASHBOARD SELEPAS BERJAYA LOGIN -->
<BR><BR><BR>
<?php
require 'sambung.php';
require 'keselamatan.php';
include 'header.php';
//SESI DATA
$nokp=$_SESSION['idpengguna'];
?>
<style>
	html{
		background-color: whitesmoke;
	}
</style>
<html>
	<head><?php include 'menu.php'; ?></head>
	<body>
	<center>
	<table height="1%" border="solid">
		<tr bgcolor="floralwhite"><td>
			<h2><?php echo $pengguna; ?></h2>
		</tr></td>
	</center>
	<table width="70%" border="0" align="center">
		<tr><td><BR>
			<h2><b>SELAMAT DATANG &#128512;</b> <br></h2>
		<?php
			$dataA=mysqli_query($hubung, "SELECT * FROM pengguna
			WHERE idpengguna='$nokp'");
			$infoA=mysqli_fetch_array($dataA); 
		?>
			<BR>
			<font style="font-family: calibri" "font-size: 20px">Nama: </font><font style="font-family: SimSun" "font-size: 18px"><?php echo $infoA['nama']; ?></font><br><BR>
			<font style="font-family: calibri" "font-size: 20px">Nombor KP: </font><font style="font-family: SimSun" "font-size: 18px"><?php echo $infoA['idpengguna']; ?></font></br><BR>
			<font style="font-family: calibri" "font-size: 20px">Kata Laluan: </font><font style="font-family: SimSun" "font-size: 18px">****</font></br><BR>
		</td>
		<td width="90px"></td>
		<td>
		<BR><BR>
			<img src="profile1.png" width="200px" height="200px"></img>
		</td>
		</tr>
			</table>
			<BR><BR><BR><BR><BR>
		<?php include 'footer.php'; ?>
	</body>
</html>