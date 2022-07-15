<?php
require 'sambung.php';
require 'keselamatan.php';
error_reporting(E_ERROR | E_PARSE);

$id = $_GET['idpengguna'];

$dbname = $database;
$conn = mysqli_connect("localhost", "root", "", $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//HAPUS REKOD PENGGUNA SEMASA
$sq1 = "DELETE FROM pengguna WHERE idpengguna = $id ";
$sq12 = "DELETE FROM perekodan WHERE idpengguna = $id ";


//PAPAR MESEJ JIKA BERJAYA HAPUS
if (mysqli_query($conn, $sq1) && mysqli_query($conn, $sq12)) {
    mysqli_close($conn);
    echo "<script>alert('Hapus Pelajar Berjaya');
    window.location = 'senarai_pelajar.php'</script>";
    exit();
} else {
    echo "Error deleting record";
}
 ?>
