<?php
//WAJIB FAIL INI
require 'sambung.php';
//TERIMA FAIL INI
if(isset($_POST["import"])){
	$filename=$_FILES["file"]["tmp_name"];
	if($_FILES["file"]["size"] > 0){
		$file = fopen($filename, "r");
		while (($getData = fgetcsv($file, 10000, ",")) !== FALSE){
			//TAMBAH DALAM PANGKALAN DATA
			$import = "INSERT INTO pengguna
			(idpengguna, password, nama, jantina, aras)
			values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."', 'PELAJAR')";
			//MESEJ POP UP JIKA GAGAL
			$tambah = mysqli_query($hubung, $import);
			if(!isset($tambah)){
				echo "<script>alert('Pindah naik fail CSV gagal');
				window.location='import_daftar.php'</script>";
			//MESEJ POP UP JIKA BERJAYA
			}else {
				echo "<script>alert('Pindah naik fail CSV berjaya');
				window.location='senarai_pelajar.php'</script>";
			}
		}
		fclose($file);
	}else{
				echo "<script>alert('Tiada fail yang terpilih! ');
				window.location='import_daftar.php'</script>";		
	}
}
?>