<!--PENETAPAN SISTEM -->
<?php
//SETUP PANGKALAN DATA
$host="localhost";
$user="root";
$password="";
$database="quiz"; //NAMA DATABASE 

$hubung=mysqli_connect($host, $user, $password,$database);
if (mysqli_connect_errno()) {
echo "Proses sambung ke pangkalan data gagal";
exit();
}

//PENETAPAN SISTEM
$lencana="lencana.png";
$subjek="SAINS KOMPUTER";
$nama_sekolah="SEKOLAH MENENGAH KEBANGSAAN LAKI-LAKI METHODIST <BR>
				JALAN HANG JEBAT, <BR>
				50150 KUALA LUMPUR.";
$nama_sistem="MySK&#8308;&#8325;";
$motto_sistem="SOALAN: MCQ/TRUE FALSE/FILL IN THE BLANK";
$footer="MySK<sup>4</sup><sub>5</sub>";
$logo="logo1.png";
?>