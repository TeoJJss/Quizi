<BR><BR><BR>
<?php
//WAJIB FAIL INI
require 'sambung.php';
//PERLUKAN FAIL INI
include 'header.php';
?>

<html>
	<body>
		<header>
		<style>
		.circular--square {
			border-radius: 30%;
		}
		body{
			background-color: whitesmoke;
		}
		.terkini{
			background-color: azure;
		}
		</style>
		<BR>
		<?php include 'menu1.php' ?>
		<center>
		<b><font size="6" face="bigcaslon" color="royalblue">
		SUBJEK: <?php echo $subjek; ?></font></b>
		</center>
		</header>
<br><BR><BR>
<table width="80%" border="0" align="center">

<tr>

<td width= "18%">
<img class="circular--square" src="<?php echo $logo; ?>" width="100px" height="100px">
</td>
<td class="terkini" width= "60%">
<h3>Soalan Terkini</h3>
<?php include 'soalan_terkini.php'; ?>
</td>
<td>
	<img class="circular--square" src="coding.png" width="100px" height="100px">
</td>
</tr>
</table>
<p align="center">
<a href="login.php"><img src="login.png" width="100px" height="100px" title="Daftar Masuk"></a>
<a href="daftar_baru.php"><img src="register.png" width="150px" height="50px" title="Daftar Baru"></a>
</p>
<?php include 'footer.php'; ?>
</body>
</html>