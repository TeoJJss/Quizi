<?php
require 'sambung.php';
require 'keselamatan.php';
include 'header.php';
?>
<?php
//QUERY SOALAN
$query="INSERT INTO perekodan
(idperekodan, idpengguna, idtopik, jenis, skor, catatan_masa)
values (NULL, '$_SESSION[idpengguna]','$_SESSION[pilih_topik]','$_SESSION[jenis_soalan]','$_SESSION[score]',NULL)";
$insert_row=$hubung->query($query);
$total = $_SESSION['nom'];
?>

<html>
<body>
<center><h2>SOALAN TAMAT</h2></center>
<main>
<table width="70%" border="0" align="center">
<td>
<p>Tahniah! Anda telah selesai menjawab semua soalan</p>
<p>Bilangan Betul: <?php echo $_SESSION['score']; ?></p>
<progress value=<?php echo $_SESSION['score']; ?> max=<?php echo $total; ?>> </progress>
</td>
</tr>
<tr>
<td>
<button title="Ulang" onclick="window.location.href='soalan_papar.php?n=1'">Cuba Lagi</button>
<button title="Tamat Kuiz ini" onclick=
"window.location.href='index2.php'">Tamat</button>
<button title="Keputusan anda" onclick=
"window.location.href='skor_individu.php'">Prestasi</button>
<?php $_SESSION['score']; ?>
</td>
</tr>
</table>
<br><br><br><br><br><br><br><br><br>
<?php include 'footer.php'; ?>
</body>
</html>