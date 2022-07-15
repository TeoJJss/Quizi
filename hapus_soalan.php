<?php
require 'sambung.php';
require 'keselamatan.php';
//DAPAT ID DARI SOALAN
$soalan = $_GET['idsoalan'];
//LAKSANA DELETE
$result1 = mysqli_query($hubung,"DELETE FROM soalan WHERE
idsoalan= '$soalan'");
$result2 = mysqli_query($hubung,"DELETE FROM pilihan WHERE
idsoalan='$soalan'");
//MESEJ POP UP
echo "<script>alert('Hapus soalan berjaya');
window.location='papar_topik.php'</script>";
?>